<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: cadastro.php");
    exit();
}

require_once 'includes/conexao.php';

$tipo_usuario = $_POST['tipo_usuario'] ?? '';
$email = trim($_POST['email'] ?? '');
$senha = $_POST['senha'] ?? '';
$confirmar_senha = $_POST['confirmar_senha'] ?? '';
$erros = [];

if ($tipo_usuario !== 'CLIENTE' && $tipo_usuario !== 'EMPRESA') {
    $erros[] = 'Escolha o tipo de conta.';
}

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erros[] = 'Informe um e-mail válido.';
}

if (strlen($senha) < 6) {
    $erros[] = 'A senha deve ter no mínimo 6 caracteres.';
}

if ($senha !== $confirmar_senha) {
    $erros[] = 'As senhas não coincidem.';
}

if (empty($_POST['termos'])) {
    $erros[] = 'Aceite os termos para continuar.';
}

$nome = '';
$tipo_banco = 'dev';
$segmento = null;

if ($tipo_usuario === 'CLIENTE') {
    $nome = trim($_POST['nome_completo'] ?? '');
    $tipo_banco = 'dev';
    if ($nome === '') {
        $erros[] = 'Informe seu nome completo.';
    }
} elseif ($tipo_usuario === 'EMPRESA') {
    $nome = trim($_POST['nome_empresas'] ?? '');
    $tipo_banco = 'empresa';
    $segmento = 'Tecnologia';
    if ($nome === '') {
        $erros[] = 'Informe o nome da empresa.';
    }
}

if (!empty($erros)) {
    $_SESSION['erro'] = implode(' | ', $erros);
    header("Location: cadastro.php");
    exit();
}

try {
    $stmt = $conn->prepare("SELECT id FROM usuarios WHERE email = ? LIMIT 1");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $existe = $stmt->get_result()->fetch_assoc();
    $stmt->close();

    if ($existe) {
        throw new Exception('Este e-mail já está cadastrado.');
    }

    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
    $nivel = $tipo_banco === 'dev' ? 'Iniciante' : null;
    $email_contato = $email;

    $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha, tipo, nivel, segmento, email_contato, ativo) VALUES (?, ?, ?, ?, ?, ?, ?, 1)");
    if (!$stmt) {
        throw new Exception('Erro no cadastro: ' . $conn->error);
    }

    $stmt->bind_param("sssssss", $nome, $email, $senha_hash, $tipo_banco, $nivel, $segmento, $email_contato);

    if (!$stmt->execute()) {
        throw new Exception('Erro ao criar conta: ' . $stmt->error);
    }

    $stmt->close();
    $_SESSION['sucesso'] = 'Conta criada com sucesso. Agora faça login.';
    header("Location: login.php");
    exit();

} catch (Exception $e) {
    $_SESSION['erro'] = $e->getMessage();
    header("Location: cadastro.php");
    exit();
}
?>

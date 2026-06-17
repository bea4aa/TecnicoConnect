<?php
session_start();
require_once 'includes/conexao.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: login.php");
    exit();
}

$email = trim($_POST['email'] ?? '');
$senha_digitada = $_POST['senha'] ?? '';
$tipo_form = $_POST['tipo'] ?? '';

if ($email === '' || $senha_digitada === '') {
    $_SESSION['erro_login'] = 'Informe e-mail e senha.';
    header("Location: login.php");
    exit();
}

$stmt = $conn->prepare("SELECT id, nome, email, senha, tipo, score FROM usuarios WHERE email = ? AND ativo = 1 LIMIT 1");
if (!$stmt) {
    $_SESSION['erro_login'] = 'Erro ao preparar login: ' . $conn->error;
    header("Location: login.php");
    exit();
}

$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$usuario = $result->fetch_assoc();
$stmt->close();

if (!$usuario || !password_verify($senha_digitada, $usuario['senha'])) {
    $_SESSION['erro_login'] = 'E-mail ou senha incorretos.';
    header("Location: login.php");
    exit();
}

if ($tipo_form === 'company' && $usuario['tipo'] !== 'empresa') {
    $_SESSION['erro_login'] = 'Essa conta não é de empresa.';
    header("Location: login.php");
    exit();
}

if ($tipo_form === 'tech' && $usuario['tipo'] !== 'dev') {
    $_SESSION['erro_login'] = 'Essa conta não é de técnico.';
    header("Location: login.php");
    exit();
}

$_SESSION['user_id'] = (int)$usuario['id'];
$_SESSION['user_nome'] = $usuario['nome'];
$_SESSION['user_tipo'] = $usuario['tipo'];
$_SESSION['user_type'] = $usuario['tipo'] === 'empresa' ? 'company' : 'tech';
$_SESSION['user_score'] = (int)($usuario['score'] ?? 0);

header("Location: dashboard.php");
exit();
?>

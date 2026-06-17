<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}
$erro = $_SESSION['erro_login'] ?? null;
$sucesso = $_SESSION['sucesso'] ?? null;
unset($_SESSION['erro_login'], $_SESSION['sucesso']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso Restrito | Técnico Connect</title>
    <link rel="stylesheet" href="styles/loginstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    
</head>
<body id="mainBody">

<div class="login-card" id="card">
    <div class="tabs-auth">
        <button class="tab-btn active" id="tabTech" onclick="toggleMode('tech')">SOU TÉCNICO</button>
        <button class="tab-btn" id="tabComp" onclick="toggleMode('company')">SOU EMPRESA</button>
    </div>

    <h2 id="welcomeText" style="margin-bottom: 10px;">Área do Técnico Especialista</h2>
    <p style="color: #666; margin-bottom: 20px; font-size: 0.9rem;">Entre com seu e-mail e senha</p>

    <?php if ($erro): ?>
        <div style="margin-bottom: 16px; padding: 12px; background: #fde6e6; border-left: 4px solid #e74c3c; border-radius: 8px; color: #e74c3c; font-size: 0.9rem;">
            <?php echo htmlspecialchars($erro); ?>
        </div>
    <?php endif; ?>

    <?php if ($sucesso): ?>
        <div style="margin-bottom: 16px; padding: 12px; background: #e8f8ee; border-left: 4px solid #27ae60; border-radius: 8px; color: #1e8449; font-size: 0.9rem;">
            <?php echo htmlspecialchars($sucesso); ?>
        </div>
    <?php endif; ?>

    <form action="autenticar.php" method="POST">
        <input type="hidden" name="tipo" id="user_type_input" value="tech">
        
        <input type="email" name="email" placeholder="E-mail técnico" class="auth-input" required>
        <input type="password" name="senha" placeholder="Senha" class="auth-input" required>
        
        <button type="submit" class="btn-entrar">ENTRAR NO PAINEL</button>
    </form>

    <div style="margin-top: 25px;">
        <p style="color: #666; font-size: 0.9rem;">Ainda não tem conta? <a href="cadastro.php" style="color:#8A05BE; text-decoration:none; font-weight:600;">Cadastre-se</a></p>
        <a href="index.php" style="color:#8A05BE; text-decoration:none; font-size:0.8rem; font-weight:600;">← Voltar ao Início</a>
    </div>
</div>

<script>
    function toggleMode(mode) {
        const body = document.getElementById('mainBody');
        const welcome = document.getElementById('welcomeText');
        const btnTech = document.getElementById('tabTech');
        const btnComp = document.getElementById('tabComp');
        const typeInput = document.getElementById('user_type_input');

        typeInput.value = mode; 

        if (mode === 'company') {
            body.classList.add('mode-company');
            welcome.innerText = "Painel de Recrutamento";
            btnComp.classList.add('active');
            btnTech.classList.remove('active');
        } else {
            body.classList.remove('mode-company');
            welcome.innerText = "Área do Técnico Especialista";
            btnTech.classList.add('active');
            btnComp.classList.remove('active');
        }
    }
</script>

</body>
</html>
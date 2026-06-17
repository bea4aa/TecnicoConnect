<?php 
    $titulo = "Guia de Currículo | Técnico Connect";
    include 'includes/header.php'; 
?>

<header class="section curriculo-hero">
    <div class="reveal active">
        <h1 style="font-size: 3rem; margin-bottom: 10px;">Guia de Currículo para TI</h1>
        <p>Use este guia para montar um currículo simples, claro e pronto para enviar às empresas.</p>
    </div>
</header>

<main class="section curriculo-main">
    <div class="info-box curriculo-box curriculo-atalhos reveal active">
        <span class="tag-passo">ACESSOS RÁPIDOS</span>
        <h2 style="margin-top: 15px;">Ir para as partes do site</h2>
        <p style="margin-bottom: 18px;">Use os links abaixo para acessar as principais áreas do Técnico Connect.</p>
        <div class="curriculo-links-rapidos">
            <a href="index.php" class="btn-outline" style="padding: 10px 18px; margin-bottom: 0;">Início</a>
            <a href="vagas.php" class="btn-outline" style="padding: 10px 18px; margin-bottom: 0;">Vagas</a>
            <a href="quiz.php" class="btn-outline" style="padding: 10px 18px; margin-bottom: 0;">Quiz de TI</a>
            <a href="login.php" class="btn-outline" style="padding: 10px 18px; margin-bottom: 0;">Entrar</a>
            <a href="cadastro.php" class="btn-outline" style="padding: 10px 18px; margin-bottom: 0;">Cadastrar</a>
            <a href="plataforma/index.html" class="btn-roxo" style="padding: 10px 18px; margin-bottom: 0;">Acessar a plataforma</a>
        </div>
    </div>
    <div class="info-box curriculo-box reveal active">
        <span class="tag-passo">MODELO PRONTO</span>
        <h2 style="margin-top: 15px;">Baixe um modelo de currículo</h2>
        <p style="margin-bottom: 20px;">Preparamos um modelo simples para quem quer se candidatar a vagas de tecnologia. Você pode baixar, preencher com seus dados e usar como base.</p>
        <a href="assets/modelo-curriculo-tecnico-connect.docx" class="btn-roxo" download>Baixar modelo de currículo</a>
    </div>

    <div class="info-box curriculo-box reveal active">
        <span class="tag-passo">PASSO 1</span>
        <h3 style="margin-top: 15px;">Dados pessoais</h3>
        <p>Coloque nome completo, telefone, e-mail, cidade e links importantes, como GitHub, LinkedIn ou portfólio.</p>
    </div>

    <div class="info-box curriculo-box reveal active">
        <span class="tag-passo">PASSO 2</span>
        <h3 style="margin-top: 15px;">Objetivo</h3>
        <p>Escreva a área em que você quer trabalhar, por exemplo: front-end, back-end, full stack, mobile ou banco de dados.</p>
    </div>

    <div class="info-box curriculo-box reveal active">
        <span class="tag-passo">PASSO 3</span>
        <h3 style="margin-top: 15px;">Conhecimentos técnicos</h3>
        <p>Liste as tecnologias que você conhece, como HTML, CSS, JavaScript, PHP, MySQL, Git, GitHub e VS Code.</p>
    </div>

    <div class="info-box curriculo-box reveal active">
        <span class="tag-passo">PASSO 4</span>
        <h3 style="margin-top: 15px;">Projetos</h3>
        <p>Mostre projetos que você já fez. Explique de forma curta o objetivo do projeto e quais tecnologias foram usadas.</p>
    </div>

    <div class="info-box curriculo-box reveal active">
        <span class="tag-passo">PASSO 5</span>
        <h3 style="margin-top: 15px;">Cursos e certificados</h3>
        <p>Adicione cursos extras, certificados e formações que tenham relação com tecnologia.</p>
    </div>

    <div class="info-box curriculo-box reveal active">
        <span class="tag-passo">PASSO 6</span>
        <h3 style="margin-top: 15px;">Revisão final</h3>
        <p>Antes de enviar, confira se não tem erro de português, telefone errado ou informações incompletas.</p>
    </div>
</main>

<section class="section curriculo-cta">
    <h3>Depois de organizar seu currículo</h3>
    <p style="margin-bottom: 25px; opacity: 0.8;">Faça o Quiz de TI para descobrir seu nível como desenvolvedor.</p>
    <div class="curriculo-cta-botoes">
        <a href="quiz.php" class="btn-roxo">Fazer Quiz de TI</a>
        <a href="index.php" class="btn-outline" style="margin-bottom: 0;">Voltar ao início</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

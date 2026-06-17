<?php 
    $titulo = "Home | Técnico Connect";
    include 'includes/header.php'; 
?>

<header class="hero">
    <div class="reveal active">
        <span class="tag-passo">TECNOLOGIA & CARREIRA</span>
        <h1>Conectando talentos de <span>TI às melhores vagas.</span></h1>
        <p>Uma plataforma para desenvolvedores e técnicos mostrarem suas habilidades e encontrarem oportunidades.</p>
        <div class="hero-buttons">
            <a href="quiz.php" class="btn-roxo">Fazer Quiz de TI</a>
            <a href="sobre.php" class="btn-outline">Saiba Mais</a>

        </div>
    </div>
</header>

<section class="section">
    <div class="container-info-boxes">
        <div class="box-estilizada info-box">
            <h3>Match Inteligente</h3>
            <p>Algoritmos que ligam seu perfil técnico às vagas ideais.</p>
        </div>
        <div class="box-estilizada info-box">
            <h3>Nível do Desenvolvedor</h3>
            <p>O quiz ajuda a mostrar o nível do candidato de forma simples.</p>
        </div>
    </div>
</section>



<section class="section quiz-home-section">
    <div class="quiz-home-card reveal">
        <span class="tag-passo">QUIZ DE TI</span>
        <h2>Ganhe um nível como desenvolvedor</h2>
        <p>Responda perguntas sobre lógica de programação, front-end, back-end, mobile e banco de dados. No final, o sistema mostra seu nível: Iniciante, Intermediário, Avançado ou Especialista.</p>
        <a href="quiz.php" class="btn-roxo">Começar quiz</a>
    </div>
</section>


<section class="section quiz-home-section">
    <div class="quiz-home-card reveal">
        <span class="tag-passo">CURRÍCULO</span>
        <h2>Modelo de currículo para desenvolvedor</h2>
        <p>Baixe um modelo pronto e veja dicas simples para preencher seu currículo de TI.</p>
        <a href="guiacurriculo.php" class="btn-roxo">Abrir guia de currículo</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
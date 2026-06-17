<?php 
    $titulo = "Vagas | Técnico Connect";
    include 'includes/header.php'; 
?>

<header class="section" style="background: linear-gradient(135deg, #8A05BE, #5b0091); color: #ffffff; border-radius: 0 0 60px 60px; text-align: center; padding: 90px 8%;">
    <div class="reveal active">
        <span class="tag-passo" style="color: #ffffff;">OPORTUNIDADES</span>
        <h1 style="font-size: 3rem; margin-bottom: 10px;">Vagas de TI</h1>
        <p>Veja exemplos de vagas para desenvolvedores e técnicos de tecnologia.</p>
    </div>
</header>

<main class="section">
    <div class="container-info-boxes">
        <div class="box-estilizada info-box">
            <h3>Desenvolvedor Front-end</h3>
            <p><strong>Empresa:</strong> Connecta TI</p>
            <p><strong>Local:</strong> Diadema/SP</p>
            <p><strong>Nível:</strong> Júnior</p>
            <p>HTML, CSS, JavaScript e noções de Git.</p>
        </div>
        <div class="box-estilizada info-box">
            <h3>Desenvolvedor Back-end</h3>
            <p><strong>Empresa:</strong> Tech Solutions</p>
            <p><strong>Local:</strong> São Paulo/SP</p>
            <p><strong>Nível:</strong> Inicial</p>
            <p>Criação de APIs, regras de negócio e integração com banco de dados.</p>
        </div>
        <div class="box-estilizada info-box">
            <h3>Banco de Dados</h3>
            <p><strong>Empresa:</strong> InfraTech</p>
            <p><strong>Local:</strong> Híbrido</p>
            <p><strong>Nível:</strong> Estágio</p>
            <p>MySQL, organização de dados e consultas SQL simples.</p>
        </div>
    </div>

    <section class="quiz-home-section" style="margin-top: 35px;">
        <div class="quiz-home-card reveal active">
            <span class="tag-passo">PRÓXIMO PASSO</span>
            <h2>Melhore seu perfil antes de se candidatar</h2>
            <p>Faça o quiz de TI e baixe o modelo de currículo para deixar seu perfil mais completo.</p>
            <div style="display: flex; gap: 12px; flex-wrap: wrap; margin-top: 18px;">
                <a href="quiz.php" class="btn-roxo">Fazer quiz</a>
                <a href="guiacurriculo.php" class="btn-outline">Ver currículo</a>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

<?php
    $titulo = "Quiz por Área | Técnico Connect";
    include 'includes/header.php';
?>

<header class="section header-quiz">
    <div class="reveal active">
        <span class="tag-passo-quiz">QUIZ DE DESENVOLVIMENTO DE SISTEMAS</span>
        <h1>Escolha uma área de programação e teste seus conhecimentos</h1>
        <p>Agora o quiz é focado somente em Desenvolvimento de Sistemas. Selecione uma área, responda as perguntas e descubra seu nível.</p>
    </div>
</header>

<main class="section">
    <div id="quiz-container" class="container-centralizado quiz-card">
        <div id="area-selection" class="reveal active quiz-area-selection">
            <h4 class="label-teste">ESCOLHA A ÁREA</h4>
            <h2 class="titulo-pergunta">Qual quiz você quer responder?</h2>
            <p class="quiz-area-subtitle">Todos os temas abaixo são ligados à programação e ao curso de Desenvolvimento de Sistemas.</p>
            <div id="area-options-container" class="quiz-area-grid"></div>
        </div>

        <div id="quiz-content" class="reveal active" style="display:none;">
            <h4 id="quiz-area-label" class="label-teste">NÍVEL DO DESENVOLVEDOR</h4>
            <button type="button" id="back-to-areas" class="btn-outline btn-voltar-area">Trocar área</button>
            <div class="quiz-progresso"><span id="quiz-progress-text">Pergunta 1 de 5</span></div>
            <h2 id="question-text" class="titulo-pergunta">Carregando...</h2>
            <div id="options-container"></div>
        </div>

        <div id="result-container" class="reveal result-final">
            <h2>Quiz finalizado</h2>
            <p id="result-text" class="texto-resultado"></p>
            <p id="level-text" class="nivel-resultado"></p>
            <p>Você será direcionado para o cadastro da plataforma.</p><br>
            <a href="plataforma/index.html?auth=register" class="btn-roxo">Ir para cadastro da plataforma</a>
            <a href="quiz.php" class="btn-outline">Escolher outro quiz</a>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>

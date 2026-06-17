document.addEventListener('DOMContentLoaded', () => {
    
    
    const themeBtn = document.getElementById('theme-toggle');
    const savedTheme = localStorage.getItem('tecnico_connect_theme');
    if (savedTheme === 'dark') document.body.setAttribute('data-theme', 'dark');
    if(themeBtn) {
        const updateThemeIcon = () => { themeBtn.textContent = document.body.getAttribute('data-theme') === 'dark' ? '☽' : '☾'; };
        updateThemeIcon();
        themeBtn.onclick = () => {
            const isDark = document.body.getAttribute('data-theme') === 'dark';
            if (isDark) {
                document.body.removeAttribute('data-theme');
                localStorage.setItem('tecnico_connect_theme', 'light');
            } else {
                document.body.setAttribute('data-theme', 'dark');
                localStorage.setItem('tecnico_connect_theme', 'dark');
            }
            updateThemeIcon();
        };
    }

 
    const range = document.getElementById('expRange');
    if(range) {
        range.oninput = (e) => {
            const val = e.target.value;
            const label = document.getElementById('expLabel');
            const valor = document.getElementById('valorHora');
            const desc = document.getElementById('descNivel');

            const dados = {
                "1": ["Iniciante / Auxiliar", "R$ 28 - 35/h", "Apoio no desenvolvimento, ajustes simples e organização de código."],
                "2": ["Técnico Pleno", "R$ 55 - 75/h", "Autonomia em diagnósticos e pequenas automações."],
                "3": ["Especialista / Sênior", "R$ 95 - 150/h+", "Gestão de projetos e redução de downtime crítico."]
            };

            label.innerText = `Nível: ${dados[val][0]}`;
            valor.innerText = dados[val][1];
            desc.innerText = dados[val][2];
        };
    }

    
    const quizAreas = {
        htmlCss: {
            title: "HTML e CSS",
            description: "Estrutura de páginas, tags, estilos e responsividade.",
            questions: [
                { q: "Para que serve o HTML em uma página web?", opt: ["Estruturar o conteúdo", "Criar o banco de dados", "Proteger o servidor", "Instalar programas"], correct: 0 },
                { q: "Qual tag é usada para criar um link?", opt: ["<img>", "<a>", "<p>", "<table>"], correct: 1 },
                { q: "Para que serve o CSS?", opt: ["Estilizar páginas", "Guardar senhas", "Criar tabelas SQL", "Ligar o computador"], correct: 0 },
                { q: "Qual propriedade CSS muda a cor do texto?", opt: ["font-size", "background", "color", "margin"], correct: 2 },
                { q: "O que é responsividade?", opt: ["Site se adaptar a telas diferentes", "Página carregar sem internet", "Senha ficar criptografada", "Banco apagar registros"], correct: 0 }
            ]
        },
        logica: {
            title: "Lógica de Programação",
            description: "Variáveis, condições, laços e raciocínio para resolver problemas.",
            questions: [
                { q: "O que é uma variável?", opt: ["Espaço para armazenar um valor", "Um tipo de monitor", "Uma página pronta", "Um antivírus"], correct: 0 },
                { q: "Qual estrutura é usada para tomar decisões no código?", opt: ["if/else", "SELECT", "padding", "link"], correct: 0 },
                { q: "Para que serve um laço de repetição?", opt: ["Repetir comandos", "Criar imagem", "Formatar o HD", "Enviar currículo"], correct: 0 },
                { q: "Qual tipo guarda verdadeiro ou falso?", opt: ["String", "Boolean", "Float", "HTML"], correct: 1 },
                { q: "O que é algoritmo?", opt: ["Sequência de passos para resolver um problema", "Modelo de currículo", "Sistema operacional", "Cabo de rede"], correct: 0 }
            ]
        },
        javascript: {
            title: "JavaScript",
            description: "Interatividade, eventos, funções e manipulação da tela.",
            questions: [
                { q: "Para que o JavaScript é muito usado no navegador?", opt: ["Deixar páginas interativas", "Criar cabo de internet", "Montar computador", "Trocar fonte de energia"], correct: 0 },
                { q: "Qual comando mostra uma mensagem no console?", opt: ["console.log()", "print.css()", "select()", "echo.html()"], correct: 0 },
                { q: "O que é uma função?", opt: ["Bloco de código reutilizável", "Uma imagem", "Uma tabela do banco", "Um arquivo de áudio"], correct: 0 },
                { q: "Qual evento acontece quando o usuário clica?", opt: ["onclick", "oncolor", "onsql", "onstyle"], correct: 0 },
                { q: "Qual método pode selecionar um elemento pelo id?", opt: ["getElementById", "createDatabase", "styleLogin", "selectTable"], correct: 0 }
            ]
        },
        banco: {
            title: "Banco de Dados",
            description: "SQL, tabelas, chaves e consulta de informações.",
            questions: [
                { q: "Qual comando SQL busca dados em uma tabela?", opt: ["SELECT", "STYLE", "CLICK", "PRINT"], correct: 0 },
                { q: "O que é uma chave primária?", opt: ["Campo que identifica cada registro", "Senha do usuário", "Cor da página", "Arquivo de imagem"], correct: 0 },
                { q: "Qual comando adiciona dados em uma tabela?", opt: ["INSERT", "COLOR", "HTML", "BUTTON"], correct: 0 },
                { q: "Para que serve o banco de dados?", opt: ["Armazenar e organizar informações", "Melhorar a câmera", "Carregar bateria", "Criar layout"], correct: 0 },
                { q: "O que é uma tabela?", opt: ["Estrutura com linhas e colunas", "Um botão do site", "Um tipo de cabo", "Uma tela de login"], correct: 0 }
            ]
        },
        php: {
            title: "PHP e Back-end",
            description: "Servidor, login, formulários e comunicação com banco de dados.",
            questions: [
                { q: "O PHP é executado principalmente onde?", opt: ["No servidor", "Na câmera", "No teclado", "No CSS"], correct: 0 },
                { q: "Para que serve um formulário de cadastro?", opt: ["Enviar dados do usuário", "Mudar o cabo", "Apagar a tela", "Criar uma fonte"], correct: 0 },
                { q: "Qual variável costuma receber dados enviados por método POST?", opt: ["$_POST", "$_STYLE", "$_HTML", "$_CLICK"], correct: 0 },
                { q: "No login, o sistema precisa comparar o quê?", opt: ["E-mail e senha", "Cor e tamanho", "Imagem e vídeo", "Mouse e teclado"], correct: 0 },
                { q: "Uma boa prática com senhas é:", opt: ["Usar hash", "Salvar em texto puro", "Mostrar no HTML", "Mandar por comentário"], correct: 0 }
            ]
        }
    };

    let currentQuiz = [];
    let currentAreaTitle = "";
    let currentQ = 0;
    let score = 0;

    const areaSelection = document.getElementById('area-selection');
    const areaOptionsBox = document.getElementById('area-options-container');
    const quizContent = document.getElementById('quiz-content');
    const resultContainer = document.getElementById('result-container');
    const qText = document.getElementById('question-text');
    const backToAreas = document.getElementById('back-to-areas');

    function showAreaSelection() {
        currentQuiz = [];
        currentAreaTitle = "";
        currentQ = 0;
        score = 0;
        if (areaSelection) areaSelection.style.display = "block";
        if (quizContent) quizContent.style.display = "none";
        if (resultContainer) resultContainer.style.display = "none";
        const optionsBox = document.getElementById('options-container');
        if (optionsBox) optionsBox.innerHTML = "";
    }

    function startQuiz(areaKey) {
        const selectedArea = quizAreas[areaKey];
        if (!selectedArea) return;

        currentQuiz = selectedArea.questions;
        currentAreaTitle = selectedArea.title;
        currentQ = 0;
        score = 0;

        if (areaSelection) areaSelection.style.display = "none";
        if (resultContainer) resultContainer.style.display = "none";
        if (quizContent) quizContent.style.display = "block";

        const areaLabel = document.getElementById('quiz-area-label');
        if (areaLabel) areaLabel.innerText = `QUIZ DE ${currentAreaTitle.toUpperCase()}`;

        loadQuestion();
    }

    function buildAreaButtons() {
        if (!areaOptionsBox) return;
        areaOptionsBox.innerHTML = "";

        Object.keys(quizAreas).forEach((areaKey) => {
            const area = quizAreas[areaKey];
            const btn = document.createElement('button');
            btn.type = 'button';
            btn.className = 'quiz-area-btn';
            btn.innerHTML = `<strong>${area.title}</strong><span>${area.description}</span>`;
            btn.onclick = () => startQuiz(areaKey);
            areaOptionsBox.appendChild(btn);
        });
    }

    function loadQuestion() {
        if (!qText || !currentQuiz.length) return;

        if(currentQ >= currentQuiz.length) {
            if (quizContent) quizContent.style.display = "none";
            if (resultContainer) resultContainer.style.display = "block";

            let nivel = "Iniciante";
            if (score >= 5) nivel = "Especialista";
            else if (score >= 4) nivel = "Avançado";
            else if (score >= 2) nivel = "Intermediário";

            document.getElementById('result-text').innerText = `Área: ${currentAreaTitle} | Acertos: ${score} de ${currentQuiz.length}`;
            const levelText = document.getElementById('level-text');
            if (levelText) levelText.innerText = `Seu nível em ${currentAreaTitle}: ${nivel}.`;

            localStorage.setItem('temp_score', score);
            localStorage.setItem('tecnico_connect_area_quiz', currentAreaTitle);
            localStorage.setItem('tecnico_connect_nivel', nivel);
            setTimeout(() => {
                window.location.href = 'plataforma/index.html?auth=register';
            }, 1800);
            return;
        }

        const progressText = document.getElementById('quiz-progress-text');
        if (progressText) progressText.innerText = `Pergunta ${currentQ + 1} de ${currentQuiz.length}`;
        qText.innerText = currentQuiz[currentQ].q;

        const optionsBox = document.getElementById('options-container');
        optionsBox.innerHTML = "";
        currentQuiz[currentQ].opt.forEach((opt, i) => {
            const btn = document.createElement('button');
            btn.className = 'option-btn';
            btn.innerText = opt;
            btn.onclick = () => {
                const allOptions = optionsBox.querySelectorAll('.option-btn');
                allOptions.forEach(option => option.disabled = true);
                if(i === currentQuiz[currentQ].correct) {
                    btn.classList.add('correct');
                    score++;
                } else {
                    btn.classList.add('wrong');
                    allOptions[currentQuiz[currentQ].correct].classList.add('correct');
                }
                setTimeout(() => { currentQ++; loadQuestion(); }, 800);
            };
            optionsBox.appendChild(btn);
        });
    }

    if (areaOptionsBox) {
        buildAreaButtons();
        showAreaSelection();
    } else if (qText) {
        currentQuiz = quizAreas.htmlCss.questions;
        currentAreaTitle = quizAreas.htmlCss.title;
        loadQuestion();
    }

    if (backToAreas) backToAreas.onclick = showAreaSelection;

    
    const reveal = () => {
        document.querySelectorAll(".reveal").forEach(el => {
            if (el.getBoundingClientRect().top < window.innerHeight - 80) el.classList.add("active");
        });
    };
    window.onscroll = reveal;
    reveal();
});
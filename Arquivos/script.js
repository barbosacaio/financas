// Chama funções necessárias
window.addEventListener('resize', configurarGrid);
window.addEventListener('scroll', navbarVisivel);

// Função para alterar entre modo claro e escuro
function alterarModo(){
    // Seleciona o 'body' do 'index.php'
    var elemento = document.body;
    // Adiciona ou retira a classe 'modo-escuro'
    elemento.classList.toggle('modo-escuro');
    // Salvando elementos que precisam ser alterados em variáveis
    var alterarModoIcone = document.getElementById('alterarModoIcone');
    var notificacoes = document.getElementById('abrirNotificacoes');
    var logo = document.getElementById('logoFinancas');
    var hamburguer = document.getElementById('hamburguer');
    var simboloReceitas = document.getElementById('simboloReceitas');
    var simboloDespesas = document.getElementById('simboloDespesas');
    var simboloUsuarios = document.getElementById('simboloUsuarios');
    var simboloSeguranca = document.getElementById('simboloSeguranca');
    var simboloNotificacoes = document.getElementById('simboloNotificacoes');
    var simboloPDF = document.getElementById('simboloPDF');
    // Verifica se o 'body' está ou não com a classe
    if(elemento.classList.contains('modo-escuro')){
        // Altera itens necessários para o modo escuro
        jQuery(alterarModoIcone).attr('src', 'Imagens/Utilitários/alterarModo_escuro_64px.png');
        jQuery(notificacoes).attr('src', 'Imagens/Utilitários/sino_escuro_64px.png');
        jQuery(logo).attr('src', 'Imagens/Logos/financas_escuro_64px.png');
        jQuery(hamburguer).attr('src', 'Imagens/Utilitários/hamburguer_escuro_64px.png');
        jQuery(simboloReceitas).attr('src', 'Imagens/Utilitários/receitas_escuro_64px.png');
        jQuery(simboloDespesas).attr('src', 'Imagens/Utilitários/despesas_escuro_64px.png');
        jQuery(simboloUsuarios).attr('src', 'Imagens/Utilitários/usuarios_escuro_64px.png');
        jQuery(simboloSeguranca).attr('src', 'Imagens/Utilitários/seguranca_escuro_64px.png');
        jQuery(simboloNotificacoes).attr('src', 'Imagens/Utilitários/sino_escuro_64px.png');
        jQuery(simboloPDF).attr('src', 'Imagens/Utilitários/pdf_escuro_64px.png');
    }else{
        // Altera itens necessários para o modo claro
        jQuery(alterarModoIcone).attr('src', 'Imagens/Utilitários/alterarModo_claro_64px.png');
        jQuery(notificacoes).attr('src', 'Imagens/Utilitários/sino_claro_64px.png');
        jQuery(logo).attr('src', 'Imagens/Logos/financas_claro_64px.png');
        jQuery(hamburguer).attr('src', 'Imagens/Utilitários/hamburguer_claro_64px.png');
        jQuery(simboloReceitas).attr('src', 'Imagens/Utilitários/receitas_claro_64px.png');
        jQuery(simboloDespesas).attr('src', 'Imagens/Utilitários/despesas_claro_64px.png');
        jQuery(simboloUsuarios).attr('src', 'Imagens/Utilitários/usuarios_claro_64px.png');
        jQuery(simboloSeguranca).attr('src', 'Imagens/Utilitários/seguranca_claro_64px.png');
        jQuery(simboloNotificacoes).attr('src', 'Imagens/Utilitários/sino_claro_64px.png');
        jQuery(simboloPDF).attr('src', 'Imagens/Utilitários/pdf_claro_64px.png');
    }
}

// Função para digitar automaticamente no slogan do site
function autoType(){
    var digitado = new Typed('.auto-type', {
        strings: ['gerenciamento', 'confiança', 'economia', 'apoio', 'organização'], // Define as palavras que vão ser digitadas
        typeSpeed: 150, // Velocidade de digitação
        backSpeed: 200, // Velocidade que as palavras são apagadas
        loop: true // Faz tudo rodar infinitamente
    });
}

// Função para configurar o grid baseando-se no tamanho da tela
function configurarGrid(){
    // Salvando elementos necessários em variáveis
    var slogan = document.getElementById('sloganContainer');
    var imagem = document.getElementById('imagemContainer');
    // Verifica se o tamanho de exibição é menor que 124opx
    if(window.innerWidth < 1240){
        // Faz ambas as DIVs ocuparem 100% da tela e estarem uma abaixo da outra
        slogan.classList.remove('w-50');
        imagem.classList.remove('w-50');
        slogan.classList.add('w-100');
        imagem.classList.add('w-100');
    }else{
        // Faz ambas as DIVs ocuparem 50% da tela e estarem lado a lado
        slogan.classList.remove('w-100');
        imagem.classList.remove('w-100');
        slogan.classList.add('w-50');
        imagem.classList.add('w-50');
    }
}

// Função para mudar o fundo da navbar ao rolar a tela, facilitando a visualização
function navbarVisivel(){
    // Salva a posição do scroll em um número
    var scroll = $(window).scrollTop();
    // Salva o 'body' em uma variável
    var elemento = document.body;
    // Se a posição do scroll foi maior que 50
    if(scroll > 50){
        // Verifica se está no modo escuro
        if(elemento.classList.contains('modo-escuro')){
            // Define a cor como um gradiente com 90% de transparência para o modo escuro
            $('#navbar').css('background', 'linear-gradient(to right, rgba(37, 41, 140, 0.9), rgba(55, 59, 163, 0.9)');
        }else{
            // Define a cor igualmente, mas para o modo claro
            $('#navbar').css('background', 'linear-gradient(to right, rgba(208, 218, 224, 0.9), rgba(202, 206, 208, 0.9)');
        }
    }else{
        // Volta ao padrão transparente
        $('#navbar').css('background', 'transparent');
    }
}
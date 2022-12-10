<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

    <!-- Logo do Website -->
    <link rel='shortcut icon' sizes='196x196' href='Imagens/Logos/financas_claro_64px.png'>

    <!-- Importando Bootstrap (CSS e JS) -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
    <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>

    <!-- Arquivo CSS -->
    <link rel='stylesheet' type='text/css' href='style.css'>

    <!-- Arquivo JS -->
    <script type='text/javascript' src='script.js'></script>

    <!-- Importando FontAwesome -->
    <script src='https://kit.fontawesome.com/ea7035a244.js' crossorigin='anonymous'></script>

    <!-- Importando Typed.js -->
    <script src='https://cdn.jsdelivr.net/npm/typed.js@2.0.12'></script>

    <title>Finanças | Home</title>
</head>
<body class='modo-escuro' onload='autoType(), configurarGrid()'>
    <!-- Navbar -->
    <nav class='navbar navbar-expand-md py-4 sticky-top' id='navbar'>
        <!-- Logo e nome do site -->
        <!-- O nome some em telas menores que 'lg' -->
        <a class='navbar-brand' href='index.php'><img src='Imagens/Logos/financas_escuro_64px.png' id='logoFinancas' height='30' alt='Ícone do Finanças'><p class='d-none d-lg-inline ml-3 mr-5'>Finanças</p></a>
        <!-- Botão de dropdown para dispositivos pequenos -->
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#linksNavbar' aria-controls='linksNavbar' aria-expanded='false' aria-label='Alterar Navbar'>
            <img src='Imagens/Utilitários/hamburguer_escuro_64px.png' alt='Menu Hambúrguer' height='25' id='hamburguer'>
        </button>
        <!-- //Botão de dropdown para dispositivos pequenos -->
        <!-- Links da navbar -->
        <div class='collapse navbar-collapse' id='linksNavbar'>
            <ul class='navbar-nav mr-auto'>
                <li class='nav-item'>
                    <a class='nav-link mx-1' href='index.php'>Home</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link mx-1' href='index.php#funcoes'>Funções</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link mx-1' href='index.php#historia'>História</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link mx-1' href='index.php#sac'>SAC</a>
                </li>
            </ul>
            <!-- //Links da navbar -->
            <!-- Botões da navbar -->
            <div class='container-fluid pl-0'>
                <button class='btn float-right' id='botaoAlterarModo' type='button' onclick='alterarModo(), navbarVisivel()'><img id='alterarModoIcone' src='Imagens/Utilitários/alterarModo_escuro_64px.png' height='45' alt='Ícone para alterar modo de cor' class='pb-3'></button>
                <button class='btn float-right' id='botaoNotificacoes' type='button'><img id='abrirNotificacoes' src='Imagens/Utilitários/sino_escuro_64px.png' height='15' alt='Ícone de notificações'></button>
                <button class='btn float-right mr-2' id='botaoCadastrar' type='button'>Cadastrar</button>
                <button class='btn float-right mr-2' id='botaoEntrar' type='button'>Entrar</button>
            </div>
            <!-- //Botões da navbar -->
        </div>
    </nav>
    <!-- //Navbar -->
    <!-- Home -->
    <main id='home'>
        <div class='container-fluid' id='slogan'>
            <!-- Grid que divide a tela em duas metades -->
            <div class="row">
                <!-- Metade da esquerda -->
                <div class="col-sm w-50 pl-5 pt-5" id='sloganContainer'>
                    <!-- Slogan concatenado com o AutoType -->
                    <h1>Seu website de <span class='auto-type'></span></h1>
                    <!-- Texto explicativo -->
                    <h5 class='mt-5'>Finanças ajuda o gerenciamento financeiro e a visão geral das suas receitas e despesas, 
                        disponibilizando também a área de gestão onde há gráficos que permitem maior visualização do próprio 
                        usuário.</h5>
                    <!-- Botões para encaminhar o usuário -->
                    <a href='index.php#funcoes'><button class='btn mt-4 mb-4 p-2' id='botaoSaberMais' type='button'>Saber mais <i class="fa-solid fa-arrow-right ml-2"></i></button></a>
                    <a href='index.php#historia'><button class='btn mt-4 mb-4 ml-2 p-2' id='botaoHistoria' type='button'>Quem somos?</button></a>
                </div>
                <!-- Metade da direita -->
                <div class="col-sm w-50" id='imagemContainer'>
                    <!-- Imagem de decoração -->
                    <img src='Imagens/Design/desenho_notebook.png' alt='Desenho de um Notebook' width='90%' height='80%'>
                </div>
            </div>
        </div>
    </main>
    <!-- //Home -->
    <!-- Funções -->
    <section id='funcoes'>
        <h1 class='tituloArea'>As principais funções</h1>
        <p class='subtituloArea'>Todas as funções foram pensadas para suprir problemas atuais em aplicativos de gestão financeira,
            tornando o mais intuitivo possível para facilitar o uso por qualquer pessoa, além de evitar perda de informação ao trocar
            de dispositivo.
        </p>
        <div class="row">
            <div class="col-sm w-33">
                <img src='Imagens/Utilitários/receitas_escuro_64px.png' alt='Símbolo Receitas' id='simboloReceitas'>
                <h3 class='tituloFuncao'>Receitas</h3>
                <p class='subtituloFuncao'>Controle sobre o valor total e origem das suas receitas</p>
            </div>
            <div class="col-sm w-33">
                <img src='Imagens/Utilitários/despesas_escuro_64px.png' alt='Símbolo Despesas' id='simboloDespesas'>
                <h3 class='tituloFuncao'>Despesas</h3>
                <p class='subtituloFuncao'>Possibilidade de comparar as fontes de suas despesas
            </div>
            <div class="col-sm w-33">
                <img src='Imagens/Utilitários/usuarios_escuro_64px.png' alt='Símbolo Usuários' id='simboloUsuarios'>
                <h3 class='tituloFuncao'>Conta Pessoal</h3>
                <p class='subtituloFuncao'>Conta pessoal e privada para salvar suas informações em qualquer dispositivo que você utilize</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm w-33">
                <img src='Imagens/Utilitários/seguranca_escuro_64px.png' alt='Símbolo Segurança' id='simboloSeguranca'>
                <h3 class='tituloFuncao'>Proteção de dados</h3>
                <p class='subtituloFuncao'>Todos os dados disponibilizados pelos usuários são guardados e nunca divulgados. Toda senha é criptografada até mesmo para nós</p>
            </div>
            <div class="col-sm w-33">
                <img src='Imagens/Utilitários/sino_escuro_64px.png' alt='Símbolo Notificações' id='simboloNotificacoes'>
                <h3 class='tituloFuncao'>Sistema de notificações</h3>
                <p class='subtituloFuncao'>Toda atualização no modo de uso ou na conta dos usuários é notificada através do ícone na barra de navegação</p>
            </div>
            <div class="col-sm w-33">
                <img src='Imagens/Utilitários/pdf_escuro_64px.png' alt='Símbolo PDF' id='simboloPDF'>
                <h3 class='tituloFuncao'>Impressão de informação</h3>
                <p class='subtituloFuncao'>Você pode gerar um arquivo PDF com todos os dados da sua conta durante o mês para ser impresso</p>
            </div>
        </div>
    </section>
    <!-- //Funções -->
</body>
</html>
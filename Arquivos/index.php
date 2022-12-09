<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

    <!-- Logo do Website -->
    <link rel='shortcut icon' sizes='196x196' href='Imagens/Logos/financas_lightmode_64px.png'>

    <!-- Importando Bootstrap (CSS e JS) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Arquivo CSS -->
    <link rel='stylesheet' type='text/css' href='style.css'>

    <!-- Arquivo JS -->
    <script type='text/javascript' src='script.js'></script>

    <!-- Importando FontAwesome -->
    <script src="https://kit.fontawesome.com/ea7035a244.js" crossorigin="anonymous"></script>

    <title>Finanças | Home</title>
</head>
<body class='modo-escuro'>
    <!-- Navbar -->
    <nav class='navbar navbar-expand-md py-4' id='navbar'>
        <!-- Logo e nome do site -->
        <!-- O nome some em telas menores que 'lg' -->
        <a class='navbar-brand' href='index.php'><img src='Imagens/Logos/financas_darkmode_64px.png' id='logoFinancas' height='30' alt='Ícone do Finanças'><p class='d-none d-lg-inline ml-3 mr-5'>Finanças</p></a>
        <!-- Botão de dropdown para dispositivos pequenos -->
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#linksNavbar' aria-controls='linksNavbar' aria-expanded='false' aria-label='Alterar Navbar'>
            <i class="fa-solid fa-bars"></i>
        </button>
        <!-- //Botão de dropdown para dispositivos pequenos -->
        <!-- Links da navbar -->
        <div class='collapse navbar-collapse' id='linksNavbar'>
            <ul class='navbar-nav mr-auto'>
                <li class='nav-item'>
                    <a class='nav-link mx-1' href='index.php#home'>Home</a>
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
                <button class='btn float-right' id='botaoAlterarModo' type='button' onclick='alterarModo()'><img id='alterarModoIcone' src='Imagens/Utilitários/alterarModo_escuro_64px.png' height='30' alt='Ícone para alterar modo de cor'></button>
                <button class='btn float-right mr-2' id='botaoCadastrar' type='button'>Cadastrar</button>
                <button class='btn float-right mr-2' id='botaoEntrar' type='button'>Entrar</button>
            </div>
            <!-- //Botões da navbar -->
        </div>
    </nav>
    <!-- //Navbar -->
</body>
</html>
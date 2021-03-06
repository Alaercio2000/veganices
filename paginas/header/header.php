<!DOCTYPE html>
<html lang="pt-br">

<link rel="shortcut icon" href="/veganices/assets/img/favicon.ico" type="image/x-icon">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Veganices</title>
    <link rel="stylesheet" href="/veganices/assets/css/bootstrap/coresBootstrap.min.css">
    <link rel="stylesheet" href="/veganices/assets/css/cssHeader/header.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/veganices/assets/js/headerGeral.js"></script>

</head>

<body>

    <?php require("../login/modals.php"); ?>

    <header class="fixed-top">
        <div id="menuHeader" class="container-fluid">
            <div class="row flex-row-reverse flex-md-row">
                <div class="col-6 col-pq-5 col-sm-8 col-md-2 pr-1">
                    <a class="col" href="/veganices/paginas/home/home.php">
                        <img class="p-2 p-pq-1" height="90" src="/veganices/assets/img/img-header-menu/logo.png" alt="Logo">
                    </a>
                </div>
                <div class="col">
                    <nav class="navbar navbar-expand-md">
                        <div>
                            <button id="botaoMenu" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBar" aria-controls="navBar" aria-expanded="false" aria-label="Toggle navigation">
                                <i id="iconeMenu" class="material-icons">
                                    menu
                                </i>
                            </button>
                        </div>
                        <div id="navBar" class="nav collapse navbar-collapse">
                            <ul class="navbar-nav mr-auto">
                                <a id="textMenu1" class="nav-link text-info font-weight-bold py-4 px-sm-1 px-md-2 px-lg-3 px-xl-4 pl-full-5 pr-full-4" href="/veganices/paginas/sobre/sobre.php">Sobre</a>
                                <a id="textMenu2" class="nav-link text-info font-weight-bold py-4 px-sm-1 px-md-2 px-lg-3 px-xl-4 pl-full-5 pr-full-4" href="/veganices/paginas/search/search.php">Restaurantes</a>
                                <a id="textMenu3" class="nav-link text-info font-weight-bold py-4 px-sm-1 px-md-2 px-lg-3 px-xl-4 pl-full-5 pr-full-4" href="/veganices/paginas/search/search.php">Produtos</a>
                                <a id="textMenu4" class="nav-link text-info font-weight-bold py-4 px-sm-1 px-md-2 px-lg-3 px-xl-4 pl-full-5 pr-full-4" href="/veganices/paginas/search/search.php">Profissionais</a>
                                <a id="textMenu5" class="nav-link text-info font-weight-bold py-4 px-sm-1 px-md-2 px-lg-3 px-xl-4 pl-full-5 pr-full-4" href="/veganices/paginas/blog/blog.php">Blog</a>
                                <a id="textMenu6" class="nav-link text-info font-weight-bold py-4 px-sm-1 px-md-2 px-lg-3 px-xl-4 pl-full-5 pr-full-4" href="/veganices/paginas/comunidade/comunidade.php">Comunidade</a>
                                <a id="textMenu7" class="nav-link text-info font-weight-bold py-4 px-sm-1 px-md-2 px-lg-3 px-xl-4 pl-full-5 pr-full-4" href="javascript:void(showModalLogin())">Acesse</a>
                                <a id="textMenu8" class="nav-link text-info font-weight-bold py-4 px-sm-1 px-md-2 px-lg-3 px-xl-4 pl-full-5 pr-full-4" href="javascript:void(showModalCadastro())">Registre-se</a>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
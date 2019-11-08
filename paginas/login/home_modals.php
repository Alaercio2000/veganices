<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Veganices</title>
    <script defer src="assets/js/home.js"></script>
    <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/bootstrap/coresBootstrap.min.css">
    <link rel="stylesheet" href="assets/css/home.css">
</head>

<body>

    <header class="fixed-top">
        <div id="menuHeader" class="container-fluid">
            <div class="row flex-row-reverse flex-md-row">
                <div class="col-6 col-pq-5 col-sm-8 col-md-2 pr-1">
                    <a class="col" href="home.html">
                        <img class="p-2 p-pq-1" height="90" src="assets/img/logo.png" alt="Logo">
                    </a>
                </div>
                <div class="col">
                    <nav class="navbar navbar-expand-md">
                        <div>
                            <button id="botaoMenu" class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navBar" aria-controls="navBar" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <i id="iconeMenu" class="material-icons">
                                    menu
                                </i>
                            </button>
                        </div>
                        <div id="navBar" class="nav collapse navbar-collapse">
                            <ul class="navbar-nav mr-auto">
                                <a id="textMenu1"
                                    class="nav-link text-info font-weight-bold py-4 px-sm-1 px-md-2 px-lg-3 px-xl-4 pl-full-5 pr-full-4"
                                    href="#">Sobre</a>
                                <a id="textMenu2"
                                    class="nav-link text-info font-weight-bold py-4 px-sm-1 px-md-2 px-lg-3 px-xl-4 pl-full-5 pr-full-4"
                                    href="#">Restaurantes</a>
                                <a id="textMenu3"
                                    class="nav-link text-info font-weight-bold py-4 px-sm-1 px-md-2 px-lg-3 px-xl-4 pl-full-5 pr-full-4"
                                    href="#">Produtos</a>
                                <a id="textMenu4"
                                    class="nav-link text-info font-weight-bold py-4 px-sm-1 px-md-2 px-lg-3 px-xl-4 pl-full-5 pr-full-4"
                                    href="#">Profissionais</a>
                                <a id="textMenu5"
                                    class="nav-link text-info font-weight-bold py-4 px-sm-1 px-md-2 px-lg-3 px-xl-4 pl-full-5 pr-full-4"
                                    href="#">Blog</a>
                                <a id="textMenu6"
                                    class="nav-link text-info font-weight-bold py-4 px-sm-1 px-md-2 px-lg-3 px-xl-4 pl-full-5 pr-full-4"
                                    href="#">Comunidade</a>
                                <a id="textMenu7"
                                    class="nav-link text-info font-weight-bold py-4 px-sm-1 px-md-2 px-lg-3 px-xl-4 pl-full-5 pr-full-4"
                                    href="javascript:void()"
                                    onClick="showModalLogin()">Acesse</a>
                                <a id="textMenu8"
                                    class="nav-link text-info font-weight-bold py-4 px-sm-1 px-md-2 px-lg-3 px-xl-4 pl-full-5 pr-full-4"
                                    href="javascript:void()"
                                    onClick="showModalCadastro()">Registre-se</a>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div id="fundoBuscar" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="5000">
                <img height="500px" src="assets/img/imgSlide1.jpg" class="d-block w-100"
                    alt="Imagens De Legumes e Vegetais">
            </div>
            <div class="carousel-item" data-interval="5000">
                <img height="500px" src="assets/img/imgSlide2.jpg" class="d-block w-100"
                    alt="Imagens De Legumes e Vegetais">
            </div>
            <div class="carousel-item">
                <img height="500px" src="assets/img/imgSlide3.jpg" class="d-block w-100"
                    alt="Imagens De Legumes e Vegetais">
            </div>
        </div>
    </div>

    <div id="buscarGeral" class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-9 col-lg-6">
                <h4 class="text-center pb-3 text-info font-weight-bold">
                    Aqui você encontra tudo para uma rotina vegana
                </h4>
                <form id="buscaSlide" method="GET" class="form-inline">
                    <input class="form-control w-75" type="search" placeholder="O que você procura ?"
                        aria-label="Search">
                    <button class="btn btn-warning w-25 px-0 px-pq-1" type="submit">Pesquisar</button>
                </form>
            </div>
        </div>
    </div>

    <main class="px-3">

        <section class="py-5">
            <div id="recomendacoesPai" class="container-fluid">
                <div class="row">
                    <div class="col-12 col-pq-6 col-md-3 text-center">
                        <a href="#">
                            <img class="recomendacoesImagem" src="assets/img/restauranteImagemTeste.jpg"
                                alt="Restaurante Veganos">
                        </a>
                        <h6 class="py-3">Encontre Restaurantes</h6>
                    </div>
                    <div class="col-12 col-pq-6 col-md-3 text-center">
                        <a href="#">
                            <img class="recomendacoesImagem" src="assets/img/diarioImagemTeste.jpg"
                                alt="Restaurante Veganos">
                        </a>
                        <h6 class="py-3">Organize seu diario vegano</h6>
                    </div>
                    <div class="col-12 col-pq-6 col-md-3 text-center">
                        <a href="#">
                            <img class="recomendacoesImagem" src="assets/img/comunidadeImagemTeste.jpg"
                                alt="Restaurante Veganos">
                        </a>
                        <h6 class="py-3">Comunidade de veganos</h6>
                    </div>
                    <div class="col-12 col-pq-6 col-md-3 text-center">
                        <a href="#">
                            <img class="recomendacoesImagem" src="assets/img/dicasImagemTeste.jpg"
                                alt="Restaurante Veganos">
                        </a>
                        <h6 class="py-3">Encontre dicas importantes</h6>
                    </div>
                </div>
            </div>
        </section>

        <hr>

        <section class="pt-4 pb-5">
            <h3 class="text-center pb-5">Destaques</h3>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-3 pb-4 cardDestaques">
                        <div class="card">
                            <a href="#">
                                <img height="200" src="assets/img/restauranteImagemTeste.jpg"
                                    class="card-img-top imagemCard" alt="Melhor Restaurante Mês">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Restaurantes</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum
                                    alias deserunt numquam facere
                                    ipsam porro, molestiae est placeat totam ipsum autem! Provident expedita repellendus
                                    temporibus tenetur earum harum assumenda porro?</p>
                                <a href="#" class="btn btn-primary mt-3">Conhecer</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 pb-4 cardDestaques">
                        <div class="card">
                            <a href="#">
                                <img height="200" src="assets/img/nutricionistaImagemTeste.jpg"
                                    class="card-img-top imagemCard2" alt="Melhor Nutricionista Mês">
                                <div class="card-body">
                            </a>
                            <h5 class="card-title">Nutricionistas</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum alias
                                deserunt numquam facere
                                ipsam porro, molestiae est placeat totam ipsum autem! Provident expedita repellendus
                                temporibus
                                tenetur earum harum assumenda porro?</p>
                            <a href="#" class="btn btn-primary mt-3">Conhecer</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 pb-4 cardDestaques">
                    <div class="card">
                        <a href="#">
                            <img height="200" src="assets/img/postImagemTeste.jpg" class="card-img-top imagemCard"
                                alt="Melhor Postagem Mês">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Postagens</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum alias
                                deserunt numquam facere
                                ipsam porro, molestiae est placeat totam ipsum autem! Provident expedita repellendus
                                temporibus tenetur earum harum assumenda porro?</p>
                            <a href="#" class="btn btn-primary mt-3">Conhecer</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 pb-4 cardDestaques">
                    <div class="card">
                        <a href="#">
                            <img height="200" src="assets/img/fazerCasa.jfif" class="card-img-top imagemCard"
                                alt="Melhor Receita Mês">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Receitas</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum alias
                                deserunt numquam facere
                                ipsam porro, molestiae est placeat totam ipsum autem! Provident expedita repellendus
                                temporibus tenetur earum harum assumenda porro?</p>
                            <a href="#" class="btn btn-primary mt-3">Conhecer</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr>

        <section class="py-4">
            <h3 class="text-center py-5">Dicas</h3>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 p-3">
                        <a href="#">
                            <figure class="figureDicas">
                                <img class="w-100 img-resposive" src="assets/img/testeImagemDicas.jpg">
                                <figcaption class="text-info text-center legendaImagemDicas">Dicas Veganas</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 p-3">
                        <a href="#">
                            <figure class="figureDicas">
                                <img class="w-100 img-resposive" src="assets/img/testeImagemDicas.jpg">
                                <figcaption class="text-info text-center legendaImagemDicas">Dicas Veganas</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 p-3">
                        <a href="#">
                            <figure class="figureDicas">
                                <img class="w-100 img-resposive" src="assets/img/testeImagemDicas.jpg">
                                <figcaption class="text-info text-center legendaImagemDicas">Dicas Veganas</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 p-3">
                        <a href="#">
                            <figure class="figureDicas">
                                <img class="w-100 img-resposive" src="assets/img/testeImagemDicas.jpg">
                                <figcaption class="text-info text-center legendaImagemDicas">Dicas Veganas</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 p-3">
                        <a href="#">
                            <figure class="figureDicas">
                                <img class="w-100 img-resposive" src="assets/img/testeImagemDicas.jpg">
                                <figcaption class="text-info text-center legendaImagemDicas">Dicas Veganas</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 p-3">
                        <a href="#">
                            <figure class="figureDicas">
                                <img class="w-100 img-resposive" src="assets/img/testeImagemDicas.jpg">
                                <figcaption class="text-info text-center legendaImagemDicas">Dicas Veganas</figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include 'modals.php'; ?>

    <footer id="rodape" class="bg-dark text-light">
        <div class="container">
            <h5 class="p-3 text-center">@Copyright 2019 BeeVegan</h5>
        </div>
    </footer>

</body>

</html>
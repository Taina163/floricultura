<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Floricultura</title>
    <link href="src\css\bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="src\js\bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="src\js\jquery-3.7.1.min.js" type="text/javascript"></script>
    <link href="src\css\jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <script src="src\js\jquery.dataTables.min.js" type="text/javascript"></script>

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
</head>

<?php
session_start();
?>

<body style="background-color: #f3e1f1;"> <!-- Cor de fundo roxo claro -->

    <!-- Navbar com cor verde mais bonita -->
    <nav class="navbar justify-content-md-end navbar-expand-lg navbar-dark" style="background-color: #4CAF50;"> <!-- Verde mais bonito -->
        <div class="container-fluid">
            <a class="navbar-brand float-left" href="index.php">
                <img src="src/img/Logo.png" alt="Logo da JT Floricultura" style="width:50px;height:50px;">
                <span class="navbar-text">Floricultura</span>
            </a>
        </div>

        

        <!-- Barra de pesquisa maior -->
        <form class="d-flex navbar-expand">
            <input class="form-control m-2" type="text" style="max-width: 400px;" /> <!-- Aumentei o tamanho da barra de pesquisa -->
            <button class="btn" style="background-color: #4CAF50; color: white;" type="button">Pesquisar</button> <!-- Botão verde -->
        </form>
        

        <!-- Caixa "Entrar" e "Carrinho" com tamanho reduzido -->
        <a class="navbar-brand btn btn-outline-light btn-sm" href="cadastroLogin.php"> <!-- Reduzi o tamanho da caixa -->
            <img src="src/img/conta.png" alt="alt" style="width:40px;height:40px;" class="rounded-pill">
            Entrar
        </a>

        <a class="navbar-brand btn btn-outline-light btn-sm" href="carrinho.php"> <!-- Reduzi o tamanho da caixa -->
            <img src="src/img/carrinho.png" alt="alt" style="width:40px;height:40px;">
            Carrinho
        </a>
    </nav>

    <!-- Botão para abrir filtragem com cor verde -->
    <button class="navbar-brand btn" style="background-color: #4CAF50; color: white;" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
        Abrir filtragem
    </button>

    <!-- Offcanvas para categorias com cor verde -->
    <div class="offcanvas offcanvas-start" id="demo">
        <div class="bg-black text-white offcanvas-header">
            <h1 class="offcanvas-title">Categorias</h1>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body text-black">
            <div class="dropdown">
                <div class="my-2 dropdown text-black">
                    <a class="btn btn-info dropdown-toggle" href="#" id="navbarDropdown" data-bs-toggle="dropdown">
                        Floricultura
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="index.php?subid=2">Lirios</a></li>
                        <li><a class="dropdown-item" href="index.php?subid=3">Margarida</a></li>
                        <li><a class="dropdown-item" href="index.php?subid=1">Orquidea</a></li>
                    </ul>
                </div>

                <div class="my-2 dropdown">
                    <a class="btn btn-info dropdown-toggle" href="#" id="navbarDropdown" data-bs-toggle="dropdown">
                        Jardinagem
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="index.php?subid=4">Avental</a></li>
                        <li><a class="dropdown-item" href="index.php?subid=5">Luvas de Proteção</a></li>
                        <li><a class="dropdown-item" href="index.php?subid=6">Vasos</a></li>
                    </ul>
                </div>

                <div class="my-2 dropdown">
                    <a class="btn btn-info dropdown-toggle" href="#" id="navbarDropdown" data-bs-toggle="dropdown">
                        Arranjos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="index.php?subid=7">Arranjos de Cravos</a></li>
                        <li><a class="dropdown-item" href="index.php?subid=8">Arranjos de Géberas</a></li>
                        <li><a class="dropdown-item" href="index.php?subid=9">Arranjos de Rosas</a></li>
                    </ul>
                </div>

                <div class="my-2 dropdown">
                    <a class="btn btn-info" href="blog.php">
                        blog
                    </a>
                </div>

            </div>
        </div>
    </div>



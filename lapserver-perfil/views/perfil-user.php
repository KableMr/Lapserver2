<?php
session_start();
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?= ucfirst($_SESSION['empresa_logada']); ?></title>
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/js/script.js"></script>
    <link rel="stylesheet" href="../assets/css/perfil.css">
    <link rel="stylesheet" href="../assets/css/menu_container_user.css">

    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css"
          integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
</head>
<body>

<div class="user-header">
    <span><i class="fa fa-bars"></i><?= ucfirst($_SESSION['empresa_logada']); ?></span>

    <ul>
        <li>
        <li><i class="fa fa-bell"></i></li>
        <li id="modal-funcoes-conteiner"><i class="fa fa-chevron-down"></i></li>
        </li>
    </ul>
</div>
<section id="main-perfil" class="flex-column">
    <section id="perfil-container" class="flex-row">
        <article id="content-perfil">

            <div class="photo-user flex-column">
                <img src="../assets/img/salomao.jpg" alt="photo user profile" title="photo user profile">
                <span><?= ucfirst($_SESSION['empresa_logada']); ?></span>
            </div>
        </article>

        <section id="menu-top-conf" class="flex-column-normal">
            <nav>
                <ul class="lista flex-row">
                    <li><a class="text-defull-sm active active-bar" href="#cadastrar">Serviços</a></li>
                    <li><a class="text-defull-sm submenu-hover" href="#cadastrar">Notificações</a></li>
                    <li><a class="text-defull-sm submenu-hover" href="#cadastrar">Editar Perfil</a></li>
                    <li><a class="text-defull-sm submenu-hover" href="#cadastrar">Vagas</a></li>
                </ul>
            </nav>
            <article id="area-servicos">
                <article id="servicos-container" class="flex-wrap">
                    <div class="container-servicos">
                        servico1
                    </div>
                </article>
            </article>
        </section>
    </section>

</section>


</body>
</html>

<!-- modal -->
<section id="modal-funcoes">
    <article id="funcoes-contianer">
        <nav class="container-modal">
            <ul class="lista" id="animacao-menu-perfil">
                <li>
                    <a href="../../views/index.php">Página Inicial</a>
                </li>
                <li>
                    <a href="#perfil">Editar Perfil</a>
                </li>
                <li>
                    <a href="../../views/logout.php">Sair</a>
                </li>
            </ul>
        </nav>
    </article>
</section>
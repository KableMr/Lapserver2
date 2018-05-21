<!DOCTYPE html>
<html>
<head>
    <?php require_once("head.php");?>
</head>

<body>
<?php require_once('menu_container.php'); ?>

<?php if (isset($_SESSION['sucesso'])) { ?>
    <div id="modal-autenticacao" class="flex-row-normal">
        <div id="modal-auth-container" class="flex-row alert-success">
            <span><?=$_SESSION['sucesso'];?></span>
            <a href="../controller/autenticacao.php?desable=1"><i class="fa fa-times"></i></a>
        </div>
    </div>
<?php } else if (isset($_SESSION['danger'])) { ?>
    <div id="modal-autenticacao" class="flex-row-normal">
        <div id="modal-auth-container" class="flex-row alert-danger">
            <span><?=$_SESSION['danger'];?></span>
            <a href="../controller/autenticacao.php?desable=0"><i class="fa fa-times"></i></a>
        </div>
    </div>
<?php } ?>


<!-- slide carousel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item ">
            <img class="img_slide" src="../assets/img/slide_bg01.jpg" height="80vh" width="100%" alt="image not found"
                 title='slide show servicos01'>
            <div class="carousel-caption">
                <!-- info -->
                <div class="container-slide flex-column">
                    <span class="slide-title">Conheça as nossas categorias e suas vantagens</span>
                    <span class="slide-body">São as categorias que diferencia os serviços. Proporcionando uma grande opção na hora de fazer suas escolhas de profissionais, avaliando os mais competentes de acordo com visões de outros clientes.</span>
                    <span class="flex-row saiba_mais"><a href="#saiba">Registra-se gratuitamente</a> <i
                                class="fa fa-chevron-right"></i></span>
                </div>
            </div>
        </div>

        <div class="item active">
            <img class="img_slide" src="../assets/img/slide_bg02.jpg" height="80vh" width="100%" alt="image not found"
                 title='slide show servicos01'>
            <div class="carousel-caption">
                <!-- info -->
                <div class="container-slide flex-column-end">
                    <span class="slide-title">Conheça as nossas categorias e suas vantagens</span>
                    <span class="slide-body">Selecione a melhor categoria para descrever seus serviços.</span>
                    <span class="flex-row saiba_mais"><a href="#saiba">Registra-se gratuitamente</a> <i
                                class="fa fa-chevron-right"></i></span>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="img_slide" src="../assets/img/slide_bg03.jpg" alt="image not found"
                 title='slide show servicos01'>
            <div class="carousel-caption">
                <!-- info -->
                <div class="container-slide flex-column">
                    <span class="slide-title">Conheça as nossas categorias e suas vantagens</span>
                    <span class="slide-body">São as categorias que diferencia os serviços. Proporcionando uma grande opção na hora de fazer suas escolhas de profissionais, avaliando os mais competentes de acordo com visões de outros clientes.</span>
                    <span class="flex-row saiba_mais"><a href="#saiba">Registra-se gratuitamente</a> <i
                                class="fa fa-chevron-right"></i></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Left and right controls  -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- fim slide carousel -->

<main>
    <!-- Corpo -->
    <?php require_once('categoria.php'); ?>
    <?php require_once('profissionais.php'); ?>
    <?php require_once('empresas.php'); ?>
    <!-- Fim Corpo -->
</main>
<?php require_once('planos.php') ?>
<?php require_once('rodape.php'); ?>

</body>
</html>

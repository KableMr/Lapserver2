<!DOCTYPE html>
<html>
<head>
    <title>Site de serviços de Macapá</title><meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="../assets/css/estilo_principal.css" rel="stylesheet">
    <link href="../assets/css/rodape.css" rel="stylesheet">
    <link href="../assets/css/menu_container.css" rel="stylesheet">
    <link href="../assets/css/planos.css" rel="stylesheet">
    <link href="../assets/css/categoria.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/user_cadastro.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="assets/css/normalize.min.css" rel="stylesheet">
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/script.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
    <link rel="icon" href="../assets/img/logo_servicos02.png">
    <meta name="google-signin-client_id"
          content="383860740692-qfk6eu79i39r4ver50sine807vr0moqp.apps.googleusercontent.com">
</head>

<body>
<?php include('menu_container.php'); ?>
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
            <img style="height:70vh" src="../assets/img/servicos-bg01.jpg" width="100%" alt="image not found"
                 title='slide show servicos01'>
            <div class="carousel-caption">
                <!-- info -->

            </div>
        </div>

        <div class="item active">
            <img style="height:70vh" src="../assets/img/servicos-bg02.jpg" width="100%" alt="image not found"
                 title='slide show servicos01'>
            <div class="carousel-caption">
                <!-- info -->

            </div>
        </div>
        <div class="item">
            <img style="height:70vh" src="../assets/img/servicos-bg03.jpg" width="100%" alt="image not found"
                 title='slide show servicos01'>
            <div class="carousel-caption">
                <!-- info -->

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
    <?php include('categoria.php')?>
    <!-- Fim Corpo -->
</main>
<?php include('planos.php')?>
<?php include('rodape.php'); ?>

</body>
</html>

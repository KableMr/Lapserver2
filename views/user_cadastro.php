<?php
session_start();
if (isset($_GET['opcao']) && !empty($_GET['opcao'])) {
    $_SESSION["opcao"] = $_GET["opcao"];

    header("Location: user_{$_GET["opcao"]}.php");
    die();
}
?>
<!DOCTYPE html>
<head>
    <title>Site de serviços de Macapá</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="../assets/css/estilo_principal.css" rel="stylesheet">
    <link href="../assets/css/rodape.css" rel="stylesheet">
    <link href="../assets/css/menu_container.css" rel="stylesheet">
    <link href="../assets/css/planos.css" rel="stylesheet">
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
    <style>
        #user_cadastro{
            padding: 20px;
        }
        #user_container_main > span{
            padding: 10px;
            font-family: 'Open sans', sans-serif;
            font-size: 2em;
            font-weight: 300;
            color: rgba(0,0,0,0.5);
        }
        .label_cadastro{
            padding: 10px;
            font-family: 'Open sans', sans-serif;
            font-size: 1.25em;
            font-weight: 400;
            color: rgba(0,0,0,0.7);
        }
    </style>
</head>
<body>
<?php include('menu_container.php'); ?>
<!-- Corpo da página de cadastro -->
<main>
    <section id="user_cadastro" class="flex-row">
        <article id="user_container_main" class="flex-column">
            <span id="title">Quem é você?</span>
                <form>
                    <table>
                        <tr>
                            <td><input type="radio" name="opcao" id="profissional" value="profissional"></td>
                            <td><label class="label_cadastro" for="profissional">Profissional</label></td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="opcao" id="empresa" value="empresa"></td>
                            <td><label class="label_cadastro" for="empresa">Empresa</label></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" name="btnCadastro" class="btn btn-primary" value="Continunar"></td>
                        </tr>
                    </table>
                </form>

        </article>
    </section>
</main>
<?php include('planos.php'); ?>
<?php include('rodape.php'); ?>
</body>
</html>
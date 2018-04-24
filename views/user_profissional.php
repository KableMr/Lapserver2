<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <head>
        <title>Site de serviços de Macapá</title>
        <?php include('head.php'); ?>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"
              rel="stylesheet">
        <link rel="stylesheet" href="../assets/css/categoria_cadastro.css">
        <link rel="stylesheet" href="../assets/css/menu_container_cadastro.css">
        <link rel="stylesheet" href="../assets/css/user_cadastro.css">
        <style>

        </style>
    </head>
</head>
<body>
<?php include('menu_container_cadastro.php'); ?>
<main>
    <section class="flex-row">

        <article class="formulario">
            <article id="main_container" class="flex-column">
                <article class="titulo-categoria">
                    <span>Cadastro de Profissional</span>
                </article>
                <form class="form-cadastro" action="adiciona-profissional.php" method="post">

                    <table id="table-form">
                        <tr>
                            <td><label for="nomeCompleto">Nome Completo</label></td>
                            <td><input class="cadastro-form" type="text" name="nome" id="nomeCompleto" required>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="email">Email</label></td>
                            <td><input class="cadastro-form" type="email" name="email" id="email" required></td>
                        </tr>
                        <tr>
                            <td><label for="senha">Senha</label></td>
                            <td><input class="cadastro-form" type="password" name="senha" id="senha" required></td>
                        </tr>
                        <tr>
                            <td><label for="confSenha">Confirme sua senha</label></td>
                            <td><input class="cadastro-form" type="password" name="confSenha" id="confSenha"
                                       required></td>
                        </tr>
                        <tr>
                            <td><label for="sexo">Sexo</label></td>
                            <td>
                                <select class="cadastro-form" name="sexo" id="sexo">
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit" class="btn btn-primary">Cadastrar Profissional</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </article>
            <?php include('categoria.php'); ?>
        </article>
    </section>
</main>
<?php include('planos.php'); ?>
<?php include('rodape.php'); ?>
</body>
</html>
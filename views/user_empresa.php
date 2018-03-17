<?php
session_start();
define('TIPO', 'Profissional');
?>
<!DOCTYPE html>
<html>
<head>
    <head>
        <title>Site de serviços de Macapá</title>
        <?php include('head.php'); ?>
        <link rel="stylesheet" href="../assets/css/categoria_cadastro.css">
        <link rel="stylesheet" href="../assets/css/menu_container_cadastro.css">
        <link rel="stylesheet" href="../assets/css/user_cadastro.css">
    </head>
</head>
<body>
<?php include('menu_container_cadastro.php'); ?>
<main>
    <section class="flex-row">

        <article class="formulario" >
            <article class="titulo-categoria flex-row">
                <span>Cadastro de Empresa</span>
            </article>
            <form >

                <div class="container">
                    <table class="table-responsive">
                        <tr>
                            <td><label for="cpf">CNPJ da Empresa</label></td>
                            <td><input class="form-control" type="number" name="cpf" id="cpf" required></td>
                        </tr>
                        <tr>
                            <td><label for="nomeCompleto">Logo (Opcional)</label></td>
                            <td><input class="form-control" type="text" name="nomeCompleto" id="nomeCompleto" required>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="email">Email da Empresa</label></td>
                            <td><input class="form-control" type="email" name="email" id="email" required></td>
                        </tr>
                        <tr>
                            <td><label for="senha">Senha</label></td>
                            <td><input class="form-control" type="password" name="senha" id="senha" required></td>
                        </tr>
                        <tr>
                            <td><label for="confSenha">Confirme sua senha</label></td>
                            <td><input class="form-control" type="password" name="confSenha" id="confSenha" required>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="categoria">Categoria</label></td>
                            <td><input class="form-control" type="text" name="categoria" id="categoria" required></td>
                        </tr>
                        <tr>
                            <td><label for="tServico">Tipo de Serviço</label></td>
                            <td><input class="form-control" type="text" name="tServico" id="tServico" required></td>
                        </tr>
                        <tr>
                            <td><label for="descricao">Descriçao do Serviço</label></td>
                            <td><input class="form-control" type="text" name="descricao" id="descricao" required></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" class="btn btn-primary" name="btnCadastrarProfissional"
                                       value="Cadastrar Profissional"></td>
                        </tr>
                    </table>
                </div>
            </form>
        </article>
      <?php include ('categoria.php');?>
    </section>
</main>
<?php include('planos.php'); ?>
<?php include('rodape.php'); ?>
</body>
</html>
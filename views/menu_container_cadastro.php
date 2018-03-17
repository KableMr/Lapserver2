<?php
$label = null;
if (isset($_SESSION["opcao"]) && !empty($_SESSION["opcao"])) {
    $label = ucfirst($_SESSION["opcao"]);
}
?>
<!DOCTYPE html>
<html>

<body>

<!-- header menu -->
<header id="main-header">
    <div id="menu_container" class="flex-row">
        <div id="logo">
                    <span>
                        <a class="text-defull" href="index.php">Serviços AP</a>
                    </span>
            <!--<span id="menu-nav">
                            <i class="fa fa-bars"></i>
                            menu
                        </span>-->
        </div>
        <div id="search">
            <form id="form-body" class="flex-row">
                <input type="search" name="pesquisa" id="pesquisa" placeholder="BUSCAR"/>
                <button type="submit" name="btn-buscar" id="btn-buscar">Buscar</button>
            </form>
        </div>
<?php if ($label) { ?>
        <div id="sign">
            <ul class='flex-row lista'>
                <li><a href="#cadastrando"><span id="cadastro">Cadastrando <?php echo $label; ?> . . .</span></a></li>
            </ul>
        </div>
<?php } ?>
    </div>
    <div id="menu_normal">
        <ul id="animacao-menu" class="flex-row-wrap">
            <li><a href='#categoria-container'>Categoria</a></li>
            <li><a href='#planos'>Planos</a></li>
            <li><a href='#empresa'>Empresas</a></li>
            <li><a href='#profissionais'>Profissionais</a></li>
            <li><a href='#quemsomos'>Quem somos?</a></li>
            <li><a href='#suporte'>Suporte</a></li>
        </ul>
    </div>
</header>

<div id="modal">
    <div id="modal-body">
        <!-- corpo -->
        <form>
            <div class="container">
                <table>
                    <tr>
                        <td colspan="2"><h1>Faça Seu Login</h1></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email</label></td>
                        <td><input class="form-control" type="email" name="email" id="email" required></td>
                    </tr>
                    <tr>
                        <td><label for="senha">Senha</label></td>
                        <td><input class="form-control" type="password" name="senha" id="senha" required></td>
                    </tr>
                    <tr>
                        <td><input type="submit" class="btn btn-primary" name="btnLogin" value="Login"></td>
                    </tr>
                </table>
            </div>
        </form>
    </div>

</div>

</body>
</html>

        
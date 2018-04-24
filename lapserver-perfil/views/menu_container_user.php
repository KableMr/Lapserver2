<?php
include('logica-entidade.php');
?>
<!DOCTYPE html>
<html>

<body>

<!-- header menu -->
<header id="main-header">
    <div id="menu_container" class="flex-row">
        <div id="logo" class="flex-row">
                    <span>
                        <a class="text-defull" href="index.php">ServiçosAP.<span class="copy-style">&copy</span>om</a>
                    </span>
            <span id="menu-nav">
                            <i class="fa fa-bars"></i>
                            menu
                        </span>
            <span id="menu-nav-mobile">
                            <i class="fa fa-bars"></i>
                            menu
                        </span>
        </div>
        <div id="search">
            <form id="form-body" class="flex-row-normal">
                <input type="search" name="pesquisa" id="pesquisa" placeholder="PESQUISAR"/>
                <button type="submit" name="btn-buscar" id="btn-buscar"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <?php if (validUser()) { ?>
            <div id="container-user" class="flex-row-normal">
                <p class="text-defull"><span class="text-success">Logado como </span><?= $_SESSION['empresa_logada'] ?></p>
                <i id="setting-user" class="fa fa-arrow-down"></i>

            </div>
        <?php } else { ?>
            <div id="sign">
                <ul class='flex-row lista'>
                    <li class="pesquisa"><i class="fa fa-search"></i></li>
                    <li><a href="#info" id="entrar">Entrar</a></li>
                    <li><a href="#info" id="cadastro"><span>Cadastrar</span></a></li>
                </ul>
            </div>
        <?php } ?>
    </div>
    <div id="pai-menu-normal">
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
    </div>
</header>

<div id="modal">
    <div id="modal-body">
        <!-- corpo -->
        <form action="login.php" method="post">
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
                        <td><label for="entidade">Entrar como!?</label></td>
                        <td><select name="entidades" id="entidade" class="form-control">
                                <option value="empresas">Empresa</option>
                                <option value="profissional">Profissional</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td><input type="submit" class="btn btn-primary" name="btnLogin" value="Login"></td>
                    </tr>
                </table>
            </div>
        </form>
    </div>

</div>

<div id="modal-cadastro">
    <div id="modal-body">
        <!-- corpo -->
        <form action="cadastro.php" method="post">
            <div class="container">
                <table>
                    <tr>
                        <td colspan="2"><h1>Cadastrar como</h1></td>
                    </tr>
                    <tr>
                        <td><label for="entidade">Entrar como!?</label></td>
                        <td><select name="entidades" id="entidade" class="form-control">
                                <option value="empresas">Empresa</option>
                                <option value="profissional">Profissional</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>

</div>

<div id="modal-usuario">
    <ul id="link-menu-user" class="flex-column">
        <li><a href="../lapserver-perfil/views/perfil-user.php">Meu perfil</a></li>
        <li><a href="./logout.php">Sair</a></li>
    </ul>
</div>

<div id="menu-mobile">
    <div id="menu-mobile-itens">
        <ul id="animacao-menu" class="flex-column">

            <li>
                <div id="sign-item">
                    <ul class='flex-row lista'>
                        <li class="pesquisa"><i class="fa fa-search"></i></li>
                        <li><a href="#info" id="entrar">Entrar</a></li>
                        <li><a href="cadastro.php" id="cadastro"><span>Cadastrar</span></a></li>
                    </ul>
                </div>
            </li>
            <li><a href='#categoria-container'>Categoria</a></li>
            <li><a href='#planos'>Planos</a></li>
            <li><a href='#empresa'>Empresas</a></li>
            <li><a href='#profissionais'>Profissionais</a></li>
            <li><a href='#quemsomos'>Quem somos?</a></li>
            <li><a href='#suporte'>Suporte</a></li>
        </ul>
    </div>
</div>
</body>
</html>

        
<?php
require_once ('../models/Banco.php');
require_once ('../models/UsuarioDAO.php');
require_once ('../models/Entidade.php');

$pdo = Conecta();
$usuario = new UsuarioDAO();
$usuario->table = $_POST['entidades'];
$usuario->nome = $_POST['nome'];
$usuario->email = $_POST['email'];
$usuario->senha = $_POST['senha'];

$cadastro = InserirEntidade($pdo, $usuario);

if($cadastro){
    header("Location: ../views/index.php");
    $_SESSION['sucesso'] = "Cadastro efetuado com sucesso!";
}else {
    header("Location: ../views/index.php");
    $_SESSION['danger'] = "Não foi possível efetuar o cadastro... Tente novamente mais tarde";
}
die();





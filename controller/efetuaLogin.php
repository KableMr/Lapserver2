<?php
session_start();
require_once("../models/Banco.php");
require_once("../models/Entidade.php");
require_once("../models/Login.php");

$table = $_POST["entidades"];

$pdo = Conecta();

$login = new Login();
$login->email = $_POST['email'];
$login->senha = $_POST['senha'];

$loginEntidade = LoginEntidade($pdo, $login, $table);

if($loginEntidade) {
    header("Location: ../../Lapserver-perfil/index.php");

    $_SESSION["tabela"] = $table;
    foreach ($loginEntidade as $l) {
        $_SESSION['empresa_logada'] = $l['nome'];
        $_SESSION['id']=$l['id'];
    }
}else{
    echo "[erro ao autenticar ao servidor!]";
}
die();

<?php
include('conecta.php');
include ('banco-emrpesa.php');

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];


$empresa = adicionaEmpresa($conexao, $nome, $email, $senha);
if($empresa){
    header("Location: index.php");
}
die();


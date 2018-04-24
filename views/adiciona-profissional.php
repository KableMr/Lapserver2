<?php
include ('conecta.php');
include ('banco-profissional.php');


$profissional=insereProfissional($conexao,$_POST['nome'],$_POST['email'],$_POST['senha']);
if($profissional){
    header("Location: index.php?cadastro=true");
}else{
    header("Location: index.php?cadastro=false");
}

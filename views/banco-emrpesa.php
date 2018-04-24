<?php
function adicionaEmpresa($conexao, $nome, $email, $senha){
    $senhaMd5 = md5($senha);
    $query = "insert into empresas (nome, email, senha) values ('{$nome}', '{$email}', '{$senhaMd5}')";
    return mysqli_query($conexao, $query);
}

function loginEmpresa($conexao, $email, $senha){
    $senhaMd5=md5($senha);
    $query = "select * from empresas where email = '{$email}' and senha = '{$senhaMd5}'";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}
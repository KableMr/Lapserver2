<?php

function insereProfissional($conexao, $nome, $email, $senha)
{
    $senhaEncrypt = md5($senha);
    $query = "insert into profissionais (nome,email, senha) values ('{$nome}', '{$email}','{$senhaEncrypt}')";
    return mysqli_query($conexao, $query);
}

function loginProfissional($conexao, $email, $senha)
{
    $senhaMd5 = md5($senha);
    $query = "select * from profissionais where email = '{$email}' and senha = '{$senhaMd5}'";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}
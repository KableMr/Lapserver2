<?php
include('conecta.php');

function buscaEntidade($conexao, $table, $email, $senha)
{
    $senhaMd5=md5($senha);
    $query = " select * from '{$table}' where email = '{$email}' and senha='{$senhaMd5}'";
    $resultado = mysqli_query($conexao, $query);
    $entidade = mysqli_fetch_assoc($resultado);
    return $entidade;
}
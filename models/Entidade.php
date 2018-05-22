<?php


function ListarEntidades($pdo, $table){
    $query = "select * from $table";
    $resultado = $pdo->query($query);
    $lista = $resultado->fetchAll(PDO::FETCH_OBJ);
    return $lista;

}
function ListarEntidadesPerfil($pdo, $table, $id){
    $query = "select * from {$table} where id = {$id}";
    $resultado = $pdo->query($query);
    $lista = $resultado->fetchAll(PDO::FETCH_OBJ);
    return $lista;

}

function LoginEntidade($pdo, Login $login, $table){
    $senhaMd5 = md5($login->senha);
    $query = "select * from $table where email='{$login->email}' and senha='{$senhaMd5}'";
    $resultado = $pdo->query($query);
    $lista = $resultado->fetchAll();
    return $lista;
}


function InserirEntidade($pdo, UsuarioDAO $usuario){
    $senhaMd5=md5($usuario->senha);
    $query = "insert into $usuario->table (nome, email, senha) values ('{$usuario->nome}', '{$usuario->email}', '{$senhaMd5}')";
    $resultado = $pdo->query($query);
    return $resultado;
}

function AtualizarDados($pdo, $id, $table, $nome, $email, $localizacao, $formacao, $bio, $conhecimento, $categoria_id, $fotoPerfil, $telefone){
    $query = "update $table set nome = '{$nome}', email = '{$email}', localizacao = '{$localizacao}', formacao = '{$formacao}', bio = '{$bio}', area_conhecimento = '{$conhecimento}', categoria_id = {$categoria_id}, arquivo_id = '{$fotoPerfil}' , telefone = '{$telefone}' where id = {$id}";
    $resultado = $pdo->query($query);
    return $resultado;
}


function validaPesquisa($pdo, $palavraPasse){
    $query = "select * from profissionais where area_conhecimento like '%{$palavraPasse}%'";
    $resultado = $pdo->query($query);
    $listas = $resultado->fetchAll(PDO::FETCH_OBJ);
    return $listas;
}
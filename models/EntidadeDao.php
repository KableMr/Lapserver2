<?php
/**
 * Created by PhpStorm.
 * User: zeluis
 * Date: 02/05/2018
 * Time: 16:20
 */

class EntidadeDao
{
    private $conexao;

    public function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    function ListarEntidades($table){
        $query = "select * from $table";
        $resultado = $this->conexao->query($query);
        $lista = $resultado->fetchAll(PDO::FETCH_OBJ);
        return $lista;

    }

    function LoginEntidade(Login $login, $table){
        $senhaMd5 = md5($login->senha);
        $query = "select * from $table where email='{$login->email}' and senha='{$senhaMd5}'";
        $resultado = $this->conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }


    function InserirEntidade(UsuarioDAO $usuario){
        $senhaMd5=md5($usuario->senha);
        $query = "insert into $usuario->table (nome, email, senha) values ('{$usuario->nome}', '{$usuario->email}', '{$senhaMd5}')";
        $resultado = $this->conexao->query($query);
        return $resultado;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: zeluis
 * Date: 29/05/2018
 * Time: 15:24
 */

class Notificacao
{
    private $conexao;

    public function __construct($conexao)
    {
        $this->conexao = $conexao;
    }


    public function enviarNotificacao(NotificacaoDao $notificacao){
        $query = "insert into notificacoes (descricao, entidade_id) values 
                    ('{$notificacao->getDescricao()}', '{$notificacao->getEntidadeId()}')";
        $resultado = $this->conexao->query($query);
        return $resultado;
    }


}
<?php
/**
 * Created by PhpStorm.
 * User: zeluis
 * Date: 29/05/2018
 * Time: 15:26
 */

class NotificacaoDao
{
    private $id;
    private $descricao;
    private $entidade_id;

    public function __construct($descricao, $entidade_id)
    {
        $this->descricao = $descricao;
        $this->entidade_id = $entidade_id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getEntidadeId()
    {
        return $this->entidade_id;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }




}
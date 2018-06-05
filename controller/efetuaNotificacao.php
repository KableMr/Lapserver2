<?php
require_once ('../models/Banco.php');
require_once ('../models/Notificacao.php');
require_once ('../models/NotificacaoDao.php');



$pdo = Conecta();
$descricao = $_POST['msg-notifica'];
$entidade_id = $_POST['entidade_id'];


$notiDao = new NotificacaoDao($descricao, $entidade_id);


$notificacao = new Notificacao($pdo);
$notifica = $notificacao->enviarNotificacao($notiDao);







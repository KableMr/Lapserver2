<?php

$entidade = $_POST['entidades'];
if ($entidade == 'profissionais'){
    header("Location: user_profissional.php");
}else if($entidade == 'empresas') {
    header("Location: user_empresa.php");
}
die();

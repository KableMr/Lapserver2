<?php
include('logica-entidade.php');
include('conecta.php');
include('banco-login.php');
include('banco-emrpesa.php');
include('banco-profissional.php');

$table = $_POST['entidades'];

if ($table == "profissionais") {
    $entidade = loginProfissional($conexao, $_POST['email'], $_POST['senha']);
    if ($entidade) {
        login($entidade['nome']);
        header("Location: index.php?loginProfissional=true");
    }

} else {
    $entidade = loginEmpresa($conexao, $_POST['email'], $_POST['senha']);
    if ($entidade) {
        login($entidade['nome']);
        header("Location: index.php?loginEmpresa=true");
    }
}

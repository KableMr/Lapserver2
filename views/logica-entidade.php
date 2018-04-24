<?php
session_start();

function login($nome){
    return $_SESSION['empresa_logada']=$nome;
}
function validUser(){
    return isset($_SESSION['empresa_logada']);
}

function logout(){
    session_destroy();
}
<?php
ob_start();
session_start();

function Conecta()
{
    try {
        $pdo = new PDO("mysql:host=104.196.205.81; dbname=ServicosAP", "root", "1q");
    } catch (PDOException $ex) {
        echo "error: " . $ex->getMessage();
    }
    return $pdo;
}

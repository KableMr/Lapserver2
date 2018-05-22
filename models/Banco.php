<?php
session_start();

function Conecta()
{
    try {
        $pdo = new PDO("mysql:host=127.0.0.1; dbname=ServicosAP", "root", "s0laris");
    } catch (PDOException $ex) {
        echo "error: " . $ex->getMessage();
    }
    return $pdo;

}

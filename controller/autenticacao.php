<?php
session_start();
if (isset($_GET['desable']) and $_GET['desable']==1){
    unset($_SESSION['sucesso']);
    header("Location: ../views/index.php");

}else if(isset($_GET['desable']) and $_GET['desable']==0){
        unset($_SESSION['danger']);
        header("Location: ../views/index.php");
}
die();
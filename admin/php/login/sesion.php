<?php 

session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
    header("location: ../../sesion.html");
}else{
    header("location: ../../index.php");
}



?>
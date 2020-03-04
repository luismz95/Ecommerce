<?php
    
require ('../../config/db.php');
    

    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $pass = $_POST['password'];
    


    $con->query("INSERT INTO usuarios (nombre,usuario,password,tipo) values('$nombre','$usuario','$pass','1');");

    session_start();
    $_SESSION['username'] = $usuario;
    
   header("location: ../../index.php");
    
?>
<?php

    require ('../../config/db.php');
    session_start();

    $usuario = $_POST['usuario'];
    $pass = $_POST['password'];

    $query = "SELECT COUNT(*) AS contar FROM usuarios WHERE usuario = '$usuario' AND password = '$pass'";

    $consulta = mysqli_query($con,$query);
    $array = mysqli_fetch_array($consulta);

    if($array['contar'] > 0){
        $_SESSION['username'] = $usuario;
        header("location: ../../index.php");
    }else{
        header("location: ../../sesion.html");
    }

?>
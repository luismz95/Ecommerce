<?php

require ('../../../config/db.php');

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $cat = $_POST['cat'];
    $precio = $_POST['precio'];

    $sql = "INSERT INTO productos (id,descripcion,categoria,precio,usuario_add) VALUES ($id,'$nombre',$cat,$precio,1)";
    
    echo mysqli_query($con,$sql);
?>
<html>

<?php
  session_start();
  $usuario = $_SESSION['username'];

  if(!isset($usuario)){
    header("location: sesion.html");
  }else{
    
  }

  ?>



<head>

    <title>ADMINISTRADOR</title>


    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="/jquery-3.4.1.min.js"></script>


</head>

<style>
body {
    background: #74b9ff;
}


.container {
    background-color: #f5f6fa;
    border-radius: 15px;

}

.jumbotron {
    margin-top: 20px;
    background-color: #535c68;
    color: #fff;
}


</style>

<body>

    
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../index.php">EM-EX ADMINISTRADOR</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Altas</a></li>
      <li><a href="#">Modificaciones</a></li>
      <li><a href="#">Catalogo</a></li>
      <li><a href="#">Envios</a></li>
    </ul>
  </div>
</nav>



    <div class="container">
        
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav menu">
      <li class="active"><a href="productos.php">Productos</a></li>
      <li><a href="catalogo.php">Catalogo</a></li>
      <li><a href="#">Categorias</a></li>
    </ul>
  </div>
</nav>

        <div class="container-fluid">
            <div class="row">
                <h2>Alta de productos</h2>
                <p>Ingrese un producto que podra utilizar para altas en el catalogo</p>
                <form id="productoForm" method="POST">

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre producto</th>
                                <th>Categoria</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input class="form-control" name="id" type="text"></td>
                                <td><input class="form-control" name="nombre" type="text"></td>
                                <td>
                                    <div style="font-size: 20px;">
                                        <select name="cat">
                                            <option value="1">Camisas</option>
                                            <option value="2">Pantalones</option>
                                            <option value="3">Abrigos</option>
                                            <option value="4">Accesorios</option>
                                        </select>
                                    </div>
                                </td>
                                <td><input class="form-control" name="precio" type="text"></td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <div class="text-center"><button type="button" id="btnguardar" name="btnguardar"
                            class="btn btn-primary btn-lg">Guardar</button></div>
                </form>
            </div>
        </div>


        <br><br>
    </div>

</body>


<script type="text/javascript">
$(document).ready(function() {
    $('#btnguardar').click(function() {
        var datos = $('#productoForm').serialize();

        $.ajax({
            type: "POST",
            url: "../php/ajax/productoSave.php",
            data: datos,
            success: function(r) {
                if (r == 1) {
                    alert("agregado");
                } else {
                    alert("Codigo ingresado ya existe!");
                }
            }
        });

        return false;
    });
});
</script>

</html>
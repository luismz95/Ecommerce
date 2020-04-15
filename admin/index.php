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
      <a class="navbar-brand" href="index.php">EM-EX ADMINISTRADOR</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="altas/productos.php">Altas</a></li>
      <li><a href="#">Modificaciones</a></li>
      <li><a href="#">Catalogo</a></li>
      <li><a href="#">Envios</a></li>
    </ul>
  </div>
</nav>


  <div class="container">
  <div class="jumbotron text-center">
    <h1>EM-EX</h1>      
    <h2>Administrative System</h2>     
    <p>Este es el sistema administrativo de EM-EX el cual lleva el control de las ventas, catalogo, inventario y envios</p>
  </div>    




    <div class="container-fluid">
    <div class="Column">
      <div class="col-sm-12"><h2>Pocos en inventario</h2>
  <p>Productos del inventario los cuales estan vacios o quedan pocos en el stock</p>            
  <table class="table table-bordered">
    <thead>
      <tr class="info">
        <th>ID</th>
        <th>Producto</th>
        <th>Cantidad</th>
      </tr>
    </thead>
    <tbody>
      <tr class="active">
        <td>1</td>
        <td>Pantalones</td>
        <td>5</td>
      </tr>
    </tbody>
  </table></div>
    </div>
  </div>



    <div class="container-fluid">
    <div class="Column">
      <div class="col-sm-12"><h2>Envios</h2>
  <p>Envio pendientes de las ultimas fechas.</p>            
  <table class="table table-bordered">
    <thead>
      <tr class="info">
        <th>No. Envio</th>
        <th>Cliente</th>
        <th>No. Venta</th>
        <th>Ciudad</th>
        <th>Fecha envio</th>
      </tr>
    </thead>
    <tbody>
      <tr class="active">
        <td>125</td>
        <td>Miguel Sanchez Lopez</td>
        <td>356</td>
        <th>Tijuana</th>
        <td>30/04/2020</td>
      </tr>
    </tbody>
  </table></div>
    </div>
  </div>

  </div>
  <br>
</body>

</html>
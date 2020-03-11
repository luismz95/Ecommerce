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
  .navbar {
    background-color: #3498db;
  }
  .container-fluid .navbar-header a {
    color: #fff;
  }

  

</style>

<body>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#" style="color: #fff;" >WebSiteName</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="#" style="color: #fff;">Home</a></li>
        <li><a href="#" style="color: #fff;">Page 1</a></li>
        <li><a href="#" style="color: #fff;">Page 2</a></li>
        <li><a href="#" style="color: #fff;">Page 3</a></li>
      </ul>
    </div>
  </nav>


  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-4">.col-sm-4</div>
      <div class="col-sm-4">.col-sm-4</div>
      <div class="col-sm-4">.col-sm-4</div>
    </div>
  </div>
</body>

</html>
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

    <title>EM-EX | TIENDA OFICIAL | REGISTRO</title>


    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<style>
body {
    background: #dcdde1;
}


.container {
    background-color: #f5f6fa;
    border-radius: 15px;
}

a:link {
    text-decoration:none;
    color: red;
    font-weight: bold;
}

/* visited link */
a:visited {
  color: red;
  font-weight: bold;
}

/* mouse over link */
a:hover {
  color: red;
  font-weight: bold;
}

/* selected link */
a:active {
  color: red;
  font-weight: bold;
}
</style>

<body>

    <br><br>


    <div class="container">

        <div class="container-fluid">
        <br>
        <div class="row">
                <div class="col-sm-12"><a href="index.php"><img src="IMAGENES/img/back.png" alt="user" width="50" height="50"></a>
            </div>
            <br><br><br>
            <div class="row">
                <div class="col-sm-12 text-center"><img src="IMAGENES/img/user.png" alt="user" width="100" height="100"> <h1><?php echo $usuario; ?></h1><br>
                <div class="col-sm-12 text text-center" ><a href="php/login/salir.php">CERRAR SESION</a></div>
                </div>
            </div>
            
        </div>
        <br><br><br>
    </div>


</body>

</html>
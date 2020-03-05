<html>
    <head>
        <?php
  session_start();
  $usuario = $_SESSION['username'];

  if(!isset($usuario)){
    header("location: sesion.html");
  }else{
    
  }

  ?>
        <title>ADMINISTRADOR</title>
    </head>

    <body>

    </body>
</html>
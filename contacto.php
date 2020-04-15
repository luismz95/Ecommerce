<!DOCTYPE html>
<html lang="en">

<?php
  session_start();


  if(isset($_SESSION['username'])){
    $usuario = $_SESSION['username'];
  }else{
    $usuario = "Iniciar sesion";
  }

  ?>


<head>
  <title>EM-EX | TIENDA OFICIAL | INICIO</title>


  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="css/navbar.css"><!--estilos del navbar-->
  <link rel="stylesheet" type="text/css" href="css/catalogo.css"><!--estilos del navbar-->
  <link rel="stylesheet" type="text/css" href="css/index.css"><!--estilos del navbar-->

  <link rel="stylesheet" href="js/index.js">
  
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LT3H790L1F"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-LT3H790L1F');
</script>

</head>


<body>

<!--SECCION DE LA BARRA DE NAVEGACION-->

  <nav class="navbar my-navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">EM-EX</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Catalogo <span
              class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="camisas.php">Camisas</a></li>
            <li><a href="pantalones.php">Pantalones</a></li>
            <li><a href="abrigos.php">Abrigos</a></li>
            <li><a href="accesorios.php">Accesorios</a></li>
          </ul>
        </li>
        <li><a href="nosotros.php">Nosotros</a></li>
        <li><a href="contacto.php">Contacto</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php 
        if($usuario=="Iniciar sesion"){
            echo ' <li><a href="registro.html"><span class="glyphicon glyphicon-user"></span> Regístrate</a></li>';
        }
        ?>
        <li><a href="usuario.php"><span class="glyphicon glyphicon-log-in"></span> <?php echo $usuario ?></a></li>
        <li><a class="button-shop js-toggle-cart"href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Carrito</a></li>
      </ul>
    </div>
  </nav>
  


  

<!--SECCION DEL CATALOGO-->

<div class="container">
<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACTA CON NOSOTROS</h2><br><br>
  <div class="row">
    <div class="col-sm-5">
      <p>Para dudas, sugerencias o inconvenientes llamanos o deja tu comentrio con tu situacion y te contactaremos de inmediato.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Tijauna, Baja California, MEX</p>
      <p><span class="glyphicon glyphicon-phone"></span> +52 6647897281</p>
      <p><span class="glyphicon glyphicon-envelope"></span> erwin.ruiz@uabc.edu.mx</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Nombre completo" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comentario" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>
      </div>

<!-- Image of location/map -->
<iframe src="https://maps.google.com/maps?width=100%&height=600&hl=es&q=Dra.%20Eunice%20Robles%20Macias%2C%20Jos%C3%A9%20Clemente%20Orozco%201405%2C%20Zona%20Urbana%20Rio%20Tijuana%2C%2022010%20Tijuana%2C%20B.C.+(EM-EX)&ie=UTF8&t=&z=16&iwloc=B&output=embed" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>



<section>



  
</section>
   
<!-- SECCION DE FUNCION DEL CARRITO -->

<aside class="cart js-cart">
  <div class="cart__header">
    <h1 class="cart__title">Carrito de compras</h1>
    <p class="cart__text">
      <a class="button button--light js-toggle-cart" href="#" title="Close cart">
        Cerrar el carrito
      </a>
    </p>
  </div>
  <div class="cart__products js-cart-products">
    <p class="cart__empty js-cart-empty">
      Agrega un producto al carrito
    </p>
    <div class="cart__product js-cart-product-template">
      <article class="js-cart-product">
        <h1>
          Titulo
        </h1>
        <p>
          <a class="js-remove-product" href="#" title="Delete product">
            Borrar el producto
          </a>
        </p>
      </article>
    </div>
  </div>
  <div class="cart__footer">
    <p class="cart__text">
      <a class="button" href="pagos.php" title="Buy products">
        Comprar articulos
      </a>
    </p>
  </div>
</aside>

<div class="lightbox js-lightbox js-toggle-cart"></div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script  src="js/index.js"></script>

</body>


</html>
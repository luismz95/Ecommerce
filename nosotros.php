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
  <title>EM-EX | TIENDA OFICIAL | NOSOTROS</title>


  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="css/navbar.css"><!--estilos del navbar-->
  <link rel="stylesheet" type="text/css" href="css/catalogo.css"><!--estilos del navbar-->
  <link rel="stylesheet" type="text/css" href="css/index.css"><!--estilos del navbar-->

  <link rel="stylesheet" href="js/index.js">
  
<style>
    body {
      background: #202020;
    }
    h1 {
    text-transform: uppercase;
    color: #FFF;
    font-weight: 600;
    margin-bottom: 30px;
  }
  p {
    font-size: 19px;
    color: #cfc8c8;
    margin-bottom: 30px;
  } 

  .logo {
  color: #20c42e;
  font-size: 200px;
}

.container-fluid {
    padding: 60px 50px;
  }



</style>

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
        <li><a href="php/login/sesion.php"><span class="glyphicon glyphicon-log-in"></span> <?php echo $usuario ?></a></li>
        <li><a class="button-shop js-toggle-cart"href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Carrito</a></li>
      </ul>
    </div>
  </nav>
  

  <div class="container">

<!-- Container (About Section) -->
<div class="container-fluid text-center">
  <span></span>
  <h1 class="margin">Conócenos</h1>
  <p align="justify">Mediante un estudio de mercado encontramos la necesidad de crear una marca de ropa de calidad en el país, ya que existen muy pocas marcas que verdaderamente entregan calidad al cliente, y solo son conocidas a nivel nacional marcas contadas y sin saber si son de calidad o no.
    En otras palabras, no se tiene idea de que en México existen marcas de ropa que son reconocidas a nivel tanto local, nacional e internacional, cuando ahora con ayuda de la tecnología y el comercio electrónico debería de ser algo muy importante para ser competitivos y seguir existiendo en el mercado. 
    Existen marcas que son muy buenas en cuestión de calidad, más no se tiene la marca grabada en el público, es decir, no son reconocidas, escuchadas, grabadas en la memoria de los posibles compradores. Esto se debe a que muchas de ellas no intentan crecer en internet, o simplemente darse a conocer.</p>
</div>



<div class="container-fluid text-center">
  <div class="row">
    <h1>Misión</h1>
    <div class="col-sm-8">
      <p align="left">Se pretende ofrecer una variedad de ropa a la moda para hombre que cumpla con sus estándares de calidad y estilo para una empresa líder en el mercado local.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo" style="margin-top: -25px;"></span>
    </div>
  </div>
</div>

<div class="container-fluid text-center">
  <div class="row">
    <h1>Visión</h1>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo" style="margin-top: -25px;"></span>
    </div>
    <div class="col-sm-8">
      <p align="justify">Nos visualizamos dentro de 5 años como una marca de ropa comprometida con la calidad y la responsabilidad social con la elaboración de prendas con hilo de botella de plástico reciclado. Contamos con franquicias a lo largo de la Baja California para la mejor atención al cliente. Realizamos ventas a lo largo y ancho del territorio mexicano y norteamericano ofreciendo siempre calidad e innovación
      </p>
    </div>
  </div>
</div>


</div>
  
   
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
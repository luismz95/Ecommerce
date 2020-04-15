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
        <a class="navbar-brand" href="#">EM-EX</a>
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
  
<section>
  <div class="jumbotron text-center" style="z-index:1; background-image: url('IMAGENES/slider/jumbo.jpg'); background-attachment: fixed; background-size: cover;  margin-top: -20px;">
    
  <img src="IMAGENES/LOGO.png"  height="90" width="70">
  <h1 style="color:rgb(236, 236, 236); font-weight: bold;">EM-EX</h1> 
  <p style="color:rgb(15, 51, 214); font-weight: bold;">Vestirte bien, con solo un click</p> 
  <p style="color: rgb(235, 234, 233); margin-bottom: 30px;">Las mejores promociones te esperan, ven y conoce porque somo los mejores</p>
</div>
</section>
<!--SECCION DEL CATALOGO-->

  

  <!-- CUADROS DE TIENDA -->





<section>


  <div class="shop__products">
    <div class="products">
      <div class="products__item">

        <article class="product">
          <h1 class="product__title">Camisa roja con lineas verticales</h1>
          <img src="IMAGENES/c1.jpg" alt="" class="prueba">
          <p class="product__text">
            <h2>$280</h2>
            <a class="button js-add-product" href="#" title="Add to cart">
              Agregar al carrito
            </a>
            <div class="cart__product js-cart-product-template">
              <article class="js-cart-product">
                <h1>
                  Camisa roja con lineas verticales
                </h1>
                <p>
                  <a class="js-remove-product" href="#" title="Delete product">
                    Borrar el producto
                  </a>
                </p>
                <h1 style="font-weight:bold;">
                 $280
                </h1>
              </article>
            </div>
          </p>
        </article>

      </div>
      <div class="products__item">

        <article class="product">
          <h1 class="product__title">Camisa de manga larga azul claro</h1>
          <img src="IMAGENES/c2.jpg" alt="" class="prueba">
          <p class="product__text">
            <h2>$350</h2>
            <a class="button js-add-product" href="#" title="Add to cart">
              Agregar al carrito
            </a>
            <div class="cart__product js-cart-product-template">
              <article class="js-cart-product">
                <h1>
                  Camisa de manga larga azul claro
                </h1>
                <p>
                  <a class="js-remove-product" href="#" title="Delete product">
                    Borrar el producto
                  </a>
                </p>
              </article>
            </div>
          </p>
        </article>

      </div>
      <div class="products__item">

        <article class="product">
          <h1 class="product__title">Titulo del producto3</h1>
          <img src="IMAGENES/c3.jpg" alt="" class="prueba">
          <p class="product__text">
            <h2>$300</h2>
            <a class="button js-add-product" href="#" title="Add to cart">
              Agregar al carrito
            </a>
            <div class="cart__product js-cart-product-template">
              <article class="js-cart-product">
                <h1>
                  Camisa roja con botones
                </h1>
                <p>
                  <a class="js-remove-product" href="#" title="Delete product">
                    Borrar el producto
                  </a>
                </p>
              </article>
            </div>
          </p>
        </article>

      </div>
      <div class="products__item">

        <article class="product">
          <h1 class="product__title">Titulo del producto4</h1>
          <img src="IMAGENES/c4.jpg" alt="" class="prueba">
          <p class="product__text">
            <h2>$350</h2>
            <a class="button js-add-product" href="#" title="Add to cart">
              Agregar al carrito
            </a>
            <div class="cart__product js-cart-product-template">
              <article class="js-cart-product">
                <h1>
                  Camisa roja con botones
                </h1>
                <p>
                  <a class="js-remove-product" href="#" title="Delete product">
                    Borrar el producto
                  </a>
                </p>
              </article>
            </div>
          </p>
        </article>

      </div>

</section>

<section>

  <div class="shop__products">
    <div class="products">
      <div class="products__item">

        <article class="product">
          <h1 class="product__title">Titulo del producto1</h1>
          <img src="IMAGENES/ac1.jpg" alt="" class="prueba">
          <p class="product__text">
            <h2>$280</h2>
            <a class="button js-add-product" href="#" title="Add to cart">
              Agregar al carrito
            </a>
             <div class="cart__product js-cart-product-template">
                <article class="js-cart-product">
                  <h1>
                    Gorra Adidas negra
                  </h1>
                  <p>
                    <a class="js-remove-product" href="#" title="Delete product">
                      Borrar el producto
                    </a>
                  </p>
                </article>
              </div>
          </p>
        </article>

      </div>
      <div class="products__item">

        <article class="product">
          <h1 class="product__title">Titulo del producto 2</h1>
          <img src="IMAGENES/ac2.jpg" alt="" class="prueba">
          <p class="product__text">
            <h2>$350</h2>
            <a class="button js-add-product" href="#" title="Add to cart">
              Agregar al carrito
            </a>
             <div class="cart__product js-cart-product-template">
                <article class="js-cart-product">
                  <h1>
                    Camisa roja con botones
                  </h1>
                  <p>
                    <a class="js-remove-product" href="#" title="Delete product">
                      Borrar el producto
                    </a>
                  </p>
                </article>
              </div>
          </p>
        </article>

      </div>
      <div class="products__item">

        <article class="product">
          <h1 class="product__title">Titulo del producto3</h1>
          <img src="IMAGENES/ac3.jpg" alt="" class="prueba">
          <p class="product__text">
            <h2>$300</h2>
            <a class="button js-add-product" href="#" title="Add to cart">
              Agregar al carrito
            </a>
             <div class="cart__product js-cart-product-template">
                <article class="js-cart-product">
                  <h1>
                    Camisa roja con botones
                  </h1>
                  <p>
                    <a class="js-remove-product" href="#" title="Delete product">
                      Borrar el producto
                    </a>
                  </p>
                </article>
              </div>
          </p>
        </article>

      </div>

</section>

      <div class="container" style="width: 100%; margin: 0; padding: 0; background-color: black;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="IMAGENES/slider/uno.jpg" alt="Los Angeles" style="width:100%;">
            </div>
      
            <div class="item">
              <img src="IMAGENES/slider/dos.jpg" alt="Chicago" style="width:100%;">
            </div>
          
            <div class="item">
              <img src="IMAGENES/slider/tres.jpg" alt="New york" style="width:100%;">
            </div>
          </div>
      
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

<section>

  <div class="shop__products">
    <div class="products">
      <div class="products__item">

        <article class="product">
          <h1 class="product__title">Titulo del producto1 </h1>
          <img src="IMAGENES/a1.jpg" alt="" class="prueba">
          <p class="product__text">
            <h2>$2000</h2>
            <a class="button js-add-product" href="#" title="Add to cart">
              Agregar al carrito
            </a>
            <div class="cart__product js-cart-product-template">
              <article class="js-cart-product">
                <h1>
                  Abrigo rojo para la lluvia
                </h1>
                <p>
                  <a class="js-remove-product" href="#" title="Delete product">
                    Borrar el producto
                  </a>
                </p>
              </article>
            </div>
          </p>
        </article>

      </div>
      <div class="products__item">

        <article class="product">
          <h1 class="product__title">Titulo del producto2</h1>
          <img src="IMAGENES/a2.jpg" alt="" class="prueba">
          <p class="product__text">
            <h2>$1500</h2>
            <a class="button js-add-product" href="#" title="Add to cart">
              Agregar al carrito
            </a>
            <div class="cart__product js-cart-product-template">
              <article class="js-cart-product">
                <h1>
                  Camisa roja con botones
                </h1>
                <p>
                  <a class="js-remove-product" href="#" title="Delete product">
                    Borrar el producto
                  </a>
                </p>
              </article>
            </div>
          </p>
        </article>

      </div>
      <div class="products__item">

        <article class="product">
          <h1 class="product__title">Titulo del producto3</h1>
          <img src="IMAGENES/a3.jpg" alt="" class="prueba">
          <p class="product__text">
            <h2>$1100</h2>
            <a class="button js-add-product" href="#" title="Add to cart">
              Agregar al carrito
            </a>
            <div class="cart__product js-cart-product-template">
              <article class="js-cart-product">
                <h1>
                  Camisa roja con botones
                </h1>
                <p>
                  <a class="js-remove-product" href="#" title="Delete product">
                    Borrar el producto
                  </a>
                </p>
              </article>
            </div>
          </p>
        </article>

      </div>

</section>



<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" style="background-image: url('IMAGENES/slider/jumbo2.jpg'); background-repeat: no-repeat; background-position: center; background-attachment: fixed; ">
    <div class="item active" >
      <span class="glyphicon glyphicon-heart logo slideanim"></span>
      <h4><span>Los mejores estilos a tu alcance.</span></h4>
    </div>
    <div class="item">
      <span class="glyphicon glyphicon-fire logo slideanim"></span>
      <h4><span>Calidad y originalidad.</span></h4>
    </div>
    <div class="item">
      <span class="glyphicon  glyphicon-eye-open logo slideanim"></span>
      <h4><span>Tenemos un gran catalogo para ti.</span></h4>
    </div>
  </div>

  <!-- Left and right controls -->

</div>
</div>


<section>

  <div class="shop__products">
    <div class="products">
      <div class="products__item">

        <article class="product">
          <h1 class="product__title">Titulo del producto1</h1>
          <img src="IMAGENES/p1.jpg" alt="" class="prueba">
          <p class="product__text">
            <h2>$980</h2>
            <a class="button js-add-product" href="#" title="Add to cart">
              Agregar al carrito
            </a>
            <div class="cart__product js-cart-product-template">
              <article class="js-cart-product">
                <h1>
                Pantalon azul claro
                </h1>
                <p>
                  <a class="js-remove-product" href="#" title="Delete product">
                    Borrar el producto
                  </a>
                </p>
              </article>
            </div>
          </p>
        </article>

      </div>
      <div class="products__item">

        <article class="product">
          <h1 class="product__title">Titulo del producto 2</h1>
          <img src="IMAGENES/p2.jpg" alt="" class="prueba">
          <p class="product__text">
            <h2>$900</h2>
            <a class="button js-add-product" href="#" title="Add to cart">
              Agregar al carrito
            </a>
            <div class="cart__product js-cart-product-template">
              <article class="js-cart-product">
                <h1>
                  Camisa roja con botones
                </h1>
                <p>
                  <a class="js-remove-product" href="#" title="Delete product">
                    Borrar el producto
                  </a>
                </p>
              </article>
            </div>
          </p>
        </article>

      </div>
      <div class="products__item">

        <article class="product">
          <h1 class="product__title">Titulo del producto3</h1>
          <img src="IMAGENES/p3.jpg" alt="" class="prueba">
          <p class="product__text">
            <h2>$980</h2>
            <a class="button js-add-product" href="#" title="Add to cart">
              Agregar al carrito
            </a>
            <div class="cart__product js-cart-product-template">
              <article class="js-cart-product">
                <h1>
                  Camisa roja con botones
                </h1>
                <p>
                  <a class="js-remove-product" href="#" title="Delete product">
                    Borrar el producto
                  </a>
                </p>
              </article>
            </div>
          </p>
        </article>

      </div>
      <div class="products__item">

        <article class="product">
          <h1 class="product__title">Titulo del producto4</h1>
          <img src="IMAGENES/p4.jpg" alt="" class="prueba">
          <p class="product__text">
            <h2>$1200</h2>
            <a class="button js-add-product" href="#" title="Add to cart">
              Agregar al carrito
            </a>
            <div class="cart__product js-cart-product-template">
              <article class="js-cart-product">
                <h1>
                  Camisa roja con botones
                </h1>
                <p>
                  <a class="js-remove-product" href="#" title="Delete product">
                    Borrar el producto
                  </a>
                </p>
              </article>
            </div>
          </p>
        </article>

      </div>
  
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
        <h1>
          Precio
        </h1>
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
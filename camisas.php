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
          <li><a href="php/login/salir.php"><span class="glyphicon glyphicon-log-in"></span> <?php echo $usuario ?></a></li>
          <li><a class="button-shop js-toggle-cart"href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Carrito</a></li>
        </ul>
      </div>
    </nav>

  <!--SECCION DEL CATALOGO-->

    

    <!-- CUADROS DE TIENDA -->

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
        <div class="products__item">

          <article class="product">
            <h1 class="product__title">Titulo del producto5</h1>
              <img src="IMAGENES/c5.jpg" alt="" class="prueba">
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
            <h1 class="product__title">Titulo del producto6</h1>
              <img src="IMAGENES/c6.jpg" alt="" class="prueba">
            <p class="product__text">
              <h2>$250</h2>
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
            <h1 class="product__title">Titulo del producto7</h1>
              <img src="IMAGENES/c7.jpg" alt="" class="prueba">
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
            <h1 class="product__title">Titulo del producto8</h1>
              <img src="IMAGENES/c8.jpg" alt="" class="prueba">
            <p class="product__text">
              <h2>$380</h2>
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
            <h1 class="product__title">Titulo del producto9</h1>
              <img src="IMAGENES/c9.jpg" alt="" class="prueba">
            <p class="product__text">
              <h2>$200</h2>
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
            <h1 class="product__title">Titulo del producto10</h1>
              <img src="IMAGENES/c10.jpg" alt="" class="prueba">
            <p class="product__text">
              <h2>$400</h2>
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
            <h1 class="product__title">Titulo del producto11</h1>
              <img src="IMAGENES/c11.jpg" alt="" class="prueba">
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
            <h1 class="product__title">Titulo del producto12</h1>
              <img src="IMAGENES/c12.jpg" alt="" class="prueba">
            <p class="product__text">
              <h2>$280</h2>
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
            <h1 class="product__title">Titulo del producto13</h1>
              <img src="IMAGENES/c13.jpg" alt="" class="prueba">
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
            <h1 class="product__title">Titulo del producto14</h1>
              <img src="IMAGENES/c14.jpg" alt="" class="prueba">
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
            <h1 class="product__title">Titulo del producto15</h1>
              <img src="IMAGENES/c15.jpg" alt="" class="prueba">
            <p class="product__text">
              <h2>$450</h2>
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
            <h1 class="product__title">Titulo del producto16</h1>
              <img src="IMAGENES/c16.jpg" alt="" class="prueba">
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
            <h1 class="product__title">Titulo del producto17</h1>
              <img src="IMAGENES/c17.jpg" alt="" class="prueba">
            <p class="product__text">
              <h2>$250</h2>
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
            <h1 class="product__title">Titulo del producto18</h1>
              <img src="IMAGENES/c18.jpg" alt="" class="prueba">
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
            <h1 class="product__title">Titulo del producto19</h1>
              <img src="IMAGENES/c19.jpg" alt="" class="prueba">
            <p class="product__text">
              <h2>$320</h2>
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
            <h1 class="product__title">Titulo del producto20</h1>
              <img src="IMAGENES/c20.jpg" alt="" class="prueba">
            <p class="product__text">
              <h2>$290</h2>
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
            <h1 class="product__title">Titulo del producto21</h1>
              <img src="IMAGENES/c21.jpg" alt="" class="prueba">
            <p class="product__text">
              <h2>$400</h2>
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
            <h1 class="product__title">Titulo del producto22</h1>
              <img src="IMAGENES/c22.jpg" alt="" class="prueba">
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
            <h1 class="product__title">Titulo del producto23</h1>
              <img src="IMAGENES/c23.jpg" alt="" class="prueba">
            <p class="product__text">
              <h2>$280</h2>
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
            <h1 class="product__title">Titulo del producto24</h1>
              <img src="IMAGENES/c24.jpg" alt="" class="prueba">
            <p class="product__text">
              <h2>$200</h2>
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
            <h1 class="product__title">Titulo del producto25</h1>
              <img src="IMAGENES/c25.jpg" alt="" class="prueba">
            <p class="product__text">
              <h2>$450</h2>
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
            <h1 class="product__title">Titulo del producto26</h1>
              <img src="IMAGENES/c26.jpg" alt="" class="prueba">
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
            <h1 class="product__title">Titulo del producto27</h1>
              <img src="IMAGENES/c27.jpg" alt="" class="prueba">
            <p class="product__text">
              <h2>$320</h2>
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
            <h1 class="product__title">Titulo del producto28</h1>
              <img src="IMAGENES/c28.jpg" alt="" class="prueba">
            <p class="product__text">
              <h2>$200</h2>
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
            <h1 class="product__title">Titulo del producto29</h1>
              <img src="IMAGENES/c29.jpg" alt="" class="prueba">
            <p class="product__text">
              <h2>$450</h2>
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
            <h1 class="product__title">Titulo del producto30</h1>
              <img src="IMAGENES/c30.jpg" alt="" class="prueba">
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
            <h1 class="product__title">Titulo del producto31</h1>
              <img src="IMAGENES/c31.jpg" alt="" class="prueba">
            <p class="product__text">
              <h2>$290</h2>
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
            <h1 class="product__title">Titulo del producto32</h1>
              <img src="IMAGENES/c32.jpg" alt="" class="prueba">
            <p class="product__text">
              <h2>$290</h2>
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
            <h1 class="product__title">Titulo del producto33</h1>
              <img src="IMAGENES/c33.jpg" alt="" class="prueba">
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
            <h1 class="product__title">Titulo del producto34</h1>
              <img src="IMAGENES/c34.jpg" alt="" class="prueba">
            <p class="product__text">
              <h2>$250</h2>
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
            <h1 class="product__title">Titulo del producto35</h1>
              <img src="IMAGENES/c35.jpg" alt="" class="prueba">
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
            <h1 class="product__title">Titulo del producto36</h1>
              <img src="IMAGENES/c36.jpg" alt="" class="prueba">
            <p class="product__text">
              <h2>$400</h2>
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
            <h1 class="product__title">Titulo del producto37</h1>
              <img src="IMAGENES/c37.jpg" alt="" class="prueba">
            <p class="product__text">
              <h2>$400</h2>
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
            <h1 class="product__title">Titulo del producto38</h1>
              <img src="IMAGENES/c38.jpg" alt="" class="prueba">
            <p class="product__text">
              <h2>$500</h2>
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
            <h1 class="product__title">Titulo del producto39</h1>
              <img src="IMAGENES/c39.jpg" alt="" class="prueba">
            <p class="product__text">
              <h2>$200</h2>
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
            <h1 class="product__title">Titulo del producto40</h1>
              <img src="IMAGENES/c40.jpg" alt="" class="prueba">
            <p class="product__text">
              <h2>$180</h2>
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
      </div>
    </div>
  </section>

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
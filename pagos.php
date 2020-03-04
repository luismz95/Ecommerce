<!DOCTYPE html>
<html lang="en">

<?php
  session_start();


  if(isset($_SESSION['username'])){
    $usuario = $_SESSION['username'];
  }else{
    header("location: sesion.html");
  }

  ?>


<head>
  <title>EM-EX | TIENDA OFICIAL | PAGOS</title>


  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <!--estilos del navbar-->
  <link rel="stylesheet" type="text/css" href="css/catalogo.css">
  <!--estilos del navbar-->
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <!--estilos del navbar-->

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
        ?> <li><a href="php/login/sesion.php"><span class="glyphicon glyphicon-log-in"></span>
            <?php echo $usuario ?></a></li>
        <li><a class="button-shop js-toggle-cart" href="#"><span class="glyphicon glyphicon-shopping-cart"></span>
            Carrito</a></li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid">
  <div class="row">
    <div class="col-sm-4" ></div>
    <div class="col-sm-4" >

    <div class="container">
    <div class="row">
      <!-- You can make it whatever width you want. I'm making it full width
on <= small devices and 4/12 page width on >= medium devices -->
      <div class="col-xs-12 col-md-4">


        <!-- CREDIT CARD FORM STARTS HERE -->
        <br><br><br><br><br>
        <div class="panel panel-default credit-card-box">
          <div class="panel-heading display-table">
            <div class="row display-tr" style=" text-align: center;">
              <h3 class="panel-title display-td" style="font-size: 20px; font-weight:bold; margin-top: 20px;">Detalles del pago</h3>
              <br>
              <div class="display-td">
                <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
              </div>
            </div>
          </div>
          <div class="panel-body">
            <form role="form" id="payment-form0" action="index.php">
              <div class="row">
                <div class="col-xs-12">
                  <div class="form-group">
                    <label for="cardNumber">NUMERO DE TARJETA</label>
                    <div class="input-group">
                      <input type="tel" class="form-control" name="cardNumber" placeholder="Numero de tarjeta valido"
                        autocomplete="cc-number" required autofocus minlength="16" maxlength="16" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                      <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-7 col-md-7">
                  <div class="form-group">
                    <label for="cardExpiry"><span class="hidden-xs">FECHA</span><span
                        class="visible-xs-inline">EXP</span> DE EXPIRACION</label>
                    <input type="tel" class="form-control" name="cardExpiry" placeholder="MM / YY" autocomplete="cc-exp"
                      required maxlength="5" pattern=[0-9]{2}(.*)[/][0-9]{2} title="Usa el formaro 00/00" />
                  </div>
                </div>
                <div class="col-xs-5 col-md-5 pull-right">
                  <div class="form-group">
                    <label for="cardCVC">CODIGO CV</label><br><br>
                    <input type="password" class="form-control" name="cardCVC" placeholder="CVC" autocomplete="cc-csc"
                      required maxlength="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57'
                       minlength="3" />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                <form  action="index.php">
                   <button type="submit" class="btn btn-success btn-lg btn-block">Continue</button>
                </form>
                </div>
              </div>
              <div class="row" style="display:none;">
                <div class="col-xs-12">
                  <p class="payment-errors"></p>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- CREDIT CARD FORM ENDS HERE -->


      </div>



    </div>
  </div>

    </div>
    <div class="col-sm-4" ></div>
  </div>
</div>



  

  <!-- If you're using Stripe for payments -->
  <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

</body>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery.payment/1.2.3/jquery.payment.min.js'></script>



<script src="js/index.js"></script>




</body>

</html>
<html>

<?php
  session_start();
  $usuario = $_SESSION['username'];

  if(!isset($usuario)){
    header("location: sesion.html");
  }else{
    
  }

  require ('../../config/db.php');

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
                    <li><a href="productos.php">Productos</a></li>
                    <li class="active"><a href="catalogo.php">Catalogo</a></li>
                    <li><a href="#">Categorias</a></li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <h2>Alta del catalogo</h2>
                <p>Ingrese un producto que podra utilizar para altas en el catalogo</p>
                <form id="productoForm" method="POST">

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>ID Producto</th>
                                <th>Cantidad</th>
                                <th>Color</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input class="form-control" name="id" type="text"></td>
                                <td>
                                    <div style="font-size: 20px;">
                                        <select name="id_producto">
                                            <?php  
                                                $sql = "SELECT * FROM productos";
                                                $eje = mysqli_query($con,$sql);
                                            ?>

                                            <?php  foreach ($eje as $item):?>
                                            <option value="<?php echo $item['id'] ?>"><?php echo $item['descripcion'] ?></option>
                                            <?php   endforeach  ?>
                                        </select>
                                    </div>
                                </td>
                                <td><input class="form-control" name="cantidad" type="number" min="1" max="999"></td>
                                <td><input class="form-control" name="color" type="text"></td>
                            </tr>
                        </tbody>
                    </table>


                    <table class="table">
                        <thead>
                            <tr>
                                <th>Talla</th>
                                <th>Imagen</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input class="form-control" name="talla" type="text"></td>
                                <td><input name="imagen " type="file" /></td>
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
        alert(datos);
        return false;
        $.ajax({
            type: "POST",
            url: "php/ajax/productoSave.php",
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
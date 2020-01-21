<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" href="index.css?version=51">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <title>TIENDA DE ROPA</title>

</head>

<body>



    <script>
        $(document).ready(function() {


            $(".mas").submit(function(e) {

                var formObj = $(this);
                var formURL = formObj.attr("action");
                var formData = new FormData(this);

                var idProducto = formObj.attr("name");



                $.ajax({
                  url: formURL,
                  type: 'POST',
                  data: {idProducto : idProducto},
                  mimeType:"multipart/form-data",
                  success: function(data)
                  {

                    $('#' + idProducto + ' .cantidad').text('Cantidad: ' + data);

                    var cantidadVieja = (parseInt(data) - 1);

                    var precioActual = ( parseInt($('#' + idProducto + ' .total').text()) / cantidadVieja );

                    $('#' + idProducto + ' .total').text((data * precioActual));


                    $('#totalTotal').text(parseInt($('#totalTotal').text()) + precioActual);

                  }         
                  });
                  e.preventDefault(); 



                });


                $(".menos").submit(function(e) {

                    var formObj = $(this);
                    var formURL = formObj.attr("action");
                    var formData = new FormData(this);

                    var idProducto = formObj.attr("name");



                    $.ajax({
                    url: formURL,
                    type: 'POST',
                    data: {idProducto : idProducto},
                    mimeType:"multipart/form-data",
                    success: function(data)
                    {


                        if(parseInt(data)==0){

                            $('#totalTotal').text(parseInt($('#totalTotal').text()) - parseInt($('#' + idProducto + ' .precioActual').text()));

                            $('#' + idProducto + ' .cantidad').text("Cantidad: 0");

                            $('#' + idProducto + ' .total').text("0");

                            $('#' + idProducto + ' .mas').remove();

                            $('#' + idProducto + ' .menos').remove();

                            $('#' + idProducto + ' .card-body').append("<div class='card-footer'>Producto eliminado del Carrito</div>");

                            $('#' + idProducto).attr("class", "card text-white bg-danger mb-3");


                            


                        }else{

                            $('#' + idProducto + ' .cantidad').text('Cantidad: ' + data);

                            var cantidadVieja = (parseInt(data) + 1);

                            var precioActual = ( parseInt($('#' + idProducto + ' .total').text()) / cantidadVieja );

                            $('#' + idProducto + ' .total').text((data * precioActual));


                            $('#totalTotal').text(parseInt($('#totalTotal').text()) - precioActual);

                        }

                        

                       

                    }         
                    });
                    e.preventDefault(); 



                    });




        });
    </script>




    <div class="container-fluid">

        <div class="row">

            <div class="col-sm">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="index.php"><img class="d-inline-block align-center" id="logo" src="fotos/logo.png" alt="logo"><span id="titulo" class="navbar-brand mb-0 h1">TIENDA DE ROPA</span></a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                  <span class="navbar-toggler-icon"></span>
                                </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="hombres.php">HOMBRES</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="mujeres.php">MUJERES</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="todo.php">TODOS LOS PRODUCTOS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="ofertas.php">OFERTAS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">SOBRE NOSOTROS</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="micuenta.php"><i class="fas fa-user-alt"></i></a>
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
                            </li>

                        </ul>
                        <form action="buscar.php" id="buscarForm" method="POST" class="form-inline my-2 my-lg-0">
                            <input maxlength="255" autocomplete="off" name="busqueda" id="busqueda" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">BUSCAR</button>
                        </form>
                    </div>
                </nav>

            </div>

        </div>


        <!-- <div class="row">

                            <div class="col-sm">




                              






                        </div>

                      </div>  -->


        <hr>






        <div class="row">

            <div class="col-sm">




                <h1 style="text-align: center; margin-top: 20px;">CARRITO</h1>

                <hr>






            </div>

        </div>







        <div class="row">

            <div class="col-sm">


                <!-- <div class="card" style="width: 18rem;">
                    <img src="https://content.ib2c.com.ar/224/products/329678_1100x1500.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">SWEATER CUELLO REDONDO MOULINE</h5>
                        <p class="card-text">Disponibilidad: Con stock</p>
                        <p class="card-text">Talle: XXL</p>
                        <p class="card-text">Unidad: $ 6.000,00</p>
                        <p class="card-text">Cantidad: 2 </p>
                        <p class="card-text">Total: $ 12.000,00</p>
                        <a href="#" class="btn btn-success">+</a>
                        <a href="#" class="btn btn-danger">-</a>
                    </div>
                </div> -->


                <?php





                if(isset($_SESSION['username'])){


                    include('config.php');

                    $yo = $_SESSION['username'];

                    
                    $sql = "select * from productos where id in (select idProducto from carrito where email='".$yo."')";
                    $result = mysqli_query($con,$sql);

                    $row_cnt = mysqli_num_rows($result);


                    $f=0;

                    $total = 0;





                    while($row01 = mysqli_fetch_array($result)){



                            if(($f==0) || ($f%4==0)){

                                    echo "<div class='row'>";

                                    $limite = $f + 3;

                                    

                            }



                                $sql2 = "select * from carrito where idProducto='".$row01['id']."' and email='".$yo."'";
                                $result2 = mysqli_query($con,$sql2);
                                $row02 = mysqli_fetch_array($result2);

                                $talle = $row02['talle'];

                                $cantidad = $row02['cantidad'];

                                echo '

                                <div class="col-sm">
                                
                                

                                        <div id="' . $row01['id'] . '" class="card" style="width: 18rem;">
                                        <a href="producto.php?g=h&id=' . $row01['id'] . '"><img src="' . $row01['foto1'] . '" class="card-img-top"></a>
                                        <div class="card-body">
                                                <h5 class="card-title">' . $row01['nombre'] . '</h5>
                                                <p class="card-text">Disponibilidad: Con stock</p>
                                                <p class="card-text talle">Talle: ' . $talle . '</p>
                                                <p class="card-text unidad">Unidad: $<strong class="precioActual">' . $row01['precioActual'] . '</strong></p>
                                                <p class="card-text cantidad">Cantidad: ' . $cantidad . '</p>
                                                <p class="card-text">Total: $ <b class="total">' . ($cantidad * $row01['precioActual']) . '</b></p>
                                                <form name="' . $row01['id'] . '" class="mas" method="post" action="mas.php">
                                                    <button type="submit" class="btn btn-success btn-lg btn-block">+</button>
                                                </form>
                                                <form name="' . $row01['id'] . '" class="menos" method="post" action="menos.php">
                                                    <button type="submit" class="btn btn-danger btn-lg btn-block">-</button>
                                                </form>
                                            </div>
                                        </div>
                                
                                </div>';


                            if(($f==$limite)){

                                    echo "</div>"; 

                            }



                            if(($row_cnt-$f)==1){


                                    for($i = 0; $i < ($limite - $f) ; $i++ ){

                                            echo '<div class="col-sm"></div>';


                                    }

                                    if($f <> $limite){
                                            echo "</div>"; 
                                    }


                            }






                            $f = $f + 1;


                            $total = $total + ($cantidad * $row01['precioActual']);




                    }


                }else{
                    echo '<h6 style="text-align: center;">Inicie sesión para visualizar su carrito y comprar los productos.</h6>';
                    $total='0';
                }










                ?>






            </div>


            

        </div>

        <hr>


        <div class="row">

            <div class="col-sm"></div>

            <div class="col-sm">

            <?php




            if(isset($_SESSION['username'])){

                echo '

                            <h3 style="text-align: center;">Total: $<b id="totalTotal">' . $total . ' </b></h3>


                            <br>


                            <a style="color:white; background-color: olivedrab;" href="#" class="btn btn-lg btn-block">COMPRAR</a>';



            }


                
                ?>
            </div>

            <div class="col-sm"></div>

        </div>





        <div style="margin-top: 10px;" id="footer" class="row">

            <div style="color:white; height: 200px; background-color: rgb(34, 34, 34);" class="col-sm">


                <div class="row">


                    <div class="col-sm">



                        <h5 style="margin-top: 20px;">Redes Sociales</h5>

                        <a style="text-decoration: none; color: white;" href="#"><i style="margin-right: 20px;" class="fab fa-facebook-square"></i></a>

                        <a style="text-decoration: none; color: white;" href="#"><i class="fab fa-instagram"></i></a>






                    </div>

                    <div class="col-sm">


                        <h5 style="margin-top: 20px;">Politicas</h5>

                        <ul style="list-style: none;">

                            <a style="text-decoration: none; color: white;" href="#">
                                <li>

                                    Política de Privacidad


                                </li>
                            </a>

                            <a style="text-decoration: none; color: white;" href="#">
                                <li>


                                    Términos y Condiciones


                                </li>
                            </a>

                            <a style="text-decoration: none; color: white;" href="#">
                                <li>

                                    Contacto


                                </li>
                            </a>

                            <a style="text-decoration: none; color: white;" href="#">
                                <li>

                                    Preguntas Frecuentes


                                </li>
                            </a>


                        </ul>



                    </div>


                </div>














            </div>


            <div style="color:white; height: 200px; background-color: rgb(34, 34, 34);" class="col-sm">




                <img style="margin-top: 20px;" src="https://cdn.shopify.com/s/files/1/0058/9276/7855/files/formasdepago2.jpg" alt="">


                <a style="text-decoration: none; color: white;" href="#">
                    <p>© 2019 Moon Store</p>
                </a>











            </div>

        </div>










    </div>




</body>

</html>
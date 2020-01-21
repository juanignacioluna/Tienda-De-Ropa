<?php


session_start();



if(isset($_SESSION['username'])){

    $yo = $_SESSION['username'];

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
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

            $(document).ready(function(){

                                /*
                      Carousel
                  */
                  $('#carousel-example').on('slide.bs.carousel', function (e) {
                      /*
                          CC 2.0 License Iatek LLC 2018 - Attribution required
                      */
                      var $e = $(e.relatedTarget);
                      var idx = $e.index();
                      var itemsPerSlide = 5;
                      var totalItems = $('.carousel-item').length;
                  
                      if (idx >= totalItems-(itemsPerSlide-1)) {
                          var it = itemsPerSlide - (totalItems - idx);
                          for (var i=0; i<it; i++) {
                              // append slides to end
                              if (e.direction=="left") {
                                  $('.carousel-item').eq(i).appendTo('.carousel-inner');
                              }
                              else {
                                  $('.carousel-item').eq(0).appendTo('.carousel-inner');
                              }
                          }
                      }
                  });




                  $('#mujer').hover(function(){
                      $(this).attr('src','https://content.ib2c.com.ar/224/products/319897_1100x1500.jpg'); 
                  },function(){
                    $(this).attr('src','https://content.ib2c.com.ar/224/products/319894_1100x1500.jpg');
                  });


                  $('#hombre').hover(function(){
                      $(this).attr('src','https://content.ib2c.com.ar/224/products/328128_1100x1500.jpg'); 
                  },function(){
                    $(this).attr('src','https://content.ib2c.com.ar/224/products/328127_1100x1500.jpg');
                  });






            });
            
    
    
    
    
    
    
    </script>


    

         <div class="container-fluid">

                <div class="row">

                        <div class="col-sm">

                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                <a class="navbar-brand" href="index.php"><img class="d-inline-block align-center" id="logo" src="fotos/logo.png" alt="logo" ><span id="titulo" class="navbar-brand mb-0 h1">TIENDA DE ROPA</span></a>
                                
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

                                        <li class="nav-item">
                                                <a class="nav-link" href="carrito.php"><i class="fas fa-shopping-cart"></i></a>
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


                      <?php


                        $id=$_GET['id'];

                        $g = $_GET['g'];

                        switch ($g) {
                          case 'h':
                              $volver="hombres.php";
                              break;
                          case 'm':
                              $volver="mujeres.php";
                              break;
                          case 't':
                              $volver="todo.php";
                              break;
                          case 'of':
                              $volver="ofertas.php";
                              break;
                          case 'i':
                              $volver="index.php";
                              break;
                      }


                        include('config.php'); 

                        mysqli_set_charset($con,'utf8');

                        $sql_query = "select * from productos where id='".$id."'";
                        $result = mysqli_query($con,$sql_query);
                        $row = mysqli_fetch_array($result);

                        // $nombreCompleto = $row[0];


                        if(is_null($row['descripcion'])){


                          $desc='';


                        }else{

                          $desc='<p style="margin-top: 35px;">DESCRIPCIÓN:</p>

                          <p style="margin-top: 15px;">'. $row['descripcion'] .'</p>';

                        }



                        include('config.php'); 


                    if(isset($_SESSION['username'])){

                        $sql_query3 = "select count(*) as cntUser from carrito where idProducto='".$id."' and email='".$yo."'";
                        $result3 = mysqli_query($con,$sql_query3);
                        $row3 = mysqli_fetch_array($result3);
                        $count3 = $row3['cntUser'];


                        if($count3 > 0){


                          $carritoState="disabled";


                        }else{

                          $carritoState="";

                        }




                        $sql_query2 = "select count(*) as cntUser from wishlist where idProducto='".$id."' and email='".$yo."'";
                        $result2 = mysqli_query($con,$sql_query2);
                        $row2 = mysqli_fetch_array($result2);
                        $count2 = $row2['cntUser'];


                        if($count2 > 0){


                          $wishlistState="disabled";


                        }else{

                          $wishlistState="";
                          
                        }



                      }



                      if(isset($_SESSION['username'])){



                        $carritoTalleWishlist='<div class="row">


                        <div class="col-sm">

                        <form method="post" action="agregarCarrito.php?id='.$id.'">

                                <select name="talle" style="margin-top: 30px;" id="inputState" class="form-control">
                                        <option selected>Selecciona un talle</option>
                                        <option>S</option>
                                        <option>M</option>
                                        <option>L</option>
                                        <option>XL</option>
                                </select>


                        </div>


                    </div>


                    <div class="row">


                        <div class="col-sm">

                                <button style="margin-top: 25px;" type="submit" class="btn btn-success" '.$carritoState.'>AGREGAR AL CARRITO</button>

                                </form>

                                <form method="post" action="agregarDeseo.php?id='.$id.'&g='.$g.'">

                                  <button style="margin-top: 25px;" type="submit" class="btn btn-info" '.$wishlistState.'>AGREGAR A WISHLIST</button>

                                </form>
                        </div>


                    </div>';

                            


                      }else{

                        $carritoTalleWishlist="";

                      }
                        

                        







                        


                      echo '



                                    

                                    <a style="margin-bottom:10px;" class="btn btn-secondary" href="'. $volver .'" role="button"><i class="fas fa-arrow-left"></i>VOLVER</a>




                                    <div class="row">


                                    


                                          <div class="col-sm-7 col-md-3">


                                                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                          <ol class="carousel-indicators">
                                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                          </ol>
                                                          <div class="carousel-inner" id="productoSlide">
                                                            <div class="carousel-item active">
                                                              <img style="height:475px;" src="'. $row['foto1'] .'" class="d-block w-100" alt="...">
                                                            </div>
                                                            <div class="carousel-item">
                                                              <img style="height:475px;" src="'. $row['foto2'] .'" class="d-block w-100" alt="...">
                                                            </div>
                                                            <div class="carousel-item">
                                                              <img style="height:475px;" src="'. $row['foto3'] .'" class="d-block w-100" alt="...">
                                                            </div>
                                                          </div>
                                                          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                          </a>
                                                          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                          </a>
                                                        </div>







                                              </div>

                                              

                                              


                                              <div class="col-sm-4 col-md-6">


                                                      <div class="row">


                                                              <div class="col-sm">

                                                                  <p style="margin-bottom: 25px; font-weight: 700;">'. $row['nombre'] .'</p>


                                                                      
                                                                        



                                                              </div>


                                                              <div class="col-sm">

                                                                      <p style="text-align: center; font-weight: 700;">$'. $row['precioActual'] .'</p>





                                                              </div>

                                                      </div>

                                                      <div class="row">


                                                        <div class="col-sm">


                                                                '. $desc .'

                                                                


                                                        </div>


                                                    </div>


                                                    ' . $carritoTalleWishlist . '

                                                              



                                                  
                                              </div>

                                              <div class="col-sm-auto col-md-3">



                                              <h6>Cambios y Devoluciones:</h6>
                                              <p>Al hacer tu compra en línea tienes 30 días naturales a partir de que se genere tu pedido para solicitar un cambio.
                                              Por el momento no realizamos devoluciones. Para más información consulta nuestros términos y condiciones. </p>



                                              <p><i class="fas fa-tshirt"></i> Un cambio gratis.</p>


                                              <p><i class="fas fa-lock"></i> Tu compra e información es 100% segura.</p>
                                              

                                              <p><i class="fas fa-globe-americas"></i> Enviós a todo Latinoamérica.</p>
                                              
                                              
                                              
                                              </div>

                                          </div>';




                            ?>








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

                                        <a style="text-decoration: none; color: white;" href="#"><li>

                                              Política de Privacidad


                                          </li></a>

                                          <a style="text-decoration: none; color: white;" href="#"><li>


                                              Términos y Condiciones

                                            
                                          </li></a>

                                          <a style="text-decoration: none; color: white;" href="#"><li>

                                              Contacto

                                            
                                          </li></a>

                                          <a style="text-decoration: none; color: white;" href="#"><li>

                                              Preguntas Frecuentes

                                            
                                          </li></a>


                                    </ul>



                                </div>


                          </div>


                          




                          






                    </div>


                    <div style="color:white; height: 200px; background-color: rgb(34, 34, 34);" class="col-sm">




                      <img style="margin-top: 20px;" src="https://cdn.shopify.com/s/files/1/0058/9276/7855/files/formasdepago2.jpg" alt="">


                      <a style="text-decoration: none; color: white;" href="#"><p>© 2019 Moon Store</p></a>




                          






                    </div>

                  </div>







                      


        </div> 

        

    
</body>
</html>
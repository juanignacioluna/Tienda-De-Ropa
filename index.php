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
                                <a class="navbar-brand" href="#"><img class="d-inline-block align-center" id="logo" src="fotos/logo.png" alt="logo" ><span id="titulo" class="navbar-brand mb-0 h1">TIENDA DE ROPA</span></a>
                                
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

                <div class="row">

                        <div class="col-sm">


                                <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">

                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                      </ol> 
                                        <div class="carousel-inner">
                                          <div class="carousel-item active" data-interval="5000">
                                            <img src="fotos/slide6.jpg" class="d-block w-100" alt="...">
                                          </div>
                                          <div class="carousel-item" data-interval="5000">
                                            <img src="fotos/slide22.jpg" class="d-block w-100" alt="...">
                                          </div>
                                          <div class="carousel-item" data-interval="5000">
                                            <img src="fotos/slide5.jpg" class="d-block w-100" alt="...">
                                          </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                          <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                          <span class="sr-only">Next</span>
                                        </a>
                                      </div>



                            </div>

                        </div> 

                         <!-- <div class="row">

                            <div class="col-sm">




                              






                        </div>

                      </div>  -->

                      <hr>


                      <h5 style='margin-bottom: 40px;'>LOS MAS VENDIDOS: </h5>

                      



                        <div class="top-content">
                            <div class="container-fluid">
                                <div id="carousel-example" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                                        <div class="card" style="width: 18rem;">
                                                <a href="producto.php?g=i&id=29"><img src="https://content.ib2c.com.ar/224/products/327809_1100x1500.jpg" class="card-img-top"></a>
                                                <div class="card-body">
                                                  <h5 class="card-title">Camisa poplin con lycra estampada</h5>
                                                  <p class="card-text">$4900</p>
                                                  <a href="producto.php?g=i&id=29" class="btn btn-success">Ver el producto</a>
                                                </div>
                                              </div>
                                        </div>
                                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card" style="width: 18rem;">
                                                <a href="producto.php?g=i&id=5"><img src="https://content.ib2c.com.ar/224/products/318129_1100x1500.jpg" class="card-img-top"></a>
                                                <div class="card-body">
                                                  <h5 class="card-title">Bikini Melange</h5>
                                                  <p class="card-text">$7200</p>
                                                  <a href="producto.php?g=i&id=5" class="btn btn-success">Ver el producto</a>
                                                </div>
                                              </div>
                                        </div>
                                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card" style="width: 18rem;">
                                                <a href="producto.php?g=i&id=43"><img src="https://content.ib2c.com.ar/224/products/318134_1100x1500.jpg" class="card-img-top"></a>
                                                <div class="card-body">
                                                  <h5 class="card-title">Bikini pique</h5>
                                                  <p class="card-text">$7200</p>
                                                  <a href="producto.php?g=i&id=43" class="btn btn-success">Ver el producto</a>
                                                </div>
                                              </div>
                                        </div>
                                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card" style="width: 18rem;">
                                                <a href="producto.php?g=i&id=59"><img src="https://content.ib2c.com.ar/224/products/319189_1100x1500.jpg" class="card-img-top"></a>
                                                <div class="card-body">
                                                  <h5 class="card-title">Pantalon pijama corto seda lavada</h5>
                                                  <p class="card-text">$20500</p>
                                                  <a href="producto.php?g=i&id=59" class="btn btn-success">Ver el producto</a>
                                                </div>
                                              </div>
                                        </div>
                                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                <div class="card" style="width: 18rem;">
                                                <a href="producto.php?g=i&id=32"><img src="https://content.ib2c.com.ar/224/products/276854_1100x1500.jpg" class="card-img-top"></a>
                                                <div class="card-body">
                                                  <h5 class="card-title">Bota combinada picada</h5>
                                                  <p class="card-text">$17500</p>
                                                  <a href="producto.php?g=i&id=32" class="btn btn-success">Ver el producto</a>
                                                </div>
                                              </div>                                        </div>
                                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card" style="width: 18rem;">
                                                <a href="producto.php?g=i&id=46"><img src="https://content.ib2c.com.ar/224/products/316726_1100x1500.jpg" class="card-img-top"></a>
                                                <div class="card-body">
                                                  <h5 class="card-title">Musculosa lino spray</h5>
                                                  <p class="card-text">$3920</p>
                                                  <a href="producto.php?g=i&id=46" class="btn btn-success">Ver el producto</a>
                                                </div>
                                              </div>                                        </div>
                                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card" style="width: 18rem;">
                                                <a href="producto.php?g=i&id=47"><img src="https://content.ib2c.com.ar/224/products/344637_1100x1500.jpg" class="card-img-top"></a>
                                                <div class="card-body">
                                                  <h5 class="card-title">Bolso lino</h5>
                                                  <p class="card-text">$5880</p>
                                                  <a href="producto.php?g=i&id=47" class="btn btn-success">Ver el producto</a>
                                                </div>
                                              </div>                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>


                        <hr>



                        <div class="row">



                                    
                                


                                    <div class="col-0 col-sm-0 col-md-4 col-lg-3"></div>



                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center">


                                      
                                          
                                        
                                      

                                            <a href="mujeres.php"><img id="mujer" src="https://content.ib2c.com.ar/224/products/319894_1100x1500.jpg" class="img-fluid mx-auto d-block" alt="img8"></a>
                                            <div class="caption">
                                                <p>Colección de Mujeres</p>
                                            </div>



                                      </div>

                                    
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center">


                                        
                                          <a href="hombres.php"><img id="hombre" src="https://content.ib2c.com.ar/224/products/328127_1100x1500.jpg" class="img-fluid mx-auto d-block" alt="img8"></img></a>
                                    
                                        <div class="caption">
                                            <p>Colección de Hombres</p>
                                        </div>
                                    
                                    
                                    
                                      </div>




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
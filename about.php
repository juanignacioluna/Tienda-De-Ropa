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
                                        <li class="nav-item active">
                                                <a class="nav-link" href="#">SOBRE NOSOTROS</a>
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






                        <div class="row">

                            <div class="col-sm">




                                <div class="jumbotron jumbotron-fluid">
                                        <div class="container">
                                            <h1 style="text-align: center;" class="display-4">SOBRE NOSOTROS</h1>
                                            <p style="text-align: justify; text-justify: inter-word;" class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                                        </div>
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
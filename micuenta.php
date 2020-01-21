<?php

session_start();

if(isset($_SESSION['username']))
{

        $yo=$_SESSION['username'];

        include('config.php'); 
                              
        $sql_query = "select * from usuarios where email='".$yo."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);
        
        $nombre = $row['nombre'];

        
        

        $body='





        



        <div id="p2">
        
        <h1 style="text-align: center; margin-top: 20px;">Mi Cuenta</h1>

        <hr>

        <div class="row">
        
        <div class="col-sm">


        <h5>Bienvenido/a '.$nombre.'</h5>

        <p>Esta es su cuenta. Hacé click en las siguientes secciones para gestionar tu información personal, ver tús órdenes y cerrar sesión.</p>

        


        </div>


        </div>





        <div class="row">

        <div class="col-1 col-md-3"></div>
        
        <div class="col-10 col-md-6">

              <div class="list-group">

                  <a onclick="personal()" href="#" class="list-group-item list-group-item-action list-group-item-dark">


                    <b><h5>Información personal</h5></b> 
                    
                    Si deseas ver/modificar tus datos personales, por favor ingresa aquí.


                  </a>
                  <a onclick="wishlist()" href="#" class="list-group-item list-group-item-action list-group-item-dark">

                  
                    <b><h5>Mi Wishlist</h5></b> 
                    
                    Ingresa aquí para ver tus productos en la wishlist


                  </a>

                  <a href="carrito.php" class="list-group-item list-group-item-action list-group-item-dark">

                  
                  <b><h5>Mi Carrito</h5></b> 
                  
                  Ingresa aquí para ver tus productos en el carrito


                </a>

                  <a href="#" class="list-group-item list-group-item-action list-group-item-dark disabled">


                  <b><h5>Mis órdenes</h5></b> 
                  
                  Ingresa aquí para ver tu historial de pedidos y ver en que estado se encuentran tus órdenes


                  </a>
                  <a href="logout.php" class="list-group-item list-group-item-action list-group-item-danger">

                  
                    <b><h5>Cerrar sesión</h5></b> 
                    
                    Hacé click aquí si deseas salir de tu cuenta


                  </a>

                  <a href="eliminarCuenta.php" class="list-group-item list-group-item-action list-group-item-danger">

                  
                    <b><h5>Cancelar cuenta</h5></b> 
                    
                    Eliminar mi cuenta


                  </a>

              </div>



        </div>

        <div class="col-1 col-md-3"></div>


        </div>

        
        
        
        
        
        
        
        
        
        
        
        
        
        <br>

        
        
        
        
        </div>
        
        
        
        
        
        
        
        
        ';

}
else
{
        // header("location:index.php");


        $body='  
        
        <div id="p2">
        
        <h1 style="text-align: center; margin-top: 20px;">Iniciar Sesión</h1>

        <hr>

        <div class="row">
        
        <div class="col-sm">




        <form method="post" action="iniciar.php">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input name="clave" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-dark">Iniciar Sesión</button>
      </form>               






        </div>

        <div class="col-sm">




                  <h6 style="margin-top: 5px;">¿No tenés cuenta?</h6>  
                  
                  
                  <p>Introduce tu dirección de correo electrónico, completa el formulario y disfruta de los beneficios de tener una cuenta.</p>


                  <button onclick="registrarse()" id="registrarse" class="btn btn-dark">Registrarse</button>







        </div>

        </div></div>
        
        
        
        ';


}




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



            function wishlist() {


              $.ajax({
                  url: 'obtenerWishlist.php',
                  type: 'POST',
                  mimeType:"multipart/form-data",
                  success: function(data)
                  {

                    $('#p2').remove();


                    $('#p1').append(data);

                  }         
                  });
                  e.preventDefault(); 



            // var wishlist =' <div id="p2"> <h1 style="text-align: center; margin-top: 20px;">Lista de deseos</h1> <hr> <a style="margin-bottom:20px;" class="btn btn-secondary" href="micuenta.php" role="button"><i class="fas fa-arrow-left"></i>VOLVER</a> <div class="row"> <div class="col-sm"> <div class="card" style="width: 18rem;"> <img src="https://content.ib2c.com.ar/224/products/329678_1100x1500.jpg" class="card-img-top" alt="..."> <div class="card-body"> <h5 class="card-title">SWEATER CUELLO REDONDO MOULINE</h5> <p class="card-text">Disponibilidad: Con stock</p> <p class="card-text">Talle: XXL</p> <p class="card-text">Unidad: $ 6.000,00</p> <p class="card-text">Cantidad: 2 </p> <p class="card-text">Total: $ 12.000,00</p> <a href="#" class="btn btn-success">+</a> <a href="#" class="btn btn-danger">-</a> <a href="#" class="btn btn-dark">Agregar al Carrito</a> </div> </div> </div> <div class="col-sm"> <div class="card" style="width: 18rem;"> <img src="https://content.ib2c.com.ar/224/products/329678_1100x1500.jpg" class="card-img-top" alt="..."> <div class="card-body"> <h5 class="card-title">SWEATER CUELLO REDONDO MOULINE</h5> <p class="card-text">Talle: XXL</p> <p class="card-text">Unidad: $ 6.000,00</p> <p class="card-text">Cantidad: 2 </p> <p class="card-text">Total: $ 12.000,00</p> <a style="margin-bottom:10px;" href="#" class="btn btn-success">Agregar 1 Unidad</a> <a href="#" class="btn btn-danger">Eliminar 1 Unidad</a> </div> </div> </div> <div class="col-sm"> <div class="card" style="width: 18rem;"> <img src="https://content.ib2c.com.ar/224/products/329678_1100x1500.jpg" class="card-img-top" alt="..."> <div class="card-body"> <h5 class="card-title">SWEATER CUELLO REDONDO MOULINE</h5> <p class="card-text">Talle: XXL</p> <p class="card-text">Unidad: $ 6.000,00</p> <p class="card-text">Cantidad: 2 </p> <p class="card-text">Total: $ 12.000,00</p> <a style="margin-bottom:10px;" href="#" class="btn btn-success">Agregar 1 Unidad</a> <a href="#" class="btn btn-danger">Eliminar 1 Unidad</a> </div> </div> </div> <div class="col-sm"> <div class="card" style="width: 18rem;"> <img src="https://content.ib2c.com.ar/224/products/329678_1100x1500.jpg" class="card-img-top" alt="..."> <div class="card-body"> <h5 class="card-title">SWEATER CUELLO REDONDO MOULINE</h5> <p class="card-text">Talle: XXL</p> <p class="card-text">Unidad: $ 6.000,00</p> <p class="card-text">Cantidad: 2 </p> <p class="card-text">Total: $ 12.000,00</p> <a style="margin-bottom:10px;" href="#" class="btn btn-success">Agregar 1 Unidad</a> <a href="#" class="btn btn-danger">Eliminar 1 Unidad</a> </div> </div> </div> </div> </div>';

            // $('#p2').remove();

            // $('#p1').append(wishlist);




            }
            
            function registrarse() {


                var registro=' <div id="p2"> <h1 style="text-align: center; margin-top: 20px;">Registrarse</h1> <hr> <div class="row"> <div class="col-2"></div> <div class="col-8"> <form action="registro.php" method="post"> <div class="form-group"> <label>Nombre Completo</label> <input name="nombre" type="text" class="form-control" placeholder="Nombre Completo"> </div> <div class="form-group"> <label>Email</label> <input name="email" type="email" class="form-control" placeholder="Email"> </div> <div class="form-group"> <label>DNI</label> <input name="dni" type="text" class="form-control" placeholder="DNI"> </div> <div class="form-group"> <label>Cumpleaños</label> <input name="cumple" type="date" class="form-control" placeholder="Cumpleaños"> </div> <div class="form-group"> <label>Password</label> <input name="clave" type="password" class="form-control" placeholder="Password"> </div> <button type="submit" class="btn btn-dark btn-lg">Registrarse</button> </form> <br> <button onclick="iniciar()" id="iniciar" class="btn btn-secondary">Iniciar Sesion</button> </div> <div class="col-2"></div> </div>';


                $('#p2').remove();

                $('#p1').append(registro);




            }




            function iniciar() {


                var is =' <div id="p2"> <h1 style="text-align: center; margin-top: 20px;">Iniciar Sesión</h1> <hr> <div class="row"> <div class="col-sm"> <form> <div class="form-group"> <label for="exampleInputEmail1">Email address</label> <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> </div> <div class="form-group"> <label for="exampleInputPassword1">Password</label> <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> </div> <button type="submit" class="btn btn-dark">Iniciar Sesión</button> </form> </div> <div class="col-sm"> <h6 style="margin-top: 5px;">¿No tenés cuenta?</h6> <p>Introduce tu dirección de correo electrónico, completa el formulario y disfruta de los beneficios de tener una cuenta.</p> <button onclick="registrarse()" id="registrarse" class="btn btn-dark">Registrarse</button> </div> </div></div>';

                            

                $('#p2').remove();


                $('#p1').append(is);




            }


            function personal() {

                $.ajax({
                  url: 'obtenerDatosPersonales.php',
                  type: 'POST',
                  mimeType:"multipart/form-data",
                  success: function(data)
                  {

                    $('#p2').remove();


                    $('#p1').append(data);

                  }         
                  });
                  e.preventDefault(); 





            }









            $(document).ready(function(){


              






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

                                        <li class="nav-item active">
                                                <a class="nav-link" href="#"><i class="fas fa-user-alt"></i></a>
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


                      




                        <div id="p1">

                        

                        <?php


                        echo $body;


                        ?>



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
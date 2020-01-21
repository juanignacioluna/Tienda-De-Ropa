<?php

session_start();

if (isset($_SESSION['username'])){

  $yo = $_SESSION['username'];
  
}



require('config.php');


$consultaBusqueda = $_POST['busqueda'];

$mensaje = "";


if (isset($consultaBusqueda)) {

	$consulta = mysqli_query($con, "SELECT * FROM productos WHERE nombre like '%$consultaBusqueda%' or descripcion like '%$consultaBusqueda%' or tipo like '%$consultaBusqueda%'");


	if (!$consulta || mysqli_num_rows($consulta) == 0) {
		$mensaje = "<p>Sin resultados...</p>";
	} else {


        $row_cnt = mysqli_num_rows($consulta);

        $filas = ceil($row_cnt / 4);


        $f=0;

        
        while($row01 = mysqli_fetch_array($consulta)){



            if(($f==0) || ($f%4==0)){

                $mensaje .= "<div class='row'>";

                    $limite = $f + 3;

                    

            }



                    




            $mensaje .= '

                    <div class="col-sm">
                    
                    
                            <div class="card" style="width: 18rem;">
                            <a href="producto.php?g=of&id=' . $row01['id'] . '"><img src="' . $row01['foto1'] . '" class="card-img-top"></a>
                            <div class="card-body">
                            <p class="card-text">'. $row01['nombre'] . '</p>
                            <b>$'. $row01['precioActual'] .'</b>
                            </div>
                            </div>
                    
                    </div>';


                    






            if(($f==$limite)){

                $mensaje .= "</div>"; 

            }



            if(($row_cnt-$f)==1){


            for($i = 0; $i < ($limite - $f) ; $i++ ){

                $mensaje .= '<div class="col-sm"></div>';


            }

            if($f <> $limite){
                $mensaje .= "</div>"; 
            }


            }






            $f = $f + 1;


    

    }

	}; 

}else{
    header("location:index.php");
};




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
                                                <a class="nav-link" href="#">OFERTAS</a>
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




                              <h1 style="text-align: center; margin-top: 20px;">LISTA DE RESULTADOS: </h1>






                        </div>

                      </div>


        
        
                                <hr>


                            







                                                <div class="row">


                                                        <div class="col-sm">




                                                        <div id="p1">
                                                                <div id="p">


                                                                                <?php


                                                                                    echo $mensaje;


                                                                                ?>




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



<?php

session_start();

$yo = $_SESSION['username'];

include('config.php');


echo '



<div id="p2">
<h1 style="text-align: center; margin-top: 20px;">Lista de deseos</h1>
<hr>
<a style="margin-bottom:20px;" class="btn btn-secondary" href="micuenta.php" role="button"><i class="fas fa-arrow-left"></i>VOLVER</a> 


<div class="row">


<div class="col-sm">


';

$sql = "select * from productos where id in (select idProducto from wishlist where email='".$yo."')";
$result = mysqli_query($con,$sql);

$row_cnt = mysqli_num_rows($result);


$f=0;



while($row01 = mysqli_fetch_array($result)){



    if(($f==0) || ($f%4==0)){

            echo "<div class='row'>";

            $limite = $f + 3;

            

    }



    $sql_query3 = "select count(*) as cntUser from carrito where idProducto='".$row01['id']."' and email='".$yo."'";
    $result3 = mysqli_query($con,$sql_query3);
    $row3 = mysqli_fetch_array($result3);
    $count3 = $row3['cntUser'];


    if($count3 > 0){


      $carritoState="disabled";


    }else{

      $carritoState="";

    }


    if($row01['genero']=='mujer'){
        $g="m";
    }else{
        $g="h";
    }







        echo '

        <div class="col-sm">
        

                <div class="card" style="width: 18rem;">
                <a href="producto.php?g='.$g.'&id='.$row01['id'].'"><img src="' . $row01['foto1'] . '" class="card-img-top"> </a> 
                <div class="card-body">
                    <h5 class="card-title">' . $row01['nombre'] . '</h5>
                    <p class="card-text">Disponibilidad: Con stock</p>
                    <p class="card-text">$' . $row01['precioActual'] . '</p>
                    <a href="producto.php?g='.$g.'&id='.$row01['id'].'" class="btn btn-dark '.$carritoState.'">Agregar al Carrito</a> 
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




}




// <div class="row">
//    <div class="col-sm">
//       <div class="card" style="width: 18rem;">
//          <img src="https://content.ib2c.com.ar/224/products/329678_1100x1500.jpg" class="card-img-top" alt="..."> 
//          <div class="card-body">
//             <h5 class="card-title">SWEATER CUELLO REDONDO MOULINE</h5>
//             <p class="card-text">Disponibilidad: Con stock</p>
//             <p class="card-text">Talle: XXL</p>
//             <p class="card-text">Unidad: $ 6.000,00</p>
//             <p class="card-text">Cantidad: 2 </p>
//             <p class="card-text">Total: $ 12.000,00</p>
//             <a href="#" class="btn btn-success">+</a> <a href="#" class="btn btn-danger">-</a> <a href="#" class="btn btn-dark">Agregar al Carrito</a> 
//          </div>
//       </div>
//    </div>
//    <div class="col-sm">
//       <div class="card" style="width: 18rem;">
//          <img src="https://content.ib2c.com.ar/224/products/329678_1100x1500.jpg" class="card-img-top" alt="..."> 
//          <div class="card-body">
//             <h5 class="card-title">SWEATER CUELLO REDONDO MOULINE</h5>
//             <p class="card-text">Talle: XXL</p>
//             <p class="card-text">Unidad: $ 6.000,00</p>
//             <p class="card-text">Cantidad: 2 </p>
//             <p class="card-text">Total: $ 12.000,00</p>
//             <a style="margin-bottom:10px;" href="#" class="btn btn-success">Agregar 1 Unidad</a> <a href="#" class="btn btn-danger">Eliminar 1 Unidad</a> 
//          </div>
//       </div>
//    </div>
//    <div class="col-sm">
//       <div class="card" style="width: 18rem;">
//          <img src="https://content.ib2c.com.ar/224/products/329678_1100x1500.jpg" class="card-img-top" alt="..."> 
//          <div class="card-body">
//             <h5 class="card-title">SWEATER CUELLO REDONDO MOULINE</h5>
//             <p class="card-text">Talle: XXL</p>
//             <p class="card-text">Unidad: $ 6.000,00</p>
//             <p class="card-text">Cantidad: 2 </p>
//             <p class="card-text">Total: $ 12.000,00</p>
//             <a style="margin-bottom:10px;" href="#" class="btn btn-success">Agregar 1 Unidad</a> <a href="#" class="btn btn-danger">Eliminar 1 Unidad</a> 
//          </div>
//       </div>
//    </div>
//    <div class="col-sm">
//       <div class="card" style="width: 18rem;">
//          <img src="https://content.ib2c.com.ar/224/products/329678_1100x1500.jpg" class="card-img-top" alt="..."> 
//          <div class="card-body">
//             <h5 class="card-title">SWEATER CUELLO REDONDO MOULINE</h5>
//             <p class="card-text">Talle: XXL</p>
//             <p class="card-text">Unidad: $ 6.000,00</p>
//             <p class="card-text">Cantidad: 2 </p>
//             <p class="card-text">Total: $ 12.000,00</p>
//             <a style="margin-bottom:10px;" href="#" class="btn btn-success">Agregar 1 Unidad</a> <a href="#" class="btn btn-danger">Eliminar 1 Unidad</a> 
//          </div>
//       </div>
//    </div>
// </div>
// </div>




// ';



echo '</div></div>';




?>
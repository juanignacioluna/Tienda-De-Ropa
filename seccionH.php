<?php

include('config.php');


$tipo = $_POST['tipo'];

 
                                                        
$sql = "select * from productos where genero='hombre' and tipo='".$tipo."' order by id desc";
$result = mysqli_query($con,$sql);

$row_cnt = mysqli_num_rows($result);

$filas = ceil($row_cnt / 4);


$f=0;


echo "<div id='p'>";



while($row01 = mysqli_fetch_array($result)){



        if(($f==0) || ($f%4==0)){

                echo "<div class='row'>";

                $limite = $f + 3;

                

        }



                




        if($row01['oferta']==1){

                $green=' style="color: green;"';

                $precioAnterior='<b style="text-decoration:line-through;">$'. $row01['precioAnterior'] .'</b>';
                
            }else{

                $green="";

                $precioAnterior="";

            }




            echo '

            <div class="col-sm">
            
            
                    <div class="card" style="width: 18rem;">
                    <a href="producto.php?g=h&id=' . $row01['id'] . '"><img src="' . $row01['foto1'] . '" class="card-img-top"></a>
                    <div class="card-body">
                    <p class="card-text">'. $row01['nombre'] . '</p>
                    <b'. $green . '>$'. $row01['precioActual'] .'</b>
                    '. $precioAnterior . '
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


echo "</div>";
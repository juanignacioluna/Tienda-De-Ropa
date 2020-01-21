<?php

session_start();

$nombre=$_POST['nombre'];  
$email=$_POST['email'];
$dni=$_POST['dni'];  
$cumple=$_POST['cumple'];
$clave=$_POST['clave'];


include('config.php'); 

$sql_query = "select * from usuarios where email='".$email."' or dni = '".$dni."'";
$result = mysqli_query($con,$sql_query);
$row = mysqli_fetch_array($result);

$row_cnt = mysqli_num_rows($result);
mysqli_free_result($result);



if($row_cnt > 0){

    echo "<script>
    

            function redi(){window.location='micuenta.php';}
            document.write('<font font-size=3em; color=blue>'+'El email o el DNI ya estan siendo utilizados. Espere que lo estamos redirijiendo a la pagina principal...'+'</font>');
            setTimeout('redi()',2000);


          </script>";   

}else{

    include('config.php');

    $sql5 = "insert into usuarios (nombre, email, dni, cumple, clave) values ('$nombre', '$email', '$dni', '$cumple', '$clave')";
    
    if (mysqli_query($con, $sql5)) {}



  echo "<script>

            window.location='micuenta.php';

        </script>"; 


  $_SESSION['username'] = $email;

   
    




  }




?>
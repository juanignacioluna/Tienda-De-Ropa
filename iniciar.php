<?php

session_start();

$email=$_POST['email'];  
$clave=$_POST['clave']; 
include('config.php'); 
                        
$sql_query = "select count(*) as cntUser from usuarios where email='".$email."' and clave='".$clave."'";
$result = mysqli_query($con,$sql_query);
$row = mysqli_fetch_array($result);
$count = $row['cntUser'];


if($count > 0){ 
$_SESSION['username'] = $email;
echo "<script>

            window.location='micuenta.php';


      </script>";     
       }
else{
  echo "
   <script>
   
   function redi(){window.location='micuenta.php';}
   document.write('<font font-size=3em; color=blue>'+'Datos invalidos. Espere que lo estamos redirijiendo a la pagina principal...'+'</font>');
   setTimeout('redi()',1200);


   </script>"; 
  }







?>
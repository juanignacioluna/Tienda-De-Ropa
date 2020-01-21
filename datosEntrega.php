<?php

session_start();

$yo = $_SESSION['username'];

$calle=$_POST['calle'];  
$nro=$_POST['nro'];
$cp=$_POST['cp'];  
$ciudad=$_POST['ciudad'];
$provincia=$_POST['provincia'];


include('config.php');

$sql = "UPDATE usuarios SET calle='".$calle."', nro='".$nro."', codigoPostal='".$cp."', ciudad='".$ciudad."', provincia='".$provincia."' WHERE email='".$yo."'";

if (mysqli_query($con, $sql)) {}



header("location:micuenta.php");






?>
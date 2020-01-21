<?php

session_start();

$yo = $_SESSION['username'];

$nombre=$_POST['nombre'];  
$sexo=$_POST['sexo'];
$dni=$_POST['dni'];  
$cumple=$_POST['cumple'];
$telefono=$_POST['telefono'];


include('config.php');

$sql = "UPDATE usuarios SET nombre='".$nombre."', sexo='".$sexo."', dni='".$dni."', cumple='".$cumple."', telefono='".$telefono."' WHERE email='".$yo."'";

if (mysqli_query($con, $sql)) {}

header("location:micuenta.php");



?>
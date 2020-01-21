<?php


session_start();

$yo = $_SESSION['username'];

$idProducto = $_POST['idProducto'];  


include('config.php');

$sql = "UPDATE carrito SET cantidad = cantidad + 1 WHERE email='".$yo."' and idProducto= ".$idProducto." ";

if (mysqli_query($con, $sql)) {}



$sql2 = "select * from carrito where idProducto ='".$idProducto."' and email ='".$yo."'";
$result2 = mysqli_query($con,$sql2);

$row2 = mysqli_fetch_array($result2);

echo $row2['cantidad'];





?>
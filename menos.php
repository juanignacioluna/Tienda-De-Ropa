<?php


session_start();

$yo = $_SESSION['username'];

$idProducto = $_POST['idProducto'];  


include('config.php');


$sql3 = "select * from carrito where idProducto ='".$idProducto."' and email ='".$yo."'";
$result3 = mysqli_query($con,$sql3);

$row3 = mysqli_fetch_array($result3);

if( $row3['cantidad'] == 1){

    $sql4 = "DELETE from carrito where idProducto ='".$idProducto."' and email ='".$yo."'";

    if (mysqli_query($con, $sql4)) {}

    echo '0';


}else{


    $sql = "UPDATE carrito SET cantidad = cantidad - 1 WHERE email='".$yo."' and idProducto= ".$idProducto." ";

    if (mysqli_query($con, $sql)) {}



    $sql2 = "select * from carrito where idProducto ='".$idProducto."' and email ='".$yo."'";
    $result2 = mysqli_query($con,$sql2);

    $row2 = mysqli_fetch_array($result2);

    echo $row2['cantidad'];


}













?>
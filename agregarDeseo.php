<?php


session_start();

$yo = $_SESSION['username'];

include('config.php');




$g=$_GET['g'];

$id=$_GET['id'];


$sql = "INSERT INTO wishlist (idProducto, email) VALUES ('".$id."', '".$yo."')";

if (mysqli_query($con, $sql)) {}


header("location:producto.php?g=".$g."&id=".$id."");












?>
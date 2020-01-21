<?php

session_start();

$yo = $_SESSION['username'];

include('config.php');




$talle = $_POST['talle'];


$id=$_GET['id'];


$sql = "INSERT INTO carrito (idProducto, email, cantidad, talle) VALUES ('".$id."', '".$yo."', 1, '".$talle."')";

if (mysqli_query($con, $sql)) {}


header("location:carrito.php");











?>
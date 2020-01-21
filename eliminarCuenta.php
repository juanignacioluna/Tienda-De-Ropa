<?php

session_start();

$yo = $_SESSION['username'];

include('config.php');

$sql = "DELETE FROM usuarios WHERE email='".$yo."'";

if (mysqli_query($con, $sql)) {}

header("location:logout.php");
<?php
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'socialNET');

$DB_SERVER ="localhost";
$DB_USERNAME ="root";
$DB_PASSWORD ="";
$DB_NAME ="tiendaropa";

$con = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

if($con === false){
    die("ERROR: No se pudo conectar. " . mysqli_connect_error());
}
?>
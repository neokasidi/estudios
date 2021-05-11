<?php 
$user = "root";
$pass = "";
$host = "localhost";
$bd   = "concesionario";

$mysqli = new mysqli($host,$user,$pass,$bd);

if($mysqli == NULL) {
	echo "ERROR de BASE DE DATOS.";
 }
?>
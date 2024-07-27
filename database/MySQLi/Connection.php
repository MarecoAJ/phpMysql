<?php

$server ="localhost";
$database = "finanzas_php";
$username = "root";
$password = "";

//$mysqli = mysqli_connect($server, $username, $password, $database);

//POO
$mysqli = new mysqli($server, $username, $password, $database);
/*
if(!$mysqli){
     die("Fallo de conexion". mysqli_connect_error());  
}
*/
if($mysqli->connect_errno){
    die("Fallo de conexion: {$mysqli->connect_error}"); 
}

$setnames = $mysqli->prepare("SET NAMES 'utf8'");
$setnames->execute();
?>
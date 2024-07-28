<?php

$server ="localhost";
$database = "finanzas_php";
$username = "root";
$password = "";

$connection = new PDO("mysql:host=$server;dbname=$database", $username, $password);
$setnames = $connection->prepare("SET NAMES 'utf8'");
$setnames->execute();
var_dump($setnames);
?>
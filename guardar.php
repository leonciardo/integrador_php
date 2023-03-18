<?php

include "conexion.php";

$producto = $_POST["producto"];
$cantidad = $_POST["cantidad"];
$precio = $_POST["precio"];
$imagen = $_POST["imagen"];

$conexion = conexiondb();
$conexion -> query ("INSERT INTO `stock`(`producto`, `cantidad`, `precio`, `imagen`) VALUES ('$producto','$cantidad','$precio','$imagen')");

header('location: index.php'); 




?>
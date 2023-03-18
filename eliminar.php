<?php
include 'conexion.php';
$id = $_GET['id'];
$conexion = conexiondb();
$conexion -> query ("DELETE FROM stock WHERE id = '$id'");
header ('location: index.php');
?>
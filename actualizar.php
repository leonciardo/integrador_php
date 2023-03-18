<?php
include 'conexion.php';
$conexion = conexiondb();
$id = $_POST['id'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$imagen = $_POST['imagen'];

$conexion->query("UPDATE `stock` SET `producto`='".$producto."', `cantidad`='".$cantidad."', `precio`='".$precio."', `imagen`='".$imagen."' WHERE `id`='".$id."'");
header('Location: index.php');
?>

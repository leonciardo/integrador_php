<?php

include "conexion.php";

$producto = $_POST["producto"];
$cantidad = $_POST["cantidad"];
$precio = $_POST["precio"];
$nombre_archivo = $_FILES["archivo"]["name"];
$tipo_archivo = $_FILES["archivo"]["type"];

if($tipo_archivo == "image/jpeg"){
    if($nombre_archivo){
        $filename = $_FILES['archivo']['name'];
        $source = $_FILES['archivo']['tmp_name'];

        $directorio = 'imagenes/';

        if(!file_exists($directorio)){
            mkdir($directorio, 0777) or die ('No se pudo crear la carpeta');
        }

        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $fecha = date('dmYHis');
        $timestamp = $fecha;
        $archivo_timestamp = $timestamp.'_'.$filename;

        $target_path = $directorio.$archivo_timestamp;

        if (move_uploaded_file($source, $target_path)){
            echo "El archivo se subió exitosamente";
        } else {
            echo 'No se pudo subir el archivo';
        }

        if ($dir = opendir($directorio)) {
            closedir($dir);
        } else {
            echo "No se pudo cerrar el directorio";
        }
    }
} else {
    echo 'Archivo no admitido, únicamente se admite formato JPEG';
}

$conexion = conexiondb();
$conexion -> query ("INSERT INTO `stock`(`producto`, `cantidad`, `precio`, `imagen`) VALUES ('$producto','$cantidad','$precio','$archivo_timestamp')");

header('location: index.php');

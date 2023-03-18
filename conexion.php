<?php
function conexiondb(){
    $hostname ='localhost';
    $username ='root';
    $password = '';
    $database = 'database';

    $conexion = new mysqli($hostname, $username, $password, $database);
    return $conexion;

}

?>

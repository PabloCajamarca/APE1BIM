<?php
$host = "sql101.infinityfree.com";
$usuario = "if0_42051021";
$password = "lT54ulCLBD65W";
$base_datos = "if0_42051021_ape1b";


$conexion = new mysqli($host, $usuario, $password, $base_datos);

// verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$conexion->set_charset("utf8");
?>


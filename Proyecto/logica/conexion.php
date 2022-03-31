<?php
// Archivo para establecer conexion con la DB

$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "compra_venta";

$conexion = mysqli_connect($host, $usuario, $clave, $bd);
?>
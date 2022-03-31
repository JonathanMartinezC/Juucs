<?php
session_start();
include_once 'conexion.php';

// Datos obtenidos desde index.html mediante el formulario
$email = $_POST['email'];
$password = $_POST['password'];

// Estructura del query para usarlo despues
$queryStructureLogin = 
    "SELECT
        correo,
        contrasenia,
        nom_usuario
    FROM
        usuario
    WHERE
        correo = '$email' AND
        contrasenia = '$password'";

// Se valida la info con la conexion y el query
$validateInfo = mysqli_query($conexion, $queryStructureLogin);

if(mysqli_num_rows($validateInfo) == 1) {
    // Exitoso
    $validateInfoArray = mysqli_fetch_array($validateInfo,MYSQLI_NUM);
    $_SESSION['user'] = $validateInfoArray[2];
    $_SESSION['password'] = $password;
    header("Location: ../site.php");
} else {
    // No encontrado
    echo "Datos no encontrados, le gustaria crear una cuenta?";
    echo "<br>";
    echo "<a href='../registerSite.php'> Si </a>";
    echo "<br> <br>";
    echo "<a href='../index.html'> No </a>";
}
?>
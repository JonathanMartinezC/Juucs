<?php
session_start();
include_once 'conexion.php';
$newName = $_POST['newName'];
$newUser = $_POST['newUser'];
$newEmail = $_POST['newEmail'];
$newPassword = $_POST['newPassword'];

$queryStructureLookForUser = 
"SELECT correo
 FROM usuario
 WHERE correo = '$newEmail'";

$checkIfUserExists = mysqli_query($conexion, $queryStructureLookForUser);

if (mysqli_num_rows($checkIfUserExists) == 0) {
    $queryStructureNewUser = 
    "INSERT INTO usuario (nombre, nom_usuario, correo, contrasenia)
    VALUES ('$newName', '$newUser', '$newEmail', '$newPassword')";

    $insertNewUser = mysqli_query($conexion, $queryStructureNewUser);

    if ($insertNewUser) {
        echo "Registro exitoso";
        echo "<br> <br>";
        echo "<a href='../index.html'> Volver </a>";
    } else {
        echo "Error en los datos. Intentelo nuevamente";
        echo "<br> <br>";
        echo "<a href='../index.html'> Volver </a>";
    }
} else {
    echo "El correo electronico que insertaste ya esta en uso.";
    echo "Intente nuevamente";
    echo "<a href='../index.html'> Volver </a>";
}


?>
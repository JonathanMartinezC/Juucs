<?php
session_start();
$user = $_SESSION['user'];

if (!isset($user)) {
    header("Location: index.html");
} else {
    echo "<h1> Bienvenido, $user </h1>";
    echo "<a href='logica/logout.php'> Cerrar Sesion </a>";
}
?>
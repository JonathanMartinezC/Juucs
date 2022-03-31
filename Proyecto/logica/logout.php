<?php
// Archivo para cerrar, destruir la sesion y redireccionar

session_start();
session_unset();
session_destroy();

header("Location: ../index.html");
?>

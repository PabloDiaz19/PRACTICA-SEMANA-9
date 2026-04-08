<?php
$conexion = new mysqli("localhost", "username", "password", "database");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
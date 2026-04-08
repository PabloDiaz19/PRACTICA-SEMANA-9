<?php
$conexion = mysqli_connect("localhost", "root", "", "pablo") or die("Error de conexión");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM utesa WHERE id_estudiante = $id";
    mysqli_query($conexion, $query) or die("Error al eliminar: " . mysqli_error($conexion));
    mysqli_close($conexion);
    header("Location: index.php");
    exit();
}
?>
<?php
$conexion = mysqli_connect("localhost", "root", "", "pablo") or die("Error d");
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$correo = $_POST['Correo'];
$telefono = $_POST['Telefono'];
$matricula = $_POST['matricula'];
mysqli_query($conexion, "INSERT INTO utesa VALUES (NULL, '$nombre', '$apellido', '$correo', '$telefono', '$matricula')") or die("Error al insertar: " . mysqli_error($conexion));

mysqli_close($conexion);
header("Location: index.php");
exit();
?>




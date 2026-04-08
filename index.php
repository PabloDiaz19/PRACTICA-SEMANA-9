<?php
$conexion = new mysqli("localhost", "root", "", "pablo") or die(mysqli_error($conexion));
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
</head>
<body>

    <h2> Registro de Estudiantes</h2>
    <div class="">
        <form action="insertar.php" method="post">
            <label for="Nombre">Nombre:</label>
            <input type="text" name="Nombre" id="Nombre" placeholder="Nombre Completo">
            <div>
                <label for="Apellido">Apellido:</label>
                <input type="text" name="Apellido" id="Apellido" placeholder="Apellido Completo">
            </div>
            <div>
                <label for="Correo">Correo:</label>
                <input type="text" name="Correo" id="Correo" placeholder="Correo">
            </div>
            <div>
                <label for="Telefono">Telefono:</label>
                <input type="text" name="Telefono" id="Telefono" placeholder="Telefono">
            </div>
            <div>
                <label for="matricula">matricula:</label>
                <input type="text" name="matricula" id="matricula" placeholder="Matrícula">
            </div>
            <div>
                <button type="submit" name="enviar">Registrar</button>
                
            </div>
    
</body>
</html>
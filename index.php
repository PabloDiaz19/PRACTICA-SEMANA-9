<?php
$conexion = mysqli_connect("localhost", "root", "", "pablo") or die("Error d");
$reg = mysqli_query($conexion, "SELECT * FROM utesa") or die("Error al consultar: " . mysqli_error($conexion));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <h1>Estudiantes</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Correo</th>
      <th scope="col">Telefono</th>
      <th scope="col">Matricula</th>
    </tr>
  </thead>
    <tbody>
        <?php 
        $contador = 1;
        while ($row = mysqli_fetch_array($reg)) { 
        ?>

        <tr>
            <th scope="row"><?php echo $contador++; ?></th>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['apellido']; ?></td>
            <td><?php echo $row['correo']; ?></td>
            <td><?php echo $row['telefono']; ?></td>
            <td><?php echo $row['matricula']; ?></td>
            <td>
              <a href="php/registro.php?id=<?php echo $row['id_estudiante']; ?>">Editar</a>
              <a href="estudiantedelete.php?id=<?php echo $row['id_estudiante']; ?>">Eliminar</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

</body>
</html>
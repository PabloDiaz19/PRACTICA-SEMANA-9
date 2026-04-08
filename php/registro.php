<?php
$conexion = mysqli_connect("localhost", "root", "", "pablo") or die("Error de conexión");

$id = isset($_GET['id']) ? $_GET['id'] : null;
$nombre = $apellido = $correo = $telefono = $matricula = '';

if ($id) {
    $query = "SELECT * FROM utesa WHERE id_estudiante = '$id'";
    $result = mysqli_query($conexion, $query) or die("Error al consultar: " . mysqli_error($conexion));
    if ($row = mysqli_fetch_assoc($result)) {
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $correo = $row['correo'];
        $telefono = $row['telefono'];
        $matricula = $row['matricula'];
    }
}

if (isset($_POST['submit'])) {
    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $correo = $_POST['Correo'];
    $telefono = $_POST['Telefono'];
    $matricula = $_POST['matricula'];
    if (isset($_POST['id']) && $_POST['id']) {
        $id = $_POST['id'];
        $query = "UPDATE utesa SET nombre='$nombre', apellido='$apellido', correo='$correo', telefono='$telefono', matricula='$matricula' WHERE id_estudiante='$id'";
    } else {
        $query = "INSERT INTO utesa (nombre, apellido, correo, telefono, matricula) VALUES ('$nombre', '$apellido', '$correo', '$telefono', '$matricula')";
    }
    mysqli_query($conexion, $query) or die("Error al " . ($id ? "actualizar" : "registrar") . ": " . mysqli_error($conexion));
    header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $id ? 'Editar Estudiante' : 'Registro de Estudiante'; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <h1><?php echo $id ? 'Editar Estudiante' : 'Registro de Estudiante'; ?></h1>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre" value="<?php echo htmlspecialchars($nombre); ?>" required>
        </div>
        <div class="mb-3">
            <label for="Apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="Apellido" name="Apellido" value="<?php echo htmlspecialchars($apellido); ?>" required>
        </div>
        <div class="mb-3">
            <label for="Correo" class="form-label">Correo</label>
            <input type="email" class="form-control" id="Correo" name="Correo" value="<?php echo htmlspecialchars($correo); ?>" required>
        </div>
        <div class="mb-3">
            <label for="Telefono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="Telefono" name="Telefono" value="<?php echo htmlspecialchars($telefono); ?>" required>
        </div>
        <div class="mb-3">
            <label for="matricula" class="form-label">Matrícula</label>
            <input type="text" class="form-control" id="matricula" name="matricula" value="<?php echo htmlspecialchars($matricula); ?>" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary"><?php echo $id ? 'Actualizar' : 'Registrar'; ?></button>
        <a href="../index.php" class="btn btn-secondary">Cancelar</a>
    </form>
</body>
</html>
<?php mysqli_close($conexion); ?>
<?php 
require_once ('conexion.php'); 
$id = $_GET['id'];
$reg = mysqli_query($conexion, "SELECT * FROM utesa WHERE id='$id'") or die(mysqli_error($conexion));
mysqli_query($conexion, "DELETE FROM utesa WHERE id='$id'") or die(mysqli_error($conexion));

echo "<script>alert('Registro eliminado exitosamente');</script>";
header("Location: index.php");
?>
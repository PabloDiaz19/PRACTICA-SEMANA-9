<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script>
alert ("Desea eliminar este registro?"); 
window.location.href = "editar.php";
</script>


    <?php 
require_once ('conexion.php');
$id = $_GET['id'];
$reg = mysqli_query($conexion, "SELECT * FROM utesa WHERE id='$id'") or die(mysqli_error($conexion));
mysqli_query($conexion, "DELETE FROM utesa WHERE id='$id'") or die(mysqli_error($conexion));

echo "<script>alert('Registro eliminado exitosamente');</script>";
header("Location: editar.php");
?>



    
</body>
</html>

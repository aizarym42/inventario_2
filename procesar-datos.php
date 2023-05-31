<?php
include("conexion_db.php");

$nombre = $_POST['nombre'];
$nit = $_POST['nit'];
$clave = $_POST['clave'];
$email = $_POST['email'];
$sql = "INSERT INTO registro_empresa (nombre, nit, clave, email) VALUES ('$nombre',  '$nit', '$clave', '$email')";
$resultado = mysqli_query($conexion, $sql);
if ($resultado) {
    echo 'registro exitoso';
} else {
    echo 'error de registro' . mysqli_error($conexion);
}

mysqli_close($conexion);

?>

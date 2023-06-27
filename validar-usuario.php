<?php
include("conexion_db.php");
session_start();

$info = "SELECT email, clave, nombre FROM registro_empresa";
$clave = $_POST['clave-l'];
$email = $_POST['emalil-'];

// Debes ejecutar la consulta SQL y obtener el resultado
$resultado = mysqli_query($conexion, $info);
$fila = mysqli_fetch_assoc($resultado);

if ($fila['email'] == $email && $fila['clave'] == $clave) {
    header('location:index.php');
    $nombre_empresa = $fila['nombre']; 
    $_SESSION['username'] = $nombre_empresa;
} else {
    header('location:login.php');
    
}
?>
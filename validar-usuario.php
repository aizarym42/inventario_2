<?php
include("conexion_db.php");
session_start();

$info = "SELECT email, clave FROM registro_empresa";
$clave = $_POST['clave-l'];
$email = $_POST['email-l'];

// Debes ejecutar la consulta SQL y obtener el resultado
$resultado = mysqli_query($conexion, $info);
$fila = mysqli_fetch_assoc($resultado);

if ($fila['email'] == $email && $fila['clave'] == $clave) {
    header('location:index.php');
    $info = "SELECT nombre FROM registro_empresa where email = '$email'";
    $_SESSION['username'] = $email; 
} else {
    header('location:login.php');
    
}
?>
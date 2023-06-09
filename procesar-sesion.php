<?php
include("conexion_db.php");
session_start();
$clave = $_POST['clave-l'];
$email = $_POST['email-l'];
$info = "SELECT nombre FROM registro_empresa where email = '$email'";
?>
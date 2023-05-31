<?php
include("conexion_db.php");
include("procesar-datos.php");

$info = "SELECT email, clave FROM registro_empresa";
$clave = $_POST['clave-l'];
$email = $_POST['email-l'];
if ($info.email == $email && $info.clave == $clave) {
    echo 'usuario existente';
}else {
 echo 'este usuario no existe'
}
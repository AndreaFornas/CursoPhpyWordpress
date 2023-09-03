<?php
require_once('config.php');

$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$correo_form = $_POST['email'];
$mensaje_form = $_POST['mensaje'];

$cuerpo_mail =
    "Nombre: " . $nombre_form . "\r\n" .
    "Apellido: " . $apellido_form . "\r\n" .
    "Correo electrónico: " . $correo_form . "\r\n" .
    "Mensaje: " . $mensaje_form;

mail("andreacfornas@gmail.com", "Mensaje enviado desde nuestro sitio", $cuerpo_mail);


$entorno = 'online'; //cambia esto a online

if ($entorno === 'local') {
    $conexion = mysqli_connect("$local_host", "$local_usuario", "$local_pass", "$local_base_de_datos");

    if (!$conexion) {
        die("Error al conectar a la base de datos:" .
            mysqli_connect_error());
    }
} else {
    $conexion = mysqli_connect("$online_host", "$online_usuario", "$online_pass", "$online_base_de_datos");
    if (!$conexion) {
        die("Error al conectar a la base de datos" .
            mysqli_connect_error());
    }
}



/* $conexion = mysqli_connect($local_host, $local_usuario, $local_pass, $local_base_de_datos);
if (!$conexion) {
    die ("Error al conectar a la base de datos" .
        mysqli_connect_error());
}  */


mysqli_query($conexion, "INSERT INTO formulario VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$correo_form', '$mensaje_form')");



mysqli_close($conexion);

header("Location:contacto.php?ok");


exit();

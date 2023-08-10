<?php
$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$correo_form = $_POST['email'];
$mensaje_form = $_POST['mensaje'];


$cuerpo_mail = 
"Nombre: " .$nombre_form."\r\n".
"Apellido: ".$apellido_form."\r\n".
"Correo electrónico: ".$correo_form."\r\n".
"Mensaje: ".$mensaje_form;

mail("andreacfornas@gmail.com", "Mensaje enviado desde nuestro sitio", $cuerpo_mail);
?>
<?php

// VARIABLES

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// DATOS

$destino = 'mcejasdg@gmail.com';
$asunto = 'Contacto - All&More.';
$formulario = "De: $nombre \n";
$formulario .= "Correo: $email \n";
$formulario .= "Teléfono: $telefono \n";
$formulario .= "Mensaje: $mensaje";

// ENVIAR

mail($destino, $asunto, $formulario);

?>
<?php

// VARIABLES //

$nombre = $_POST['nombre'];
$email = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// DATOS //

$destino = 'mcejasdg@gmail.com';
$asunto = 'Contacto - All&More.';
$formulario = "De: $nombre \n";
$formulario .= "Correo: $correo \n";
$formulario .= "Teléfono: $telefono \n";
$formulario .= "Mensaje: $mensaje";

// ENVIAR //

mail($destino, $asunto, $formulario);
header('Location:index')

?>

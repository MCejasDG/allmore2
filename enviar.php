<?php

// VARIABLES

$destino = "mcejasdg@gmail.com";
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nMensaje: " . $mensaje;

mail($destino, "Contacto - All&More.", $contenido);
header("Location:index.html");

?>

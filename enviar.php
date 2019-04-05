<?php 

/* Llamando a los campos */

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

/* Datos para el correo */ 

$destitanatario = "darwinpf31@gmail.com";	
$asunto = "Contactó desde Wimbel";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Teléfono: $telefono \n";
$carta .= "Mensaje: $mensaje ";

/* Enviando mensaje */

mail($destitanatario, $asunto, $carta);

header('Location:mensaje-de-envio.html')

 ?>
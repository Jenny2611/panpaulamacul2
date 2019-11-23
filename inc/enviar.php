<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$header = 'From:' . $email . "\r\n";
$header = 'X-mailer: PHP/' . phpversion() . "\r\n";
$header = 'Mime-Version: 1.0 \r\n';
$header = 'Content-Type: text/plain';
$mensajeCorreo = "This message was sent by: " . $nombre . "\r\n";
$mensajeCorreo = "Email: . $email . "\r\n";
$mensajeCorreo = "Mensaje: . $mensaje . "\r\n";
$para = "contacto@panpaulamacul.cl";
$asunto = "Contacto de Sitio web";
mail($para, $asunto, utf8_encode($mensajeCorreo), $header );

echo json_encode(array(
    'mensaje' => sprintf('El mensaje se ha enviado!'),
    'datos' => array(
        'nombre' => $nombre,
        'email' => $email,
        'mensaje' => $mensaje
    ),
    'respuesta' => $respuesta
));


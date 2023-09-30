<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    // Aquí puedes realizar el procesamiento del formulario, como enviar un correo o guardar en una base de datos.
    
    // Ejemplo de envío de correo electrónico (requiere configuración en tu servidor):
    $destinatario = "tu@email.com";
    $asunto = "Nuevo mensaje de contacto desde el sitio web";
    $mensajeCorreo = "Nombre: $nombre\nCorreo: $correo\nMensaje:\n$mensaje";
    $cabeceras = "From: $correo";

    if (mail($destinatario, $asunto, $mensajeCorreo, $cabeceras)) {
        echo "El mensaje se ha enviado correctamente. ¡Gracias por contactarnos!";
    } else {
        echo "Error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
    }
}
?>

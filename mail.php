<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Cargar la librería de PHPMailer
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

function enviarCorreo($nombre, $apellido, $email, $telefono) {
    // Configurar PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configurar el servidor SMTP
        $mail->isSMTP();
        $mail->Host       = 'tu_host_smtp';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'tu_correo_smtp';
        $mail->Password   = 'tu_contraseña_smtp';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Configurar el correo
        $mail->setFrom('tu_correo@dominio.com', 'Tu Nombre');
        $mail->addAddress('correo_destino@dominio.com', 'Nombre Destinatario');

        // Contenido del correo
        $mail->isHTML(true);
        $mail->Subject = 'Formulario de contacto';
        $mail->Body    = "Nombre: $nombre<br>Apellido: $apellido<br>Email: $email<br>Teléfono: $telefono";
        $mailer->CharSet = 'UTF-8';

        // Enviar el correo
        $mail->send();

        // Redirigir al index
        header('Location: index.html');
        exit;
    } catch (Exception $e) {
        // Manejar errores en el envío del correo
        return "Error al enviar el correo: {$mail->ErrorInfo}";
    }
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header("Location: demo.html");
    exit();
}

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;

$nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
$apellido = isset($_POST['apellido']) ? trim($_POST['apellido']) : '';
$email = $_POST['email'];
$telefono = $_POST['telefono'];

if (empty(trim($nombre))) $nombre = 'anonimo';
if (empty(trim($apellido))) $apellido = '';

$body = <<<HTML
    <h1>Contacto de SIMAO</h1>
    <h5>De: $nombre $apellido </h5>
    <h5>De: $email</h5>
    <h5>De: $telefono</h5>
HTML;

$mailer = new PHPMailer();
$mailer->setFrom($email, "$nombre $apellido");
$mailer->addAddress('robertoireyes.m@gmail.com', 'Formulario Simao');
$mailer->Subject = "Mensaje web: $nombre, '$apellido'";
$mailer->msgHTML($body);
$mailer->AltBody = strip_tags($body);
$mailer->CharSet = 'UTF-8';

$rta = $mailer->send();

if (!$rta) {
    echo 'Error al enviar el correo electrónico.';
} else {
    header("Location: index.html");
    exit(); // Importante: salir del script después de una redirección
}

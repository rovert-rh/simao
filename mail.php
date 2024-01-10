<?php
if($_SERVER['REQUEST_METHOD'] != 'POST' ){
    header("Location: index.html" );
}

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];

if( empty(trim($nombre)) ) $nombre = 'anonimo';
if( empty(trim($apellido)) ) $apellido = '';

$body = <<<HTML
    <h1>Contacto desde la web</h1>
    <h5>De: $nombre $apellido</h5>
    <h4>De: $email</h4>
    <h4>De: $telefono</h4>
HTML;

//sintaxis de los emails email@algo.com || 
// nombre <email@algo.com>

$headers = "MIME-Version: 1.0 \r\n";
$headers.= "Content-type: text/html; charset=utf-8 \r\n";
$headers.= "From: $nombre $apellido <$email> \r\n";
$headers.= "To: Sitio web <robertoireyes.m@gmail.com> \r\n";
// $headers.= "Cc: copia@email.com \r\n";
// $headers.= "Bcc: copia-oculta@email.com \r\n";


//REMITENTE (NOMBRE/APELLIDO - EMAIL)
//ASUNTO 
//CUERPO 
$rta = mail('robertoireyes.m@gmail.com', "Mensaje web: $asunto", $body, $headers );
//var_dump($rta);

header("Location: index.html" );
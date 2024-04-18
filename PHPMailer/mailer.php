<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!isset($_POST['name']) || !isset($_POST['email'])){
    echo "<h1>qué pretendes?";
    http_response_code(400);
    exit;
}

$name= $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Incluir la libreria PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';

// Inicio
$mail = new PHPMailer(true);

try {
   // Configuracion SMTP
   $mail->SMTPDebug = SMTP::DEBUG_SERVER;                         // Mostrar salida (Desactivar en producción)
   $mail->isSMTP();                                               // Activar envio SMTP
   $mail->Host  = 'smtp-es.securemail.pro';                     // Servidor SMTP
   $mail->SMTPAuth  = true;                                       // Identificacion SMTP
   $mail->Username  = 'cursonascor@cartaclic.es';                  // Usuario SMTP
   $mail->Password  = 'cursoNascor***-';              // Contraseña SMTP
   $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
   $mail->Port  = 587;
   $mail->setFrom('hola@prueba.com', 'Tu nombre');                // Remitente del correo

   // Destinatarios
   $mail->addAddress($email, $name);  // Email y nombre del destinatario

   // Contenido del correo
   $mail->isHTML(true);
   $mail->Subject = 'Gracias por contactarnos';
   $mail->Body  = 'Contenido del correo <b>en HTML!</b>';
   $mail->AltBody = 'Contenido del correo en texto plano para los clientes de correo que no soporten HTML';
   $mail->send();
   echo 'El mensaje se ha enviado';
   echo "<br>";
   echo "Tu nombre es " . $name . " y tu email es: ".$email;
} catch (Exception $e) {
   echo "El mensaje no se ha enviado. Mailer Error: {$mail->ErrorInfo}";
}


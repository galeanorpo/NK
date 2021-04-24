<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
$correo=$_POST['Correo'];

$mail = new PHPMailer(true);

try {

  $mail->SMTPOptions = array(
		'ssl' => array(
		'verify_peer' => false,
		'verify_peer_name' => false,
		'allow_self_signed' => true
		)
	);
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'noreplayrecupera99@gmail.com';                     // SMTP username
    $mail->Password   = 'neongomez10';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('noreplayrecupera99@gmail.com', 'NEON GOMEZ');
    $mail->addAddress($correo, 'Usuario');     // Add a recipient
    
  
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Recuperar Contrasena Avisos Neon';
    $mail->Body    = 'Señor usuario, avisos NEÓN le comunica, que en el sigiente link puede recuperar su contraseña <b><a href="http://localhost/neonGomez/recuperar/index">Recuperar contraseña</a> <br> <h2>Recuerde que somos su tienda de confianza fabricamos tu imaginación</h2></b> <br> <h1>AVISOS NEÓN</h1>';

    $mail->send();
  
    echo"<script>setTimeout(\"location.href='http://localhost/neonGomez/usuario/validationExito'\",100)</script>";
  } catch (Exception $e) {

    
    echo"<script>setTimeout(\"location.href='http://localhost/neonGomez/usuario/validationFailed'\",100)</script>";
}
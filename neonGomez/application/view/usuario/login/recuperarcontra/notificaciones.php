<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
 $correo=$_POST['correo'];

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
    $mail->Subject = 'Aviso de cambio de contrasenia exitoso';
    $mail->Body    = '<h2>Señor usuario, avisos NEÓN le comunica, que su contraseña se modificó con exito</h2> <hr> <br> <h4> 
    </h4>';

    $mail->send();
    echo '<script>alert("Cambio de contraseña exitoso Inicia en NEÓN GÓMEZ")</script>';
    echo"<script>setTimeout(\"location.href='http://localhost/neonGomez/usuario/login'\",200)</script>";

 } catch (Exception $e) {

     echo '<script>alert("Hubo un error al enviar la notificación, pero le cambio pudo ser exitoso")</script>';
     echo"<script>setTimeout(\"location.href='http://localhost/neonGomez/usuario/login'\",200)</script>";
 }


?>
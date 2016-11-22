<?php
 require('PHPMailerAutoload.php');
    require('class.phpmailer.php');
    require('class.pop3.php');
    require('class.smtp.php');
    
 $name = $_POST['nname'];
$email = $_POST['email'];
$cedula = $_POST['cedula'];
$telefono = $_POST['telefono'];
$tema = $_POST['subject'];
$descripcion = $_POST['message'];

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mihost.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = false;                               // Enable SMTP authentication
$mail->Username = '';                 // SMTP username
$mail->Password = '';                           // SMTP password
$mail->SMTPSecure = 'SSL';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 8001;                                     // TCP port to connect to

$mail->From = 'noreply@atlantico.gov.co';
$mail->FromName = $name;
    // Add a recipient
$mail->addAddress('epenarandaa@uninorte.edu.co');                   // Name is optional


$mail->Subject = $tema;
$mail->Body    ='<p>'.$descripcion.'</p>
<p>Nombre: '.$name.'</p>
<p>CC: '.$cedula.'</p>
<p>Tel: '.$telefono.'</p>
<p>Correo: '.$correo.'</p>
<p>Este correo es enviado directamente de la Web de la subsecretaría</p>';

$mail->AltBody = $descripcion."\n\n".$name."\n".$cedula."\n".$telefono."\n".$correo;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>
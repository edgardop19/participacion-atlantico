<?php
 require('/home/ubuntu/workspace/PHPMailerAutoload.php');
    require('/home/ubuntu/workspace/class.phpmailer.php');
    require('/home/ubuntu/workspace/class.pop3.php');
    require('/home/ubuntu/workspace/class.smtp.php');
    

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'in-v3.mailjet.com;in-v3.mailjet.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = '3004f957f3a3759d949ea1efcbd522da';                 // SMTP username
$mail->Password = '8fc08b893d9fd80bed95d38d61058fcc';                           // SMTP password
$mail->SMTPSecure = 'SSL';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->From = 'epenarandaa@uninorte.edu.co';
$mail->FromName = 'Default';
    // Add a recipient
$mail->addAddress('edgardop19@gmail.com');               // Name is optional


$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>
<?php
$klientoPastas = $_POST['elpastas'];
$antraste = $_POST['antraste'];
$klausimas = $_POST['zinute'];

echo $klientoPastas .  " " . $antraste. "" .$klausimas;

//Load composer's autoloader
require './lib/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 3;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'savoverslui@gmail.com';    //testascoding             // SMTP username
    $mail->Password = 'Karabasas';    //slaptazodis                // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($klientoPastas, 'Mailer');
    $mail->addAddress('savoverslui@gmail.com', 'As');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
     $mail->addReplyTo($klientoPastas, 'Pirkejas');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $antraste; //'Here is the subject';
    $mail->Body    = $klausimas; //'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = $klausimas; //'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

?>
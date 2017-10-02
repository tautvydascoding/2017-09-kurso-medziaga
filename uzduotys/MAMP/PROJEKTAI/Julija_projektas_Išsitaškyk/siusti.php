<?php
// mano siusti forma



$name = $_POST['name'];
$email = $_POST['email'];
$question = $_POST['question'];
$telNum = $_POST['telnum'];



// echo $klientoPastas . " " . $antraste . " " . $klausimas . "<br>";
// echo "$klientoPastas $antraste $klausimas ";


//Load composer's autoloader
require './lib/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
// Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output // debug parametras, kuo didesnis, tuo placiau apraso klaidas,    testavimo tikslais didesnis skaicius, bet kai paleidi vartotojui, rasai 0
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'testascoding@gmail.com';                 // SMTP username //mano emailas
    $mail->Password = 'slaptazodis';                            // SMTP password  //mano pass
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to //paziuret gmail koks

    //Recipients
    $mail->setFrom($email, $name);
    // $mail->addAddress('info@issitaskyk.lt', 'Išsitaškyk!');     // Add a recipient
    $mail->addAddress('blackbird1320@gmail.com', 'Išsitaškyk!');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo($email, $name); // adresas ir vardas kam atsakyt
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Išsitaškyk! | info';
    $mail->Body    = $question. '<br><br> Vardas: ' .$name. '<br> Telefono nr.: ' .$telNum. '<br> El. paštas: ' .$email;
    $mail->AltBody = $question. '<br><br> Vardas: ' .$name. '<br><br> Telefono nr.: ' .$telNum. '<br><br> El. paštas: ' .$email;

$mail->send();
    echo "<script type='text/javascript'>alert('Žinutė išsiųsta!')</script>";
} catch (Exception $e) {
    echo "<script type='text/javascript'>alert('Išsiųsti nepavyko!')</script>";
}

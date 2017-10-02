<?php 

include "includes/db_connect.php";

if(isset($_POST['submit'])){

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$message = $_POST['message'];
$email = $_POST['email'];

echo $name .  " " . $lastname. "" .$message;

//Load composer's autoloader
require 'lib/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'user';    //testascoding             // SMTP username
    $mail->Password = 'pwd';    //slaptazodis                // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($email, $name . " " . $lastname);
    $mail->addAddress('trimvydas17@gmail.com', 'Rimvydas');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
     $mail->addReplyTo($email, 'Pirkejas');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = ''; //'Here is the subject';
    $mail->Body    = $message; //'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = $message; //'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    //echo 'Message has been sent';
} catch (Exception $e) {
   // echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}


     $query = "INSERT INTO email(email_name, email_lastname, email, email_message, email_date)" . "VALUES ('{$name}', '{$lastname}', '{$email}', '{$message}', now())";

 $result = mysqli_query($dbConnect, $query);
  if (!$result){
        die("Query failed" . mysqli_error($dbConnect));
    }
    

}






?>
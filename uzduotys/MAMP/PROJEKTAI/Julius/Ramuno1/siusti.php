<?php
include_once("Headerindex.php");
?>
<div class="row p-0 m-0 pl-5 pr-5 ">
    <div class="col-4 wrap">
        <h4 class="pt-3"> <i class="fa fa-envelope" aria-hidden="true"></i>Susisiekite el. paštu </h4>
        <form action="siusti.php" method="post" class="p-2">
            <label for="" >Jūsų El.Paštas</label>
            <input type="email" name="elpastas" value="" placeholder="pavyzdys@gmail.com">
            <br>
            <label>Tema</label>
            <input type="text" name="tema" value="" maxlength="100" placeholder="apie ką?">
            <br>
            <label>Jūsų klausimas</label>
            <textarea name="zinute" rows="6" cols="45" placeholder="rašykite čia.." class="plotis"></textarea>

            <input class= " text3 search-button m-2 d-flex float-right" type="submit" name="" value="Siųsti">
        </form>
    </div>
    
        
            <div class="col-2 d-inline-block wrap ml-2 mr-1">
                <h4 class="pb-2 pt-3">Kontaktiniai telefonai: </h4>
                <h5><i class="fa fa-phone-square" aria-hidden="true"></i>+37064455667</h5>
                <h5><i class="fa fa-phone-square" aria-hidden="true"></i>+37064455668</h5>
                <h5><i class="fa fa-phone-square" aria-hidden="true"></i>+37064455669</h5>
                <h4 class="mt-5 pb-2"><i class="fa fa-globe" aria-hidden="true"></i>Adresas:</h4>
                <h6>Kaunas, PvzGatve-1</h6>

            </div>
            <div class="col-5 pl-2 pr-1 m-0">
               
                    
                        
                        <div id="map" class="m-0 aukstisauto plotis"></div>
                    
               
            </div>

       
    
</div>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzwamqd1rDLGeIQGrjVMj8uWxQaNYgBN4&callback=initMap">


</script>
<?php 
include_once('footer.php');
?>




<?php

$klientoPastas = $_POST['elpastas'];
$antraste = $_POST['tema'];
$klausimas = $_POST['zinute'];

//echo $klientoPastas . " " . $antraste . " " . $klausimas;
// echo "$klientoPastas  $antraste $klausimas";

//Load composer's autoloader
require './lib/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                      // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'taisaustakles@gmail.com';                 // SMTP username
    $mail->Password = 'sutaisysiu1';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($klientoPastas, 'Puslapiu kurimas');
    $mail->addAddress('taisaustakles@gmail.com', 'Interneto istemos');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo($klientoPastas, 'Pirkejas');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $antraste;
    $mail->Body    = $klausimas;
    $mail->AltBody = $klausimas;

    $mail->send();
    echo "<script type='text/javascript'>alert('Žinutė išsiųsta, ačiū!')</script>";
} catch (Exception $e) {
    echo "<script type='text/javascript'>alert('Išsiųsti nepavyko!')</script>";
//    echo 'Mailer Error: ' . $mail->ErrorInfo;
}


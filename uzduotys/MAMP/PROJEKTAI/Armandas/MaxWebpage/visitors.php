<?php
  include('db.php');
  include('index.php');
  $name = mysqli_real_escape_string(getConnection(), $_POST['name']);
  $email = mysqli_real_escape_string(getConnection(), $_POST['email']);
  $tel = mysqli_real_escape_string(getConnection(), $_POST['tel']);
  $message = mysqli_real_escape_string(getConnection(), $_POST['message']);
  $subject = $name;
  $body = $email . " " . $tel . " " . $message;
  mail (,$subject,$body,);
  // echo "Jusu pranesimas issiustas";

if (isset($_POST['submit'])) {
  $sql = "INSERT INTO visitors (name, email, tel, message) VALUES ('$name',
    '$email', '$tel', '$message')";
    if(!mysqli_query($db, $sql)) {
  die('error inserting new record');
}
}

?>

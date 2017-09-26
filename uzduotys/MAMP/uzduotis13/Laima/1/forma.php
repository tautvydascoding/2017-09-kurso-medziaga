<?php

echo "<h1>Uziregistravo: </h1>";

$vardas = $_POST["name"];
$zinute = "";
if (strlen($vardas) <=3 ) {
    $zinute = "Ivestas vardas per trumpas!";
 } else {
     $zinute = "Liuks";
 }

$kodas1 = $_POST["password1"];
$kodas2 = $_POST["password2"];


 if ($kodas1 === $kodas2) {
     $zinute = "Sutapo pass";
 } else {
     $zinute = "Slap nesutampa!!!";
 }

echo $zinute;
print_r($_POST);


 ?>

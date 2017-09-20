<?php

echo "<h1>Uzsiregistravo :</h1>";


$vardas = $_POST["name"];
// pasalinam tarpus pries/uz
$vardas = trim($vardas);
$zinute = "";

if ( strlen($vardas) <= 3) {
    $zinute = "Ivestas vardas per trumpas!";
} else {
    $zinute = "Liuks";
}
$kodas1 = $_POST["password1"];
$kodas2 = $_POST["password2"];


if ($kodas1 === $kodas2) {
    $zinute = "Sutapo pass";
} else  {
    $zinute = "Slaptazodziai nesutampa!!!";
}

echo $zinute;
print_r($_POST);








 ?>

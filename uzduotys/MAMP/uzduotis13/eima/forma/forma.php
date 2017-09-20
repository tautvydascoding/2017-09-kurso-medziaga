<?php

echo "<h1>Uzsiregino: </h1>";
print_r ($_POST);
$vardas = $_POST["name"];
$vardas = trim($vardas);
$zinute ="";
if ( strlen($vardas) <=3) {
  $zinute = "Ivestas vardas per trumpas";
} else {
  $zinute = "liuks";
}
$kodas1 = $_POST["password1"];
$kodas2 = $_POST["password2"];

if ($kodas1 === $kodas2) {
  $zinute = "sutapo psw";
} else {
  $zinute = "nesutapo psw";
}
echo $zinute;

 ?>

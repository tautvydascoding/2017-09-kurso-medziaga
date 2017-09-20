<?php
echo "laba diena <br />";

$lastName = "Tomulaitis";

echo "Kas pasake miau? $lastName <br />";
echo 'Kas pasake miau? $lastName <br />';
echo 'Kas pasake miau? ' . $lastName;
echo '<br /> It\'s a problem';
echo "<br /> It\'s a problem<br />";


$vardas = "jurgis";
$pomegis = "krepsinis";
echo "vardas: $vardas <br />";
echo "pomegis: $pomegis <br />";
$vardas = $pomegis;
echo "vardas: $vardas <br />";
echo "pomegis: $pomegis <br />";
$pomegis = "paciuzos";

$vardas = &$pomegis;
echo "vardas: $vardas <br />";
echo "pomegis: $pomegis <br />";

$reiksme = 990;

function skaiciuojaIKIdesimt (&$x){
  echo "skaicius: $x <br />";
  $x = $x + 1;
}
skaiciuojaIKIdesimt($reiksme);
echo "reiksme: $reiksme <br>";




   ?>

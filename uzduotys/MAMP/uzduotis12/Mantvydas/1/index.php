<?php
//PHP kodas

echo "Laba diena";
echo "Laba diena <br>";
echo "Laba diena <br>";


$lname = "Tomulaitis";


echo "Viso gero pasake $lname <br>";
echo 'Viso gero pasake $lname <br>';

echo 'Viso gero pasake ' . "eidamas keliu " . "per juras marias " . $lname . '<br>';

echo "It's a bliss <br>";
echo 'It\'s a bliss <br>';


$vardas = "Jurgis";
$pomegis = "krepsinis";
echo "vardas : $vardas <br>";
echo "pomegis : $pomegis <br>";
$vardas = $pomegis;
echo "vars = pomegis <br>";
echo "vardas : $vardas <br>";
echo "vars : $pomegis <br>";


$vardas = &$pomegis; // sisiejame abu


$reiksme = 0;

function skaiciuojaIkiDesimt(&$skaicius) {
    $skaicius = $skaicius + 1;
    echo "skaicius: $skaicius <br>";
    //$skaicius++;
}
skaiciuojaIkiDesimt($reiksme);
echo "Reiksme: $reiksme <br>";



//













//
?>

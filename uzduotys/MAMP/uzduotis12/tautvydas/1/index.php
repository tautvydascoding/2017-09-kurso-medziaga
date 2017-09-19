<?php


// PHP codas

 $lname = "Tomulaitis";



echo "Viso gero pasake $lname  <br>";
echo 'Viso gero pasake $lname  <br>';

echo 'Viso gero pasake' . " eidamas keliu " . "per juras marias" . $lname . '<br>';

echo "It's a problem   <br>";
echo 'It\'s a problem' . '<br>';


$vardas = "Jurgis";
$pomegis = "krepsinas";
echo "vardas : $vardas <br>";
echo "pomegis : $pomegis <br>";

$vardas = $pomegis;
echo "vars = pomegis  <br>";
echo "vardas : $vardas <br>";
echo "pomegis : $pomegis <br>";

$pomegis = "Paciuzos";
echo "pomegis = paciuzos  <br>";
echo "vardas : $vardas <br>";
echo "pomegis : $pomegis <br>";

//
$vardas = &$pomegis; // susiejame abudu
$pomegis = "Riedlentes";
echo "vardas : $vardas <br>";


$reiksme = 0;

function skaiciuojaIKIdesimt(&$skaicius) {
    $skaicius = $skaicius + 1;
    echo "skaicius: $skaicius <br>";
    // $skaicius++;
}

skaiciuojaIKIdesimt($reiksme);
echo "reiksme: $reiksme <br>";






//

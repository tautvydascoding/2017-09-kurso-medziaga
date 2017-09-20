<?php

echo "Hello world! Edga";

$lname = "Petraitis";

echo "Viso gero pasake $lname <br />";
echo 'Viso gero pasake $lname <br/>';

echo 'Viso gero pasake' . "eidamas keliu" . "bla bla" . $lname . "<br/>";

echo "It's a problem <br/>";
echo 'It\'s a problem' . '<br/>';

$vardas = "Petras";
$pomegis = "Krepsinis";
echo "vardas : $vardas <br/>";
echo "pomegis : $pomegis <br/>";



$reiksme = 55;

function skaiciuojaIkiDesimt(&$skaicius){ // $skaicius = $reiksme
    $skaicius = $skaicius + 1;
    echo "skaicius: $skaicius </br/>";
}

skaiciuojaIkiDesimt($reiksme);
echo "reiksme: $reiksme </br/>";

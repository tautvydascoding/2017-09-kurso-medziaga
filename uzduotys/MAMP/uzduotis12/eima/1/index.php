<?php



////PHP codes

echo "laba diena";



$lname = "tomulaitis";

echo "viso gero pasake $lname <br />";
echo 'viso gero pasake $lname <br />';
echo 'viso gero pasake' . " viso gero eidamas pasake $lname" . " per juras marias " . $lname; // . sujungia du stringus i viena pvz kaip js naudodavom "+"

echo "it's a problem <br />";
echo 'it\'s a problem <br />';

$vardas = "jurgis";
$pomegis = "krepsinis";
echo "vardas: $vardas <br />";
echo "pomegis: $pomegis <br />";

$vardas = $pomegis;
echo "pakeiciau varda i pomegi <br />";
echo "vardas: $vardas <br />";
echo "pomegis: $pomegis <br />";
$pomegis = "paciuzos";

$vardas = &$pomegis; // susiejame abudu

echo "susiejome varda su pomegiu <br />";
echo "vardas: $vardas <br />";
echo "pomegis: $pomegis <br />";

$reiskme = 0;
function skaiciuojaIkiDesimt(&$skaicius) {

  $skaicius++;
  echo "skaicius: $skaicius <br />";
}


skaiciuojaIkiDesimt ($reiskme);

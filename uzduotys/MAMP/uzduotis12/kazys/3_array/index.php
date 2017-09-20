<?php

$names = array("Tomas", "Karolis", "Martynas", 4);
echo "pirmas elementas: " . $names[1] . "<br />";

$test = ["Tomas", "Karolis", "Martynas"];
echo "pirmas elementas: " . $test[1] . "<br />";

$amzius = ["Timas" => 35, "Vaidas" => 26, "Laimonas" => 75];
print_r ($amzius);
echo "<br />";
print_r ($test);

$text = "mano lauzas dege 100 dienu";
$zodziai = explode(" ", $text);
print_r ($zodziai);
echo "<br />";
$spalvos = ["geltona", "melyna", "zalia", "juoda", "violetine"];
// foreach ciklas, kuris eina nuo pradzios iki galo per masyva
foreach ($spalvos as $x) { //$x - laikinas kintamasis, stalciaus reiksme
echo "spalva: " . $x . "<br />";
}


$failas = fopen("./straipsnis.txt", "r") or die ("Failo nepavyko atidaryt");

while(!feof($failas)) {
$eilute = fgets($failas);
$prekes = explode (" : ", $eilute);
// echo $eilute . "<br />";
echo "<h2>" . $prekes[0] . "</h2>";
echo "<button>" . $prekes[2] . "</button>";
};

fclose ($failas);


 ?>

<?php

$vardai = array("Tomas", "Karolis", "Martynas");
echo "Pirmas elementas: " . $vardai[1] . "<br><br>";

$test = ["Tomas", "Karolis", "Martynas"];
echo "Pirmas elementas: " . $test[0] . "<br><br>";


$amzius = ["Tim Korol => 35, John Cena => 40, Michael Jackson => 99"];
print_r ($amzius);
echo "<br><br>";
print_r ($test);
echo "<br><br>";
print_r ($vardai);

$text = "Mano lauzas dege 100 dienu";
$text = "Lietsargis : 100 : 1vnt";
$zodziai = explode(" : ",$text);
echo "<br><br>";
print_r ($zodziai);
echo "<br><br>";

$colors = ["green", "red", "blue", "grey", "yellow"];
foreach ($colors as $color) {
    # going through all array from beginning to the end
    # $color - every singular elemant value
    echo "color: ". $color. "<br>";
}

echo "<br><br>";

$failas = fopen('./straipsnis.txt', 'r') or die ("failo nepavyko atidaryti");
// output one line until end-of-file
while (!feof($failas)) {
    $eilute = fgets($failas) . "<br>";
    $prekes = explode(':', $eilute);
    // echo $eilute . "<br>";
    echo "<h2>$prekes[0]</h2>";
    echo "<button>$prekes[2]</button>";
}
fclose($failas);












//

<?php

$vardai = array("Tomas", "Karolis", "Martynas" );
echo "Pirmas elementas: " . $vardai[0] . "<br /><br />";

$test =  ["Tomas", "Karolis", "Martynas" ];
echo "Antras elementas: " . $test[1] . "<br /><br />";

$amzius = ["Tim Korol" => 35, "Jul Tikaka" => 22, "Paul Oko" => 45];

print_r ($test);
echo "<br />";
print_r ($amzius);


$text = "Mano lauzas dege 100 dienu";
$zodziai = explode(" ", $text);
echo "<br />";
print_r ($zodziai);

$spalvos = ["geltona", "melyna", "juoda", "violetine", "purpurine"];



//eina per visa masayva nuo pradzios iki galo
// $x - kiekvieno stalciau reiksme

foreach ($spalvos as $x) {
    echo "spalva: " . $x . "<br />";
}

$failas = fopen('straipsnis.txt', 'r') or die ("Failo nepavyko atidaryti");

    while(!foef($failas)) {
        $eilute = fgets($failas);
        $prekes = explode(':', $eilute);
        // Echo $eilute . "<br />";

        echo "<h2>" . $prekes[0] . "</h2>";
        echo "<button>" . $prekes[2] . "</button>";
}
 fclose($failas);


 ?>

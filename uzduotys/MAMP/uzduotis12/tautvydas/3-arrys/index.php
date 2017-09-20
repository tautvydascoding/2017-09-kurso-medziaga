<?php




$vardai = array("Tomas", "Karolis", "Martynas");
echo "Pirmas elementas:" . $vardai[1] . '<br><br>';

$test = ["Tomas", "Karolis", "Martynas"];
echo "Pirmas test elementas:" . $test[1] . '<br><br>';

$amzius = ["Tim Korol" => 35, "Jul Tikaka" => 22, "Paul Oko" => 43];

print_r ($test);
echo "<br />";
print_r ($amzius);

$text = "Mano lauzas dege 100 dienu";
$text = "Lietsargis : 100 : 1vnt";
$zodiai = explode(" : ", $text);
echo "<br />";
print_r ($zodiai);
echo "<br /><br /><br />";

$spalvos = ["geltona", "melyna", "juoda", "violetine", "purpurine"];

// eina per visa masyva nuo pradzios iki galo automatiskai
// $x - laikinas kintamasis - elemento reiksme
foreach ($spalvos as  $x) {
     echo "spalva: " . $x . "<br>";
}

$failas = fopen('straipsnis.txt', 'r') or die ("Failo nepavyko atidaryti");

while(!feof($failas)) {
    $eilute = fgets($failas) ;
    $prekes = explode(':', $eilute);
    // echo $eilute . "<br>";

    echo "<h2>" . $prekes[0] . "</h2>";
    echo "<button>" . $prekes[2] . "</button>";
}
fclose($failas);










///







//




//

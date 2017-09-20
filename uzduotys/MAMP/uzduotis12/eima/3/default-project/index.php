<?php
$vardai = array("tomas", "karolis", "marynas");
echo "Pirmas elementas: " . $vardai[1] . '<br />';

$test = ["tomas", "karolis", "martynas"];
echo "Pirmas test elementas: " . $test[1] . '<br />';

$amzius = ["Tim Korol" => 35, "Jul Tik" => 30, "Paul P" => 22];

print_r ($amzius);
echo "<br />";
print_r ($test);

$text = "Mano lauzas dege 100 dienu";
$zodziai = explode( " ", $text);
echo "<br />";
print_r ($zodziai);

echo "<br />";

///

$spalvos = ["geltona", "melyna", "juoda", "raudona", "purpurine"];

//eina per visa masyva nuo pradzios iki galo
// $x - laikinas kintamasis - elemento reiksme
foreach ($spalvos as $x) {
  echo "spalva: " . $x . "<br />";
}

///

$failas = fopen('straipsnis.txt', 'r') or die ("Failo nepavyko atidaryti");

while (! feof($failas)) {
  $eilute = fgets($failas);
  $prekes = explode(':', $eilute);
  // echo $eilute . "<br />";

  echo "<h2>" . $prekes[0] . "</h2>";
  echo "<button>" . $prekes[2] . "</button>";
}
fclose ($failas);





?>

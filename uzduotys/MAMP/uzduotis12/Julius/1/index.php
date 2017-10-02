<?php



//pHP codas
echo "laba diena";
echo "laba diena";
echo "laba diena";

$lname = "Tomulaitis";

echo "viso gero, pasake $lname";
echo 'viso gero, pasake $lname';
echo "viso gero pasake" . "eidamas keliu". 'per sudus' . $lname. "<br>";

$vardas = "Jurgis";
$pomegis = "paciuzos";
echo "vardas :$vardas <br>";
echo "pomegis :$pomegis <br>";

$vardas=&$pomegis; // susiejame abu kintamuosius
$pomegis = "riedlente";// PAKEICIAU TIK VIENA KINTAMAJI
echo "vardas :$vardas <br>"; 
echo "pomegis: $pomegis <br>";// BET PASIKEITE ABU


/// veikia ir su FunKCIJOM-----------
//
//function skaiciuojaikidesimt(){
//    echo "veikiu <br>";
//}
//skaiciuojaikidesimt();

//------------------------------------

$reiksme=9;
function skaiciuojaikidesimt($skaicius) {
    $skaicius = $skaicius+1;
    echo "skaicius: $skaicius <br>";
    
}
skaiciuojaikidesimt($reiksme);
?>

<header>
    <h2> antraste </h2>
    
    <?php
    //PHP codas
    echo "<p> labas
    rytas
    zmogai
    </p> <br> <br>";
?>
</header>
    
    
    
    
    
    
    
    
    
    
    

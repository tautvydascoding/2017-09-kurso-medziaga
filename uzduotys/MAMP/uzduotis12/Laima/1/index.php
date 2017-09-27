<?php


//PHP codas
echo "Labas Baobabas <br />";
echo "Labas Baobabas <br />";
echo "Labas Baobabas <br />";


    $lname = "Sarakaitis";

    echo "Viso gero pasake $lname <br />";

    echo 'Viso gero! ' .  ' - eidamas keliu pasake ' . $lname . ' <br />';

    echo "It's my name <br />";

    echo 'It\'s my name <br />';



    $vardas = "Jurgis";
    $pomegis = "krepsinis";
    echo "vardas : $vardas <br />";
    echo "pomegis : $pomegis <br />";


    $vardas = $pomegis;
    echo "vardas = pomegis <br />";
    echo "vardas : $vardas <br />";
    echo "vardas : $vardas <br />";
    echo "pomegis : $pomegis <br />";

    //

    $vardas = &$pomegis; //susiejame abu
    $pomegis = "riedlentes";
    echo "vardas : $vardas <br />";




    $reiksme = 990;

    function skaiciuojaIkidesimt($skaicius)     {
        echo "skaicius: $skaicius <br />";
        $skaicius = $skaicius + 1;
        // $skaicius
    }

    skaiciuojaIkidesimt($reiksme);

echo "reiksme: $reiksme <br />";











 ?>





 <header>
     <h2>Antraste</h2>

 </header>

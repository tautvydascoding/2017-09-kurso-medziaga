<?php
    $vardai = array("Jonas", "Tomas", "Petras", "Aronas");
    echo "Pirmas elementas:" . $vardai[0] . "<br>";

    $test = ["Jonas", "Tomas", "Petras", "Aronas"];
    echo "Pirmas elementas:" . $test[0] . "<br />";


    $amzius = ["Aronas" => 22, "Petras" => 52, "Tomas" => 15];
    print_r ($amzius);
    echo "<br />";
    print_r ($test);
    echo "<br />";

    $text = "Man patinka web dizainas";
    $zodziai = explode(" ", $text);
    print_r ($zodziai); // spausdina masyva su stalciais
    echo "<br />";
    echo "$text"; // spausdina paprasta eilute
    echo "<br />";
    echo "<br />";


    $spalvos = ["zalia", "raudona", "geltona", "melyna"];
    foreach ($spalvos as $spalva) { // "$spalva" ta ilaikinas kontamasis kuris ims spalvas is masyvo
        echo "spalva:" . $spalva . "<br />";
    }

    











 ?>

<?php


//rekursija
function skaiciuojaIki10() {
    static $skaitliukas = 0;
    
    $skaitliukas++;

    // for ($i=0; $i < 10 ; $i++) {
        // echo $skaitliukas;
    // }

    //rekursija - kvieciu pats save

    if ($skaitliukas <=10) {
        echo "Dabar dirbu <br>";
        skaiciuojaIki10();
    }

echo "F-ja atliko darba <br>";
}

skaiciuojaIki10();


?>

<?php



// rekursija
function skaiciuojuIki10() {
    static $skaitliukas = 0;

     $skaitliukas++;
    // rukursija- kvieciu pats save
    if ( $skaitliukas <= 10) {
        echo "Dabar dirbu <br>";
        skaiciuojuIki10();
    }

    echo "F-ja atliko darba <br>";
}

skaiciuojuIki10();








 ///

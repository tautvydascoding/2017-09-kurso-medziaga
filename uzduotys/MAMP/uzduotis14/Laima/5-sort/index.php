<?php
    $algos = [380, 400, 200, 1000, 440, 350, 50];

    print_r($algos);

    //rikiavimas
    for ($i=0; $i < count($algos); $i++) {
        for ($k=0; $k < count($algos)-1; $k++) {
            if ($algos[$k] > $algos[$k+1]) {
                $temp = $algos[$k];
                $algos[$k] = $algos[$k+1];
                $algos[$k + 1] = $temp;
            }
        }
    }


print_r($algos);




 ?>

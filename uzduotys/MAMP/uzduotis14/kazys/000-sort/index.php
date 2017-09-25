<?php

$algos = [380, 400, 200, 1000, 440, 350, 50];
print_r ($algos);
//rikiavimas
for ($i=0; $i < count($algos); $i++) {
  for ($k=0; $k < (count($algos)-1); $k++) {
      if ($algos[$k] > $algos[$k+1]) {
        $temp = $algos[$k];
        $algos[$k] = $algos[$k+1];
        $algos[$k+1] = $temp;
      }
  }
}
print_r ($algos);


$legionai = [3000, 1200, 1400, 900, 1700];
print_r($legionai);

for ($i=0; $i < count($legionai); $i++) {
  for ($k=0; $k < (count($legionai)-1) ; $k++) {
    if($legionai[$k] > $legionai[$k+1]) {
      $temp = $legionai[$k];
      $legionai[$k]= $legionai[$k+1];
      $legionai[$k+1] = $temp;
    }
  }
}
print_r($legionai);
?>

<?php

echo "labas" ;
echo "<br />" ;


// rekursija - kai funkcija kviecia pati save
function skaiciuojuIki10() {
  static $skaitliukas = 0;

  $skaitliukas++;

if ($skaitliukas <= 10) {
  echo "dabar dirbu <br />";
  skaiciuojuIki10();
}
  echo "darba atlikau <br />";
}

skaiciuojuIki10();





 ?>

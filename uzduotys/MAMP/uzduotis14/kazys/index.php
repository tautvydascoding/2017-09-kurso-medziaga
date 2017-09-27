<?php

echo "labas" ;
echo "<br />" ;


/**
 *
 */
class Stalas {
  public $material = "medinis";
  private $aukstis = "90"; //sito kintamojo neis pakeist, tik klases viduj
  var $kojuSkaicius = 4;
  private $paskirtis = "virtuvinis";
  var $plotis = 100;

  function setAukstis ($x) {
    $this->aukstis = $x;
  }
  function getAukstis () {
    return $this->aukstis;
  }
}
// $test = "tralala;"; // globalus kintamasis
echo "<br />";
$keturkojisStalas = new Stalas();
// echo "paskirtis  $keturkojisStalas->paskirtis"; //nepaeis paimt, nes private

echo "plotis  $keturkojisStalas->plotis";
echo "<br />";
$keturkojisStalas->plotis = 150;
echo "plotis  $keturkojisStalas->plotis";
$keturkojisStalas->setAukstis(29);
$keturkojisStalas->getAukstis();
echo "<br />";
echo "aukstis: " . $keturkojisStalas->getAukstis();
//aukstis keiciamas kitaip, nes jis privatus klaseje, todel reikia naudoti funkcija

 ?>

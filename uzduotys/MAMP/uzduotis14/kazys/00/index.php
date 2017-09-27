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
// sukurt klase ir joje kintamuosius, kurie yra privatus, bet sukurti jiems funkcija, kuri atspausdintu
class Namas{
  public $rooms = 5;
  private $sildymoBudas = "kietasKuras";
  private $miegamujuSkaicius = 2;
  public $spalva = "#b2b2b2";
  public function spausdintiPrivatuTurini (){
    $spausdinimoBudas = "laikrastis";
    echo "miegamuju skaicius: " . $this->miegamujuSkaicius . "<br />";
    echo "sildymo budas: " . $this->sildymoBudas . "<br />";
    echo "kaip bus atspausdinta: " . $spausdinimoBudas . "<br />";
    $this->kurYraMaryte();
  }
  private function kurYraMaryte() {
    echo "maryte yra koridoriuje <br />";
  }
  function setPrivate ($x) {
    $this->spausdintiPrivatuTurini = $x;
  }
  function getPrivate ($x) {
    return $this->spausdintiPrivatuTurini;

  }
}
$kotedzas = new Namas();
echo "rooms: $kotedzas->rooms";
$kotedzas->spausdintiPrivatuTurini();



 ?>

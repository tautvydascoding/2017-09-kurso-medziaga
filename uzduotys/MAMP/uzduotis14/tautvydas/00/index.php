<?php




 /**
  *  Objekto receptas
  */
 class Stalas   {
     var $kojuSkaicius = 4;
     public $material = "medinis";
     private  $aukstis = 90;
     var      $plotis = 80,
          $paskirtis = "virtuve";

     public function setAukstis($x) {
         $this->aukstis = $x;
     }
     public function getAukstis() {
         return $this->aukstis;
     }
 }

$test = "tralala"; // globalus

$keturkojisStalas = new Stalas();
echo "plotis $keturkojisStalas->plotis  <br>";
$keturkojisStalas->plotis = 150;
echo "plotis $keturkojisStalas->plotis  <br>";

// aukstis privatus - todel keiciamas naudojant f-ja
$keturkojisStalas->setAukstis(29);
echo "aukstis: " . $keturkojisStalas->getAukstis();




// uzduotis
// sukurti klase su 3-5 kintamaisiais (is kuriu 2 privatus) ir f-ja spausdinti(), kuri atsapusdina privacius kintamuosius

class Namas {
    public $rooms = 5;
    private $sildymoBudas = "kietasKuras";
    private $miegamujuSkaicius = 2;
    public $spalva = "#b2b2b2";
    public function spausdintiPrivatuTurini() {
        $spaudinimoBudas = "laikrastis";
        echo "Miegamuju skaicius: " . $this->miegamujuSkaicius . "<br />";
        echo "Silgymo budas: " . $this->sildymoBudas  . "<br />";
        echo "Kaip bus ataspausdinta: " . $spaudinimoBudas . "<br />";
        $this->kurYraMaryte();
    }
    private function kurYraMaryte() {
        echo "Maryte yra koridoriuje <br />";
    }
}
// uzduotis B
// issivesti visus kintamuosius (atspausdinti ekrane)

$daugiabutis = new Namas(); // kuriam Objekta
$kambariai = $daugiabutis->rooms;
echo "Kambariai: " . $kambariai . "<br>";
echo "Namo spalva: " . $daugiabutis->spalva . "<br>";
$daugiabutis->spausdintiPrivatuTurini();








 //

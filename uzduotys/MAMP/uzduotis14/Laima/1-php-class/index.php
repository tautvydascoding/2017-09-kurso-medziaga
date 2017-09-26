<?php

class Stalas {
    var $kojuSkaicius = 4;
    var $material = "medinis";
    var $aukstis = 90,
        $plotis = 80,
        $paskirtis = "virtuve";

        function setAukstis($x) {
            $this->aukstis = $x;
        }
        function getAukstis() {
            return $this -> aukstis;
        }
}


$test = "tralala"; // globalus


$keturkojisStalas = new Stalas();
echo "aukstis $keturkojisStalas->aukstis <br>";
$keturkojisStalas->plotis = 150;
echo "plotis $keturkojisStalas->plotis <br>";

//aukstis privatus - todel keiciamas naudojant f-ja
$keturkojisStalas->setAukstis(29);
echo "aukstis: " . $keturkojisStalas->getAukstis() . "<br>";

//uzduotis
//sukurti klase su 3-5 kintamaisiais (is kuriu 2 privatus) ir f-ja spausdinti(), kuri atspausdina privacius kintamuosius

class Namas {
    public $rooms = 5;
    private $sildymoBudas = "kietasKuras";
    private $miegamujuSkaicius = 2;
    public $spalva = "#b2b2b2";
    function spausdintiPrivatuTurini()  {
        $spausdinimoBudas = "laikrastis";
        echo "Miegamuju skaicius: " . $this->miegamujuSkaicius . "<br/>";
        echo "Sildymo budas: " . $this->sildymoBudas . "<br> ";
        echo "Kaip bus atspausdinta: " . $spausdinimoBudas . "<br> ";
        $this->kurYraMaryte();
    }
    private function kurYraMaryte() {
        echo "Maryte yra koridoriuje <br/>";
    }
}

//uzduotis B
//isvesti visus kintamuosius (atspausdinti ekrane)

$daugiabutis = new Namas(); //kuriam objekta
$kambariai = $daugiabutis->rooms;
echo "Kambariai: " . $kambariai . "<br>";
echo "Namo spalva: " . $daugiabutis->spalva . "<br>";
$daugiabutis->spausdintiPrivatuTurini();








?>

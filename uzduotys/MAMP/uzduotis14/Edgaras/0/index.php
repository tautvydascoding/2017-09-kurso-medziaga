<?php

echo "labas <br />" ;




/**
 *
 */
class stalas {
    var $kojuSkaicius = 4;
    public $material = "medinis"; //viesas objektas
    private $aukstis = 90; //privatus kintamasis, kuri galima naudoti tik funkcijos viduje, jos negalima iskviesti
    var $plotis = 80;
    private $paskirtis = "virtuve";

        function setAukstis($x) {  //f-ja skirta paiimti privaciai reiksmei ir sukurti jei kintamaji
            $this->aukstis = $x; // privaciai reiksmei priskiriam kintamaji, kuris bus kazkuom pakeistas
        }
        function getAukstis() { // f-ja kuri duoda reiksme
            return $this->aukstis; // grazina nauja reiksme mums
        }
}

$keturkojisStalas = new stalas();
    echo "plotis $keturkojisStalas->plotis <br />";
$keturkojisStalas->plotis = 150;
    echo "plotis $keturkojisStalas->plotis <br />";

// aukstis privatus-keiciama tik su f-ja
$keturkojisStalas->setAukstis("29"); // duodam nauja reiksme privaciai klases reiksmei
echo "aukstis:" . $keturkojisStalas->getAukstis(); // isvedam nauja reiksme (klaseje privati reiksme pasilieka)
echo "<br />";
echo "<br />";


// sukurti klase su 3-5 (2 privatus)kintamaisiais ir f-ja spausdinti(), kuri atspausdina privacius kintamuosius

class telefonas {
        var $brand = "Samsung";
        private $pinKodas = 12345;
        public $spalva = "juodas";
        private $osVersija = "Android7";

                public function spausdintiPrivatu(){
                echo "Brand:" . $this->brand . "<br />";
                echo "Spalva:" . $this->spalva . "<br />";
                $this->PINirOS();
            }
                    private function PINirOS(){
                        echo "Pin kodas ir OS versija yra:" . $this->pinKodas . " ir " . $this->osVersija . "<br />";
                    }
}
$privatiInformacija = new telefonas();
$privatiInformacija->spausdintiPrivatu();



// Bandau pats
class kompiuteris { //nauja klase
    private $modelis = "n750jk"; //objektai
    var $spalva = "sidabrine";
    private $kaina = 780;

    public function setKaina($x) { //f-ja kuri pakeis privacia reiksme
        $this->kaina = $x; //privati reiksme tai kaina
    }
    public function getKaina() { //f-ja kuri paims nauja reiksme ir man ja grazins i ekrana
        return $this->kaina; //grazina i ekrana
    }
}
$naujaKaina = new kompiuteris(); //naujas kintamasis priskirtas klasei
$naujaKaina->setKaina(1000); //nauja reikmse, kuri bus priskirta privaciam objektui
echo "Nauja kompo kaina yra:" . $naujaKaina->getKaina() . "<br />"; //isvestis i ekrana

// dar vienas

class televizorius {
    private $operacine = "Android";
    var $istrizaine = 149;
    var $spalva = "baltas";
    private $brand = "Philips";

    public function spausdina () {
        echo "Istrizaine:" . $this->istrizaine . "<br />";
        echo "TV spalva:" . $this->spalva . "<br />";
        $this->kazinau();
    }
            private function kazinau () {
                echo "Televizoriaus brand ir operacine yra:" . $this->brand . " ir " . $this->operacine . "<br /><br />";
            }
}
    $telikas = new televizorius();
    $telikas->spausdina();

//skaiicuoja iki 10

function skaiciuojaiki10 () { // skaiciavimo funkcija
    static $skaitliukas = 0; // statine reiksme pradine 0

        $skaitliukas++; //padidina satine reiksme +1

        if ($skaitliukas <= 10) { //tikrina ar statine reiksme mazesne negu 10
            echo "Dabar dirbu <br>"; //jeigu mazesne, tuomet raso sita teksta
            skaiciuojaiki10(); // vel paleidzia is naujo f-ja. tik reiksme jau bus padidinta +1
        }
            echo "F-ja atliko darba <br>"; // kai reiksme pasiekia 10, tada isveda sita uzrasa
}
skaiciuojaiki10(); // vel vykdo ta pacia funkcija 10 kartu


// dar karta bandau
function skaiciavimasIki25 () {
    static $skaicius = 0;
        $skaicius++;
            if ($skaicius <= 25) {
                echo "Working...<br />";
                skaiciavimasIki25();
            }
                echo "Jeigu baigei, dar pavaryk iki 25 <br />";
}
skaiciavimasIki25();


 ?>

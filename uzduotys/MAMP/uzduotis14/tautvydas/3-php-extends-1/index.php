<?php



class Animal {
    public $aukstis = 0;
    public $svoris = 0;
    private $zinduolis = false; // boolean: true arba false
    protected $maistas = "zole";
}

class Zuvis extends Animal {
    public $pelekai = 5;
    public $gelavandenis = null;
    public $y = "true";
    public function setMaistas ($y) {
        $this->maistas = $y;
        $this->gelavandenis = $this->y;
        echo " Bandome issivesti protected reikeme: " . $this->maistas;
    }
}

$karosas = new Zuvis();
echo "aukstis: $karosas->aukstis <br />
      svoris: $karosas->svoris   <br />
      peleku sk.: $karosas->pelekai        <br />
      ar  gelavandenis.: $karosas->gelavandenis        <br />
     ";
$karosas->setMaistas("dumblas");

     // error, nes $zinduolis - privatus
    //    $karosas->zinduolis <br />
    // errpr : protected , tai tas pats kas private- bet paveldeti iseina
    //   $karosas->maistas <br />









//

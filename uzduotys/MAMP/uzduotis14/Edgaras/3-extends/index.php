<?php

echo "<b><h1>Paveldimmas</h1><b></br>";

class Animal {
    public $ugis = 0;
    public $svoris = 0;
    private $zinduolis = false;
    protected $maistas = "zole";
}

class Zuvis extends Animal {
    public $pelekai = 5;
    public $gelavandenis = null;
    public $y = "true";
    public function setMaistas($y){
        $this->maistas = $y;
        $this->gelavandenis = $this->y;
        echo "Bandome issivesti protected reiksme" . $this->maistas;
    }

}

$karosas = new Zuvis();
    echo "ugis: $karosas->ugis <br />
          svoris: $karosas->svoris <br />
          peleku sk: $karosas->pelekai <br />
          ar gelavandenis: $karosas->gelavandenis <br />";

          $karosas->setMaistas("dumblas");
        //   ar zinduolis:: $karosas->zinduolis <br /> -- privatus
        //   ka valgo $karosas->maistas <br />

 ?>

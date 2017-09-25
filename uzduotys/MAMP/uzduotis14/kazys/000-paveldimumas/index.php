<?php

class Animal {
  public $aukstis = 0;
  public $svoris = 0;
  private $zinduolis = false;
  protected $maistas = "zole";
}

class Zuvis extends Animal {
  public $pelekai = 5;
  public $gelavandenis = null;
  public function setMaistas($x){
    $this->maistas = $x;
    echo "bandome issivesti protected reiksme: " . $this->maistas;
  }
}


$karosas = new Zuvis();
echo "aukstis: $karosas->aukstis <br />
      svoris: $karosas->svoris <br />
      pelekai: $karosas->pelekai <br />
      ar gelavandenis: $karosas->gelavandenis <br />
";
$karosas->setMaistas("dumblas <br />");
// ar zinduolis: $karosas->zinduolis <br />
// $zinduolis privatus, todel jo neleido isvesti i ekrana

// maistas: $karosas->maistas <br />
// irgi neisvesi, taciau paveldes
//private username = "tim" private password  = "dragon" public lasLogInTime
// f-jos: public login($uname $pass), kuri patikrina ar vartotojo slaptazodis yra toks kaip vartotojo
class User {
  private $username = "Tim";
  private $password = "Dragon";
  public $lasLogInTime = "2017-08-22";
  public function checkLogin($user, $pass) {
    if ($this->username === $user && $pass === $this->password) {
      echo "taip, vartotojas egzistuoja" . "<br />";
    } else {
      echo "toks vartotojas neegzistuoja" . "<br />";
    }
  }
  public function setName($n){
    $this->username = $n;
  }
  public function getName(){
    return $this->username;
  }
}
$vartotojas = new User();
$vartotojas->checkLogin("Tim", "Dragon");

// $arToksEgzistuoja = $vartotojas->checkLogin("gregor","Dragon");
// echo $arToksEgzistuoja;

class Admin extends User {
  public $userRights = "admin";
  function changedUserName($newName) {
      $this->setName($newName);
  }
  //automatiskai iskvieciama funkcija
  function __construct($x="") {

     $this->userRights = $x;
     echo "katik ponai sukurete obj";
  }
}
$administratorius = new Admin ("veikejas");
echo "vartotojo teises: $administratorius->userRights <br />";
echo "admino username: " . $administratorius->getName() .  "<br />";
$administratorius->changedUserName("Poviliukas");
echo "admino username: {$administratorius->getname()} <br />";
 ?>

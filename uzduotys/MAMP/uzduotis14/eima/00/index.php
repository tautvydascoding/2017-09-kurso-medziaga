<?php
echo "labas";
echo "<br />";
/**
 *
 */

class User {
  private $username = "tim";
  private $password = "dragon";
  public $lastLoginTime = "2017-08-02";
  public function  checkLogin($user, $pass){
    if ($user === $this->username && $pass === $this->password) {
      echo "Taip, toks vartotojas egzistuoja <br />";
    } else {
      echo "neteisingi duomenys <br />";
    }
  }
  public function setName() {

  }
}

$erelis = new User();
$erelis->checkLogin("tim", "dragon");


///

class Admin extends User {
  public $userRights = '';
  public function changeUsername($newName) {
    $this->username = $newName;
  }
  function __construct($x) {
    $this->userRights = $x;
    echo "ka tik ponai sukurete obj <br />";
  }
}
  $administratorius = new Admin("moderator <br />");
  echo "vartotojo teises: $administratorius->userRights";

 ///////
class Stalas {

  var $kojuSkaicius = 4,
$material = "medis",
$aukstis = 90,
$plotis = 80,
$paskirtis = "virtuve";

      function setAukstis($x) {
        $this->aukstis = $x;

      }
      function getAukstis() {
        return $this->aukstis;
      }
    }
$test = "tralala";
    $keturkojisStalas = new Stalas();
    echo "plotis $keturkojisStalas->plotis <br />";
    $keturkojisStalas->plotis = 150;
    echo "plotis $keturkojisStalas->plotis <br />";

    $keturkojisStalas->setAukstis(29);
    echo "aukstis: " . $keturkojisStalas->getAukstis() . "<br />";


////////////////////// REKURSIJA >>>>>>>>>>
    function skaiciuojuIki10 () {
      static $skaitliukas = 0;
      echo "funkcija skaiciuoja: " . $skaitliukas . "<br />";
      $skaitliukas++;
      if ($skaitliukas <= 10) {
        skaiciuojuIki10();
      }
    }
    skaiciuojuIki10();




    //////////////

    $algos = [380, 400, 200, 1100, 500, 350, 70];

print_r($algos);

    //rikiavimas

    for ($i=0; $i < count($algos); $i++) {
      for ($k=0; $k < count($algos) - 1; $k++) {
        if ($algos[$k] > $algos [$k + 1]) {
          $temp = $algos[$k];
          $algos[$k] = $algos[$k + 1];
          $algos[$k + 1] = $temp;
        }
        # code...
      }
    }


    print_r($algos);

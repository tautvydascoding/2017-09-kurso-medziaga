<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>PHP interface && abstract </h1>

    <?php


    interface Edit {
      // $name = "tomas";   !!! interface negali tureti kintamuju
      public function  isLogin();
      public function  changeName($a);
      public function  getName();
    }

   abstract class User {
      // abstract $lname;  //!!!  abstraktus neveikia, nes sviestas sviestuotas ()
      var $name = "Tomas",
        $password = "xxxx",
        $createdDate,
        $lastLogin;
          // abstract f-jos negalima suprogramuoti, progamuos ti ktas kas ja paveldi
        abstract public function Logout();

        function clearlastLoginTime() {
          // $this->lastLogin = date("h:i:sa");
          $this->lastLogin = 0;
        }
    }

  class Admin extends User implements Edit {
      public function isLogin() {
          // code ...
      }
      public function Logout() {
          // code ...
      }
      public function changeName($x) {
        $this->name = $x;
      }
      public function getName() {
        return $this->name;
      }
  }


 $useris = new Admin();
 echo "vartotojo vardas : " . $useris->getName() . ", $useris->password <br />";


     ?>


  </body>
</html>

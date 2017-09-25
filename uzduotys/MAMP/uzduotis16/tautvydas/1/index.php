<?php


    // define - konstantos
   define( "DB_NAME", 'savaite4');
   define( "HOST", 'localhost');
   define( "DB_USERNAME", 'tautvydasDelete');  // root
   define( "DB_PASS", 'tratata');            // root


   $connection = mysqli_connect( HOST, DB_USERNAME, DB_PASS, DB_NAME);

   if ($connection) {
       echo "Prisijungti prie DB pavyko <br>";
   } else {
       die ("ERROR: prisijungti napavyko, nes: " . mysqli_connect_error());
   }

   function getConnection() {
       global $connection;
       return $connection;
   }

   // paimti konkretu vartotoja pagal jo id
   function getUser($id) {
       $sql = "SELECT * FROM users
              WHERE id = $id";
       $rezultatai = mysqli_query(getConnection(), $sql);
       if ($rezultatai) {
           //    echo "getUser Suveike";
           // gryzusisu duomenis is DB sudedame i masyva
           $rezultatai = mysqli_fetch_assoc($rezultatai);
           return $rezultatai;
       } else {
           echo "ERROR: getUser nesuveike!!!!!!";
           return null;
       }
   }


   $vartotojas = getUser(1);
   // var_dump($vartotojas);
   // print_r ($vartotojas);
   echo "Vartotojo id: " . $vartotojas['id'] . "<br />";
   echo "Vartotojo vardas: " . $vartotojas['username'] . "<br />";
   echo "Vartotojo slaptazodis: " . $vartotojas['pass'] . "<br />";
   echo "Vartotojo el. pastas: " . $vartotojas['email'] . "<br />";
   echo "Vartotojo el. teises: " . $vartotojas['rights'] . "<br />";

 // uzduotis 2
 // sukurti f-ja createUser($uname, $password, $elpastas, $teises)
 // uzduotis 3
 // sukurti f-ja deleteUser($id)
 // uzduotis 4
 // sukurti f-ja editeUser($id, $uname, $password, $elpastas, $teises);
 // uzduotis 5
 // sukurti f-ja getUsers();










   //

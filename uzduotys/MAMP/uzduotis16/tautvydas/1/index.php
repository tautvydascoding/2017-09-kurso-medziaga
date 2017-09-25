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

      // $vartotojas = getUser(1);
      // var_dump($vartotojas);
      // print_r ($vartotojas);
      // echo "Vartotojo id: " . $vartotojas['id'] . "<br />";
      // echo "Vartotojo vardas: " . $vartotojas['username'] . "<br />";
      // echo "Vartotojo slaptazodis: " . $vartotojas['pass'] . "<br />";
      // echo "Vartotojo el. pastas: " . $vartotojas['email'] . "<br />";
      // echo "Vartotojo el. teises: " . $vartotojas['rights'] . "<br />";


   // paimti konkretu vartotoja pagal jo id
   function getNewestUser() {
       $sql = "SELECT * FROM users
              ORDER BY id DESC
              LIMIT 1";
       $rezultatai = mysqli_query(getConnection(), $sql);
       if ($rezultatai) {
           //    echo "getUser Suveike";
           // gryzusisu duomenis is DB sudedame i masyva
           $rezultatai = mysqli_fetch_assoc($rezultatai);
           return $rezultatai;
       } else {
           echo "ERROR: getUser nesuveike!!!!!!" . mysqli_error(getConnection());
           return null;
       }
   }


   $vartotojas = getNewestUser();
   echo "Vartotojo id: " . $vartotojas['id'] . "<br />";
   echo "Vartotojo vardas: " . $vartotojas['username'] . "<br />";
   echo "Vartotojo slaptazodis: " . $vartotojas['pass'] . "<br />";
   echo "Vartotojo el. pastas: " . $vartotojas['email'] . "<br />";
   echo "Vartotojo el. teises: " . $vartotojas['rights'] . "<br />";




   // uzduotis 2
   // sukurti f-ja createUser($uname, $password, $elpastas, $teises)
   function createUser($uname, $password, $elpastas, $teises) {
       $sql_string = "INSERT INTO users
                      VALUES ('', '$uname', '$password', '$elpastas', '$teises')";
        $arVeikia = mysqli_query(getConnection(), $sql_string);
        if (!$arVeikia) {  //  ($arVeikia == false)
            echo "ERROR: " . mysqli_error(getConnection());
        }
   }
   createUser('Petras', 'xxd3f', 'ada@a.lt', 'subscriber');
   $vartotojas = getUser(3);
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


// $phash = password_hash($pword, PASSWORD_DEFAULT);  // 255 chars
// $phash = md5($pword);
 // if ($arPavykoSQL == false) {
 //   echo "ERROR: xxxx() -  nepavyko: " . mysqli_error($connect) . " <br>";
 // }





// if( mysqli_num_rows($result) > 0 ) {






   //

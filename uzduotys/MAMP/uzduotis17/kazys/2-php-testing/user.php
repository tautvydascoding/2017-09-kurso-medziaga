<?php

// konstantos - define
define( "DB_NAME", 'savaite4');
define( "HOST", 'localhost');
define( "DB_USERNAME", 'kazys'); //root
define( "DB_PASS", 'fliperis'); //root


$connection = mysqli_connect (HOST, DB_USERNAME, DB_PASS, DB_NAME);

if ($connection) {
  echo "Prisijungti prie DB pavyko" . "<br />";
} else {
  die ("ERROR: 404, prisijungti nepavyko, nes: " . mysqli_connect_error($connection) . "<br />");
}



function getConnection() {
  global $connection;
  return $connection;
}

//paimti konkretu user pagal jo id
function  getUser($id) {
  $sql = "SELECT * FROM users
  where id = $id";
  $rezultatai = mysqli_query(getConnection(), $sql);
  if ($rezultatai) {
    // echo "getUser suveike" . "<br />";
    //is DB grizta obj, reikia suskaldyt i masyva - funkcija fetch_assoc
    $rezultatai = mysqli_fetch_assoc($rezultatai);
    return $rezultatai;
  } else {
    echo "getUser ERROR" . "<br />";
    return null;
  }
}

$vartotojas = getUser(2);
// var_dump($vartotojas);
// print_r($vartotojas);
echo "vartotojo id: " . $vartotojas['id'] . "<br />";
echo "vartotojo id: " . $vartotojas['username'] . "<br />";
echo "vartotojo id: " . $vartotojas['pass'] . "<br />";

//uzduotis 2 - sukurti f-ja createUser($uname, $password, $elpastas, $teises)
function createUser ($uname, $password, $elpastas) {
  // $sql = "INSERT INTO `users` values ('', '$uname', '$password', '$elpastas', '$teises')";
  // $naujasVartotojas = mysqli_query(getConnection(), $sql);
  $sql = sprintf ("INSERT INTO `users`
        VALUES ('', '%s', '%s', '%s', 'subscriber')",
        mysqli_real_escape_string(getConnection(), $uname),
        mysqli_real_escape_string(getConnection(), md5($password)),
        mysqli_real_escape_string(getConnection(), $elpastas)
        );
  $naujasVartotojas = mysqli_query(getConnection(), $sql);
  if (!$naujasVartotojas) {
    echo "ERROR: " . mysqli_error(getConnection());
  }
}
// createUser('Benji', 'Wershtainer', 'a@a.a');

//uzduotis 3 - sukurti f-ja deleteUser($id)
function deleteUser($id) {
  $sql = "DELETE FROM `users` WHERE id = $id";
  $pasalinti = mysqli_query(getConnection(), $sql);
}
// deleteUser(8);
//uzduotis 4 - sukurti f-ja editUser($id, $uname, $pass....)
function editUser ($id, $name, $password, $email, $rights) {
  $sql = "UPDATE users
  SET id = '$id',
      username = '$name',
      pass = '$password',
      email = '$email',
      rights = '$rights'
      WHERE id = $id " ;
  $koreguoti = mysqli_query(getConnection(), $sql);
}
$Benji = getUser(14);
// editUser(14, 'Lipsicas', 'Goga', 'a@mom.pl', $Benji['rights']);
//uzduotis 5 - sukurti f-ja getUsers($id, $uname, $pass....)


function getUsers($kiekis = 9999) {
  $sql = "SELECT * FROM users 
          ORDER BY id DESC
          LIMIT $kiekis;";
  $rezultatai = mysqli_query(getConnection(), $sql);
//patikrinome ar radome vartotoju ir suskaiciuoja kiek ju
  if (mysqli_num_rows($rezultatai)>0){
    // $rezultatai = mysqli_fetch_assoc($rezultatai);
    return $rezultatai;
    } else {
      echo "ERROR: " . mysqli_error(getConnection());
      return null;
    }
  }

$allUsers = getUsers(4);
if ($allUsers != null) {
  $userDate = $allUsers;
  while ($userDate) {
    $userDate = mysqli_fetch_assoc($allUsers);
    echo " vartotojo ID: " . $userDate['id'] . "<br />";
    echo " vartotojo ID: " . $userDate['username'] . "<br />";
    echo " vartotojo ID: " . $userDate['pass'] . "<br />";
    echo " vartotojo ID: " . $userDate['email'] . "<br />";
    echo " vartotojo ID: " . $userDate['rights'] . "<br />";
  }
  // print_r($allUsers);
}

// atsijungti nuo DB
mysqli_close(getConnection());

















?>

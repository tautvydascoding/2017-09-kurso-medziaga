<?php
// define - konstantos

  define ( "DB_NAME", 'savaite4');
  define ( "HOST", 'localhost');
  define ( "DB_USERNAME", 'eima');
  define ( "DB_PASS", 'eima123');


  $connection = mysqli_connect( HOST, DB_USERNAME, DB_PASS, DB_NAME );

  if ($connection) {
    echo "prisijungti prie DB pavyko <br />";
  } else {
    die ("Error: Nepavyko prisijungti prie DB, nes: " . mysqli_connect_error()) . "<br />";
  }

  function getConnection() {
    global $connection;
    return $connection;
  }



  // paimti konkrentu vartotoja pagal jo id

    function getUser($id) {
      $sql = "SELECT * FROM users WHERE id=$id";
      $rezultatai = mysqli_query (getConnection(), $sql );
      if ($rezultatai) {
        echo "getUser suveike ";

        /// gryzusius duomenis is DB sudedame i masyva
        $rezultatai = mysqli_fetch_assoc($rezultatai);
        return $rezultatai;
      } else {
        echo "error: nepavyko prisijungti getUser <br />";
        return NULL;
      }
    }

    $vartotojas = getUser(1);

    echo "Vartotojo id: " . $vartotojas['id'] . "<br />";
    echo "Vartotojo vardas: " . $vartotojas['username'] . "<br />";
    echo "Vartotojo slaptazodis: " . $vartotojas['pass'] . "<br />";
    echo "Vartotojo el. pastas: " . $vartotojas['email'] . "<br />";
    echo "Vartotojo teises: " . $vartotojas['rights'] . "<br />";



    //sukurti f-ja
    // createUser($uname, $password, $elpastas);
    function createUser($uname, $password, $elpastas ) {
      // $sqlCreate = "INSERT INTO users VALUES ('', '$uname', '$password', '$elpastas', '$teises');";
      $sqlCreate = sprintf("INSERT INTO users VALUES ('', '%s', '%s', '%s', 'subscriber')",
        mysqli_real_escape_string (getConnection(), $uname),
        mysqli_real_escape_string (getConnection(), md5($password)),
        mysqli_real_escape_string (getConnection(), $elpastas)

      );



      mysqli_query (getConnection(), $sqlCreate );
    }



      createUser('blahas', '789456', 'b@bla.lt');




/// sukurti fja deleteUser($id)
    function deleteUser($id) {
      $sqlDelete = "DELETE FROM users WHERE id=$id";
      mysqli_query ( getConnection(), $sqlDelete );
    }
    $delVartotoja = deleteUser(13);

    //


function getUsers() {
  $sql_text = "SELECT * FROM users;";
  $rezultatai = mysqli_query(getConnection(), $sql_text);
// patikrina ar radome vartotoju
  if (mysqli_num_rows($rezultatai) > 0) {
    return $rezultatai;
  } else {
    echo "error: " . mysqli_error(getConnection());
    return null;
  }
}

$allUsers = getUsers();
if ($allUsers != null) {
  //dirbsim
  while ( mysqli_fetch_row($allUsers) ) {
    $x = mysqli_fetch_assoc($allUsers);
    echo "vartotojo id: " . $x['id'] . "<br />";
    echo "vartotojo id: " . $x['username'] . "<br />";
    echo "vartotojo id: " . $x['pass'] . "<br />";
    echo "vartotojo id: " . $x['email'] . "<br />";
    echo "vartotojo id: " . $x['rights'] . "<br />";

  }

}

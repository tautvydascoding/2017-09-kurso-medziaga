<?php


   define( "DB_NAME", 'issitaskyk');
   define( "HOST", 'localhost');
   define( "DB_USERNAME", 'root');  // root
   define( "DB_PASS", '');     // root


   $connection = mysqli_connect( HOST, DB_USERNAME, DB_PASS, DB_NAME);

   if ($connection) {
   } else {
       die ("ERROR: prisijungti napavyko, nes: " . mysqli_connect_error());
   }

   function getConnection() {
       global $connection;
       return $connection;
   }

   function getUser($id) {
       $sql = "SELECT * FROM users
              WHERE id = $id";
       $rezultatai = mysqli_query(getConnection(), $sql);
       if ($rezultatai) {
           $rezultatai = mysqli_fetch_assoc($rezultatai);
           return $rezultatai;
       } else {
           echo "ERROR: getUser nesuveike!!!!!!";
           return null;
       }
   }

   function getNewestUser() {
       $sql = "SELECT * FROM users
              ORDER BY id DESC
              LIMIT 1";
       $rezultatai = mysqli_query(getConnection(), $sql);
       if ($rezultatai) {
           $rezultatai = mysqli_fetch_assoc($rezultatai);
           return $rezultatai;
       } else {
           echo "ERROR: getUser nesuveike!!!!!!" . mysqli_error(getConnection());
           return null;
       }
   }


   function createUser($uname, $password, $elpastas ) {
       $sql_string = sprintf("INSERT INTO users
                          VALUES ('', '%s', '%s', '%s', 'subscriber')",
                            mysqli_real_escape_string (getConnection(), $uname),
                            mysqli_real_escape_string (getConnection(),  password_hash($password, PASSWORD_DEFAULT) ),
                            mysqli_real_escape_string (getConnection(), $elpastas)
                     );

        $arVeikia = mysqli_query(getConnection(), $sql_string);
        if (!$arVeikia) {  //  ($arVeikia == false)
            echo "ERROR: " . mysqli_error(getConnection());
        }
   }

   function deleteUser ($x) {
       $sql_text =  "DELETE FROM users WHERE id = $x";
       $arPavykoSQL = mysqli_query(getConnection(), $sql_text);
       if (!$arPavykoSQL) {  //  ($arVeikia == false)
           echo "ERROR: " . mysqli_error(getConnection());
       }
   }


   function editUser($id, $name, $password, $email, $rights) {
       $sql_text = " UPDATE users
                     SET id = '$id',
                         username = '$name',
                        pass = '$password',
                        email = '$email',
                        rights = '$rights'
                    WHERE id = $id " ;
       $arPavykoSQL = mysqli_query(getConnection(), $sql_text);
       if (!$arPavykoSQL) {  //  ($arVeikia == false)
           echo "ERROR: " . mysqli_error(getConnection());
       }
   }

   function getUsers($kiekis = 999999) {
       $sql_text = "SELECT * FROM users
                    ORDER BY id ASC
                    LIMIT $kiekis;";
       $rezultatai = mysqli_query(getConnection(), $sql_text);
       if (mysqli_num_rows($rezultatai) > 0 ) {
            return $rezultatai;
       } else {
           echo "ERROR: " . mysqli_error(getConnection());
           return null;
       }
   }


function existUserName($x) {
    $sql_text = "SELECT username FROM users
                    WHERE username = '$x'";
    $arRado = mysqli_query(getConnection(), $sql_text);
    // jeigu tokio vardo nerado
    if (mysqli_num_rows($arRado) > 0 ) {
        echo mysqli_error(getConnection());
        return true;
    } else {
        echo mysqli_error(getConnection());
        return false;
    }
}


   ?>

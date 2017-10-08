<?php


   define( "DB_NAME", 'finalproject');
   define( "HOST", 'localhost');
   define( "DB_USERNAME", 'root');  // root
   define( "DB_PASS", 'root');     // root


   $connection = mysqli_connect( HOST, DB_USERNAME, DB_PASS, DB_NAME);

   if ($connection) {
   } else {
       die ("ERROR failed to connect: " . mysqli_connect_error());
   }

   function getConnection() {
       global $connection;
       return $connection;
   }

   function getUser($id) {
       $sql = "SELECT * FROM users
              WHERE id = $id";
       $stuff = mysqli_query(getConnection(), $sql);
       if ($stuff) {
           $stuff = mysqli_fetch_assoc($stuff);
           return $stuff;
       } else {
           echo "ERROR: getUser failed!";
           return null;
       }
   }

   function getNewestUser() {
       $sql = "SELECT * FROM users
              ORDER BY id DESC
              LIMIT 1";
       $stuff = mysqli_query(getConnection(), $sql);
       if ($stuff) {
           $stuff = mysqli_fetch_assoc($stuff);
           return $stuff;
       } else {
           echo "ERROR: getUser failed!" . mysqli_error(getConnection());
           return null;
       }
   }


   function createUser($userName, $password, $eMail ) {
       $sql_string = sprintf("INSERT INTO users
                          VALUES ('', '%s', '%s', '%s', 'subscriber')",
                            mysqli_real_escape_string (getConnection(), $userName),
                            mysqli_real_escape_string (getConnection(),  password_hash($password, PASSWORD_DEFAULT) ),
                            mysqli_real_escape_string (getConnection(), $eMail)
                     );

        $success = mysqli_query(getConnection(), $sql_string);
        if (!$success) {  //  ($success == false)
            echo "ERROR: " . mysqli_error(getConnection());
        }
   }

   function deleteUser ($x) {
       $sql_text =  "DELETE FROM users WHERE id = $x";
       $success = mysqli_query(getConnection(), $sql_text);
       if (!$success) {  //  ($success == false)
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
       $success = mysqli_query(getConnection(), $sql_text);
       if (!$success) {  //  ($success == false)
           echo "ERROR: " . mysqli_error(getConnection());
       }
   }

   function getUsers($kiekis = 9999) {
       $sql_text = "SELECT * FROM users
                    ORDER BY id ASC
                    LIMIT $kiekis;";
       $stuff = mysqli_query(getConnection(), $sql_text);
       if (mysqli_num_rows($stuff) > 0 ) {
            return $stuff;
       } else {
           echo "ERROR: " . mysqli_error(getConnection());
           return null;
       }
   }


function existUserName($x) {
    $sql_text = "SELECT username FROM users
                    WHERE username = '$x'";
    $ifFound = mysqli_query(getConnection(), $sql_text);
    // jeigu tokio vardo nerado
    if (mysqli_num_rows($ifFound) > 0 ) {
        echo mysqli_error(getConnection());
        return true;
    } else {
        echo mysqli_error(getConnection());
        return false;
    }
}


   ?>

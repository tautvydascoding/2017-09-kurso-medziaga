<?php

    define("DB_NAME", 'savaite4');
    define("HOST", 'localhost');
    define("DB_USER", 'root');
    define("DB_PASS", 'root');

    $connection = mysqli_connect(HOST, DB_USER, DB_PASS, DB_NAME);
    if($connection){
        echo "Pavyko prisijungti prie DB: " . DB_NAME . "<br>";
    } else {
        die("ERROR: prisijungti nepavyko, nes: " . mysqli_connect_error());
    }

function getConnection() {
    global $connection;
    return $connection;
}

//paimti konkretu vartotoja pagal jo id
//function getUser($id) {
//    $sql = "SELECT * FROM users WHERE id = $id";
//    $rezultatai = mysqli_query(getConnection(), $sql);
//    if ($rezultatai) {
//        echo "getUser suveike <br>";
//        $rezultatai = mysqli_fetch_assoc($rezultatai);
//        return $rezultatai;
//    } else {
//        echo "ERROR: getUser nesuveike!!!!!";
//        return null;
//    }
//}

//$vartotojas = getUser(1);
//echo "Vartotojo id: " . $vartotojas['id'] . "<br>";
//echo "Vartotojo username: " . $vartotojas['username'] . "<br>";
//echo "Vartotojo pass: " . $vartotojas['pass'] . "<br>";
//echo "Vartotojo email: " . $vartotojas['email'] . "<br>";
//echo "Vartotojo email: " . $vartotojas['rights'] . "<br>";

//uzduotis 2
// sukurti f-ja createUser

//function createUser($username, $password, $email, $rights){
//    $sql_insert = "INSERT INTO users VALUES ('', '$username', '$password', '$email', '$rights')";
//    $arVeikia = mysqli_query(getConnection(), $sql_insert);
//    if (!$arVeikia) {
//        echo "Error: " . mysqli_error(getConnection());
//    }
//}
//createUser('Ema', 'dingding', 'ema@mail.com', 'admin');


//kitas variantas:

// sukurti f-ja createUser
//
//function createUser($username, $password, $email){
//$sql_insert = sprintf("INSERT INTO users
//                        VALUES ('', '%s', '%s', '%s', 'subscriber')",
//                        mysqli_real_escape_string(getConnection(), $username),
//                        mysqli_real_escape_string(getConnection(), password_hash(($password), PASSWORD_DEFAULT)),
//                        mysqli_real_escape_string(getConnection(), $email)
//                        );
//    $arVeikia = mysqli_query(getConnection(), $sql_insert);
//    if (!$arVeikia) {
//        echo "Error: " . mysqli_error(getConnection());
//    }
//}
//createUser('K/aro\lis', 'din]\\\gding', 'karolis@mail.com');
//
//
// function editUser($id, $name, $password, $email, $rights){
//     $qll_text = " UPDATE users SET id ='$id',
//                         username= '$name',
//                         pass= '$password',
//                         email= '$email',
//                         rights ='$rights'
//                         WHERE id = $id " ;
//     $arPavykoSQL = mysqli_query(getConnection(), $qll_text);
//     if (!$arPavykoSQL) { //arVeikia == false)
//         echo "ERROR: " . mysqli_error(getConnection());
//     }
// }
//$petras = getUser(6);
//editUser ('Karolis', $petras['pass'], $petras['mail'], $petras['rights']);
// editUser(6, 'Ieva', 'tratra', 'ieva@mail.com', 'admin');

//paimti konkretu vartotoja
///

//delete user
//function deleteUser($x) {
//    $sql_delete = "DELETE FROM users WHERE id = $x";
//    $arVeikia = mysqli_query(getConnection(), $sql_delete);
//    if (!$arVeikia) {
//        echo "Error: " . mysqli_error(getConnection());
//    }
//}
//
//deleteUser(4);


//uzduotis 5 getUsers()
function getUsers() {
    $sql_text = "SELECT * from users;";
    $rezultatai = mysqli_query(getConnection(), $sql_text);
    //patikrinam ar radome vartotoju
    //mysql_num_rows - suskaiciuoja kiek rado rezultatu
    if (mysqli_num_rows($rezultatai) > 0 ) {
        return $rezultatai;
    } else {
        echo "ERROR: " . mysqli_error(getConnection());
        return null;
    }
}

$allUsers = getUsers();
//
if($allUsers != null) {
    //mysqli_fetch_row - grizusius duomenis is DB sudeda i masyva
$userData = mysqli_fetch_array($allUsers);
    while ($userData) {
        //mysqli_fetch_assoc - duomenis sudeda i masyva ()
        echo "vartotojo id: " . $userData['id'] . "<br />";
        echo "vartotojo vardas: " . $userData['username'] . "<br />";
        echo "vartotojo slaptazodis: " . $userData['pass'] . "<br />";
        echo "vartotojo el. pastas: " . $userData['email'] . "<br />";
        echo "vartotojo teises: " . $userData['rights'] . "<br />";
        echo "================================================<br /> <br />";
        $userData = mysqli_fetch_array($allUsers);
    }
    // mysqli_free_result($result);
}

mysqli_close(getConnection());
?>

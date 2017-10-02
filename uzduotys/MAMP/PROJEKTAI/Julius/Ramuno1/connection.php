<?php
define("HOST", 'localhost');
define("DB_USERNAME", 'julius');
define("DB_PASS", 'slaptazodis');
define("DB_NAME", 'projektui');
                           $connection = mysqli_connect(HOST,DB_USERNAME,DB_PASS,DB_NAME);
                    mysqli_set_charset($connection,"utf8");
                           if($connection) {
//    echo "SITAS TEKSTAS IS DUOMBAZES";
} else {
    die ("nepavyko prisijungti prie serverio: " . mysqli_connect_error());
}
         function getConnection() {
    global $connection;
             
    return $connection;
             
    
}       
?>
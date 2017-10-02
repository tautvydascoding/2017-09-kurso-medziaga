<?php 


    $db ['db_host'] = "localhost";
$db ['db_user'] = "root";
$db ['db_pass'] = "";
$db ['db_name'] = "email_db";
foreach($db as $key => $value){
     
    define(strtoupper($key), $value);
}  
global $db_connect;
  $dbConnect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if (!$dbConnect){
        die("Connection failed");
    }else {
        
    }


?>
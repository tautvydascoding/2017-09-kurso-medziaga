<?php
define( "DB_NAME", 'projectbetavai');
define( "HOST", 'localhost');
define( "DB_USERNAME", 'root');  // root
define( "DB_PASS", 'root');            // root
$connection = mysqli_connect( HOST, DB_USERNAME, DB_PASS, DB_NAME);

if ($connection) {
  echo "Prisijungti prie DB pavyko <br>";
} else {
  die ("ERROR: prisijungti napavyko, nes: " . mysqli_connect_error());
}
mysqli_set_charset($connection,"utf8");
function getConnection() {
    global $connection;
    return $connection;
}

function showMenu($x) {
  $sql = "SELECT rusys FROM galerijatikra WHERE id = ".(int)$x;
  $results = mysqli_query(getConnection(), $sql);
  if ($results) {
     $results = mysqli_fetch_assoc($results);
    return $results["rusys"];
 }
 }
$a = showMenu(1);
echo $a;

 ?>

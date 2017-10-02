<?php

define( "DB_NAME", 'maxwebpage');
define( "HOST", 'localhost');
define( "DB_USERNAME", 'root');
define( "DB_PASS", '');

$db = mysqli_connect( HOST, DB_USERNAME, DB_PASS, DB_NAME);
if ($db) {
  // echo "prisijungti pavyko";
} else {
  echo "Prisijungti nepavyko";
}

 mysqli_set_charset($db,"utf8");

function getConnection() {
  global $db;
  return $db;
}

function getAllProducts() {
  $sql = "SELECT * FROM img left JOIN goods ON img.goods_id = goods.id";
  $results = mysqli_query(getConnection(), $sql);
  if ($results) {
    while ($product = mysqli_fetch_array($results)) {
      $url = $product['url'];
      $content = $product['content'];
      $price = $product['price'];
      echo "<div class='col-md-4' >
        <div class='f1_container'>
          <div class='f1_card'>
            <div class=' face'>
              <img src='$url'>
            </div>
            <div class='back face'>
                <p style='font-size: 3.50vh;'>
                $content Kaina $price Eur
                </p>
            </div>
          </div>
        </div>
      </div>";
      }
    }
}

 function showArticle($x) {
   $sql = "SELECT * FROM content WHERE id = ".(int)$x;
   $results = mysqli_query(getConnection(), $sql);
   if ($results) {
     $results = mysqli_fetch_assoc($results);
     return $results['article'];
   }
 }
$article = ShowArticle(1);

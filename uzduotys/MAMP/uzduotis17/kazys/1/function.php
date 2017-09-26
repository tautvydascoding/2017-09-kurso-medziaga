<?php

define("DB_NAME", 'savaite4');
define("HOST", 'localhost');
define("DB_USERNAME", 'kazys');
define("DB_PASS", "fliperis");

$connection = mysqli_connect (HOST, DB_USERNAME, DB_PASS, DB_NAME);

if ($connection) {
  echo "Prisijungti pavyko!" . "<br />";
} else {
  echo "NEPAVYKO prisijungti" . "<br />";
}

function getConnection() {
  global $connection;
  return $connection;
}
// 1.1. uzduotis sukurti funkcija getArticle($id);

function getArticle($id) {
  $sql = "SELECT * FROM articles WHERE id=$id";
  $straipsnis = mysqli_query(getConnection(), $sql);
  if ($straipsnis) {
  $straipsnis = mysqli_fetch_assoc($straipsnis);
  return $straipsnis;
  } else {
  echo "getArticle ERROR <br />";
  }
}
$articles = getArticle(1);

echo "title: " . $articles['title'] . "<br />";
echo "content: " . $articles['content'] . "<br />";




// 1.2.uzduotis sukurti getArticleByUserId($id); grazina straipsni pagal user_id
function getArticleById($user_id) {
  $sql = "SELECT content FROM articles WHERE user_id=$user_id";
  $straipsnis = mysqli_query(getConnection(), $sql);
  if ($straipsnis) {
  $straipsnis = mysqli_fetch_assoc($straipsnis);
  return $straipsnis;
  } else {
  echo "getArticle ERROR <br />";
  }
}
$articles = getArticleById(3);

echo "content: " . $articles['content'] . "<br />";
// 2 uzduotis sukurti f-ja createArticle()

function createArticle($title, $content, $date, $user_id){
  $sql = "INSERT INTO `articles` VALUES ('', '$title', '$content', NOW(), '$user_id');";
  $naujasStraipsnis = mysqli_query(getConnection(), $sql);
  if (!$naujasStraipsnis) {
    echo "ERROR: " . mysqli_error(getConnection());
  }
}
// createArticle('Veronikas Marselietis', 'Vaikai zaidimu aiksteleje pagave maza anciuka, si kankino lyg kokie bestuburiai buozgalviai, beprotiskai ir nesuvokiamai paneigdami bet kokius gamtos suvokiamas bla bla bla', 'NOW()', '4');
// 3 uzduotis sukurti f-ja deleteArticle()
function deleteArticle ($user_id) {
  $sql = "DELETE FROM `articles` WHERE id=$user_id";
  $istrinti = mysqli_query(getConnection(), $sql);
}
// deleteArticle(2);
// 4 uzduotis sukurti f-ja editArticle()
function editArticle($id, $title, $content, $date, $user_id) {
  $sql = "UPDATE articles SET
          id = '$id',
          title = '$title',
          content = '$content',
          date = '$date',
          user_id = '$user_id'
          WHERE id=$id";
  $pataisyti = mysqli_query(getConnection(), $sql);
  if (!$pataisyti) {
    echo "ERROR: " . mysqli_error(getConnection());
  }
}
// $taisomPagalSi = getArticle(3);
// editArticle($taisomPagalSi['id'], 'Malunas', 'Zaide velnias ant malunu sparnu, niekam nereikejo buti paiku, kad suprasti viena fakta, velnias laimejo kara de fakto', 'NOW()', '5');

// 5 uzduotis sukurti f-ja getArticles()
function getArticles($kiekis = 100) {
  $sql = "SELECT * FROM articles";
  $visasTurinys = mysqli_query(getConnection(), $sql);
}
$allArticles = getArticles();
if ($allArticles != null) {
                                //     // mysqli_fetch_row -  duomenis (is sekancios eilutes) sudeda i masyva (paprasta [0])
                                //     // mysqli_fetch_assoc - duomenis (is sekancios eilutes) sudeda i  masyva  ['id']
                                //     // mysqli_fetch_array - duomenis (is sekancios eilutes) sudeda i  masyva  ['id'] ir paprasta [0]
    $straipsnis = mysqli_fetch_assoc($allArticles);
     while ($straipsnis) {
             echo "ID: " . $straipsnis['id'] . "<br />";
             echo "<h2>Antraste: " . $straipsnis['title'] . "</h2><br />";
             echo "<i>" . $straipsnis['content'] . "</i><br />";
             echo "Data: " . $straipsnis['date'] . "<br />";
             echo "Autoriaus id: " . $straipsnis['user_id'] . "<br />";
             echo " ===============================================<br /><br />";
              $straipsnis = mysqli_fetch_array(  $allArticles  ); // imame sekancios eilutes duomenis
     }
}
// atsijunget nuo DB
mysqli_close(getConnection());


//
?>

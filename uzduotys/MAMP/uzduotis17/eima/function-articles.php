<?php

    // define - konstantos
   define( "DB_NAME", 'savaite4');
   define( "HOST", 'localhost');
   define( "DB_USERNAME", 'eima');  // root
   define( "DB_PASS", 'eima123');            // root

   $connection = mysqli_connect( HOST, DB_USERNAME, DB_PASS, DB_NAME);

   if ($connection) {
       echo "Prisijungti prie DB pavyko <br>";
   } else {
       die ("ERROR: prisijungti napavyko, nes: " . mysqli_connect_error());
   }

   function getConnection() {
       global $connection;
       return $connection;
   }

// uzduotis 1.1
// sukurti f-ja getArticle($id);
function getArticle($id) {
    $sql = "SELECT * FROM articles
           WHERE id = $id";
    $rezultatai = mysqli_query(getConnection(), $sql);
    if ($rezultatai) {
        //    echo "getUser Suveike";
        // gryzusisu duomenis is DB sudedame i masyva
        $rezultatai = mysqli_fetch_assoc($rezultatai);
        return $rezultatai;
    } else {
        echo "ERROR: getArticle nesuveike!!!!!!";
        return null;
    }
}

      $straipsnis = getArticle(1);
      // var_dump($straipsnis);
      // print_r ($straipsnis);
      echo "article id: " . $straipsnis['id'] . "<br />";
      echo "article title: " . $straipsnis['title'] . "<br />";
      echo "article content: " . $straipsnis['content'] . "<br />";
      echo "article date: " . $straipsnis['date'] . "<br />";
      echo "article userid: " . $straipsnis['user_id'] . "<br />";

// uzduotis 1.2
 // grazina straipnsni pagal autoriaus ID
// sukurti f-ja getArticleByUserId($id);

function getArticleByUserId($id) {
    $sql = "SELECT * FROM articles
           WHERE user_id = $id";
    $rezultatai = mysqli_query(getConnection(), $sql);
    if ($rezultatai) {
        //    echo "getUser Suveike";
        // gryzusisu duomenis is DB sudedame i masyva
        $rezultatai = mysqli_fetch_assoc($rezultatai);
        return $rezultatai;
    } else {
        echo "ERROR: getArticleByUserId nesuveike!!!!!!";
        return null;
    }
}

      $straipsnis = getArticleByUserId(3);
      // var_dump($straipsnis);
      // print_r ($straipsnis);
      echo "article id: " . $straipsnis['id'] . "<br />";
      echo "article title: " . $straipsnis['title'] . "<br />";
      echo "article content: " . $straipsnis['content'] . "<br />";
      echo "article date: " . $straipsnis['date'] . "<br />";
      echo "article userid: " . $straipsnis['user_id'] . "<br />";


 // uzduotis 2
 // sukurti f-ja createArticle( )
 function createArticle($title, $content, $userId ) {
  //    $sql_string = "INSERT INTO users
  //                   VALUES ('', '$uname', '$password', '$elpastas')";
     // ARBA SAUGIAU
     $sql_string = sprintf("INSERT INTO articles
                        VALUES ('', '%s', '%s', NOW(), '%s')",
                          mysqli_real_escape_string (getConnection(), $title),
                          // mysqli_real_escape_string (getConnection(), md5($password)),
                          mysqli_real_escape_string (getConnection(), $content),
                          mysqli_real_escape_string (getConnection(), $userId)
                   );
      $arVeikia = mysqli_query(getConnection(), $sql_string);
        if (!$arVeikia) {  //  ($arVeikia == false)
              echo "ERROR: " . mysqli_error(getConnection());
               }
          }
              // createArticle('Kaip miske isgyventi', 'daug  daug teksto kazkokio cia yra Lorem' , '3' );




 // uzduotis 3
 // sukurti f-ja deleteArticle( )
 function deleteArticle ($x) {
     $sql_text =  "DELETE FROM articles WHERE id = $x";
     $arPavykoSQL = mysqli_query(getConnection(), $sql_text);
     if (!$arPavykoSQL) {  //  ($arVeikia == false)
         echo "ERROR: " . mysqli_error(getConnection());
     }
 }
 // deleteArticle(5);



 // uzduotis 4
 // sukurti f-ja editeArticle(  );

 function editArticle($id, $title, $content, $date, $userId) {
     $sql_text = " UPDATE articles
                   SET id = '$id',
                       title = '$title',
                      content = '$content',
                      date = '$date',
                      user_id = '$userId'
                  WHERE id = $id " ;
     $arPavykoSQL = mysqli_query(getConnection(), $sql_text);
     if (!$arPavykoSQL) {  //  ($arVeikia == false)
         echo "ERROR: " . mysqli_error(getConnection());
     }
 }
 $editintaArticle = getArticle(4);
 editArticle($editintaArticle['id'], 'Kaip isgyventi miske2', $editintaArticle['content'], date('Y-m-d'), $editintaArticle['user_id']);
 // editUser(6, 'Karolis','Karolis','Karolis','Karolis');


echo " ===============================================<br /><br />";
 // uzduotis 5
 // sukurti f-ja getArticles();
 function getArticles($kiekis = 99999) {
     $sql_text = "SELECT * FROM articles
                  ORDER BY id DESC
                  LIMIT $kiekis;";
     $rezultatai = mysqli_query(getConnection(), $sql_text);
     // patikriname ar radome vartotoju
     // mysqli_num_rows - suskaiciuoja kiek rado rezultatu
     if (mysqli_num_rows($rezultatai) > 0 ) {
          return $rezultatai;
     } else {
         echo "ERROR: " . mysqli_error(getConnection());
         return null;
     }
 }
 $allArticles = getArticles( );
 // tikriname ar DB radome vartotoju - ar turime duomenu
 if ($allArticles != null) {
     // mysqli_fetch_row -  duomenis (is sekancios eilutes) sudeda i masyva (paprasta [0])
     // mysqli_fetch_assoc - duomenis (is sekancios eilutes) sudeda i  masyva  ['id']
     // mysqli_fetch_array - duomenis (is sekancios eilutes) sudeda i  masyva  ['id'] ir paprasta [0]
     $articleData = mysqli_fetch_array($allArticles);
      while ($articleData) {
              echo " straipsnio id: " . $articleData[0] . "<br />";
              echo " <h2>straipsnio title: " . $articleData['title'] . "</h2><br />";
              echo " straipsnio content: " . $articleData['content'] . "<br /><br />";
              echo " <i>straipsnio data: " . $articleData['date'] . "</i><br />";
              echo " straipsnio kurejo id: " . $articleData['user_id'] . "<br /><br />";
              echo " ===============================================<br /><br />";
              // mysqli_fetch_row -  duomenis (is sekancios eilutes) sudeda i masyva (paprasta [0])
              // mysqli_fetch_assoc - duomenis (is sekancios eilutes) sudeda i  masyva  ['id']       // mysqli_fetch_array - duomenis (is sekancios eilutes) sudeda i  masyva  ['id'] ir paprasta [0]

              $articleData = mysqli_fetch_array($allArticles);
      }
 }
 // atsijunget nuo DB
 mysqli_close(getConnection());

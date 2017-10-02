<?php

    define("DB_NAME", 'api_db');
    define("HOST", 'localhost');
    define("DB_USER", 'root');
    define("DB_PASS", 'root');

    $connection = mysqli_connect(HOST, DB_USER, DB_PASS, DB_NAME);
    if($connection){
        // do nothing
    } else {
        die("ERROR: prisijungti nepavyko, nes: " . mysqli_connect_error());
    }

    mysqli_set_charset($connection,"utf8");


    function getConnection() {
        global $connection;
        return $connection;
    }


  // get article by id 
  function getArticle($id) {
       $sql = "SELECT * FROM articles
              WHERE id = $id";
       $article = mysqli_query(getConnection(), $sql);
       if ($article) {
           $article = mysqli_fetch_assoc($article);
           return $article;
       } else {
           echo "ERROR: straipsnio paėmimas neįvyko!";
           return null;
       }
  }

  ?>

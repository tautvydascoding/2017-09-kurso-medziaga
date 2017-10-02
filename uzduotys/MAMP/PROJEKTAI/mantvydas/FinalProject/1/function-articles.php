<?php

function getLivingArticles($ammount = 9999) {
    $sql_text = "SELECT * FROM articlesliving
                 ORDER BY id ASC
                 LIMIT $ammount;";
    $stuff = mysqli_query(getConnection(), $sql_text);
    if (mysqli_num_rows($stuff) > 0 ) {
         return $stuff;
    } else {
        echo "ERROR: " . mysqli_error(getConnection());
        return null;
    }
}


function getExteriorArticles($ammount = 9999) {
    $sql_text = "SELECT * FROM articlesexterior
                 ORDER BY id ASC
                 LIMIT $ammount;";
    $stuff = mysqli_query(getConnection(), $sql_text);
    // patikriname ar radome vartotoju
    // mysqli_num_rows - suskaiciuoja kiek rado rezultatu
    if (mysqli_num_rows($stuff) > 0 ) {
         return $stuff;
    } else {
        echo "ERROR: " . mysqli_error(getConnection());
        return null;
    }
}


function getDiningArticles($ammount = 9999) {
    $sql_text = "SELECT * FROM articlesdining
                 ORDER BY id ASC
                 LIMIT $ammount;";
    $stuff = mysqli_query(getConnection(), $sql_text);
    // patikriname ar radome vartotoju
    // mysqli_num_rows - suskaiciuoja kiek rado rezultatu
    if (mysqli_num_rows($stuff) > 0 ) {
         return $stuff;
    } else {
        echo "ERROR: " . mysqli_error(getConnection());
        return null;
    }
}


function getWorkplaceArticles($ammount = 9999) {
    $sql_text = "SELECT * FROM articlesworkplace
                 ORDER BY id ASC
                 LIMIT $ammount;";
    $stuff = mysqli_query(getConnection(), $sql_text);
    // patikriname ar radome vartotoju
    // mysqli_num_rows - suskaiciuoja kiek rado rezultatu
    if (mysqli_num_rows($stuff) > 0 ) {
         return $stuff;
    } else {
        echo "ERROR: " . mysqli_error(getConnection());
        return null;
    }
}
// mysqli_close(getConnection());

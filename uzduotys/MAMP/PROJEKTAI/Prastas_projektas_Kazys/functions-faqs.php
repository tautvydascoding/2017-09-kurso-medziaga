<?php

define("HOST", 'localhost');
define("DB_USERNAME", 'root');
define("DB_PASS", 'root');
define("DB_NAME", 'faqs');

$connection = mysqli_connect(HOST, DB_USERNAME, DB_PASS, DB_NAME);
if ($connection) {
  // echo "prisijungti pavyko<br />";
} else {
  die ("error: prisijungti nevyko nes: " . mysqli_connect_error());
}

function getConnection() {
  global $connection;
  return $connection;
}

function getAnswer ($id) {
  $sql = "SELECT question, answer FROM faqs
          WHERE id = $id";
  $answer = mysqli_query(getConnection(), $sql);
  if ($answer) {
    $answer = mysqli_fetch_assoc($answer);
    return $answer;
  } else {
    echo "ERROR: getAnswer nesuveike";
    return null;
  }
}

// $faqs = getAnswer(1);
// echo "Question: " . $faqs['question'] . "<br />";
// echo "Answer: " . $faqs['answer'] . "<br />";

function createFaq ($question, $answer) {
  $sql = sprintf("INSERT INTO faqs
                  VALUES ('', '%s', '%s')",
                    mysqli_real_escape_string (getConnection(), $question),
                    mysqli_real_escape_string (getConnection(), $answer)
                  );
                  $arveikia = mysqli_query(getConnection(), $sql);
                  if (!$arveikia) {
                    echo "ERROR: " . mysqli_error(getConnection());
                  }
}

// createFaq('Is it possible to make different color balayage?', 'There is no limits, the only limit is your fantasy. Check our gallery for examples');

function deleteFaq($id) {
  $sql = "DELETE FROM faqs WHERE id=$id";
  $deleted = mysqli_query(getConnection(), $sql);
}
deleteFaq(3);

function updateFaq($id, $question, $answer){
  $sql = "UPDATE faqs
          SET id = '$id,
              answer = '$answer',
              question = '$question'
          WHERE id = $id ";
  $updated = mysqli_query(getConnection(), $sql);
}


function getFaqs($quantity = 9999) {
  $sql = "SELECT * FROM faqs
  ORDER BY id ASC
  LIMIT $quantity";
  $getAllFaqs = mysqli_query(getConnection(), $sql);
  if (mysqli_num_rows($getAllFaqs) > 0 ) {
       return $getAllFaqs;
  } else {
      echo "ERROR: " . mysqli_error(getConnection());
      return null;
  }
}



 ?>

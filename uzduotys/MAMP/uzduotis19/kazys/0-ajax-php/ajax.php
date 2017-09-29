<?php
include('./function-users.php');
include('./function-articles.php');
$straipsnis = getArticle(1);

if(isset($_GET['action']) && !empty($_GET['action'])) {
    echo json_encode($straipsnis);
}


?>

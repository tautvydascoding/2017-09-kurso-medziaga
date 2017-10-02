

<?php
    include('./function-users.php');
    include('./function-articles.php');

    $straipsnis = getArticle(1);

     if(isset($_GET['action']) && !empty($_GET['action'])) {
        //  $duom =  array("xx"=>"testuoju testuoju") ;
         echo json_encode($straipsnis); // sita reiksme grazina ajax
    }

?>

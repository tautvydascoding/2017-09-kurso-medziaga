<?php
echo "<h1> Uzsiregistravo :</h1>";
$vardas= $_POST["name"];
$zinute= "";
if (strlen($vardas)<=3)  {
    $zinute = "vardas per trumpas!";
} else {
    $zinute= "liuks";
}
echo $zinute; 
//print_r($_POST);
?>
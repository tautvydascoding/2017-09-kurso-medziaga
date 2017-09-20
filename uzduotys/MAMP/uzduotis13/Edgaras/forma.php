<?php

echo "<h1>Uzsiregistravo :</h1>";


$vardas = $_POST["name"]; // pasirenkam laukelis
$vardas = trim($vardas); //trinam tarpus


// tikrinam ar vardas ne per trumpas
if (strlen($vardas)<=3) {
    $zinute = "Įvestas vardas per trumpas!";

}else {
    $zinute = "Šaunuolis!";
}
// lyginam pasvordus
$kodas1 = $_POST["password1"];
$kodas2 = $_POST["password2"];
$kodas1 = trim($kodas1);
$kodas2 = trim($kodas2);

if ($kodas1 === $kodas2) {
    $zinute = "Šaunuolis! Psw geras!";
}   else {
        $zinute = "Psw skiriasi!";
    }
echo $zinute;
print_r($_POST);

// uzdraudzia nepilnameciams
$amzius = $_POST["age"];
if ($amzius = <18) {  // ?????????????????????????????
    $zinute = "Pieno skyrius kitoje puseje!";
}   else {
        $zinute = "Mldc seni";
    }
echo $zinute;
print_r($_POST);

 ?>

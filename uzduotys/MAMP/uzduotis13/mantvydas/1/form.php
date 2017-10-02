<?php

echo "<h1>Registered: </h1>";

$vardas = $_POST["name"];
//remove spaces before/after
$vardas = trim($vardas);
$zinute = "";

if (strlen($vardas) <=3) {
    $zinute = "Input more motherfucking characters!";
} else {
    $zinute = "ZAJABYS youve got enough characters!";
}

$kodas1 = $_POST["password1"];
$kodas2 = $_POST["password2"];
if ($kodas1 === $kodas2) {
    $zinute = "You managed to make it match nigga";
} else {
    $zinute = "you dumb motherfucker your passwords aint matchin";
}

echo $zinute;









//END
 ?>

<?php 
$vardai= array("Tomas", "Karka", "Martis");
echo "pirmas elementas:" . $vardai [1] . "<br>";

$test = ["Tomas,", "Karka", "Martis"];
echo "Pirmas test elementas:"
 .$test[1]. "<br>";  

$spec = [ "vardas"=>"Tomas", "pravarde"=>"karka"];
echo "spec:". $spec["pravarde"];
?>
    
<?php    
$spalvos = ['geltona'," melyna", "juoda", "violetine", "purpurine"];
   foreach($spalvos as $x) {
       echo "spalva:".$x."<br>";
   }
    ?>
 <?php

$failas=fopen("straipsnis.txt", "r") or die ("nepavyko atidaryt failo");
    while(! feof($failas)) {
        $eilute = fgets($failas) ;
       $prekes = explode(':', $eilute);
        //echo $prekes[0];
        echo $prekes[0]."<br>";
        echo $prekes[1]."<br>";
        echo $prekes[2]."<br>";     
    }
     fclose($failas);
    ?>
    
    

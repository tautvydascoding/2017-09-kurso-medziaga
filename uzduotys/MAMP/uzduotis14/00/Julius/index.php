<!DOCTYPE html>
    <html>
<?php

//echo "labas" ; 
// class Stalas {
//     var $kojuSkaicius=4;
//     public $material= "medinis";
//     private $aukstis= 90;
//     var $plotis = 80;
//     var $paskirtis= "virtuve";
//     
//     function setAukstis($x) {
//         $this->aukstis = $x;
//     }
//     function getAukstis() {
//         return $this->aukstis;
//     }
// }
//
//$keturkojisStalas = new Stalas();
//echo "plotis $keturkojisStalas->plotis <br>";
//$keturkojisStalas->plotis = 150;
//echo "$keturkojisStalas->plotis";
//
//$keturkojisStalas->setAukstis(29);
//echo "aukstis: " . $keturkojisStalas->getAukstis();


//
//class zmogus {
//    public $rankuIlgis=10;
//    public $kojuIlgis=20;
//    private $smegenuTuris=100;
//    
//     function setsmegenuTuris($x) {
//        $this->smegenuTuris = $x;
//    }
//    function getsmegenuTuris() {
//        return $this->smegenuTuris;
//    }
//   
//}
//
//$durnelis = new zmogus();
//echo "$durnelis->rankuIlgis <br>";
//$durnelis->rankuIlgis= 5;
//echo "$durnelis->rankuIlgis <br>";
//$durnelis->setsmegenuTuris("srutos plaukioja");
//$durnelioSmegenuTuris=$durnelis->getsmegenuTuris();
//echo "$durnelioSmegenuTuris <br>";
?>
<?php 
class duchas {
    public $protolvl = 0,
    $jega = 100,
    $greitis = 0,
    $isvaizda = 0,
    $pinigai = 0,
    $turimiDaiktai=[];
    private $vogimolvl= 5;
    function setvogimolvl ($x) {
        $this->vogimolvl = $x;
    }
    function getvogimolvl (){
        return $this->vogimolvl;
    }
    
    function vogtiDaikta($daiktuMasyvas, $daiktas){
        
        foreach(array_keys($daiktuMasyvas, $daiktas) as $key) {
            echo "<br>nigeris vagia.........<br>";
            array_push($this->turimiDaiktai,$daiktuMasyvas[$key]);
            unset($daiktuMasyvas[$key]);
            
            $this->vogimolvl+=1;
            echo "daiktai aplink nigeri: ";
                print_r ($daiktuMasyvas);
            echo "<br>LEVEL UP1<br>";
            echo "<br>Nigerio vogimo lygis: {$this->vogimolvl} ;<br>";
            
        }
        
        
    }
    function ParduotiDaikta($parduodamasDaiktas,$kaina){
      foreach(array_keys($this->turimiDaiktai, $parduodamasDaiktas) as $key) {
          echo "nigeris pardave $parduodamasDaiktas <br>";
          unset($this->turimiDaiktai[$key]);
          $this->pinigai+=$kaina;
          echo "nigerio pinigai: ";
        echo $this->pinigai;
          echo "<br>";
      } 
    }
    
}


$nigeris= new duchas();
echo "sukurete nauja ducho klases veikeja: nigeris!<br>";
echo "proto lygis: " .$nigeris->protolvl. ";<br>";
echo "jega: " .$nigeris->jega. ";<br>";
echo "greitis: " .$nigeris->greitis. ";<br>";
echo "isvaizda: " .$nigeris->isvaizda. ";<br>";
echo "pinigai: " .$nigeris->pinigai. ";<br>";
$nigeris->setvogimolvl(100);
echo "vogimo lygis: {$nigeris->getvogimolvl()} ;<br>";

$daiktaiAplink= ["riedlente","boba", "masina", "arklys", "dviratis", "namas", "dviratis"];
echo "daiktai aplink nigeri: ";
print_r ($daiktaiAplink);

print_r ($nigeris->vogtiDaikta($daiktaiAplink,"dviratis"));
echo "<br> Nigerio turimi daiktai: ";
print_r ($nigeris->turimiDaiktai);
echo "<br>Nigeris laimingas<br>";
$nigeris->ParduotiDaikta("dviratis",100);
echo "<br>Nigeris laimingas<br>";
                               ?>
</html>
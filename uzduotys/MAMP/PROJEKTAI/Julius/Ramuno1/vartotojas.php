                        <?php


require('connection.php');       
$output='';
 if (isset($_POST['searchy'])){
     $searchq=$_POST['searchy'];
$searchq=preg_replace("#[^0-9a-z]#i","",$searchq);
$query=mysqli_query($connection,"SELECT * FROM produktai WHERE tipas LIKE '%$searchq%' || pavadinimas LIKE '%$searchq%' ") or die("Nepavyko rasti");
$count=mysqli_num_rows($query);
if($count==0){
    $output="nieko neradome";
} else {
    while ($row=mysqli_fetch_array($query)){
      $tipas=$row['tipas'];
        $pavadinimas=$row['pavadinimas'];
        $kaina=$row['kaina'];
        $output .='<div> '.$tipas.' " '.$pavadinimas.'"- kaina eurais: '.$kaina. '</div>';
    }
}
 }


?>
<?php
require_once('./header.php');
?>

<div id="wrapper" class="row   aukstis300">
     <section class="col-md-8 ">
        <?php
          $duomenys= $_POST;
          $vartotojas = $duomenys['uname'];
          $slaptazodis = $duomenys['password'];
          $slaptazodis2 = $duomenys['RE-password'];
          $elpastas = $duomenys['email'];


          if($slaptazodis === $slaptazodis2) {
            if(!existUsername($vartotojas)) {
            createUser($vartotojas, $slaptazodis, $elpastas);
            echo "<h2 class='text-center'> Jusu vartotojas sukurtas </h2>";
          } else {
            echo "<h2 class='text-center alert-danger'> Jusu slaptazodis nesutampa </h2>";
          }
        }
        ?>
        <?php
                 session_start();
                 echo $test . "<br />";
                 echo $_SESSION['x'];
        ?>
     </section>
</div>
<?php
require_once('./footer.php');

 ?>

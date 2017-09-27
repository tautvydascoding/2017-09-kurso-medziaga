<?php
    require_once('./header.php');
?>
    <!-- ============content=============== -->
    <div id="wrapper" class="row   aukstis300">
         <section class="col-md-12 ">
                <?php
                    // print_r ($duomenys);
                    $duomenys = $_POST;
                    $vardas = $duomenys['uname'];
                    $slaptazodis = $duomenys['pass'];
                    $slaptazodis2 = $duomenys['pass2'];
                    $elpastas = $duomenys['email'];

                    if ($slaptazodis === $slaptazodis2) {
                        // createUser - i DB irasys nauja vartotoja
                         createUser($vardas, $slaptazodis, $elpastas);
                         echo '<h2 class="text-center">Jusu vartotojas sukurtas!</h2>';
                    }   else {
                        ?>
                         <h2 class="text-center alert alert-danger">Jusu slaptazodis nesutampa!!!</h2>
        <?php       }  ?>

             </section>
    </div>

<?php
    require_once('./footer.php');
 ?>

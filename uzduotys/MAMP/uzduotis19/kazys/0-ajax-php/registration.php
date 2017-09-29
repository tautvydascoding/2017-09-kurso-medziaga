<?php
    require_once('./header.php');
?>
    <!-- ============content=============== -->
    <div id="wrapper" class="row   aukstis300">
         <section class="col-md-12 ">
                <?php
                    // print_r ($duomenys);
                    $duomenys = $_POST;
                    // trim - pasalina tarpus aplink visa stringa
                    // strip_tags - pasalina tagus HTML ir php ir pan.
                    $vardas = strip_tags( trim( $duomenys['uname']));
                    $slaptazodis = strip_tags( trim( $duomenys['pass']));
                    $slaptazodis2 = strip_tags( trim( $duomenys['pass2']));
                    $elpastas = strip_tags( trim( $duomenys['email']));


                    if ($slaptazodis === $slaptazodis2) {
                        if ( existUserName($vardas) == false) {
                            // createUser - i DB irasys nauja vartotoja
                            createUser($vardas, $slaptazodis, $elpastas);
                            echo '<h2 class="text-center">Jusu vartotojas sukurtas!</h2>';
                        } else {
                             echo '<h2 class="text-center alert alert-danger">Sis vartotojo vardas uzimtas!!!</h2>';
                        }
                    }   else {
                        ?>
                         <h2 class="text-center alert alert-danger">Jusu slaptazodis nesutampa!!!</h2>
        <?php       }  ?>




             </section>
    </div>

<?php
    require_once('./footer.php');
 ?>

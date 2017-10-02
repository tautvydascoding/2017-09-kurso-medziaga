<?php
    require_once('./header.php');
?>

<!-- ============== WRAPPER ============== -->
<div class="container-fluid registration abtColor">

<div class="row aukstis300">
    <section class="col-md-8">

        <?php
            $duomenys = $_POST;
            $vardas = strip_tags( trim( $duomenys['uname']));
            $slaptazodis = strip_tags( trim( $duomenys['pass']));
            $slaptazodis2 = strip_tags( trim( $duomenys['pass2']));
            $elpastas = strip_tags( trim( $duomenys['email']));


            if ($slaptazodis === $slaptazodis2) {
                if ( existUserName($vardas) == false) {
                    createUser($vardas, $slaptazodis, $elpastas);
                    echo '<h2 class="text-center alert alert-success">Account created!</h2>';
                } else {
                     echo '<h2 class="text-center alert alert-danger">This username is taken!!!</h2>';
                }
            }   else {
                ?>
                 <h2 class="text-center alert alert-danger">Password mismatch!!!</h2>
<?php       }  ?>

     </div>

    </section>

</div>
<!-- ============== WRAPPER ============== -->

<?php
    require_once('./footer.php');
 ?>

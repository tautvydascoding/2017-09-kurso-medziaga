<?php
    require_once('./header.php');
?>

<!-- ============== WRAPPER ============== -->
<div class="container-fluid registration abtColor">

<div class="row">
    <section class="col-md-8">

        <?php
            $infoInput = $_POST;
            $name = strip_tags( trim( $infoInput['username']));
            $password = strip_tags( trim( $infoInput['pass']));
            $password2 = strip_tags( trim( $infoInput['pass2']));
            $eMaill = strip_tags( trim( $infoInput['email']));


            if ($password === $password2) {
                if ( existUserName($name) == false) {
                    createUser($name, $password, $eMaill);
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

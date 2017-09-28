<?php
    require_once('./header.php');
 ?>
<!-- ============content=============== -->

                <div id="wrapper" class="row   aukstis300">
                     <section class="col-md-8 ">
<?php
$straipsniai = getArticles(3);
$straipsnis = mysqli_fetch_assoc($straipsniai);
while($straipsnis) {
  include('./article.php');
  $straipsnis = mysqli_fetch_assoc($straipsniai);
}

 ?>
                     </section>
                     <aside class="col-md-4">
                       <h3>Registracija</h3>
                      <?php
                      // session_start();
                      $test = "test";
                      $_SESSION['x'] = "labas";
                       ?>
                         <form class="form" action="./registracija.php" method="post">
                           <label for="uname">username</label><br />
                           <input type="text" name="uname" placeholder="username" required><br />
                           <label for="pass">password</label><br />
                           <input type="password" name="password" placeholder="*******" required><br />
                           <label for="pass">RE-Password</label><br />
                           <input type="password" name="RE-password" placeholder="*******" required><br />
                           <label for="email">email</label><br />
                           <input type="email" name="email" placeholder"xxxx@xxxx.xx" required><br />

                           <input class="btn btn-lg bth-primary" type="submit" name="" value="Registracija">
                         </form>
                     </aside>
                </div>
                <!-- END  wrapper-->

<!-- ============FOOTER=============== -->
<?php
    require_once('./footer.php');
 ?>

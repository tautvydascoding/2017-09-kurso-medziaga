<?php require_once('./header.php');
        ?>

        <div id="wrapper" class="row mb-1">
          <section class="col-9 mr-1">
            <?php
                  require_once('./function-articles.php');

                  $straipsniai = getArticles();
                  $straipsnis = mysqli_fetch_assoc($straipsniai);
                  while ($straipsnis) {
                    include('./article.php');
                    $straipsnis = mysqli_fetch_assoc($straipsniai);
                  }


            ?>
          </section>
          <aside class="col">
            <h3>Registration</h3>
            <?php
            session_start();
            print_r($_SESSION);
            $test = "test";
            $_SESSION['x'] = "labas";
            ?>
             <form class="form" action="./registration.php" method="post">
                 <label for="uname">Username</label> <br>
                 <input type="text" name="uname"  required  > <br>

                 <label for="pass">Password</label>   <br>
                 <input type="password" name="pass"  required > <br>

                 <label for="pass2">Re-Password</label>   <br>
                 <input type="password" name="pass2"  required > <br>

                 <label for="email">Email</label>   <br>
                 <input type="email" name="email"  required > <br>

                 <input class="btn btn-lg btn-info" type="submit" name="" value="Registration">
             </form>
          </aside>

        </div>
        <!-- wrapper end -->

        <?php require_once('./footer.php');
        ?>
      </div>
    </body>
</html>

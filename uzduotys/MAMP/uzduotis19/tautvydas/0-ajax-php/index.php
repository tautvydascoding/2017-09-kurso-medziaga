<?php
    require_once('./header.php');
 ?>
<!-- ============content=============== -->

                <div id="wrapper" class="row   aukstis300">
                     <section class="col-md-8 ">
                            <?php

                                 include('./ajax.php');

                                // getArticles - musu suprogramuota
                                // paima straipsnius is DB
                                $straipsniai = getArticles(1);
                                // paimti straipnsni
                                $straipsnis = mysqli_fetch_assoc($straipsniai);

                                while ($straipsnis) {
                                    include('./article.php');
                                    // imame sekanti straipnsni
                                    $straipsnis = mysqli_fetch_assoc($straipsniai);
                                }
                             ?>
                     </section>
                     <aside class="col-md-4">
                         <h3>Registration</h3>

                          <form class="form" action="./registration.php" method="post">
                              <label for="uname">Username</label> <br>
                              <input type="text" name="uname"  required
                                value=" "> <br>

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
                <!-- END  wrapper-->

<!-- ============FOOTER=============== -->
<?php
    require_once('./footer.php');
 ?>
 <?php
 print_r($_REQUEST);  
 ?>

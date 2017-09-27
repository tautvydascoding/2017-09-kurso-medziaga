<?php
    require_once('./header.php');
 ?>
<!-- ============content=============== -->

                <div id="wrapper" class="row   aukstis300">
                     <section class="col-md-8 ">
                            <?php
                                $straipsniai = getArticles(6);
                                $straipsnis = mysqli_fetch_assoc($straipsniai);
                                include('./article.php');
                                $straipsnis = mysqli_fetch_assoc($straipsniai);
                                include('./article.php');
                                $straipsnis = mysqli_fetch_assoc($straipsniai);
                                include('./article.php');
                                $straipsnis = mysqli_fetch_assoc($straipsniai);
                                include('./article.php');
                             ?>
                     </section>
                     <aside class="col-md-4">
                         Aside
                     </aside>
                </div>
                <!-- END  wrapper-->

<!-- ============FOOTER=============== -->
<?php
    require_once('./footer.php');
 ?>

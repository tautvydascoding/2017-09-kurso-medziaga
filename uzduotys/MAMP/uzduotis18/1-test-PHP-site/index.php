<?php
    require_once('./header.php');
 ?>
<!-- ============content=============== -->

                <div id="wrapper" class="row   aukstis300">
                     <section class="col-md-8 ">
                            <?php
                                // getArticles - musu suprogramuota
                                // paima straipsnius is DB
                                $straipsniai = getArticles(2);
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
                         Aside
                     </aside>
                </div>
                <!-- END  wrapper-->

<!-- ============FOOTER=============== -->
<?php
    require_once('./footer.php');
 ?>

<?php
require "header.php";
?>



    <body>

        <!-- Preloader section -->

        <div class="preloader">
            <div class="sk-spinner sk-spinner-pulse"></div>
        </div>

        <!-- Navigation section  -->

        <div class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container">

                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand"><strong>UAB</strong>ėlis</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Pradžia</a></li>
                        <li><a href="about.php">Apie mus</a></li>
                        <li><a href="gallery.php">Galerija</a></li>
                        <li><a href="services.php">Paslaugos</a></li>
                        <li><a href="contact.php">Kontaktai</a></li>
                    </ul>
                </div>

            </div>
        </div>


        <!-- Admin section -->

        <section id="contact">
            <div class="container table-responsive">
                <?php
                include "query.php";
                ?>
            </div>
        </section>


        <!-- Footer section -->

        <?php
        include "footer.php";
        ?>


        <!-- Back top -->
        <a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

        <!-- Javascript  -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>

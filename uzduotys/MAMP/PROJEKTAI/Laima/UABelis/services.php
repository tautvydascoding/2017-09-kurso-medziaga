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
                <li class="active"><a href="services.php">Paslaugos</a></li>
                <li><a href="contact.php">Kontaktai</a></li>
              </ul>
            </div>

          </div>
        </div>


        <!-- Home section -->

        <section id="home" class="main-pricing">
          <div class="container">
            <div class="row">

              <div class="col-md-12 col-sm-12"></div>

            </div>
          </div>
        </section>


        <!-- Service section -->

        <section id="pricing">
          <div class="container">
            <div class="row">

               <div class="col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.8s">
                <div class="section-title">
                  <h1>Paslaugos</h1>
                  <p>Paslaugų aprašymas</p>
                </div>
              </div>

              <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1s">
                <div class="price-plan">
                    <div class="price-month">
                        <h2>70€</h2>
                    </div>
                  <div class="price-title">
                    <h3>Konsultacijos individualios</h3>
                  </div>
                  <p>Geras laikas</p>
                </div>
              </div>

              <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1s">
                <div class="price-plan price-plan-bg">
                    <div class="price-month">
                        <h2>300€</h2>
                    </div>
                  <div class="price-title">
                    <h3>Konsultacijos verslui </h3>
                  </div>
                  <p>Talentų paieška</p>
                 </div>
              </div>

              <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1s">
                <div class="price-plan">
                    <div class="price-month">
                        <h2>5€</h2>
                    </div>
                  <div class="price-title">
                    <h3>Konsultacijos studentams</h3>
                  </div>
                  <p>Gyvenimo pamokos</p>
                 </div>
              </div>

            </div>
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

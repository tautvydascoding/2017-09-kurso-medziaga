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
                <li class="active"><a href="gallery.php">Galerija</a></li>
                <li><a href="services.php">Paslaugos</a></li>
                <li><a href="contact.php">Kontaktai</a></li>
              </ul>
            </div>

          </div>
        </div>


        <!-- Home section -->

        <section id="home" class="main-gallery">
        	<div class="container">
        		<div class="row">

        			<div class="col-md-12 col-sm-12"></div>

        		</div>
        	</div>
        </section>


        <!-- Gallery section -->

        <section id="gallery">
          <div class="container">
            <div class="row">

               <div class="col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.8s">
                <div class="section-title">
                  <h1>Galerija</h1>
                  <p>Mūsų idėjų galerija</p>
                </div>
              </div>

              <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="1s">
                <div class="gallery-thumb">
                  <a href="images/gallery-img1.jpg" class="image-popup">
                    <img src="images/gallery-img1.jpg" class="img-responsive" alt="Galerija">
                  </a>
                </div>
              </div>

              <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="gallery-thumb">
                  <a href="images/gallery-img2.jpg" class="image-popup">
                    <img src="images/gallery-img2.jpg" class="img-responsive" alt="Galerija">
                  </a>
                </div>
              </div>

              <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="gallery-thumb">
                  <a href="images/gallery-img3.jpg" class="image-popup">
                    <img src="images/gallery-img3.jpg" class="img-responsive" alt="Galerija">
                  </a>
                </div>
              </div>

              <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                <div class="gallery-thumb">
                  <a href="images/gallery-img4.jpg" class="image-popup">
                    <img src="images/gallery-img4.jpg" class="img-responsive" alt="Galerija">
                  </a>
                </div>
              </div>

              <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="gallery-thumb">
                  <a href="images/gallery-img5.jpg" class="image-popup">
                    <img src="images/gallery-img5.jpg" class="img-responsive" alt="Galerija">
                  </a>
                </div>
              </div>

              <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="gallery-thumb">
                  <a href="images/gallery-img6.jpg" class="image-popup">
                    <img src="images/gallery-img6.jpg" class="img-responsive" alt="Galerija">
                  </a>
                </div>
              </div>

              <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="gallery-thumb">
                  <a href="images/gallery-img7.jpg" class="image-popup">
                    <img src="images/gallery-img7.jpg" class="img-responsive" alt="Galerija">
                  </a>
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
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>


        </body>
    </html>

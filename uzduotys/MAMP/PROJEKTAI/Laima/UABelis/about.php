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
                <li class="active"><a href="about.php">Apie mus</a></li>
                <li><a href="gallery.php">Galerija</a></li>
                <li><a href="services.php">Paslaugos</a></li>
                <li><a href="contact.php">Kontaktai</a></li>
              </ul>
            </div>

          </div>
        </div>


        <!-- Home section -->


        <section id="home" class="main-about">
        	<div class="container">
        		<div class="row">

        			<div class="col-md-12 col-sm-12"></div>

        		</div>
        	</div>
        </section>


<!-- About section -->

<section id="about">
  <div class="container">
    <div class="row">

       <div class="col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.2s">
        <div class="section-title">
          <h3>apie mus</h3>
          <h1>Mes ir draugai</h1>
        </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem autem officia, tempora laudantium enim! Vitae saepe error, facilis beatae natus?</p>
      </div>

       <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
        <img src="images/about-img1.jpg" class="img-responsive" alt="about">
      </div>

      <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
        <img src="images/about-img2.jpg" class="img-responsive" alt="about">
      </div>

      <div class="clearfix col-md-12 col-sm-12">
        <hr>
      </div>

      <div class="col-md-3 col-sm-3 counter-item">
        <h3 class="counter-number" data-from="1" data-to="131" data-speed="1000"></h3>
        <h4 class="counter-text">LAIMINGI KLIENTAI</h4>
      </div>

      <div class="col-md-3 col-sm-3 counter-item">
        <h3 class="counter-number" data-from="1" data-to="1099" data-speed="2000"></h3>
        <h4 class="counter-text">CRAZY IDĖJOS</h4>
      </div>

      <div class="col-md-3 col-sm-3 counter-item">
        <h3 class="counter-number" data-from="1" data-to="300" data-speed="3000"></h3>
        <h4 class="counter-text">MŪSŲ DRAUGAI</h4>
      </div>

      <div class="col-md-3 col-sm-3 counter-item">
        <h3 class="counter-number" data-from="1" data-to="127" data-speed="4000"></h3>
        <h4 class="counter-text">BAIGTI PROJEKTAI</h4>
      </div>



       <div class="clearfix col-md-12 col-sm-12">
        <hr>
      </div>

      <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.4s">
          <div class="about-thumb">
            <img src="images/team-img1.jpg" class="img-responsive" alt="Team">
              <div class="about-overlay">
                <div class="about-item">
                    <ul class="social-icon">
                      <li><a href="https://www.facebook.com/Uabelis/" class="fa fa-facebook"></a></li>
                      <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                   </ul>
                </div>
              </div>
          </div>
          <h2>Arūncė</h2>
          <p>VIP</p>
      </div>

      <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
          <div class="about-thumb">
            <img src="images/team-img2.jpg" class="img-responsive" alt="Team">
              <div class="about-overlay">
                <div class="about-item">
                    <ul class="social-icon">
                      <li><a href="https://www.facebook.com/Uabelis/" class="fa fa-facebook"></a></li>
                      <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                   </ul>
                </div>
              </div>
          </div>
          <h2>Sima</h2>
          <p>UABėlio siela</p>
      </div>

      <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.8s">
          <div class="about-thumb">
            <img src="images/team-img3.jpg" class="img-responsive" alt="Team">
              <div class="about-overlay">
                <div class="about-item">
                    <ul class="social-icon">
                      <li><a href="https://www.facebook.com/Uabelis/" class="fa fa-facebook"></a></li>
                      <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                    </ul>
                </div>
              </div>
          </div>
          <h2>Padaras už kadro</h2>
          <p>Destruktorius</p>
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
  <script src="js/counter.js"></script>
  <script src="js/counter-options.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/custom.js"></script>

  </body>
</html>

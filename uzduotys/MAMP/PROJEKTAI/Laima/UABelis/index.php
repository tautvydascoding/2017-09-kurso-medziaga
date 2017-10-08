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
                <li class="active"><a href="index.php">Pradžia</a></li>
                <li><a href="about.php">Apie mus</a></li>
                <li><a href="gallery.php">Galerija</a></li>
                <li><a href="services.php">Paslaugos</a></li>
                <li><a href="contact.php">Kontaktai</a></li>
              </ul>
            </div>

          </div>
        </div>


        <!-- Home section -->

        <section id="home" class="main">
        	<div class="container">
        		<div class="row">

        		<div class="col-md-offset-6 col-md-5 col-sm-offset-4 col-sm-8">
                <h3 class="wow fadeInUp" data-wow-delay="1s">Sveiki atvykę į neribotų galimybių pasaulį!</h3>
                <h1 class="wow fadeInUp" data-wow-delay="1.4s">Vieną kartą paragavus negali sustoti. Norite išbandyti?</h1>
                <a href="index.php#feature" class="wow fadeInUp btn btn-default smoothScroll" data-wow-delay="1.8s">Užeikite</a>
              </div>

        		</div>
        	</div>
        </section>



<!-- Feature section -->

<section id="feature">
  <div class="container">
    <div class="row">

       <div class="col-md-4 col-sm-6 wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
        <div class="feature-thumb">
          <div class="feature-icon">
             <span><i class="fa fa-puzzle-piece"></i></span>
          </div>

          <?php $post = getArticle(1);  ?>

          <h2> <?php echo $post['title']; ?> </h2>
          <p> <?php echo $post['content']; ?> </p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 wow fadeInUp animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
        <div class="feature-thumb">
          <div class="feature-icon">
             <span><i class="fa fa-qq"></i></span>
          </div>
          <?php $post = getArticle(2);  ?>

          <h2> <?php echo $post['title']; ?> </h2>
          <p> <?php echo $post['content']; ?></p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s" style="visibility: hidden; animation-delay: 0.8s; animation-name: none;">
        <div class="feature-thumb">
          <div class="feature-icon">
             <span><i class="fa fa-life-saver"></i></span>
          </div>
          <?php $post = getArticle(3);  ?>

          <h2> <?php echo $post['title']; ?> </h2>
          <p> <?php echo $post['content']; ?></p>
        </div>
      </div>

    </div>
  </div>
</section>

<section id="flexslider-wrapper">
  <div class="container">
    <div class="row">

       <div class="col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.2s">
          <div class="section-title">
            <h1>Visada atrasim sprendimą jums</h1>
            <p>Laikas nelaukia, tiek daug pasirinkimų, reikia patarimo?</p>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          <p>Lorem ipsum dolor sit amet, consectetu eget diam et laoreet.</p>
      </div>

      <div class="col-md-5 col-sm-12 wow fadeInUp" data-wow-delay="0.6s">
        <div class="flexslider">
          <ul class="slides">

            <li>
              <img src="images/slide-img1.jpg" alt="Flexslider">
            </li>
            <li>
              <img src="images/slide-img2.jpg" alt="Flexslider">
            </li>
            <li>
              <img src="images/slide-img3.jpg" alt="Flexslider">
            </li>

          </ul>
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
     <script src="js/jquery.flexslider-min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/custom.js"></script>



     </body>
 </html>

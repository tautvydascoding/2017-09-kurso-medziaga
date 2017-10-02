<?php
    require "header.php";
 ?>

    <body>

        <!-- preloader section -->

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
                <li class="active"><a href="contact.php">Kontaktai</a></li>
              </ul>
            </div>

          </div>
        </div>

        <!-- Home section -->

        <section id="home" class="main-contact">
          <div class="container">
            <div class="row">

              <div class="col-md-12 col-sm-12"></div>

            </div>
          </div>
        </section>

        <!-- Contact section -->

        <section id="contact">
          <div class="container">
            <div class="row">

               <div class="col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.6s">
                <div class="section-title text-center">
                  <h1>Kontaktai</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae itaque, explicabo eligendi blanditiis? Excepturi culpa provident repudiandae eaque praesentium sapiente amet velit dolores ipsum! Assumenda quo eum eaque itaque omnis? Culpa ullam veniam ipsum earum velit doloremque aut eaque nobis laudantium, voluptatum praesentium cumque repudiandae, vitae! Neque eos, quod blanditiis?</p>
                </div>
              </div>

             <div class="clearfix col-md-12 col-sm-12">
                <hr>
              </div>

              <?php include "validate.php"; ?>

              <div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeInUp" data-wow-delay="0.8s">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" novalidate>
                  <div class="col-md-4 col-sm-4">
                    <input type="text" class="form-control" name="name" placeholder="Vardas" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''  ?>"  />
                    <span class="text-danger"><?php echo $nameErr;?></span>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <input type="email" class="form-control" name="email" placeholder="El. paštas" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''  ?>" >
                    <span class="text-danger"><?php echo $emailErr;?></span>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <input type="tel" class="form-control" name="phone" placeholder="Telefonas" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ''  ?>"  />
                    <span class="text-danger"><?php echo $phoneErr;?></span>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <textarea  class="form-control" rows="4" name="comment" placeholder="Žinutės tekstas" value="<?php echo isset($_POST['comment']) ? $_POST['comment'] : ''  ?>"></textarea>
                  </div>
                  <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                    <input type="submit" class="form-control" value="Išsiųsti">


                  </div>
                </form>
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

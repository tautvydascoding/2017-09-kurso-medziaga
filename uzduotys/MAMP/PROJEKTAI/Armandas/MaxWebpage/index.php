<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
        <link rel="stylesheet" href="./css/main.css">
        <?php include_once('./db.php');?>
    </head>
    <body>
      <!-- Loader starts -->
      <div class="preload" id="preload">
        <div class="logo">
          <span style = "color:rgb(255, 192, 1);">funny</span>
          <span style = "color:rgb(45, 7, 231);">or</span>
          <span style = "color:rgb(231, 7, 7);">die</span>
        </div>
        <div class="loader-frame">
          <div class="loader1" id="loader1"></div>
          <div class="loader2" id="loader2"></div>
        </div>
      </div>
      <!-- Loader ends -->

      <!-- Navigation bar starts -->
      <div class="navbar-wrapper">
            <div class="container-fluid">
              <nav class="navbar">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <img src="./img/funny.svg" alt="Logo" height="40" width="150" class="">
                  </div>
                  <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav pull-right navbar-nav ">
                      <li><a href="#About">Apie mus</a></li>
                      <li><a href="./gallery.php">Galerija</a></li>
                      <!-- <li><a href="#Servises">Paslaugos</a></li> -->
                      <li><a href="#contact">Susisiekite su mumis</a></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dalinkis <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="https://www.facebook.com/sharer/sharer.php?u=www.gajeta.lt" target="_blank">Facebook</a></li>
                          <li><a href="http://twitter.com/share">Twitter</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
              </nav>
            </div>
          </div>
      <!-- Navigation bar ends -->

      <!-- Carousel starts -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="./img/formula.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h3>GREITAI IR SAUGIAI</h3> <br> <br> <br>
              <h1>PERVEŠIME JŪSŲ KROVINIUS</h1> <br> <br>
              <p><a class="btn btn-lg btn-warning" href="#contact" role="button">Susisiekite su mumis dabar!</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="./img/formula2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Sudomino mūsų siūloma produkcija?</h1> <br> <br> <br> <br>
              <p><a class="btn btn-lg btn-warning" href="./gallery.php" role="button">Pamatykite produkcija</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <link href="css/main.css" rel="stylesheet" type="text/css"/>
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- /.carousel ends -->

  <div class="container-fluid">
    <div id="About" class="row featurette">
      <div class="col-md-12 ">
        <video poster="" id="bgvid" playsinline autoplay muted loop>
            <source src="./img/source.mp4" type="video/mp4">
        </video>
        <h2 class="text-center whiteColor">Apie mus</h2>
        <br><br>
        <p class="lead whiteColor"> <?php echo $article?></p>
      </div>
      <!-- <div class="col-md-4">
      </div> -->
    </div>
  </div>
  <!-- contact form start -->
<section id="contact">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <h1>SUSISIEKITE SU MUMIS</h1> <br>
        <form action="visitors.php" method="post" role="form">
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Vardas" />
            </div>
              <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Elektroninis paštas" />
            </div>
              <div class="form-group">
              <input type="tel" name="tel" class="form-control" placeholder="Telefono numeris" />
            </div>
              <div class="form-group">
              <textarea name="message" rows="5" class="form-control" placeholder="Jūsų tekstas" ></textarea>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="check"> Aš ne robotas!
              </label>
            </div>
              <div align="center">
                  <input type="submit" name="submit" class="btn btn-default" value="Siūsti pranešimą">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<footer>
<div class="container-fluid">
  <div class="row whiteColor">
    <div class="col-md-12 aukstis100">
      <h5>Imonės rekvizitai:</h5>
      <p>
        <strong>UAB "xxx"</strong> Imonės kodas: 111111 PVM kodas: LT622200255251225 Adresas: Kestucio 52-4, Kaunas.
      </p>
    </div>
</div>
</footer>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script  src="./js/main.js" ></script>
    </body>
</html>

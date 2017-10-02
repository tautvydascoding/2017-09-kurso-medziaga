
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
                      <li><a href="./index.php">Grįžti atgal</a></li>
                    </ul>
                  </div>
              </nav>
            </div>
          </div>
<!-- Navigation bar ends -->

<!-- start of gallery -->
<div id="gallery">
<div class="container-fluid bg-color">
  <div class="row">
    <div class="col-md-12"> <br> <br> <br> <br> <br>
      <h1 >
        PRODUKTŲ GALERIJA
      </h1><br> <br>
    </div>
  </div>
  <div class="row aukstis300">
    <?php getAllProducts(); ?>
</div>
</div>

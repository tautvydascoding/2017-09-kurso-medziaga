<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Striukės</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Very Lightweight Portfolio Filter for Bootstrap">
  <meta name="author" content="geedmo">
  <!-- Le styles -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap-responsive.css" rel="stylesheet">
  <link href="css/gridex.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

  <style>
    html,
    body {
      color: #656565;
      background: url(logo.jpg);
      /*width: 100%;
      /*height: 667px;*/
      /*background-repeat: no-repeat;
      background-size: 100%;*/
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      /* <= This one */
    }

    a:focus {
      outline: none;
    }

    .wrapper {
      min-height: 100%;
      height: auto !important;
      height: 100%;
      margin: 0 auto -120px;
    }

    .footer,
    .push {
      height: 120px;
    }
  </style>
</head>

<body>


  <div class="container wrapper">

    <br />

    <h2 style="color:rgb(255, 255, 255)">Striukės</h2>
    <p class="lead"></p>
    <hr>
    <div class="clearfix"></div>

    <br />

    <ul class="thumbnails gridex">
      <li class="span3 clearfix">
        <a href="#" class="thumbnail"> <img alt="200x200" src="./striuke1.jpg" /> </a>
        <!-- gd-expander required -->
        <div class="gd-expander">
          <!-- gd-inner optional -->
          <div class="gd-inner">
            <div class="row-fluid">
              <div class="span6 text-center">
                <img alt="270x250" class="img-polaroid" src="./striuke1.jpg" />
              </div>
              <div class="span6">
                <h2>PAVADINIMAS</h2>
                <p>
                  Dydis ir panasiai.
                </p>
                <a href="http://localhost:8080/Kontaktai/Kontaktai.php" class="btn btn-success">Kontaktai</a>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li class="span3">
        <a class="thumbnail"> <img alt="270x170" src="./striuke2.jpg" /> </a>
        <div class="gd-expander">
          <div class="gd-inner">
            <div class="row-fluid">
              <div class="span6 text-center">
                <img alt="270x170" class="img-polaroid" src="./striuke2.jpg" />
              </div>
              <div class="span6">
                <h2>PAVADINIMAS2</h2>
                <p>
                  Aprasymas
                    </p>
                <a href="http://localhost:8080/Kontaktai/Kontaktai.php" class="btn btn-success">Kontaktai</a>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li class="span3">
        <a href="#" class="thumbnail">
                        <img alt="270x170" src="./striuke3.jpg" />
                    </a>
        <div class="gd-expander">
          <div class="gd-inner">
            <div class="row-fluid">
              <div class="span6 text-center">
                <img alt="270x170" class="img-polaroid" src="./striuke3.jpg" />
              </div>
              <div class="span6">
                <h2>PAVADINIMAS3</h2>
                <p>
                  Aprasymas
                  </p>
                <a href="http://localhost:8080/Kontaktai/Kontaktai.php" class="btn btn-success">Kontaktai</a>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li class="span3">
        <a href="#" class="thumbnail">
                        <img alt="270x170" src="./striuke4.jpg" />
                    </a>
        <div class="gd-expander">
          <div class="gd-inner">
            <div class="row-fluid">
              <div class="span6 text-center">
                <img alt="270x170" class="img-polaroid" src="./striuke4.jpg" />
              </div>
              <div class="span6">
                <h2>Kontaktai4</h2>
                <p>
                  Aprasymas
                    </p>
                <a href="http://localhost:8080/Kontaktai/Kontaktai.php" class="btn btn-success">Kontaktai</a>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>








    <div class="push"></div>
  </div>


  <!-- Le javascript
        ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap-gridex.min.js"></script>

  <script>
    $(function() {
      $('.gridex').gridex();
    })
  </script>
</body>

</html>

<?php
  include_once('./header.php');
?>
    <div class="row konteineris bg-red-tr">

  <!-- start container -->
  <div id="wrapper" class="col">

    <div class="row mb-1">

      <aside class="navigation col mr-1 mb-1 bg-wh">

      </aside>
      <div class="col-9 patternas mr-1">
        <header class="row">
          <div class="col bg-black bg-shadow mb-1 text-center ptb-8 eima-margintop">
            <h1 class="title">a Sea with no water</h1>
            <h1 class="title">a Forest with no wood</h1>
            <h1 class="title">a Desert without sand</h1>
          </div>

        </header>
        <div class="row">
          <div class="col">
            <div id="shopExplore" class="row justify-content-between mb-1 p-4 bg-wh">
              <h2 class="col text-center productCat">Mens</h2>
              <h2 class="col text-center productCat">Women</h2>
            </div>


            <div class="row prekes mb-1 vh-50">

              <h2 class="produktoKr">Hats</h2>
              <h2 class="produktoKl">Hats</h2>
              <div class="col poly-product-l mr-1">
                <?php
                include('./menHats.php');
                ?>

              </div>
              <div class="col poly-product-r">
                <?php
                include('./womenHats.php');
                ?>


              </div>
            </div>

            <div class="row prekes mb-1 vh-50">
              <h2 class="produktoKr">Tops</h2>
              <h2 class="produktoKl">Tops</h2>
              <div class="col poly-product-r mr-1">
                <?php
                include('./menTops.php');
                ?>
              </div>
              <div class="col poly-product-l">
                <?php
                include('./womenTops.php');
                ?>
              </div>
            </div>

            <div class="row prekes mb-1 vh-50">
              <h2 class="produktoKr">Pants</h2>
              <h2 class="produktoKl">Pants</h2>
              <div class="col poly-product-l mr-1">
                <?php
                include('./menPants.php');
                ?>

              </div>
              <div class="col poly-product-r">
                <?php
                include('./womenPants.php');
                ?>
              </div>
            </div>
            <div class="row prekes mb-1 vh-50">
              <h2 class="produktoKr">Shoes</h2>
              <h2 class="produktoKl">Shoes</h2>
              <div class="col poly-product-r mr-1">
                <?php
                include('./menShoes.php');
                ?>
              </div>
              <div class="col poly-product-l">
                <?php
                include('./womenShoes.php');
                ?>
              </div>
            </div>



          </div>
        </div>
      </div>
      <aside class="navigation col mb-1 bg-wh">

      </aside>
    </div>



  </div>
    <!-- end container -->
  </div>

  <div class="row">
    <div class="container-fluid parallaxSection">
      <section id="shopMen">
        <div class="col image" data-type="background" data-speed="2"></div>
        <div class="col prlxImg" data-type="paralaxImg"><img src="https://images.unsplash.com/photo-1483118714900-540cf339fd46?dpr=1&auto=compress,format&fit=crop&w=1000&h=&q=80&cs=tinysrgb&crop=" /></div>
        <div class="prlxImg2" data-type="paralaxImg2"></div>
        <div class="col-3 d-flex justify-content-center stuff" data-type="content"><h1>Mens Collection</h1><h2><button class="hvr-shutter-out-horizontal mdl-button mdl-js-button mdl-js-ripple-effect">Shop</button></h2>
        </div>
      </section>
    </div>

  </div>
  <div class="row">
    <div class="container-fluid parallaxSection">
      <section id="shopWomen">
        <div class="col image" data-type="background" data-speed="2"></div>
        <div class="col-3 d-flex justify-content-center stuff" data-type="content"><h1>Women Collection</h1><h2><button class="hvr-shutter-out-horizontal mdl-button mdl-js-button mdl-js-ripple-effect">Shop</button></h2>
        </div>
        <div class="prlxImgW" data-type="paralaxImg2"></div>
        <div class="col prlxImg" data-type="paralaxImg"><img src="https://images.unsplash.com/photo-1501002138038-06806ed23bce?dpr=1&auto=compress,format&fit=crop&w=1000&h=&q=80&cs=tinysrgb&crop=" /></div>
      </section>
    </div>

  </div>
  <?php
  include_once('./footer.php');

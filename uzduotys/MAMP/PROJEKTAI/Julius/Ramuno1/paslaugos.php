<?php
include('Headerindex.php');
?>
<div class="row pl-5 pr-5 aukstis">
    <div class="col-8 ">
        <div class="row aukstis ">
            <div class="col-2 align-content-stretch p-0 mt-0 mb-0 ">
                <ul class="listgroup d-inline-block aukstis33 p-0">
                    <li class="text3 bglist  aukstis plotis d-flex justify-content-center align-items-center text-center" id="apdaila">
                        <h6>Apdailos linijos ir įrengimai</h6>
                    </li>
                    <li class="text3 bglist  aukstis plotis d-flex justify-content-center align-items-center text-center" id="robotai">
                        <h6>Robotai</h6>
                        <li class="text3 bglist  aukstis plotis d-flex justify-content-center align-items-center text-center" id="medis">
                            <h6>Medžio masyvas</h6>
                        </li>

                </ul>
            </div>

            <div class="col-10 wrap pt-3">
               <article class= "tekstoVieta">
                
                

                   

                </article>

            </div>
        </div>
    </div>
    <div class="col-4 aukstis300 hidden">
    <?php require('vartotojas.php'); ?>
<form action="paslaugos.php#apdailaNav" method="post">
     <input type="text" name="searchy" placeholder="ieškoti prekės..">
     <input type="submit" value='Ieškoti'class="search-button text3">
      </form>
    <a><?php  echo "$output"; ?></a>
    </div>
</div>


<?php
include('footer.php');
?>

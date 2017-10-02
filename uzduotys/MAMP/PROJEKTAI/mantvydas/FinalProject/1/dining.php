<?php
    include_once ('./header.php');
 ?>
 <div class="container-fluid dining p-3">
     <div class="row">
         <section class="col abtColor">

             <?php
                 // getArticles - musu suprogramuota f-ja
                 // paima straipsnius is DB
                 $straipsniai = getDiningArticles(2);
                 $straipsnis = mysqli_fetch_assoc($straipsniai);
                 // paimti straipsni
                 while($straipsnis) {
                     include('./articles.php');
                     $straipsnis = mysqli_fetch_assoc($straipsniai);
                 }
             ?>

         </section>
     </div>
 </div>

    <?php
        include_once ('./footer.php');
     ?>

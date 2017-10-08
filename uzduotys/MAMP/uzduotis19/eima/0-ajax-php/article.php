<article class="row  mt-4 mb-4 mv-4 ">
    <div class="col-xl-3  col-lg-4 col-md-6 col-sm-12 ">
        <img class="img-responsive img-fluid" src="./1.jpg" alt="piestukas rasyti ant popieriaus">
    </div>
    <div class="col-xl-9 col-lg-8 col-md-6 col-sm-12 ">

        <h3 class="text-center">
            <?php echo $straipsnis['title']; ?>
         </h3>
         <p>
             <?php echo $straipsnis['content']; ?>
         </p>

         <i>Autoriaus nr.:
             <?php echo $straipsnis['user_id']; ?>
         </i>
         <i class="float-right pull-right">
               <?php echo $straipsnis['date']; ?>
         </i>




         <!-- ARBA -->
         <?php
            // echo "<h3 class='text-center'>" .  $straipsnis['title']   . "</h3>";
            // echo "<p>" .   $straipsnis['content']   . "</p>";
         ?>


    </div>
</article>

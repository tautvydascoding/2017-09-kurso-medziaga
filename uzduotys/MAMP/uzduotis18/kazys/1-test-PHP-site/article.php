<article class="row  mt-4">
  <div class="col-xl-2 col-md-6 col-sm-12 col-lg-4">
    <img class="img-responsive img-fluid" src="./1.jpg" alt="piestukas">
  </div>
  <div class="col-md-6 col-sm-12 col-lg-8">
    <?php echo "<h3 class = 'text-center'>" . $straipsnis['title'] . "</h3>"; ?>
    <p>
    <?php
      echo $straipsnis['content'];
    ?>
    </p>
    <i>Autorius <?php echo $straipsnis['user_id']; ?></i>
    <i class="float-right pull-right"><?php echo $straipsnis['date']; ?></i>
  </div>
</article>


      <div class="col-md-9 faqs d-flex align-items-center">
<div class="row d-flex justify-content-around contactsPage">
  <div class="col-md-5  faqsDivBack">


<?php
include_once('./functions-faqs.php');
?>

<h2 class="mb-3">FAQS</h2>
<ul class="">
<?php
  $faqs = getFaqs();
  $faq = mysqli_fetch_assoc($faqs);
  $collapseQuestion =  array("collapseQuestion1", "collapseQuestion2", "collapseQuestion3", "collapseQuestion4", "collapseQuestion5", "collapseQuestion6", "collapseQuestion7", "collapseQuestion8", "collapseQuestion9", "collapseQuestion10", "collapseQuestion11", "collapseQuestion12", "collapseQuestion13", "collapseQuestion14", "collapseQuestion15", "collapseQuestion16", "collapseQuestion17", "collapseQuestion18", "collapseQuestion19");
  $text = "collapseQuestion";

    for ($i='0'; $i<count($collapseQuestion); $i++) {
      $text = $collapseQuestion[$i];
      echo "<a class='faq' href='" . "#" . "$text' data-toggle='collapse'>" . $faq['question'] . "</a>" . "<ul id='$text' class='collapse'>" . "<li class='faq'>" . $faq['answer'] . "</li>" . "</ul>" . "<br />";
      $i++;
      $faq = mysqli_fetch_assoc($faqs);
    }


 ?>
</ul>

</div>

  <div class="col-md-5  ml-5 faqsDivBack">
    <?php
include_once('./functions-enquiries.php')
     ?>
     <form class="form " action="./enquiry.php" method="GET">
         <label for="enquiry"><h2 class="mb-3 ">YOUR QUESTION</h2></label> <br>
         <input type="text" name="enquiry" size=40  required value=" "><br />

         <input class="btn mt-3 btnColor" type="submit" name="" value="Make an enquiry">
     </form>
  </div>





      </div>








      <!-- main row ends -->
    </div>
    <!-- uzsidaro containeris -->
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>

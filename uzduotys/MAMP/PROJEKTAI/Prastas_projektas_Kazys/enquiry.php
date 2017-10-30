<?php
include_once('./functions-faqs.php');
include_once('./functions-enquiries.php');
 ?>
<?php
  $theEnquiry = $_GET;
  $theQuestion = strip_tags( trim($theEnquiry['enquiry']));

  createEnquiry($theQuestion);


 ?>

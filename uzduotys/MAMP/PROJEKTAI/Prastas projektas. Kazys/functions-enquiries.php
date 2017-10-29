<?php



function createEnquiry ($enquiry) {
  $sql = sprintf("INSERT INTO enquiries
                  VALUES ('', '%s')",
                    mysqli_real_escape_string (getConnection(), $enquiry)
                  );
                  $arveikia = mysqli_query(getConnection(), $sql);
                  if (!$arveikia) {
                    echo "ERROR: " . mysqli_error(getConnection());
                  }
}

// createEnquiry('Do you make hairstyles for celebrations?');




 ?>

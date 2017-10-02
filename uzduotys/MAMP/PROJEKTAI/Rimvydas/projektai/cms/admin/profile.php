<!-- Header -->
<?php include "includes/admin_header.php" ?>
<?php 

   if(isset($_SESSION['username'])){
       
       
       $username = $_SESSION['username'];
       $query = "SELECT * FROM users WHERE username = '{$username}' ";
       $select_user_profile = mysqli_query($dbConnect, $query);
       
       while($row = mysqli_fetch_array($select_user_profile)){
        $user_id = $row['user_id']; //Table row names 
        $username = $row['username']; //Table row names         
        $user_password = $row['user_password']; //Table row names 
        $user_firstname = $row['user_firstname']; //Table row names   
        $user_lastname = $row['user_lastname']; //Table row names   
        $user_email = $row['user_email']; //Table row names         
        $user_image = $row['user_image']; //Table row names 
        $user_role = $row['user_role']; 
       }
       
   } 

    if(isset($_POST['edit_profile'])){
    
       
        $user_firstname = $_POST['user_firstname']; //Table row names         
        $user_lastname = $_POST['user_lastname']; //Table row names 
        $user_role = $_POST['user_role'];
    
//        $post_image = $_FILES['image']['name']; 
//        $post_image_temp = $_FILES['image']['tmp_name'];
    
        $username = $_POST['username']; //Table row names 
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
       // $post_date = date('d-m-y'); 
           
    
     //   move_uploaded_file($post_image_temp, "../images/$post_image"); 
    
        $query = "UPDATE users SET ";
        $query .= "user_id = '{$user_id}', ";
        $query .= "username = '{$username}', ";
        $query .= "user_password = '$user_password', ";
        $query .= "user_firstname = '{$user_firstname}', ";
        $query .= "user_lastname = '{$user_lastname}', ";
        $query .= "user_email = '{$user_email}', ";
        $query .= "user_image = '{$user_image}', ";
        $query .= "user_role = '{$user_role}' ";
        $query .= "WHERE username = {$username} ";
        
        $update_user = mysqli_query($dbConnect, $query);
        confirmQuery($update_user);
    
}


?>

<div id="wrapper">

    <!-- Navigation -->
    <?php include "includes/admin_nav.php" ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Blank Page
                        <small>Subheading</small>
                    </h1>
                    
                       <form action="" method="post" enctype="multipart/form-data"> 
    
    <div class="form-group">
        <label for="author">Firstname</label>
        <input type="text" class="form-control" name="user_firstname" value="<?php echo $user_firstname;  ?>">
    </div>
     <div class="form-group">
        <label for="post_status">Lastname</label>
        <input value="<?php echo $user_lastname;  ?>"  type="text" class="form-control" name="user_lastname">
    </div>
    
       <div class="form-group">
       <select name="user_role" id="">
        <option value="subscriber"><?php echo $user_role;  ?></option> 
       <?php 
           
           if ($user_role == 'admin'){
            echo "<option value='subscriber'>subscriber</option> ";
           }else {
               echo "<option value='admin'>admin</option> "; 
           }
           
           
           ?>
       
       
        
          
         
        
                     
        </select>
    </div>
    
    
     
    
    <div class="form-group">
        <label for="post_image">User Image</label>
        <input type="file" name="image">
    </div>
    
    <div class="form-group">
        <label for="post_tags">Username</label>
        <input value="<?php echo $username;  ?>" type="text" class="form-control" name="username">
    </div>
    <div class="form-group">
        <label for="user_email">Email</label>
       <input value="<?php echo $user_email;  ?>" type="email" name="user_email" class="form-control">
    </div>
    
     <div class="form-group">
        <label for="user_password">Password</label>
       <input value="<?php echo $user_password;  ?>" type="password" name="user_password" class="form-control">
    </div>
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="edit_profile" value="Update Profile">
    </div>
    
    
</form> 
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <?php 
               
                    
                    ?>
                    
                    
                    
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->




    <!-- Footer -->
    <?php include "includes/admin_footer.php" ?>

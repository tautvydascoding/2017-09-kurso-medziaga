<?php 


if(isset($_POST['create_user'])){
    
       
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
    
        $query = "INSERT INTO users(user_firstname, user_lastname, user_role, username, user_email, user_password) ";
        
        $query .= "VALUES('{$user_firstname}','{$user_lastname}', '{$user_role}', '{$username}',  '{$user_email}', '{$user_password}') ";
        
        $create_user_query = mysqli_query($dbConnect, $query);
        
    
       confirmQuery($create_user_query);
        
        echo "<div class='alert alert-success''>User Created <a href='users.php'>View all users</a></div>";
}



?>
   

   
   
   
   
   
   <form action="" method="post" enctype="multipart/form-data"> 
    
    <div class="form-group">
        <label for="author">Firstname</label>
        <input type="text" class="form-control" name="user_firstname">
    </div>
     <div class="form-group">
        <label for="post_status">Lastname</label>
        <input type="text" class="form-control" name="user_lastname">
    </div>
    
       <div class="form-group">
        <select name="user_role" id="">
         <option value="subscriber">Select Options</option>   
         <option value="admin">Admin</option>
         <option value="subscriber">Subscriber</option>
                     
        </select>
    </div>
    
    
     
    
    <div class="form-group">
        <label for="post_image">User Image</label>
        <input type="file" name="image">
    </div>
    
    <div class="form-group">
        <label for="post_tags">Username</label>
        <input type="text" class="form-control" name="username">
    </div>
    <div class="form-group">
        <label for="user_email">Email</label>
       <input type="email" name="user_email" class="form-control" required>
    </div>
    
     <div class="form-group">
        <label for="user_password">Password</label>
       <input type="password" name="user_password" class="form-control" required>
    </div>
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="create_user" value="Create User">
    </div>
    
    
</form>
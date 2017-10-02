<table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>User_id</th>
                                <th>Username</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                                <th>Role</th>
                               
                                
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                            
                  $query = "SELECT * FROM users";
    $select_users = mysqli_query($dbConnect, $query);

    //LOOP FOR DISPLAYING TABLE DATA

        while ($row = mysqli_fetch_assoc($select_users)) {

        $user_id = $row['user_id']; //Table row names 
        $username = $row['username']; //Table row names         
        $user_password = $row['user_password']; //Table row names 
        $user_firstname = $row['user_firstname']; //Table row names   
        $user_lastname = $row['user_lastname']; //Table row names   
        $user_email = $row['user_email']; //Table row names         
        $user_image = $row['user_image']; //Table row names 
        $user_role = $row['user_role'];         
      
        //Loop pagalba postiname į lentelę    
            
        echo"<tr>";    
        echo "<td>{$user_id}</td>";
        echo "<td>{$username}</td>";
        echo "<td>{$user_firstname}</td>";
        echo "<td>{$user_lastname}</td>";
        echo "<td>{$user_email}</td>";
        echo "<td>{$user_role}</td>";
            

        echo "<td><a href='users.php?source=edit_user&edit_user={$user_id}'>Edit</a></td>";
        echo "<td><a href='users.php?change_to_admin={$user_id}'>Admin</a></td>";
        echo "<td><a href='users.php?change_to_sub={$user_id}'>Subscriber</a></td>";
        echo "<td><a href='users.php?delete={$user_id}'>Delete</a></td>";
        

        echo"</tr>";     
            
            
        }
                            
            ?>              
      
                        </tbody>
                    </table>
            
            
         <?php 
    
    if(isset($_GET['delete'])){
                $user_delete_id = $_GET['delete']; //$the_post_id
                  $query = "DELETE  FROM users WHERE user_id ={$user_delete_id}";
    $delete_user_table = mysqli_query($dbConnect, $query);
        header("Location: users.php");
        confirmQuery($delete_user_table);
        
        
    }



         if(isset($_GET['change_to_admin'])){
                $user_post_id = $_GET['change_to_admin']; //$the_post_id
               
                $query = "UPDATE users SET user_role = 'admin' WHERE user_id = $user_post_id";
                $change_to_admin_query = mysqli_query($dbConnect, $query);
                
                header("Location: users.php");
                 confirmQuery($change_to_admin_query);
    }
    


    
       if(isset($_GET['change_to_sub'])){
                $user_post_id = $_GET['change_to_sub']; //$the_post_id
               
                $query = "UPDATE users SET user_role = 'subscriber' WHERE user_id = $user_post_id";
                $change_to_sub_query = mysqli_query($dbConnect, $query);
                
                header("Location: users.php");
                 confirmQuery($change_to_sub_query);
        
    }


?>   
            
            
            
      
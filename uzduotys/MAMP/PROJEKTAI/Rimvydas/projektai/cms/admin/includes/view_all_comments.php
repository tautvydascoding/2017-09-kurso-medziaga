<table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Post_id</th>
                                <th>Author</th>
                                <th>Comment</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>In Response to</th>
                                <th>Date</th>
                                <th>Approve</th>
                                <th>Unapprove</th>
                                <th>Delete</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                            
                  $query = "SELECT * FROM comments";
    $select_comments = mysqli_query($dbConnect, $query);

    //LOOP FOR DISPLAYING TABLE DATA

        while ($row = mysqli_fetch_assoc($select_comments)) {

        $comment_id = $row['comment_id']; //Table row names 
        $comment_post_id = $row['comment_post_id']; //Table row names         
        $comment_author = $row['comment_author']; //Table row names 
        $comment_content = $row['comment_content']; //Table row names     
        $comment_email = $row['comment_email']; //Table row names   
       
        $comment_status = $row['comment_status']; //Table row names         
        $comment_date = $row['comment_date']; //Table row names 
                 
      
        //Loop pagalba postiname į lentelę    
            
        echo"<tr>";    
        echo "<td>{$comment_id}</td>";
        echo "<td>{$comment_author}</td>";
        echo "<td>{$comment_content}</td>";
            
            
//        $query = "SELECT * FROM categories WHERE cat_id = {$post_cat_id} ";
//        $update_categories_table = mysqli_query($dbConnect, $query);
//                                  
//        //LOOP FOR DISPLAYING TABLE DATA
//                                  
//        while ($row = mysqli_fetch_assoc($update_categories_table )) {
//
//        $cat_id = $row['cat_id'];
//        $cat_title = $row['cat_title'];    
//        
//        echo "<td>{$cat_title}</td>";
//            
//            
//        }
        echo "<td>{$comment_email}</td>";    
        echo "<td>{$comment_status}</td>";
            
        $query = "SELECT * FROM posts WHERE post_id = $comment_post_id"; $select_post_id_query = mysqli_query($dbConnect, $query);  
            
        while($row = mysqli_fetch_assoc($select_post_id_query)){
            $post_id = $row['post_id'];
            $post_title = $row['post_title'];
            
            
            echo "<td><a href='../post.php?p_id=$post_id'>{$post_title}</a></td>";
            
        }    
            
        
            
            
            
            
        echo "<td>{$comment_date}</td>";
      
        
        echo "<td><a href='comments.php?approve={$comment_id}'>Approve</a></td>";
        echo "<td><a href='comments.php?unapprove={$comment_id}'>Unapprove</a></td>";
        echo "<td><a href='comments.php?delete={$comment_id}'>Delete</a></td>";
        

        echo"</tr>";     
            
            
        }
                            
            ?>              
      
                        </tbody>
                    </table>
            
            
         <?php 
    
    if(isset($_GET['delete'])){
                $comment_post_id = $_GET['delete']; //$the_post_id
                  $query = "DELETE  FROM comments WHERE comment_id ={$comment_post_id}";
    $delete_comment_table = mysqli_query($dbConnect, $query);
        header("Location: comments.php");
        confirmQuery($delete_comment_table);
        
        
    }



         if(isset($_GET['approve'])){
                $comment_post_id = $_GET['approve']; //$the_post_id
               
                $query = "UPDATE comments SET comment_status = 'Approved' WHERE comment_id = $comment_post_id";
                $approve_comment_query = mysqli_query($dbConnect, $query);
                header("Location: comments.php");
        
    }
    


    
       if(isset($_GET['unapprove'])){
                $comment_post_id = $_GET['unapprove']; //$the_post_id
               
                $query = "UPDATE comments SET comment_status = 'Unapproved' WHERE comment_id = $comment_post_id";
                $unapprove_comment_query = mysqli_query($dbConnect, $query);
                header("Location: comments.php");
        
    }


?>   
            
            
            
      
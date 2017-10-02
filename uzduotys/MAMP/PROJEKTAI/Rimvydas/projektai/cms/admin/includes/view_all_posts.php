
<?php 


    if(isset($_POST['checkBoxArray'])){
        
        foreach($_POST['checkBoxArray'] as $post_value_id){
            $bulk_options = $_POST['bulk_options'];
            
            switch ($bulk_options){
                case 'published':
                    $query= "UPDATE posts SET post_status = '{$bulk_options}' WHERE post_id ={$post_value_id}";
                    
                    $update_to_publish = mysqli_query($dbConnect, $query);
                    confirmQuery($update_to_publish);
                break;
                
                 case 'draft':
                    $query= "UPDATE posts SET post_status = '{$bulk_options}' WHERE post_id ={$post_value_id}";
                    
                    $update_to_publish = mysqli_query($dbConnect, $query);
                break;
                     case 'delete':
                    $query= "DELETE FROM posts WHERE post_id ={$post_value_id}";
                    
                    $update_to_publish = mysqli_query($dbConnect, $query);
                break;
                    
                    
                    
                    
            }
            
        }
        
        
    }



?>                      

                      
                      
                       
<form action="" method="post">
  <table class="table table-hover table-bordered">
                       
        <div class="bulkOptionsContainer col-xs-4">
            
            <select class="form-control" name="bulk_options" id="">
                <option value="">Select Options</option>
                <option value="published">Publish</option>
                <option value="draft">Draft</option>
                <option value="delete">Delete</option>
            </select>
            
            
        </div>  
        <div class="col-xs-4">
            <input type="submit" name="submit" class="btn btn-success" value="Apply">
            <a href="add_posts.php" class="btn btn-primary">Add New</a>
        </div>                        
                    
            <thead>
                <tr>
                    <th><input type="checkbox" id="selectAllBoxes"></th>   
                    <th>Post_id</th>
                    <th>Author</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Image</th>
                    <th>Tags</th>
                    <th>Comments</th>
                    <th>Date</th>
                    <th>Edit</th>
                    <th>Delete</th>

                </tr>
            </thead>
            <tbody>
                            
                            <?php 
                            
                  $query = "SELECT * FROM posts";
    $select_posts_table = mysqli_query($dbConnect, $query);

    //LOOP FOR DISPLAYING TABLE DATA

        while ($row = mysqli_fetch_assoc($select_posts_table)) {

        $post_id = $row['post_id']; //Table row names 
        $post_author = $row['post_author']; //Table row names         
        $post_title = $row['post_title']; //Table row names 
        $post_cat_id = $row['post_category_id']; //Table row names   
        $post_stat = $row['post_status']; //Table row names 
        $post_img = $row['post_image']; //Table row names         
        $post_tags = $row['post_tags']; //Table row names 
        $post_comments = $row['post_comment_count']; //Table row names          
        $post_date = $row['post_date']; //Table row names  
            
        //Loop pagalba postiname į lentelę    
            
        echo"<tr>";
            ?>
        <td><input name="checkBoxArray[]" type='checkbox' class='selectAllBoxes' value='<?php echo $post_id;  ?>'></td>    <?php
        echo "<td>{$post_id}</td>";
        echo "<td>{$post_author}</td>";
        echo "<td>{$post_title}</td>";
            
            
        $query = "SELECT * FROM categories WHERE cat_id = {$post_cat_id} ";
        $update_categories_table = mysqli_query($dbConnect, $query);
                                  
        //LOOP FOR DISPLAYING TABLE DATA
                                  
        while ($row = mysqli_fetch_assoc($update_categories_table )) {

        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];    
        
        echo "<td>{$cat_title}</td>";
            
            
        }
            
        echo "<td>{$post_stat}</td>";
        echo "<td><img src='../images/$post_img' width='100'></td>";
        echo "<td>{$post_tags}</td>";
        echo "<td>{$post_comments}</td>";
        echo "<td>{$post_date}</td>";
        echo "<td><a href='posts.php?source=edit_posts&p_id={$post_id}'>Edit</a></td>";
            echo "<td><a href='posts.php?delete={$post_id}'>Delete</a></td>";
        

        echo"</tr>";     
            
            
        }
                            
            ?>                
                               
                               
                               
        
                            
                        </tbody>
                        
                    </table>
            
            </form>
         <?php 
    
    if(isset($_GET['delete'])){
                $delete_post_id = $_GET['delete']; //$the_post_id
                  $query = "DELETE  FROM posts WHERE post_id = {$delete_post_id}";
                  
    $delete_posts_table = mysqli_query($dbConnect, $query);
        header("Location: posts.php");
        confirmQuery($delete_posts_table);
    }


?>   
            
            
            
      
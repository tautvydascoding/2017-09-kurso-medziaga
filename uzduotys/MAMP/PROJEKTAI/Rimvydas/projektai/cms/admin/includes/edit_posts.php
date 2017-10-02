<?php 
    // p_id iš view_all_posts linko info padavimo
    if(isset($_GET['p_id'])){
       $update_post_id = $_GET['p_id']; //$the_post_id
    }


$query = "SELECT * FROM posts WHERE post_id = $update_post_id ";
    $select_posts_by_id = mysqli_query($dbConnect, $query);

    //LOOP FOR DISPLAYING TABLE DATA

        while ($row = mysqli_fetch_assoc($select_posts_by_id)) {

        $post_id = $row['post_id']; //Table row names 
        $post_author = $row['post_author']; //Table row names         
        $post_title = $row['post_title']; //Table row names 
        $post_cat_id = $row['post_category_id']; //Table row names   
        $post_stat = $row['post_status']; //Table row names 
        $post_img = $row['post_image']; //Table row names         
        $post_tags = $row['post_tags']; //Table row names 
        $post_comments = $row['post_comment_count']; //Table row names  
        $post_content = $row['post_content'];
        $post_date = $row['post_date'];

        }

    if(isset($_POST['update_post'])) {
        
        $post_title = $_POST['title']; //Table row names 
        $post_author = $_POST['author']; //Table row names         
        $post_category_id = $_POST['post_category']; //Table row names 
        $post_status = $_POST['post_status'];
    
        $post_image = $_FILES['image']['name']; //Table row names   
        $post_image_temp = $_FILES['image']['tmp_name']; //Table row names 
    
        $post_tags = $_POST['post_tags']; //Table row names 
        $post_content = $_POST['post_content'];
        
        move_uploaded_file($post_image_temp, "../images/$post_image"); 
        
        if(empty($post_image)){
         $query = "SELECT * FROM posts WHERE post_id = $update_post_id";
            
         $select_image = mysqli_query($dbConnect, $query);
        
         while($row = mysqli_fetch_array($select_image)){
             $post_image = $row['post_image'];
         }
        }
        
        $query = "UPDATE posts SET ";
        $query .= "post_title = '{$post_title}', ";
        $query .= "post_category_id = '{$post_category_id}', ";
        $query .= "post_date = now(), ";
        $query .= "post_author = '{$post_author}', ";
        $query .= "post_status = '{$post_status}', ";
        $query .= "post_tags = '{$post_tags}', ";
        $query .= "post_content = '{$post_content}', ";
        $query .= "post_image = '{$post_image}' ";
        $query .= "WHERE post_id = {$update_post_id} ";
        
        $update_post = mysqli_query($dbConnect, $query);
        confirmQuery($update_post);
        
        
        if ($update_post){
            echo "<div class='alert alert-success'><p>Post Updated Successflly <a href='posts.php'>View Posts</a> or <a href='posts.php'>Edit more posts</a></p></div>";
        }else {
            echo "<div class='alert alert-danger'><p>Failed to update post</p></div>";
        }
    }

?>
   

   
   
   
   
   <form action="" method="post" enctype="multipart/form-data"> 
    
    <div class="form-group">
        <label for="title">Post Title</label>
        <input value="<?php echo $post_title;  ?>" type="text" class="form-control" name="title">
    </div>
    
     <div class="form-group">
        <select name="post_category" id="">
            
           <?php 
            
            $query = "SELECT * FROM categories";
        $select_categories = mysqli_query($dbConnect, $query);
                                  
        //LOOP FOR DISPLAYING TABLE DATA
            confirmQuery($select_categories);
                                  
        while ($row = mysqli_fetch_assoc($select_categories)) {

        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];
            echo "<option value='$cat_id'>{$cat_title}</option>";
            
        }
            
 ?> 
                     
        </select>
    </div>
    
    
     <div class="form-group">
        <label for="author">Post Author</label>
        <input value='<?php echo $post_author;  ?>' type="text" class="form-control" name="author">
    </div>
     <div class="form-group">
               <select name="post_status" id="">
                    <option value='<?php echo $post_stat; ?>'><?php echo $post_stat; ?></option>
                     <?php 
                   
                    if($post_stat == 'published'){
                        echo "<option value='draft'>Draft</option>";
                    }else {
                        echo "<option value='published'>Published</option>"; 
                    }
                   
                   ?>
                     
        </select>
    </div>
    
    <div class="form-group">
        <label for="post_image">Post Images</label>
        <img name="post_image" width="100" src="../images/<?php echo $post_img; ?>" alt="">
        <input  type="file" name="image">
    </div>
    
    <div class="form-group">
        <label for="post_tags">Post Tags</label>
        <input value="<?php echo $post_tags;  ?>"  type="text" class="form-control" name="post_tags">
    </div>
    <div class="form-group">
        <label for="post_content">Post Content</label>
        <textarea name="post_content" class="form-control" id="" cols="30" rows="10"><?php echo $post_content;  ?></textarea>
    </div>
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="update_post" value="Publish Post">
    </div>
    
    
</form>
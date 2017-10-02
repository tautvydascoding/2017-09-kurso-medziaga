 <form action="" method="post">
        <div class="form-group">
            <label for="cat_title">Edit Category</label>
                                
                                <?php 
                                
                                
                                
            if(isset($_GET['update'])){
                 
               $update_cat_id = $_GET['update'];                    
                                
                                
        $query = "SELECT * FROM categories WHERE cat_id = {$update_cat_id} ";
        $update_categories_table = mysqli_query($dbConnect, $query);
                                  
        //LOOP FOR DISPLAYING TABLE DATA
                                  
        while ($row = mysqli_fetch_assoc($update_categories_table )) {

        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];
                                
                                
          ?>
                                
          <input type="text" class="form-control" name="update_cat" value="<?php if(isset($cat_title)){echo $cat_title; } ?>">                  
                                
         <?php }
            }                                       
            ?>
            <?php 
        ////////////UPDATE CATEGORIE
                                
       if(isset($_POST['update_cat'])){

         $update_cat_title = $_POST['update_cat'];
         $query = "UPDATE categories SET cat_title = '$update_cat_title' WHERE cat_id = {$cat_id} ";
         $update_query = mysqli_query($dbConnect, $query);                   if (!$update_query){
             die("Query Failed" . mysqli_error($dbConnect));
         }
                                
       }
            ?>                       
   
            </div>
                <div class="form-group">
                    <input type="submit" name="" value="Update" class="btn btn-primary">

                </div>

                </form>
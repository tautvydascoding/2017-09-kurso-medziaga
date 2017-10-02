    <?php include "includes/db_connect.php" ?>


<?php include "includes/header.php"; ?>



    <!-- Navigation -->
   
<?php include "includes/nav.php"; ?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

               
            <?php 
                
                
                
                
            
    
    
    if (isset($_POST['submit'])){
        
      $search =   $_POST['search'];
        
        
      $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
      $search_query = mysqli_query($dbConnect, $query);
        
        
        if (!$search_query){
            die("Search query failed" . mysqli_error($dbConnect));
        }
        
        $count = mysqli_num_rows($search_query);
        if ($count == 0){
            echo "<h1>No result</h1>";
        } else {
            
//            $query = "SELECT * FROM posts";
//                
//                $select_all_posts_query = mysqli_query($dbConnect, $query);
                

                while ($row = mysqli_fetch_assoc($search_query)) {
                    
                    
                  $post_title = $row['post_title']; // From database
                  $post_author = $row['post_author']; // From database
                  $post_date = $row['post_date']; // From database
                  $post_image = $row['post_image']; // From database
                  $post_content = $row['post_content']; // From database
                 
                   ?>
                   
                   
                   <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $post_title ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span><?php echo $post_date ?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image; ?>" alt="">
                <hr>
                <p><?php echo $post_content ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
                   <?php }  
            
        }
        
    }
    
     
?> 

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
           <?php include "includes/sidebar.php" ?>

        </div>
        <!-- /.row -->

        <hr>

<?php include "includes/footer.php"; ?>
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
                
                $query = "SELECT * FROM posts";
                
                $select_all_posts_query = mysqli_query($dbConnect, $query);
                

                while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
                    
                  $post_id = $row['post_id'];  
                  $post_title = $row['post_title']; // From database
                  $post_author = $row['post_author']; // From database
                  $post_date = $row['post_date']; // From database
                  $post_image = $row['post_image']; // From database
                  $post_content = substr($row['post_content'], 0,100); 
                  $post_status = $row['post_status'];
                    
                    
                    
                   if ($post_status == 'published'){
                     
                       
                 
                       
                   
                    // From database
                 
                   ?>
                   
                   
                   <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="post.php?p_id=<?php echo $post_id ?>"><?php echo $post_title ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span><?php echo $post_date ?></p>
                <hr>
                <a href="post.php?p_id=<?php echo $post_id ?>">
                <img class="img-responsive" src="images/<?php echo $post_image; ?>" alt=""></a>
                <hr>
                <p><?php echo $post_content ?></p>
                <a class="btn btn-primary" href="post.php?p_id=<?php echo $post_id ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
                   <?php }
                }?> 
                   
             
                
               
                   
                

               

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
        
        
        <?php 
        
        $to - 'trimvydas17@gmail.com';

$subject - 'test email';

$message - 'test email';

$headers = "From: The Sender Name <trimvydas17@gmail.com>\r\n";
$headers .= "Repty To: replyto@rimvydasta.com\r\n";
$headers .= "Content-type: text/html\r\n";


mail($to, $subject, $message, $headers);
        
        
        
        ?>

<?php include "includes/footer.php"; ?>

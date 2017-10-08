<!-- Header -->
<?php include "includes/admin_header.php" ?>


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
                    
                    
                    <?php 
                  // Source yra į kurį puslapį eiti  
                  if (isset($_GET['source'])) {
                      
                $source = $_GET['source'];
                         
                  }else {
                      $source = '';
                  }
                    
                switch ($source){
                case 'add_posts';
                include "includes/add_posts.php"; 
                break;
                        
                case 'edit_posts';
                include "includes/edit_posts.php"; 
                break;
                        
                case '34';
                echo 'nice';
                break;
                
                default:
                        
                include "includes/view_all_comments.php";        
                break;
                }    
                    
                    
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

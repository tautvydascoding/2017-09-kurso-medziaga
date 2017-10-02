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

                    <div class="col-xs-6">
                      
             <?php    insert_categories(); ?>
                        
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="cat_title">Add Category</label>
                                <input type="text" class="form-control" name="cat_title">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Add Category" class="btn btn-primary">

                            </div>

                        </form>
                        
                        <?php 
                        
                        // UPDATE AND INCLUDE QUERY
                        
                        if (isset($_GET['update'])) {
                            
                            $cat_id = $_GET['update'];
                            
                            include "includes/edit_categories.php";
                            
                        }
                        
                        ?>
                       
                    </div>
                    <div class="col-xs-6">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Title</th>
                                </tr>
                            </thead>
                            <tbody>        
           
      <?php  
                    
            //FIND ALL CATEGORIES QUERY                    
                findAllCategories(); ?> 
      

                                <?php      
            // DELETE CATEGORY
                 deleteCategorie();
               ?>      


                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->




    <!-- Footer -->
    <?php include "includes/admin_footer.php" ?>

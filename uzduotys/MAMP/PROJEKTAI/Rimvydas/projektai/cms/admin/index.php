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
                           Welcome 
                           
                        
                            <?php 
    //From login.php session
    echo $_SESSION['username']; ?>
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
                <?php include "admin_widgets.php" ?>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->




<!-- Footer -->
 <?php include "includes/admin_footer.php" ?>
   <nav class="navbar navbar-default navbar-fixed-top ">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
                <a class="navbar-brand" href="#fullsingle"><img src="./img/nav-logo.png" alt="" class="brand-logo"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
<!--
                    <li><a href="#WHAT-WE">What we do</a></li>
                    <li><a href="#ABOUT-US">About</a></li>
                    <li><a href="#SERVICES">Services</a></li>
                    <li><a href="#FEATURE">Features</a></li>
                    <li><a href="#OUR-TEAM">Team</a></li>
                    <li><a href="#OUR-SKILLS">Skills</a></li>
                    <li><a href="#portfolio">Projects</a></li>
                    <li><a href="#pricePlans">Pricing</a></li>
                    <li><a href="#NEWSLETTER">Newsletter</a></li>
                    <li><a href="#CONTACT">Contacts</a></li>
-->
               
               
               <?php 
                    
                    
                    $query = "SELECT * FROM nav";
                $select_all_categories_query = mysqli_query($dbConnect, $query);
                

                while ($row = mysqli_fetch_assoc($select_all_categories_query)) {
                    
                    
                  $navtitle = $row['nav_name'];
                    $navref = $row['nav_ref'];
                    echo "<li><a href='#{$navref}'>{$navtitle}</a></li>";
                } 
                    
                    
                    ?>
               
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
                <!-- /.row -->
                
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    
                    <?php
                        //Counts all posts and displays them
                        $query = "SELECT * FROM posts";
                        $select_all_post = mysqli_query($dbConnect, $query);
                    $post_count  =  mysqli_num_rows($select_all_post);
                        
                        ?>
                    
                    
                  <div class='huge'><?php echo $post_count; ?></div>
                        <div>Posts</div>
                    </div>
                </div>
            </div>
            <a href="posts.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    
                       <?php
                        //Counts all comments and displays them
                        $query = "SELECT * FROM comments";
                        $select_all_comments = mysqli_query($dbConnect, $query);
                    $comment_count  =  mysqli_num_rows($select_all_comments);
                        
                        ?>
                    
                     <div class='huge'><?php echo $comment_count; ?></div>
                      <div>Comments</div>
                    </div>
                </div>
            </div>
            <a href="comments.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    
                    <?php
                        //Counts all users and displays them
                        $query = "SELECT * FROM users";
                        $select_all_users = mysqli_query($dbConnect, $query);
                    $user_count  =  mysqli_num_rows($select_all_users);
                        
                        ?>
                    
                    
                    <div class='huge'><?php echo $user_count; ?></div>
                        <div> Users</div>
                    </div>
                </div>
            </div>
            <a href="users.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-list fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                       <?php
                        //Counts all users and displays them
                        $query = "SELECT * FROM categories";
                        $select_all_categories = mysqli_query($dbConnect, $query);
                    $categorie_count  =  mysqli_num_rows($select_all_categories);
                        
                        ?>
          
                        <div class='huge'><?php echo $categorie_count; ?></div>
                         <div>Categories</div>
                    </div>
                </div>
            </div>
            <a href="categories.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
 
 <?php 
        //DRAFT POSTS
        $query = "SELECT * FROM posts WHERE post_status = 'draft'";
        $select_all_draft_post = mysqli_query($dbConnect, $query);
        $post_draft_count  =  mysqli_num_rows($select_all_draft_post);
        
        //Unapproved comments
        $query = "SELECT * FROM comments WHERE comment_status = 'Unapproved'";
        $select_all_unapproved_comments = mysqli_query($dbConnect, $query);
        $comment_unapproved_count  =  mysqli_num_rows($select_all_unapproved_comments);

        //Subscriber users
        $query = "SELECT * FROM users WHERE user_role = 'subscriber'";
        $select_all_subscribers = mysqli_query($dbConnect, $query);
        $user_subscriber_count  =  mysqli_num_rows($select_all_subscribers);

        //Subscriber users
        $query = "SELECT * FROM posts WHERE post_status = 'published'";
        $select_all_published = mysqli_query($dbConnect, $query);
        $post_published_count  =  mysqli_num_rows($select_all_published);


?>
 
 
  <div class="row">
      <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Data', 'Count'],

          <?php
            
            $element_text = ['All Posts','Active Posts', 'Draft Posts', 'Comments','Unapproved Comments', 'Users','Subscriber Users', 'Categories'];
            $element_count = [ $post_count,$post_published_count, $post_draft_count, $comment_count,$comment_unapproved_count, $user_count,$user_subscriber_count, $categorie_count];
            
            
            for($i = 0; $i < 8; $i++ ){
                
                echo "['{$element_text[$i]}'" . "," . "{$element_count[$i]}],";
                
            }
            
            ?>          
         
        ]);

        var options = {
          chart: {
            title: '',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <div id="columnchart_material" style="width: 'auto'; height: 500px;"></div>
  </div>              <!-- /.row -->
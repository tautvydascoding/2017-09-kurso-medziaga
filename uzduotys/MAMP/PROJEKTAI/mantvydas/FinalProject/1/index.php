<?php
    include_once ('./header.php');
 ?>

    <!-- ================ MIDDLE ================ -->
    <div class="responsiveMid container-fluid p-0 m-0">
        <?php
            include_once('./function-users.php');
            include_once('./function-articles.php');
         ?>
        <div id="wrapper" class="row hWrapper p-0 m-0">

            <div class="col mainImg firstImg p-0 m-0">
                <a href="./living.php">living</a>
            </div>

            <div class="col mainImg secondImg p-0 m-0">
                <a href="./exterior.php">exterior</a>
            </div>

            <div class="col mainImg thirdImg p-0 m-0">
                <a href="./dining.php">dining</a>
            </div>

            <div class="col mainImg fourthImg p-0 m-0">
                <a href="./workplace.php">workplace</a>
            </div>

        </div>

    </div>
    <!-- ================ MIDDLE ================ -->

    <?php
        include_once ('./footer.php');
     ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>


        <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">
        <!-- normalize - sutvarko kai kuriuos browser'io CSS nustaytmus (default) -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
        <!-- reikalintas taisyklingam responsice atvaizdavimui -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- savo CSS visada zemiau -->
        <link rel="stylesheet" href="./css/main.css">
    </head>
    <body>
        <div class="container">
                <header class="row aukstis300 fonas-yellow">
                    <div class="col-md-12">

                        <?php
                            // session_start();
                            include_once('./function-users.php');
                            include_once('./function-articles.php');
<<<<<<< HEAD:uzduotys/MAMP/uzduotis18/1-test-PHP-site/header.php
=======

>>>>>>> a27d75a9e2c0bf1c8510e9f8cbb8391938ee054e:uzduotys/MAMP/uzduotis18/1-test-PHP-site-pratestas/header.php
                         ?>

                         <nav>
                             <ul>
                                  <?php
                                     $users = getUsers(5);
                                     $user = mysqli_fetch_assoc($users);
                                     while ($user) {
                                         echo "<li>" . $user['username'] . "</li>";
                                         $user = mysqli_fetch_assoc($users);
                                     }


                                       // mysqli_fetch_assoc - paima sekanti vartotoja is obj
                                       //  $user = mysqli_fetch_assoc($users);
                                       //  echo "<li>" . $user['username'] . "</li>";
                                        //
                                       //  $user = mysqli_fetch_assoc($users);
                                       //  echo "<li>" . $user['username'] . "</li>";
                                        //
                                       //  $user = mysqli_fetch_assoc($users);
                                       //  echo "<li>" . $user['username'] . "</li>";
                                        //
                                       //  $user = mysqli_fetch_assoc($users);
                                       //  echo "<li>" . $user['username'] . "</li>";
                                  ?>
                             </ul>
                         </nav>

                    </div> <!-- END  -->
                </header>

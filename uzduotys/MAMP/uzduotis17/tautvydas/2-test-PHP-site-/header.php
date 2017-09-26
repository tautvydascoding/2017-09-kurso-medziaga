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
                <header class="row aukstis100 fonas-yellow">
                    <div class="col-md-12">

                        <?php
                            include_once('./function-users.php');
                            $users = getUsers(4);


                         ?>

                    </div> <!-- END  -->
                </header>

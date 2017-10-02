<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Final Project</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="responsiveHeader container-fluid p-0 m-0">
        <?php
            include_once('./function-users.php');
            include_once('./function-articles.php');
         ?>
        <header class="row myNav p-0 m-0">

            <ul class="col myNav headerImg p-0 m-0">

                <li><a href="./index.php">main</a></li>
                <!-- <li><a href="./about.php">about</a></li> -->
                <!-- <li><a href="./contacts.php">contacts</a></li> -->
                <li><a href="./living.php">living</a></li>
                <li><a href="./exterior.php">exterior</a></li>
                <li><a href="./dining.php">dining</a></li>
                <li><a href="./workplace.php">workplace</a></li>

            </ul>

        </header>

    </div>

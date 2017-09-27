<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>


        <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
        <!-- normalize - sutvarko kai kuriuos browser'io CSS nustaytmus (default) -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
        <!-- reikalintas taisyklingam responsice atvaizdavimui -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- savo CSS visada zemiau -->
        <link rel="stylesheet" href="./css/main.css">
    </head>
    <body>
      <div class="container"><header class="row fonas-yellow mb-1">
        <div class="col">
          <?php

          require_once('./function-users.php');


          ?>
          <nav>
            <ul>

                <?php
                $users = getUsers(4);
                $user = mysqli_fetch_assoc($users);

                while ($user) {
                  echo "<li>" . $user['username'] . "</li>";
                  $user = mysqli_fetch_assoc($users);
                }
                ?>

            </ul>
          </nav>
  </div>
</header>

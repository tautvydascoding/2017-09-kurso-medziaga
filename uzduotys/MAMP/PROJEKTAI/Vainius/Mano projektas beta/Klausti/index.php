<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Ashera</title>

  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">
  <!-- normalize - sutvarko kai kuriuos browser'io CSS nustaytmus (default) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
  <!-- reikalintas taisyklingam responsice atvaizdavimui -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- savo CSS visada zemiau -->
  <link rel="stylesheet" href="./lib/bootstrap/FontAwesome/font-awesome.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="./css/main.css">
</head>

<body >
  <?php include('index_procesas.php'); ?>
<link rel="stylesheet" href="form.css" type="text/css">
<div class="container">
  <form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <h3>Klausti</h3>
    <h4>Paklauskite ir mes jums atsakysime per 24 valandas!</h4>
    <fieldset>
      <input placeholder="Vardas" type="text" name="name" value="<?= $name ?>" tabindex="1" autofocus>
      <span class="error"><?= $name_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="E-mailas" type="text" name="email" value="<?= $email ?>" tabindex="2">
      <span class="error"><?= $email_error ?></span>
    </fieldset>
    <!-- <fieldset>
      <input placeholder="Jūsų numeris" type="text" name="phone" value="" tabindex="3">
      <span class="error"></span>
    </fieldset> -->
    <!-- <fieldset>
      <input placeholder="Your Web Site starts with http://" type="text" name="url" value=">" tabindex="4" >
      <span class="error"></span>
    </fieldset> -->
    <fieldset>
      <textarea value="<?= $message ?>" name="message" tabindex="5">
      </textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Klausti</button>
    </fieldset>
    <div class="success"><?= $success ?></div>
  </form>
</div>







  <h1></h1>
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="./main.js"></script>
</body>

</html>

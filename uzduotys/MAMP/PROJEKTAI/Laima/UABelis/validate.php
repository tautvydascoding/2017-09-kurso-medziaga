<?php
// define variables and set to empty values
    $nameErr = $emailErr = $phoneErr = "";
    $name = $email = $phone = $comment = "";

    $nameIsValid = false;
    $emailIsValid = false;
    $phoneIsValid = false;
    $commentIsValid = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // validate name
        if (empty($_POST["name"])) {
            $nameErr = " Būtina įvesti vardą";
        } else {
            $name = validate_input($_POST["name"]);
            $nameIsValid = true;
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                $nameErr = " Tik raidės ir tarpai galimi";
                $nameIsValid = false;
            }
        }

        // validate email
        if (empty($_POST["email"])) {
            $emailErr = " Būtina įvesti el. paštą";
        } else {
            $email = validate_input($_POST["email"]);
            $emailIsValid = true;
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               $emailErr = " Netinkamas el. pašto formatas";
               $emailIsValid = false;
            }
        }

        // validate phone
        if  (empty($_POST["phone"])) {
           $phoneErr = " Būtina įvesti telefono nr.";
        } else {
           $phone = validate_input($_POST["phone"]);
           $phoneIsValid = true;
           if (!filter_var($phone, FILTER_SANITIZE_NUMBER_INT)) {
               $phoneErr = " Netinkamas telefono formatas";
               $phoneIsValid = false;
           }
        }

        // validate comments
        if (empty($_POST["comment"])) {
           $comment = "";
        }else {
            $comment = validate_input($_POST["comment"]);
        }

        // insert when data is valid
        if ($nameIsValid && $emailIsValid && $phoneIsValid) {
            createGuest($name, $email, $phone, $comment);
        }
    }

    function validate_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = strip_tags($data);
        $data = htmlspecialchars($data);
        return $data;
    }

   function createGuest($name, $email, $phone, $comment) {

       $sql_string = sprintf("INSERT INTO myguests
       VALUES ('', '%s', '%s', '%s', '%s', Now())",
       mysqli_real_escape_string (getConnection(), $name),
       mysqli_real_escape_string (getConnection(), $email),
       mysqli_real_escape_string (getConnection(), $phone),
       mysqli_real_escape_string (getConnection(), $comment)
       );
       $arVeikia = mysqli_query(getConnection(), $sql_string);
       if (!$arVeikia) {  //  ($arVeikia == false)
           echo "ERROR: " . mysqli_error(getConnection());
       }
       else {
           $redirectTo = 'http://'.$_SERVER['HTTP_HOST'].'/success.php';
           header('Location: '.$redirectTo);
       }
   }

   ?>

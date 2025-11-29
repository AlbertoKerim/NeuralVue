<?php
  include('server.php');
  if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['ime']);
    header('location: prijava.php');
  }
  $_SESSION['lang']="EN";
?>
<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <meta name="authors" content="Nino Nogić, Ivan Jeržabek, Alberto Kerim">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="The goal of the webpage is to approximately calculate the presence of Hearth Disease in human">
        <link rel="icon" href="Pictures/favicon.png">
        <link rel="stylesheet" href="css/izgled.css"> <!-- Main CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- fa fa icons CSS -->
        <title>Log in</title>
    </head>


    <body>

        <?php include('menu.php'); ?>

        <form method="post" class="login" align="center" action="log-in.php"> <!-- Login form -->
            <h1 class="login-title">Log in </h1>
            <?php include('errors.php'); ?>
            <input type="email" class="login-input" name="email_login" placeholder="E-mail" autofocus required>
            <input type="password" class="login-input" name="password_login" placeholder="Password" required>
            <input type="submit" value="Log in" class="login-button" name="login_btn">
            <p class="login-lost"><a href="registration.php">Not registered yet?</a></p>
        </form>

    </body>

</html>

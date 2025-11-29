<?php
  include('server.php');
  if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['ime']);
    header('location: prijava.php');
  }
  $_SESSION['lang']="HR";
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
        <title>Prijava</title>
    </head>


    <body>

        <?php include('menu-cro.php'); ?>

        <form method="post" class="login" align="center" action="prijava.php"> <!-- Login form -->
            <h1 class="login-title">Prijava</h1>
            <?php include('errors.php'); ?>
            <input type="email" class="login-input" name="email_login" placeholder="E-mail" autofocus required>
            <input type="password" class="login-input" name="password_login" placeholder="Lozinka" required>
            <input type="submit" value="Prijavi se" class="login-button" name="login_btn">
            <p class="login-lost"><a href="registracija.php">Niste registrirani?</a></p>
        </form>

    </body>

</html>

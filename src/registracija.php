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
        <title>Registracija</title>
    </head>


    <body>


        <?php include('menu-cro.php'); ?>

        <form method="post" class="login" align="center" action="registracija.php"> <!-- Registration form -->
            <h1 class="login-title">Registracija</h1>
            <?php include('errors.php'); ?>
            <input type="text" class="login-input" name="ime" placeholder="Ime" autofocus required>
            <input type="text" class="login-input" name="prezime" placeholder="Prezime" required>
            <input type="email" class="login-input" name="email" placeholder="E-mail" required>
            <input type="date" class="login-input" name="datum-rodjenja" placeholder="Datum rođenja" value="1999-02-20"  max="2018-12-10" min="1930-12-31" required title="Datum rođenja">
            <input type="password" class="login-input" name="password" placeholder="Lozinka" required>
            <input type="password" class="login-input" name="password-confirm" placeholder="Potvrdite lozinku" required>
            <br><br>
            <input type="submit" value="Registrirajte se" class="login-button" name="register_btn">
        </form>

    </body>

</html>

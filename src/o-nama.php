<?php include('server.php');
  // check if logout was pressed
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
        <title>Ljudi iza web stranice</title>
    </head>


    <body>


        <?php include('menu-cro.php'); ?>


        <article>

            <h2 style="font-size: 20px;">
                <u>Tvorci</u>
            </h2>


            <div class="creators"> <!-- List of main creators -->

                <ul class="creators-list">

                    <a href="alberto-kerim-cro.php">
                        <li class="creators-publish">
                            <img class="creators-picture" src="Pictures/kerim-head.jpg" height="20%" width="20%" >
                            <h3 class="Creators-notice" style="font-size: 19px;font-family: 'Handlee';margin-top: 5px;">Alberto Kerim</h3>
                            <p class="creators-small-text">17 godina, 3. razred</p>
                        </li>
                    </a>

                    <a href="ivan-jerzabek-cro.php">
                        <li class="creators-publish">
                            <img class="creators-picture" src="Pictures/jerza-head.JPG" height="20%" width="20%" >
                            <h3 class="creators-notice">Ivan Jeržabek</h3>
                            <p class="creators-small-text">18 godina, 4. razred</p>
                        </li>
                    </a>

                    <a href="nino-nogic-cro.php">
                        <li class="creators-publish">
                            <img class="creators-picture" src="Pictures/nino-head.jpg" height="20%" width="17%" >
                            <h3 class="creators-notice">Nino Nogić</h3>
                            <p class="creators-small-text">17 godina, 3. razred</p>
                        </li>
                    </a>

                </ul>

            </div>

        </article>


    </body>


</html>

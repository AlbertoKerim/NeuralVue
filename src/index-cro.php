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
        <meta name="keywords" content="ANN,DL,CSS,Python,PHP,Tensorflow">
        <meta name="description" content="The goal of the webpage is to help humans in field of medicine and security">
        <link rel="manifest" href="/manifest.json">
        <link rel="icon" href="Pictures/favicon.png">
        <link rel="stylesheet" href="css/izgled.css">  <!-- Main CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- fa fa icons CSS -->
        <title>NeuralVue</title>
    </head>

    <!--
    _   __                      ___    __              ______         
   / | / /__  __  ___________ _/ / |  / /_  _____     / ____/________ 
  /  |/ / _ \/ / / / ___/ __ `/ /| | / / / / / _ \   / /   / ___/ __ \
 / /|  /  __/ /_/ / /  / /_/ / / | |/ / /_/ /  __/  / /___/ /  / /_/ /
/_/ |_/\___/\__,_/_/   \__,_/_/  |___/\__,_/\___/   \____/_/   \____/ 
    -->
                                                                      

    <body>

        <?php include('menu-cro.php'); ?>


        <h1 class="title-top">
            <?php if(!isset($_SESSION['ime'])){ echo "Pozdrav,"; }else{echo "Pozdrav "; echo $_SESSION['ime']; echo ",";} ?> moje ime je Athena.
            Još sam u Beta verziji. Ali sam svejedno prilično pametna.
            Ovdje su neke od stvari s kojima vam mogu pomoći.
        </h1>


        <article>  <!-- Main article -->

            <h2><u>Polje:</u></h2>

            <br>

            <div class="article2">  <!-- List of fields web page can offer -->
                <ul class="article2-list">
                    <a href="polje-medicine.php">
                        <li class="article2-publish">
                            <img class="article2-picture" src="Pictures/field-of-medicine.jpg" width="25%">
                            <h3 class="article2-notice">Medicine</h3>
                            <p class="article2-small-text">Mogu vam pomoći u predviđanju dijagnoze</p>
                        </li>
                    </a>
                    <a href="#">
                        <li class="article2-publish">
                            <img class="article2-picture" src="Pictures/coming_soon.jpg" width="25%">
                            <h3 class="article2-notice">Dolazi uskoro</h3>
                            <p class="article2-small-text">Nova Velika stvar</p>
                        </li>
                    </a>
                </ul>
            </div>

        </article>
        <br>
        <footer class="footer">  <!-- Footer in web page -->

			<div class="footer-left">
				<p class="footer-company-name">NeuralVue,<br>2018.</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Zagreb, Hrvatska</span> </p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
                <span><u>Malo o meni</u></span>
				Napravljena sam sa namjerom poboljšanja života ljudi u mnogin aspektima. Prvenstveno u aspektu medicine i civilne zaštite
                </p>

			</div>

        </footer>

    </body>

</html>

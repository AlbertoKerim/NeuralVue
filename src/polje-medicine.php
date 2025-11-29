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
        <link rel="stylesheet" href="css/izgled.css">  <!-- Main CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  <!-- fa fa icons CSS -->
        <title>NeuralVue</title>
    </head>

    <body>

        <?php include('menu-cro.php'); ?>


        <h1 class="title-top">
            Ovdje su neke od stvari s kojima vam mogu pomoći u polju medicine
        </h1>

        <article> <!-- Main article -->

            <h2><u>Programi:</u></h2>

            <br>

            <div class="article2"><!-- List of fields web page can offer -->

                <ul class="article2-list">

                    <a href="heart-NN-kalkulator.php">
                        <li class="article2-publish">
                            <img class="article2-picture" src="Pictures/heart-articles.png" height="20%" width="23%">
                            <h3 class="article2-notice">Cardios</h3>
                            <p class="article2-small-text">Kalkulator podpomognut Neuronskom mrežom koji može predvidjeti ako ima znakova srčanih bolesti u korisnika</p>
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

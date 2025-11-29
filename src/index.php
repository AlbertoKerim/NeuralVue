<?php include('server.php');
  // check if logout was pressed
  if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['ime']);
    header('location: log-in.php');
  }
  $_SESSION['lang']="EN";
?>
<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <meta name="authors" content="Nino Nogić, Ivan Jeržabek, Alberto Kerim">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="ANN,DL,CSS,Python,PHP,Tensorflow">
        <meta name="description" content="The goal of the webpage is to help humans in field of medicine and security">
        <link rel="manifest" href="/manifest.json">
        <link rel="icon" href="Pictures/favicon.png">
        <link rel="stylesheet" href="css/izgled.css">  <!-- Main CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- fa fa icons CSS -->
        <title>NeuralVue</title>
    </head>

    <!--
    _   __                      ___    __         
   / | / /__  __  ___________ _/ / |  / /_  _____ 
  /  |/ / _ \/ / / / ___/ __ `/ /| | / / / / / _ \
 / /|  /  __/ /_/ / /  / /_/ / / | |/ / /_/ /  __/
/_/ |_/\___/\__,_/_/   \__,_/_/  |___/\__,_/\___/ 
    -->

    <body>

        <?php include('menu.php'); ?>


        <h1 class="title-top">
            <?php if(!isset($_SESSION['ime'])){ echo "Hello there,"; }else{echo "Hello there "; echo $_SESSION['ime']; echo ",";} ?> my name is Athena.
            I'm still in Beta version. But I'm quite smart by now.
            Here are some of the things I can help you with.
        </h1>


        <article>  <!-- Main article -->

            <h2><u>Field of:</u></h2>

            <br>

            <div class="article2">  <!-- List of fields web page can offer -->
                <ul class="article2-list">
                    <a href="field-of-medicine.php">
                        <li class="article2-publish">
                            <img class="article2-picture" src="Pictures/field-of-medicine.jpg" width="25%">
                            <h3 class="article2-notice">Medicine</h3>
                            <p class="article2-small-text">I can assist you in predicting diagnoses</p>
                        </li>
                    </a>
                    <a href="#">
                        <li class="article2-publish">
                            <img class="article2-picture" src="Pictures/coming_soon.jpg" width="25%">
                            <h3 class="article2-notice">Comming soon</h3>
                            <p class="article2-small-text">The next Big thing</p>
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
					<p><span>Zagreb, Croatia</span> </p>
				</div>
			</div>

			<div class="footer-right">
				<p class="footer-company-about">
                    <span><u>Little about me</u></span>
					I was developed with intention to improve the life of humans in many aspects. Primarily in the aspect of medicine and security.
				</p>
			</div>

		</footer>

    </body>

</html>

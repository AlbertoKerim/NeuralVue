<?php include('server.php');
  // check if logout was pressed
  if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['ime']);
    header('location: log-in.php');
  }
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <title>NeuralVue</title>

        <script>
            if(location.protocol == 'http:'){
              location.href = 'https:' + window.location.href.substring(window.location.protocol.length);
            }
            var getUrlParameter = function getUrlParameter(sParam) {
                var sPageURL = window.location.search.substring(1),
                    sURLVariables = sPageURL.split('&'),
                    sParameterName,
                    i;

                for (i = 0; i < sURLVariables.length; i++) {
                    sParameterName = sURLVariables[i].split('=');

                    if (sParameterName[0] === sParam) {
                        return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
                    }
                }
            };
            $(document).ready(function() {
                var txt = getUrlParameter('res');
                if(txt != undefined) {
                    $("#result_field").text(txt);
                }else {
                    $("#result_field").text("Unavailable!");
                }
            });
        </script>

    </head>

    <body>

        <?php
        if($_SESSION['lang']=="EN"){
          include('menu.php');
        }
        else{
            include('menu-cro.php');
        }
        ?>

        <br>

        <article>

            <h1>
              <?php if($_SESSION['lang']=="EN"){echo "Your result:";} else{echo "Vaš rezlutat:";}?>
            </h1>
            <br>
            <h2 id="result_field"></h2>
            <br>
        </article>

        <br><br>

        <footer class="footer">  <!-- Footer in web page -->

            <div class="footer-left">
                <p class="footer-company-name">NeuralVue,<br>2018.</p>
            </div>

            <div class="footer-center">

                <div>
                  <i class="fa fa-map-marker"></i>
                  <p><span><?php if($_SESSION['lang']=="EN"){ echo "Zagreb, Croatia";}else{ echo "Zagreb, Hrvatska";} ?></span> </p>
                </div>

            </div>

            <div class="footer-right">

                <p class="footer-company-about">
                  <?php
                    if($_SESSION['lang']=="EN"){
                      echo "<span><u>Little about me</u></span>I was developed with intention to improve the life of humans in many aspects. Primarily in the aspect of medicine and security.";
                    }
                    else{
                      echo "<span><u>Malo o meni</u></span>Napravljena sam sa namjerom poboljšanja života ljudi u mnogin aspektima. Prvenstveno u aspektu medicine i civilne ";
                    }?>
                    </p>

            </div>

        </footer>

    </body>

</html>

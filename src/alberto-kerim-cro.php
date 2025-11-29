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
        <link rel="stylesheet" href="css/profiles.css"> <!-- CSS for profiles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- fa fa icons CSS -->
        <title>Alberto Kerim</title>
    </head>


    <body>

        <nav>

            <ul class="navigation">  <!-- Navigation for desktop PC -->

                <a href="index-cro.php" title="Glavna stranica">
                    <li style="pointer-events:none; width:65px; margin-bottom: 0px;">
                        <img src="Pictures/Brain_header.jpg" width="100px" >
                    </li>
                    <li>
                        <h2>Programi</h2>
                        <p>Dobrodošli</p>
                    </li>
                </a>

                <a href="o-nama.php" title="Nešto više o kreatorima">
                    <li style="border-right: 5px solid #666;">
                        <h2>O nama</h2>
                        <p>Tko smo mi</p>
                    </li>
                </a>


            <?php if(!isset($_SESSION['ime'])){ ?>    <a href="registracija.php" title="Registriraj se za početak">
                    <li style="float: right">
                        <h2>Registracija</h2>
                        <p>Započnite sada</p>
                    </li>
                </a>

                <a href="prijava.php" title="Prijavi se za početak">
                    <li style="float: right">
                        <h2>Prijava</h2>
                        <p>Puni pristup</p>
                    </li>
                </a>

                <?php }else{ ?>

                <a type="post" class="logout" name="logout" href="?logout=1" title="Izađi iz sesije">
                    <li style="float: right">
                        <h2>Odjava</h2>
                        <p>Odjavite se sa sesije</p>
                    </li>
                </a>

                <?php } ?>

            </ul>


            <div class="topnav"> <!-- Navigation for mobile devices -->

                <a href="#home" class="active">Meni</a>

                <div id="myLinks">
                    <a href="index-cro.php">Programi</a>
                    <a href="o-nama.php">O nama</a>

                    <br>
                    <?php if(!isset($_SESSION['ime'])){ ?>

                    <a href="prijava.php">Prijava</a>
                    <a href="registracija.php">Registracija</a>

                    <?php }else{ ?>
                    <br>

                    <a type="post" class="logout" name="logout" href="?logout=1">Odjava</a>

                    <?php } ?>
                </div>

                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>

            </div>

            <!-- Script for mobile devices (NAV) -->
            <script>
                function myFunction() {
                  var x = document.getElementById("myLinks");
                  if (x.style.display === "block") {
                    x.style.display = "none";
                  } else {
                    x.style.display = "block";
                  }
                }
            </script>

        </nav>


        <article style="overflow: hidden;">  <!-- More about creators -->

            <p class="title">Alberto Kerim</p>

            <img class="founder" src="Pictures/Kerim.jpeg" height="46%" width="27%" title="Founder picture" alt="Founder picture">

            <p class="brief-info">
                Ja sam mladi inovator iz Zagreba. Pohađao sam osnovnu školu Špansko Oranice, a trenutno pohađam Tehničku gimnaziju u Tehničkoj školi u Zagrebu. Zaljubio sam se u programiranje i tehnologije u 6. razredu kada sam počeo programirati u QBasic, i od tada to nisam prestao voljeti. Do danas sam uglavnom učio o dubokom i strojnom učenju i nadam se da ću to nastaviti. Uvijek sam spreman učiti nove stvari
            </p>

            <br>

            <b class="subtitle"><u>Moje vještine</u></b>

            <ul>
                <li class="skills">Pyhton <br>
                    <progress min="0" max="100" value="73"></progress>
                </li>
                <li class="skills">HTML <br>
                    <progress min="0" max="100" value="60"></progress>
                </li>
                <li class="skills">CSS <br>
                    <progress min="0" max="100" value="40"></progress>
                </li>
                <li class="skills">C++ <br>
                    <progress min="0" max="100" value="50"></progress>
                </li>
            </ul>

        </article>


        <article>  <!-- Previous projects -->

            <br>
            <b class="title"><u>Neki od prošlih projekata</u></b>
            <br><br>

            <ol class="list">
                    <li class="article-achivements">
                        <strong>Animas</strong> - Neuronska mreža koje prepoznaje pse i mačke
                    </li>
                    <li class="article-achivements">
                        <strong>AirBnB Kerim</strong> - Školski projekt da se iznova izmisli AirBnB-ova orginalna webstranica
                    </li>
            </ol>

        </article>


        <article> <!-- Contacts -->

            <br>
            <b class="title"><u>Kontakti</u></b>
            <br><br>

            <i class="fa fa-phone fa-2x" aria-hidden="true">&nbsp;&nbsp;&nbsp;0977683633</i>
            <br><br>
            <i class="fa fa-envelope fa-2x" aria-hidden="true">&nbsp;&nbsp;<div class="email-fa">alberto.kerim@gmail.com</div></i>
            <br><br>
            <a href="https://github.com/AlbertoKerim">
                  <i class="fa fa-github fa-2x" aria-hidden="true">&nbsp;&nbsp;AlbertoKerim</i>
            </a>

        </article>


    </body>

</html>

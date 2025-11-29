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
        <title>Nino Nogić</title>
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



        <article style="overflow: hidden;"> <!-- More about creators -->

            <div class="title">Nino Nogić</div>

            <img class="founder" src="Pictures/nino.jpg" height="46%" width="20%" title="Founder picture" alt="Founder picture">

            <p class="brief-info">
              Programiranje mi je bilo zabavno otkad se mogu sjetiti. Počeo sam s 12 godina.
              Moj prvi jezik je ActionScript 2.0 za Flash, nakon čega sam počeo ići u ZRS (Računalni savez Zagreba)
              gdje sam učio C++. Nakon 2 godine, bio mi je potreban prekid, tako da se moj fokus prebacio na
              web razvoj (HTML, CSS, JQUERY, PHP, MYSQL). U međuvremenu sam naučio kako napraviti LAMP stack na Linuxu i
              kako pravilno osigurati Linux instalaciju. Moj najnoviji jezik je Python i uskoro ću početi raditi u Javi.
              Prije C ++ sam nešto sitno radio u Javi, tako da ponovno učenje ponovno ne bi trebalo biti teško.
             </p>

            <br>

            <b class="subtitle"><u>Moje vještine</u></b>
            <ul>
                <li class="skills">C++ <br>
                    <progress min="0" max="100" value="75"></progress>
                </li>
                <li class="skills">HTML <br>
                    <progress min="0" max="100" value="60"></progress>
                </li>
                <li class="skills">CSS <br>
                    <progress min="0" max="100" value="56"></progress>
                </li>
                <li class="skills">PHP <br>
                    <progress min="0" max="100" value="50"></progress>
                </li>
                <li class="skills">JavaScript <br>
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
                    <strong>Autobiografijski blog</strong> - Web stranica o meni
                </li>
            </ol>

        </article>


        <article>  <!-- Contacts -->

            <br>
            <b class="title"><u>Kontakti</u></b>
            <br><br>

            <i class="fa fa-phone fa-2x" aria-hidden="true">&nbsp;&nbsp;&nbsp;0989986983</i>
            <br><br>
            <i class="fa fa-envelope fa-2x" aria-hidden="true">&nbsp;&nbsp;<div class="email-fa">nogicnino@gmail.com</div></i>
            <br><br>
            <a href="https://github.com/Ninoscorp">
                <i class="fa fa-github fa-2x" aria-hidden="true">&nbsp;&nbsp;Ninoscorp</i>
            </a>

        </article>

    </body>

</html>

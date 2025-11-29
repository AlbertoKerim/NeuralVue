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

                <a href="index.php" title="Main page">
                    <li style="pointer-events:none; width:65px;">
                        <img src="Pictures/Brain_header.jpg" width="100px" >
                    </li>
                    <li>
                        <h2>Programs</h2>
                        <p>Welcome</p>
                    </li>
                </a>

                <a href="about-us.php" title="Something more about creators">
                    <li style="border-right: 5px solid #666;">
                        <h2>About Us</h2>
                        <p>Who are we</p>
                    </li>
                </a>


            <?php if(!isset($_SESSION['ime'])){ ?>    <a href="registration.php" title="Registrate to start using our services">
                    <li style="float: right">
                        <h2>Registration</h2>
                        <p>Start now</p>
                    </li>
                </a>

                <a href="log-in.php" title="Log in to start">
                    <li style="float: right">
                        <h2>Log in</h2>
                        <p>Full access</p>
                    </li>
                </a>

                <?php }else{ ?>

                <a type="post" class="logout" name="logout" href="?logout=1" title="Log out of the session">
                    <li style="float: right">
                        <h2>Log out</h2>
                        <p>Log out of the session</p>
                    </li>
                </a>

                <?php } ?>

            </ul>


            <div class="topnav"> <!-- Navigation for mobile devices -->

                <a href="#home" class="active">Menu</a>

                <div id="myLinks">
                    <a href="index.php">Programs</a>
                    <a href="about-us.php">About us</a>

                    <br>
                    <?php if(!isset($_SESSION['ime'])){ ?>

                    <a href="log-in.php">Log In</a>
                    <a href="registration.php">Registration</a>

                    <?php }else{ ?>
                    <br>

                    <a type="post" class="logout" name="logout" href="?logout=1">Log out</a>

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
                I am a young innovator from Zagreb. I went to the primary school Špansko Oranice, and I'm currently attending Technical Gymnasium at Technical School of Zagreb. I fell in love with programming and technologies in the 6th grade when I started to code in QBasic, and I haven't stopped loving it since then. Till today I have mostly been learning about Deep and Machine Learning and I'm hoping to continue that. I am always willing to learn new things.
            </p>

            <br>

            <b class="subtitle"><u>My skills</u></b>

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
            <b class="title"><u>Some previous projects</u></b>
            <br><br>

            <ol class="list">
                    <li class="article-achivements">
                        <strong>Animas</strong> - Neural Network which can designate between dogs and cats
                    </li>
                    <li class="article-achivements">
                        <strong>AirBnB Kerim</strong> - School project to reinvent AirBnb original webpage
                    </li>
            </ol>

        </article>


        <article> <!-- Contacts -->

            <br>
            <b class="title"><u>Contacts</u></b>
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

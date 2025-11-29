
        <header>
            <img src="Pictures/Brain_header.jpg" title="Hi, I'm Athena" width="70%" >
        </header>

        <nav>

            <ul class="navigation">  <!-- Navigation for desktop PC -->

                <a href="index.php" title="Main page">
                    <li style="pointer-events:none; width:65px; margin-bottom: 0px;">
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
                        <p>Who we are</p>
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

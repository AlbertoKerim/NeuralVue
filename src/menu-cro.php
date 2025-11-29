
        <header>
            <img src="Pictures/Brain_header.jpg" title="Hey, ja sam Athena" width="70%" >
        </header>

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


            <?php if(!isset($_SESSION['ime'])){ ?>    <a href="registracija.php" title="Registriraj se za početak korištenja usluge">
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
                        <p>Odjavite se iz sesije</p>
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

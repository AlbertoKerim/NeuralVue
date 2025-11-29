<?php include('server.php');
  $_SESSION['lang']="HR";
  if(!isset($_SESSION['ime'])){
    $_SESSION['gotocalc']=1;
    if($_SESSION['lang']="HR"){
      header('location: prijava.php');
    }
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
        <link rel="stylesheet" href="css/heartnn.css"> <!-- CSS for input form -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!-- jQuery CDN used to send and retrieve data -->
        <title>Cardios</title>
    </head>

    <body>

        <h1 class="title-top">
            Bok ponovo. Sa ovim programom vam mogu pomoći izračunati rizik srčanih bolesti koje se mogu dogoditi. Kako bi to učinila trebam neke podatke od tebe.
        </h1>
        <br>

        <div class="container">

            <!-- Form for calculating risk -->
            <form class="well form-horizontal" action="index.html" method="POST" id="info_form">
                <fieldset>

                    <!-- Legend -->
                    <legend>Za izračun molimo unesite tražene podatke</legend>

                    <!-- Systolic blood pressure -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" style="font-size:14px;">Sistolički krvni tlak</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input name="sbp" placeholder="U mm Hg" class="form-control" type="number" step="0.01" min="60" max="220">
                            </div>
                        </div>
                    </div>

                    <!-- Tobacco -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" style="font-size:14px;">Godišnja potrošnja duhana</label>
                        <div class="col-md-4 selectContainer">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input name="tobacco" placeholder="U Kg npr. 3.4" class="form-control" type="number" step="0.01" min="0" max="50">
                            </div>
                        </div>
                    </div>

                    <!-- Cholesterol  -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" style="font-size:14px;">Lipoproteinski kolesterol niske gustoće (LDL)</label>
                        <div class="col-md-4 selectContainer">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input name="ldl" placeholder="U mmol/L npr. 2.1" class="form-control" type="number" step="0.01" min="0" max="15">
                            </div>
                        </div>
                    </div>

                    <!-- Body fat -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" style="font-size:14px;">Tjelesna masnoća</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input name="adiposity" placeholder="U postotcima (bez % znaka)" class="form-control" type="number" step="0.01" min="0" max="70">
                            </div>
                        </div>
                    </div>

                    <!-- Family history of heart disease -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" style="font-size:14px;">Obiteljska povijest srčanih bolesti</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <select name="famhist" class="form-control selectpicker" >
                                    <option value="Nan" >Molimo odaberite</option>
                                        <option value="1">Da</option>
                                        <option value="0">Ne</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Body Mass Index (BMI) -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" style="font-size:14px;">Indeks tjelesne mase (BMI)</label>
                        <div class="col-md-4 selectContainer">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input name="obesity" placeholder="BMI npr. 24.2" class="form-control"  type="number" step="0.01" min="15" max="55">
                            </div>
                        </div>
                    </div>

                    <!-- Alcohol consumption -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" style="font-size:14px;">Godišnja potrošnja alkohola</label>
                        <div class="col-md-4 selectContainer">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input name="alcohol" placeholder="U litrama npr. 4.2" class="form-control"  type="number" step="0.01" min="0" max="500">
                            </div>
                        </div>
                    </div>

                    <!-- Age -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" style="font-size:14px;">Dob</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input name="age" placeholder="U godinama npr. 25" class="form-control"  type="number" min="10" max="110">
                            </div>
                        </div>
                    </div>


                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" style="font-size:14px;"></label>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-warning">Unesi</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>

      <!-- This script handles form submitting -->
        <script>
            if(location.protocol == 'https:'){
              location.href = 'http:' + window.location.href.substring(window.location.protocol.length);
            }
            $("#info_form").submit(function(event){
            event.preventDefault()

            url = "http://" + window.location.host + ":5000/?";
            for(var i = 1; i <= 8; i++) {
                url += event.target[i].name + "=" + event.target[i].value + ((i == 8 ? "" : "&"))
            }
            url +="&lan="+"1";
            console.log(url);
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                // document.getElementById("txtHint").innerHTML = this.responseText;
                window.location.replace("/result.php?res=" + this.responseText);
                console.log(this.responseText);
                }
            };
            xhttp.open("GET", url, true);
            xhttp.send();
            });
        </script>

    </body>
</html>

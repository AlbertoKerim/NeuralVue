<?php include('server.php');
  $_SESSION['lang']="EN";
  if(!isset($_SESSION['ime'])){
    $_SESSION['gotocalc']=1;
    if($_SESSION['lang']="EN"){
      header('location: log-in.php');
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
            Hi again. With this program I can help you calculate the risk of heart disease that can occur in the user.
            In order to do so I need some data from you.
        </h1>

        <br>

        <div class="container">

            <!-- Form for calculating risk -->
            <form class="well form-horizontal" action="index.html" method="POST" id="info_form">
                <fieldset>

                    <!-- Legend -->
                    <legend>For the calculation please provide the required data</legend>

                    <!-- Systolic blood pressure -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" style="font-size:14px;">Systolic blood pressure</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input name="sbp" placeholder="In mm Hg" class="form-control" type="number" step="0.01" min="60" max="220">
                            </div>
                        </div>
                    </div>

                    <!-- Tobacco -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" style="font-size:14px;">Annual consumption of tobacco</label>
                        <div class="col-md-4 selectContainer">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input name="tobacco" placeholder="In Kg eg. 3.4" class="form-control" type="number" step="0.01" min="0" max="50">
                            </div>
                        </div>
                    </div>

                    <!-- Cholesterol  -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" style="font-size:14px;">Low Density Lipoprotein (LDL) cholesterol</label>
                        <div class="col-md-4 selectContainer">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input name="ldl" placeholder="In mmol/L eg. 2.1" class="form-control" type="number" step="0.01" min="0" max="15">
                            </div>
                        </div>
                    </div>

                    <!-- Body fat -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" style="font-size:14px;">Body fat</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input name="adiposity" placeholder="Percentage (without % sign)" class="form-control" type="number" step="0.01" min="0" max="70">
                            </div>
                        </div>
                    </div>

                    <!-- Family history of heart disease -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" style="font-size:14px;">Family history of heart disease</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <select name="famhist" class="form-control selectpicker" >
                                    <option value="Nan" >Please select result</option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Body Mass Index (BMI) -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" style="font-size:14px;">Body Mass Index (BMI)</label>
                        <div class="col-md-4 selectContainer">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input name="obesity" placeholder="BMI eg. 24.2" class="form-control"  type="number" min="15" max="55">
                            </div>
                        </div>
                    </div>

                    <!-- Alcohol consumption -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" style="font-size:14px;">Annuall consumption of alcohol</label>
                        <div class="col-md-4 selectContainer">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input name="alcohol" placeholder="In liters eg. 4.2" class="form-control"  type="number" step="0.01" min="0" max="500">
                            </div>
                        </div>
                    </div>

                    <!-- Age -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" style="font-size:14px;">Age</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input name="age" placeholder="In years eg. 25" class="form-control"  type="number"  min="10" max="110">
                            </div>
                        </div>
                    </div>


                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" style="font-size:14px;"></label>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-warning">Submit</button>
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
            url +="&lan="+"0";
            console.log(url);
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                // document.getElementById("txtHint").innerHTML = this.responseText;
                window.location.replace("/result.php?res=" + this.responseText);
                console.log(this.responseText)
                }
            };
            xhttp.open("GET", url, true);
            xhttp.send();
            });
        </script>

    </body>
</html>

<?php

  session_start();
  $errors = array();
  $db_con = new mysqli('localhost', 'Table_user', 'Table_User_123456', 'Athena');


  // check if register button was pressed, if it was get all of the input
  if(isset($_POST['register_btn'])){
    $email = $_POST['email'];
    $password1 = $_POST['password'];
    $password2 = $_POST['password-confirm'];
    $datum = $_POST['datum-rodjenja'];
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    if($_SESSION['lang']=="HR"){
      if(empty($_POST['obavijesti'])){
        $obavijesti = 0;
      }else{
        $obavijesti = $_POST['obavijesti'];
      }

      // if a field is empty, add error or bind a value
      if(empty($email)){
        array_push($errors, "Email je potreban");
      }
      if(empty($password1)){
        array_push($errors, "Password je potreban");
      }
      if($password1 != $password2){
        array_push($errors, "Passwordi se ne slažu");
      }
      if(empty($ime)){
        array_push($errors, "Ime je potrebno");
      }
      if(empty($prezime)){
        array_push($errors, "Prezime je potrebno");
      }
    }
    if($_SESSION['lang']=="EN"){
      if(empty($_POST['obavijesti'])){
        $obavijesti = 0;
      }else{
        $obavijesti = $_POST['obavijesti'];
      }

      // if a field is empty, add error or bind a value
      if(empty($email)){
        array_push($errors, "Email is required");
      }
      if(empty($password1)){
        array_push($errors, "Password required");
      }
      if($password1 != $password2){
        array_push($errors, "Passwords don't match");
      }
      if(empty($ime)){
        array_push($errors, "Name is required");
      }
      if(empty($prezime)){
        array_push($errors, "Surname is required");
      }
    }
    // get data and check if user exists in the database
    $user_check = $db_con->prepare("SELECT * FROM korisnik WHERE email=? LIMIT 1");
    $user_check->bind_param("s", $email);
    $user_check->execute();
    $user = $user_check->get_result();
    $user_test = mysqli_fetch_assoc($user);
    $user_check->close();

    if($user_test){
      if($user_test['email']==$email){
        array_push($errors, "Email already registered");
      }

    }

    // if there are no errors, proceed to write to database
    if(count($errors) == 0){
      $password =  hash('sha256', $password1);
      $db_register = $db_con->prepare("INSERT INTO korisnik (ime, prezime, email, datum_rodjenja, password, obavijesti) VALUES (?, ?, ?, ?, ?, ?)");
      $db_register->bind_param("sssssi",  $ime, $prezime, $email, $datum, $password, $obavijesti);
      $db_register->execute();
      $db_register->close();

      // get user id and set session variables needed for functionality
      $db_login = $db_con->prepare("SELECT id_korisnik FROM korisnik WHERE password=? AND email=?");
      $db_login->bind_param("ss", $password, $mail);
      $db_login->execute();
      $db_login_check = $db_login->get_result();
      $db_login->close();
      while($logindata = $db_login_check->fetch_assoc()){
        $login[] = $logindata;
      }
      $_SESSION['ime'] = $ime;
      $_SESSION['user_id'] = $login[0]['id_korisnik'];


        if(isset($_SESSION['gotocalc'])){
          if($_SESSION['lang']=="HR"){
            header("location: heart-NN-kalkulator.php");
          }
          if($_SESSION['lang']=="EN"){
              header("location: heart-NN-calculator.php");
          }
        }
      else{
        if($_SESSION['lang']=="HR"){
          header("location: index-cro.php");
        }
        if($_SESSION['lang']=="EN"){
        header("location: index.php");
        }
      }
      
    }

  }

  // check if login button was pressed, if it was get all of the input

  if(isset($_POST['login_btn'])){
    $mail = $_POST['email_login'];
    $password = $_POST['password_login'];

    //check if the fields were empty
    if($_SESSION['lang']=="HR"){
      if(empty($_POST['email_login'])){
        array_push($errors, "Email je potreban");
      }
      if(empty($_POST['password_login'])){
        array_push($errors, "Password je potreban");
      }
    }
    if($_SESSION['lang']=="EN"){
      if(empty($_POST['email_login'])){
        array_push($errors, "Email required");
      }
      if(empty($_POST['password_login'])){
        array_push($errors, "Password required");
      }
    }
    // if there are no errors, get the user info from database, encrypt the password and check if the users data matches
    if(count($errors)==0){
      $password_enc = hash("sha256", $password);
      $db_login = $db_con->prepare("SELECT ime, id_korisnik FROM korisnik WHERE password=? AND email=?  ");
      $db_login->bind_param("ss", $password_enc, $mail);
      $db_login->execute();
      $db_login_check = $db_login->get_result();
      $db_login->close();
      while($logindata = $db_login_check->fetch_assoc()){
        $login[] = $logindata;
      }

      // if data matches, set session username to username, index.php doesnt redirect to login.php anymore and if the user tried to get to
      // the heart disease calculator then it will redirect him to there
      if(mysqli_num_rows($db_login_check) == 1){
        $_SESSION['ime'] = $login[0]['ime'];
        $_SESSION['user_id'] = $login[0]['id_korisnik'];
        if(isset($_SESSION['gotocalc'])){
          if($_SESSION['lang']=="HR"){
            header("location: heart-NN-kalkulator.php");
          }
          if($_SESSION['lang']=="EN"){
              header("location: heart-NN-calculator.php");
          }
        }else{
          if($_SESSION['lang']=="HR"){
            header("location: index-cro.php");
          }
          if($_SESSION['lang']=="EN"){
          header("location: index.php");
          }
        }

      }
      else{
        if($_SESSION['lang']=="HR"){
        array_push($errors, "krivi email/password");
        }
        if($_SESSION['lang']=="EN"){
        array_push($errors, "wrong email/password");
        }
      }
    }
  }
?>

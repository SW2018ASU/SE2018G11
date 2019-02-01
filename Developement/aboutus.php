<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
    body{
      background-image: url(img/signup2.jpg);
      background-size: cover;
      background-repeat: no-repeat;
    }
    .bg-form{
      background-color: #5f6bdd;
    }
    </style>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" >
      <img class="mr-2" src="img/logo.png" width="40 px"  height="35 px"/>
      <a class="navbar-brand" href="<?php  if(isset($_SESSION["user_id"]))  echo 'homelogged.php'; else echo 'home.php';?>"><span style="color:#5f6bdd;">C</span>ode<span style="color:#5f6bdd;">G</span>uide</a>
    </nav><br><br>
    <div class="row">
      <div class="col-8 " >
      </div>
      <div class="col-lg-4 col-sm-12 bg-form ">
        <div class="container">
          <div class="jumbotron">
            <h1 class="display-4">About us</h1>
            <p class="lead">We are a community aiming to facilitate code query.</p>
            <hr class="my-4">
            <p style="font-weight:bold;">It's done in few steps :</p>
            <ol>
              <li>Log in</li>
              <li>Post a question</li>
              <li>The community will answer it or let experts do.</li>
            </ol>
            <ul>
              <li>
                <small >Already have account ?</small>
                <a  href="login.php">log in</a>
              </li>
              <li>
              <small >Don't have account ?</small>
              <a  href="signup.php">sign up</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

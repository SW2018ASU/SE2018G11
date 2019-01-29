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
    <script src="js/jquery-3.3.1.min.js"></script>
    <script>
      $(document).ready(function(){
$('form').submit(function(event) {
// get the form data
// there are many ways to get this data using jQuery (you can use the class or id also)
var formData = {
'email'              : $('#email').val(),
'password'             : $('#password').val(),
};
$.ajax({
type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
url         : 'Controllers/login.php', // the url where we want to POST//where controller that we want to go to is exist
data        : formData, // our data object //this data will be sent to contrller in $_POST
dataType    : 'json', // what type of data do we expect back from the server
encode          : true
}).done(function(data) {

  if(data['status']==1)
  {
    window.location.href = "homelogged.php";

  }
  else if(data['status']==0) {
    alert("username and password not mathcing");
  }
});
// stop the form from submitting the normal way and refreshing the page
event.preventDefault();
});







          $("#submit").click(function(){
          if(!$("#email").val()){
            var warning = $("<div class='mt-2 alert alert-danger' role='alert'>e-mail field is empty</div>");
            $(this).after(warning);
            warning.slideUp(2000);
            return false;
          }
          if(!$("#password").val()){
            var warning = $("<div class='mt-2 alert alert-danger' role='alert'>password field is empty</div>");
            $(this).after(warning);
            warning.slideUp(2000);
            return false;
          }
          return true;
        });
      });
    </script>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" >
      <img class="mr-2" src="img/logo.png" width="40 px"  height="35 px"/>
      <a class="navbar-brand" href="#"><span style="color:#5f6bdd;">C</span>ode<span style="color:#5f6bdd;">G</span>uide</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="./aboutus.php">About us</a>
          </li>
        </ul>
        <ul class="navbar-nav mr-2 pr-3">
          <li class="nav-item">
            <a class="nav-link" href="signup.php">sign up</a>
          </li>
          <li class="nav-item ml-3">
            <a class="nav-link" href="premiumaccount.php" style="color:#f0bc06; font-weight:bold;">Create premium account</a>
          </li>
        </ul>
      </div>
    </nav><br><br>
    <div class="row">
      <div class="col-8">
      </div>
      <div class="col-lg-4 col-sm-12 bg-form">
        <div class="container">
        <div class="jumbotron">
          <!-- form for email and password -->
          <form  method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email"  name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>
            <button id="submit" type="submit" class="btn btn-primary">Log in</button><br>
            <small >Don't have account ?</small>
            <a  href="signup.php">sign up</a>
          </form>
        </div>
      </div>
      </div>
    </div>
  </body>
</html>

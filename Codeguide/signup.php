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

                  $("#email").keyup(function(){

                $.post("Controllers/ajaxcheckusername.php",{'email':$(this).val()},function(data){

                if(data=="exist"){///use data to show to user below email that this email exist before and he cannot use it

                  $("#submit").attr("disabled", "disabled");
                }
                else {
                  $("#submit").attr("disabled", false);

                }



                });


            }
            );

          $("#submit").click(function(){
          if(!$("#firstname").val()){
            var warning = $("<div class='mt-2 alert alert-danger' role='alert'>first name field is empty</div>");
            $(this).after(warning);
            warning.slideUp(2000);
            return false;
          }
          if(!$("#lastname").val()){
            var warning = $("<div class='mt-2 alert alert-danger' role='alert'>last name field is empty</div>");
            $(this).after(warning);
            warning.slideUp(2000);
            return false;
          }
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
            <a class="nav-link" href="login.php">log in</a>
          </li>
          <li class="nav-item ml-3">
            <a class="nav-link" href="premiumaccount.php" style="color:#f0bc06; font-weight:bold;">Create premium account</a>
          </li>
        </ul>
      </div>
    </nav><br><br>
    <div class="row">
      <div class="col-8 " >
      </div>
      <div class="col-lg-4 col-sm-12 bg-form ">
        <div class="container">
          <div class="jumbotron">
            <!-- form -->
            <form method="post" Action="/SE2018G11/Codeguide/Controllers/createaccount.php">
              <div class="form-group" >
                <label for="firstname">First name</label>
                <input type="text" class="form-control" name="firstname"  id="firstname" aria-describedby="emailHelp" placeholder="First name">
              </div>
              <div class="form-group">
                <label for="lastname">Last name</label>
                <input type="text" class="form-control"name="lastname" id="lastname" aria-describedby="emailHelp" placeholder="Last name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
              </div>
              <button type="submit" id="submit" class="btn btn-primary " >submit</button><br>
              <small >Already have account ?</small>
              <a  href="login.php">log in</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
    body{
      background-image: url(img/premium.jpg);
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
          <li class="nav-item ml-3">
            <a class="nav-link" href="signup.php" >Create free account</a>
          </li>
        </ul>
      </div>
    </nav><br><br>
    <div class="row">
      <div class="col-8 " >
        <div class="d-flex justify-content-center">
          <div class="card border-warning mx-3 my-4" style="max-width: 18rem;">
            <div class="card-header" style="font-weight:bold">premium account</div>
            <div class="card-body">
              <h5 class="card-title text-warning">Features</h5>
              <div style="font-weight:bold">
                <img src="img/like.png" width="30 px"  height="30 px" alt="">Get experts answers<br>
                <img src="img/like.png" width="30 px"  height="30 px" alt="">Get fast answer<br>
              </div>
              <h5 class="card-title text-warning">Fees applied</h5>
              <img src="img/fees.png" width="30 px"  height="30 px">
              <span style="font-weight:bold">10<span style="color:green">$</span>/month</span>
            </div>
          </div>
          <div class="card border-info mx-3 my-4" style="max-width: 18rem;">
            <div class="card-header" style="font-weight:bold">Free account</div>
            <div class="card-body">
              <h5 class="card-title text-info">Advantages</h5>
              <div style="font-weight:bold">
                <img src="img/like.png" width="30 px"  height="30 px" alt="">Free<br>
                <img src="img/like.png" width="30 px"  height="30 px" alt="">Get community answers<br>
              </div>
              <h5 class="card-title text-info">Disadvantages</h5>
              <div style="font-weight:bold">
                <img src="img/dislike.png" width="30 px"  height="30 px" alt="">Slow answer<br>
                <img src="img/dislike.png" width="30 px"  height="30 px" alt="">Can't get experts' answers<br>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-12 bg-form ">
        <div class="container">
          <div class="jumbotron">
            <!-- form  -->
            <form action="" method="post">
              <div class="form-group">
                <label for="firstname">First name</label>
                <input type="text" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="First name">
              </div>
              <div class="form-group">
                <label for="lastname">Last name</label>
                <input type="text" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Last name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-primary">submit for premium account</button><br>
              <small >Already have account ?</small>
              <a  href="login.php">log in</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

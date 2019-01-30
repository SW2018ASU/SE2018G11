<?php include_once("components/head_homelogged.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <body >
    <div class="row">
      <div class="col-lg-8 col-sm-12">
        <div class="container">
          <!-- loop for posts -->
          <div class="card mb-3">
            <div class="card-header">
              <!-- username -->
              Omar alam
            </div>
            <div class="card-body">
              <!-- programming language -->
              <h5 class="card-title">java</h5>
              <!-- Question text -->
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <hr>
              <div class="row rowC">
                <div class="col-lg-4">
                  <button type="button" class="btn btn-light btn-lg btn-block"><img src="img/answer.png" width="20px">  Answers</button>
                </div>
                <div class="col-lg-4">
                  <button type="button" class="btn btn-light btn-lg btn-block comment"  ><img src="img/comment.png" width="20px">  Comment</button>
                </div>
                <div class="col-lg-4">
                  <button type="button" class="btn btn-light btn-lg btn-block"><img src="img/bookmark2.png" width="20px">  Bookmark</button>
                </div>
              </div>
              <!-- form for comment -->
              <!-- go to head_homelogged.php -->
              <!-- missing name attribute for comment found in components folder -->
              <form class="formC" action="" method="post">
                <div class="divC"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-12">
        <div class="container">
          <div class="jumbotron">
            <img class="mr-2" src="img/logo.png" width="60 px"  height="50 px"/>
            <span style="font-size:35px; font-weight:bold;"><span style="color:#5f6bdd;">C</span>ode<span style="color:#5f6bdd;">G</span>uide</span>
            <h4 class="lead">Filter posts by:</h4>
            <div class="row">
              <div class="col-lg-4">
                <button type="button" class="btn btn-outline-dark mb-2"><img src="img/c++.png" width="70px"><br>C++</button>
              </div>
              <div class="col-lg-4">
                <button type="button" class="btn btn-outline-dark mb-2"><img src="img/csharp.png" width="70px"><br>C#</button>
              </div>
              <div class="col-lg-4">
                <button type="button" class="btn btn-outline-dark mb-2"><img src="img/java.png" width="70px"><br>java</button>
              </div>
              <div class="col-lg-4">
                <button type="button" class="btn btn-outline-dark mb-2"><img src="img/python.png" width="70px"><br>python</button>
              </div>
              <div class="col-lg-4">
                <button type="button" class="btn btn-outline-dark mb-2"><img src="img/html.png" width="70px"><br>HTML</button>
              </div>
              <div class="col-lg-4">
                <button type="button" class="btn btn-outline-dark mb-2"><img src="img/css.png" width="70px"><br>CSS</button>
              </div>
              <div class="col-lg-4">
                <button type="button" class="btn btn-outline-dark mb-2"><img src="img/javascript.png" width="70px"><br>javascript</button>
              </div>
              <div class="col-lg-4">
                <button type="button" class="btn btn-outline-dark mb-2"><img src="img/jquery.png" width="70px"><br>jquery</button>
              </div>
              <div class="col-lg-4">
                <button type="button" class="btn btn-outline-dark mb-2"><img src="img/php.png" width="70px"><br>php</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </body>
</html>

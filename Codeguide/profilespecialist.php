<?php include_once("components/head_specialistprofile.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <body >
    <div class="row">
      <div class="col-lg-8 col-sm-12">
        <div class="container">
          <!-- loop for my posts -->
          <div class="card mb-3">
            <div class="card-header">
              <!-- Username -->
              Ali Alam
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
              <!-- comments forms -->
              <form class="formC" action="index.html" method="post">
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
            <hr class="lead">
            <h5>Your balance: <span class="badge badge-success">1000</span> $</h3>
            <h5>You answered <span class="badge badge-info">30</span> questions</h3>
          </div>
        </div>
      </div>
    </div>
    </div>
  </body>
</html>

<?php
include_once("Components/head_homelogged.php");
Database::connect();
$post_id=$_GET['post_id'];
$posts=post::get_post_by_id($post_id);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <body >
    <div class="row">
      <div class="col-lg-8 col-sm-12">
        <div class="container">
          <!-- This is th post itself -->
          <?php
          foreach ($posts as $post ){
          ?>
          <div class="card mb-3">
            <div class="card-header">
              <?php echo $post['language'] ?>
            </div>
            <div class="card-body">
              <h5 class="card-title">
                <?php echo $post['user_name'] ?>
              </h5>
              <p class="card-text">
                <?php echo $post['question'] ?>
              </p>
              <hr>
              <div class="row rowC">
                <div class="col-lg-6">
                  <button type="button" class="btn btn-light btn-lg btn-block comment"  ><img src="img/comment.png" width="20px">  Comment</button>
                </div>
                <div class="col-lg-6">
                  <button type="button" class="btn btn-light btn-lg btn-block"><img src="img/bookmark2.png" width="20px">  Bookmark</button>
                </div>
              </div>
              <form class="formC" action="index.html" method="post">
                <div class="divC"></div>
              </form>
            </div>
          </div>
        <?php } ?>
          <!-- End post -->
          <!-- loop for comments -->
          <!-- These are the answers -->
          <div class="card mb-3 ml-5">
            <!-- username appears here -->
            <div class="card-header">
              Omar Hesham
            </div>
            <div class="card-body">
              <!-- text goes here -->
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <hr>
              <div class="row">
                <div class="col-lg-4">
                </div>
                <div class="col-lg-4">
                </div>
                <div class="col-lg-4">
                  <button type="button" class="btn btn-light btn-lg btn-block"><img src="img/helpful.png" width="20px">  Helpful</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end of answer -->
          <!-- end of loop -->
        </div>
      </div>
      <!-- Filtering posts -->
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

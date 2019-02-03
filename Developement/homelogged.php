<?php
include_once("components/head_homelogged.php");
include_once("model/post.php");
Database::connect();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <body >
    <div class="row">
      <div class="col-lg-8 col-sm-12">
        <div class="container">
          <!-- loop for posts -->
          <?php
          if(!isset($_GET['question']))
          $posts=post::search_post(" ");
          else
          $posts=post::search_post($_GET['question']);
          foreach ($posts as $post) {
            ?>
          <div class="card mb-3">
            <div class="card-header">
              <div class="row">
              <!-- username -->
              <div class="col-lg-4">
                <img src="img/profile.png" width="30 px">
              <?php echo ucwords($post["first_name"])." ".ucwords($post["last_name"]);?>
            </div>
            <div class="col-lg-4">
              <img src="img/calender.png" width="20 px">
              <?php echo $post['dates']?>
            </div>
            <div class="col-lg-4">
              <img src="img/time.png" width="20 px">
              <?php echo $post['times']?>
            </div>
            </div>
            </div>

            <div class="card-body">
              <!-- programming language -->
              <h5 class="card-title">  <?php
              if ($post["language"]=="C/C++") {
                ?>
                  <img src="img/c++.png" height="30px" alt="">
                <?php
              }
              else if ($post["language"]=="C#") {
                ?>
                  <img src="img/csharp.png" height="30px" alt="">
                <?php
              }
              else if ($post["language"]=="java") {
                ?>
                  <img src="img/java.png" height="30px"alt="">
                <?php
              }
              else if ($post["language"]=="python") {
                ?>
                  <img src="img/python.png" height="30px" alt="">
                <?php
              }
              else if ($post["language"]=="php") {
                ?>
                  <img src="img/php.png" height="30px" alt="">
                <?php
              }
              else if ($post["language"]=="CSS") {
                ?>
                  <img src="img/css.png" height="30px" alt="">
                <?php
              }
              else if ($post["language"]=="HTML") {
                ?>
                  <img src="img/html.png" height="30px" alt="">
                <?php
              }
              else if ($post["language"]=="javascript") {
                ?>
                  <img src="img/javascript.png" height="30px" alt="">
                <?php
              }
              else if ($post["language"]=="jquery") {
                ?>
                  <img src="img/jquery.png" height="30px" alt="">
                <?php
              }
  echo $post["language"];?></h5>
              <!-- Question text -->
              <p class="card-text"><?php echo $post["question"]?></p>
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
        <?php  }?>
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
  </body>
</html>

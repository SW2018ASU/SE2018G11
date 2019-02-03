<?php include_once("components/head_group.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <body>
     <div class="row">
      <div class="col-lg-8 col-sm-12">
        <div class="container">
          <!-- loop for group posts -->
          <?php
          if(!isset($_POST['keyword']))$_POST['keyword']=" ";
          $posts=post::group_post($_POST['keyword'],$_GET['id']);
          foreach ($posts as $post) {
           ?>
          <div class="card mb-3">
            <div class="card-header">
              <!-- Username date time-->
              <div class="row">
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
              <p class="card-text" style="border:solid 1px #5f6bdd">
              <?php echo $post["question"];?></p>
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
          <?php } ?>
          <!-- loop end -->
        </div>
      </div>
      <div class="col-lg-4 col-sm-12">
        <div class="container">
          <div class="jumbotron">
            <img class="mr-2" src="img/logo.png" width="60 px"  height="50 px"/>
            <span style="font-size:35px; font-weight:bold;"><?php
            $info=group::group_info_id($_GET['id']);
            echo $info['name'];
             ?></span>
            <button type="button" class="btn btn-light btn-lg btn-block mb-2" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo"><img src="img/addMember.png" class="mr-2" width="25px">  Add members</button>
            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add member</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="input-group mb-3">
                      <!-- search for members input -->
                      <input class="form-control" name="search_users" id="search_users" type="search" placeholder="Search community for members" aria-label="Search" aria-describedby="button-addon2">
                    </div>
                    <!-- users appear by ajax on keyup -->
                    <div id="search-result-container"></div>
                    <br>
                    <hr class="lead">
                    <button id="create" type="button" class="btn btn-outline-primary">Add members</button>
                    <div id="final_users"></div>
                  </div>
                </div>
              </div>
            </div>
            <a class="btn btn-light btn-lg btn-block" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><img src="img/myGroups.png" class="mr-2" width="25px">  Group members</a>
            <div class="collapse multi-collapse" id="multiCollapseExample1">
              <div class="list-group">
                <?php
                  $members=group::get_members($_GET['id']);
                  foreach ($members as $member) {
                    if($member['id']==$_SESSION["user_id"])
                    {
                      ?>
                      <span class="list-group-item list-group-item-action"><?php echo "You"; ?></span>
                      <?php
                    }
                    else{
                      ?>
                      <span class="list-group-item list-group-item-action"><?php echo $member['first_name']." ".$member['last_name']; ?></span>
                      <?php
                    }
                  }
                 ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </body>
</html>

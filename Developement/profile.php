<?php
include_once("model/post.php");
include_once("components/head_profile.php");
include_once("model/comment.php");
Database::connect();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<script type="text/javascript">
$(document).ready(function(){
$("#test_your_self").click(function(){
  window.location.href = "https://www.w3schools.com/html/html_quiz.asp";
}
)
$("#boost").click(function(){
  window.location.href = "https://www.w3schools.com/";})
})
</script>
  <body >
    <div class="row">
      <div class="col-lg-8 col-sm-12">
        <div class="container">
          <!-- loop for my posts -->
          <?php
          if(!isset($_GET['question']))
          $posts=post::get_my_post("",$_SESSION["user_id"]);
          else  $posts=post::search_post($_GET['question']);
          foreach ($posts as $post) {
           ?>
          <div class="card mb-3" id='card_<?php echo $post['id']; ?>'>
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
              <div class="row rowC<?php echo $post['post_id'] ?>">
                <div class="col-lg-4">
                  <button type="button" id="answer_<?php echo $post["post_id"] ?>" class="btn btn-light btn-lg btn-block"><img src="img/answer.png" width="20px">  Answers</button>
                </div>
                <div class="col-lg-4">
                  <button type="button" class="btn btn-light btn-lg btn-block comment" id='comment_<?php echo $post['post_id'] ?>' ><img src="img/comment.png" width="20px">  Comment</button>
                </div>
                <div class="col-lg-4">
                  <button type="button" class="btn btn-light btn-lg btn-block"><img src="img/bookmark2.png" width="20px">  Bookmark</button>
                </div>
              </div>
              <!-- comments forms -->
              <form class="formC<?php echo $post['post_id'] ?>" action="profile.php" method="post">
                <div class="divC<?php echo $post['post_id'] ?>">
<hr class='lead'><div class='input-group my-1'><div class='input-group-prepend'><span class='input-group-text'>Your comment</span></div><textarea class='form-control' id='comment_text_<?php echo $post['post_id'] ?>' aria-label='With textarea'></textarea></div><button class='btn btn-light float-right' id='comment_button_<?php echo $post['post_id'] ?>' type='submit' ><img src='img/send.png' ></button>
                </div>
              </form>
            </div>
            <!-- //begining of comment -->
            <div class="divA<?php echo $post['post_id'] ?>" style="display:none"; >
              <?php
              $comments=comment::show_comment($post['post_id']);

              foreach ($comments as $comment) {
                if($comment['post_id']==$post['post_id'])
                {
               ?>
              <!-- loop for comments -->
              <!-- These are the answers -->
              <div class="card mb-3 ml-5">
                <!-- username appears here -->
                <div class="card-header">
                  <div class="row">
                  <!-- username -->
                  <div class="col-lg-4">
                    <img src="img/profile.png" width="30 px">
                  <?php echo $comment['user_name'] ?>
                </div>
                <div class="col-lg-4">
                  <img src="img/calender.png" width="20 px">
                  <?php echo $comment['dates'] ?>
                </div>
                <div class="col-lg-4">
                  <img src="img/time.png" width="20 px">
                  <?php echo $comment['times'] ?>
                </div>
                </div>
                </div>
                <div class="card-body">
                  <!-- text goes here -->
                  <p class="card-text"><?php echo $comment['comment_text'] ?></p>
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
            <?php }} ?>
              <!-- //end of comment -->
            </div>

          </div>
          <script type="text/javascript">
          $(".divC<?php echo $post['post_id'] ?>").hide();
            $(document).ready(function(){
          $("#answer_<?php echo $post['post_id'] ?>").click(function(){
            if($(".divA<?php echo $post['post_id'] ?>").is(":visible")){
              $(".divA<?php echo $post['post_id'] ?>").hide();
            }
            else  {
              $(".divA<?php echo $post['post_id'] ?>").show();
              // location.reload();

            }
          }
          );
          $("#comment_<?php echo $post['post_id'] ?>").click(function(){
          if($(".divC<?php echo $post['post_id'] ?>").is(":visible")){
            $(".divC<?php echo $post['post_id'] ?>").hide();
          }
          else  {
            $(".divC<?php echo $post['post_id'] ?>").show();
          }
          });
          $("#comment_button_<?php echo $post['post_id'] ?>").click(function(){
          var formData = {
          'comment_text'        : $('#comment_text_<?php echo $post['post_id'] ?>').val(),
          'post_id'             : <?php echo $post['post_id'] ?>
          };
          $.ajax({
          type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
          url         : 'Controllers/create_comment.php', // the url where we want to POST//where controller that we want to go to is exist
          data        : formData, // our data object //this data will be sent to contrller in $_POST
          dataType    : 'json', // what type of data do we expect back from the server
          encode          : true
          }).done(function(data) {
            $(".divC<?php echo $post['post_id'] ?>").hide();
          });
          });
          });
          </script>
        <?php } ?>
        </div>
      </div>
      <div class="col-lg-4 col-sm-12">
        <div class="container">
          <div class="jumbotron">
            <img class="mr-2" src="img/logo.png" width="60 px"  height="50 px"/>
            <span style="font-size:35px; font-weight:bold;"><span style="color:#5f6bdd;">C</span>ode<span style="color:#5f6bdd;">G</span>uide</span>
            <button type="button" class="btn btn-light btn-lg btn-block mb-2" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo"><img src="img/createGroup.png" class="mr-2" width="25px">  Create group</button>
            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Your group</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">Group name</span>
                        </div>
                        <!-- input for group name -->
                        <input type="text" name="group_name" id="group_name" class="form-control" placeholder="Enter group name" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                      <div class="input-group mb-3">
                        <!-- search for members input -->
                        <input class="form-control" name="search_users" id="search_users" type="search" placeholder="Search community for members" aria-label="Search" aria-describedby="button-addon2">
                      </div>
                      <!-- users appear by ajax on keyup -->
                      <div id="search-result-container"></div>
                      <br>
                      <hr class="lead">
                      <button id="create" type="button" class="btn btn-outline-primary">Create group</button>
                      <div class="check"></div>
                    <div id="final_users"></div>
                  </div>
                </div>
              </div>
            </div>
            <a class="btn btn-light btn-lg btn-block" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><img src="img/myGroups.png" class="mr-2" width="25px">  My groups</a>
            <div class="collapse multi-collapse" id="multiCollapseExample1">
              <div class="list-group">
                <!-- loop for group names -->
                <?php
                  $groups=group::my_groups($_SESSION["user_id"]);
                  foreach ($groups as $group) {
                  ?>
                    <a href="grouppage.php?id=<?php echo $group['group_id'];?>" class="list-group-item list-group-item-action"><?php echo $group['group_name']; ?></a>
                  <?php
                  }
                 ?>
              </div>
            </div>
            <button type="button" id="test_your_self"class="btn btn-light btn-lg btn-block my-2"><img src="img/test.png" class="mr-2" width="25px"> Test yourself</button>
            <button type="button" id="boost" class="btn btn-light btn-lg btn-block my-2"><img src="img/light.png" class="mr-2" width="18px"> Boost your knowledge</button>
          </div>
        </div>
      </div>
    </div>
    </div>
  </body>
</html>

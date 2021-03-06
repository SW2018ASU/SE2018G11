<?php include_once("Components/head_group.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <body>
     <div class="row">
      <div class="col-lg-8 col-sm-12">
        <div class="container">
          <!-- loop for group posts -->
          <?php
          if(isset($_POST['keyword'])){
            $posts=post::group_post($_POST['keyword'],$_GET['id']);
          }else{
            $posts=post::group_post("",$_GET['id']);
          }
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
              <div class="row rowC<?php echo $post['post_id'] ?>">
                <div class="col-lg-4">
                  <?php
                    $number=comment::get_number_comments($post['post_id']);
                   ?>
                  <button type="button" id="answer_<?php echo $post["post_id"] ?>" class="btn btn-light btn-lg btn-block"><img src="img/answer.png" width="20px">
                    <span id="number_<?php echo $post["post_id"] ?>" style="position:absolute; top:14px; right:40px;" class="badge badge-dark"><?php echo $number['number'];  ?></span>  Answers</button>
                </div>
                <div class="col-lg-4">
                  <button type="button" class="btn btn-light btn-lg btn-block comment" id='comment_<?php echo $post['post_id'] ?>' ><img src="img/comment.png" width="20px">  Comment</button>
                </div>
                <div class="col-lg-4">
                  <button type="button" id="bookmark_<?php echo $post["post_id"] ?>" class="btn btn-light btn-lg btn-block"><img src="img/bookmark2.png" width="20px">  Bookmark</button>
                </div>
              </div>
              <!-- comments forms -->
              <form class="formC<?php echo $post['post_id'] ?>" action="profile.php" method="post">
                <div class="divC<?php echo $post['post_id'] ?>">
                  <hr class='lead'><div class='input-group my-1'><div class='input-group-prepend'><span class='input-group-text'>Your comment</span></div><textarea class='form-control' id='comment_text_<?php echo $post['post_id'] ?>' aria-label='With textarea'></textarea></div>
                  <div class="d-flex flex-row-reverse bd-highlight">
                    <button class='btn btn-light' id='comment_button_<?php echo $post['post_id'] ?>' type='button' ><img src='img/send.png' ></button>
                  </div>
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
                      <button type="button" id='rate_<?php echo $comment['comment_id'];?>' class="btn btn-light btn-lg btn-block"><img src="img/helpful.png" width="20px">
                      <span id="raten_<?php echo $comment['comment_id'] ?>" style="position:absolute; top:14px; right:40px;" class="badge badge-dark"><?php echo comment::get_rate($comment['comment_id']); ?></span> Helpful</button>
                    </div>
                  </div>
                </div>
              </div>
              <script type="text/javascript">
              $(document).ready(function(){
                <?php  $users=comment::get_user_rate($comment['comment_id']);
                $found=0;
                foreach ($users as $user) {
                  if ($user['user_id']==$_SESSION["user_id"]) {
                    $found=1;
                  }
                }
                 ?>
                 var found=<?php echo json_encode($found); ?>;
                 if (found) {
                   $("#rate_<?php echo $comment['comment_id'];?>").removeClass("btn-light");
                   $("#rate_<?php echo $comment['comment_id'];?>").addClass("btn-primary");
                 }
               <?php
               if($_SESSION["user_id"]==$comment['user_id']){
                 ?>
                 $("#rate_<?php echo $comment['comment_id'];?>").attr("disabled", "disabled");//this enable submit button

                 <?php

               }
               else{

                 ?>
                 $("#rate_<?php echo $comment['comment_id'];?>").attr("disabled", false);//this disable submit button and we need to tell him email exist

                 $("#rate_<?php echo $comment['comment_id'];?>").click(function(){
                   var formData = {
                   'comment_id' : <?php echo $comment['comment_id'] ?>,
                   'post_id' : <?php echo $comment['post_id'] ?>,
                   };
                   if(found==0) {
                     $.post("Controllers/rate_comment.php",formData,function(data){
                       $("#raten_<?php echo $comment['comment_id'] ?>").html(data);
                       $("#rate_<?php echo $comment['comment_id'];?>").removeClass("btn-light");
                       $("#rate_<?php echo $comment['comment_id'];?>").addClass("btn-primary");
                       found=1;
                     });
                   }
                    else if (found) {
                      $.post("Controllers/unrate_comment.php",formData,function(data){
                        $("#raten_<?php echo $comment['comment_id'] ?>").html(data);
                      });
                      $("#rate_<?php echo $comment['comment_id'];?>").removeClass("btn-primary");
                      $("#rate_<?php echo $comment['comment_id'];?>").addClass("btn-light");
                      found=0;
                    }
                 });

                 <?php

               }
                ?>


              });
              </script>

               <!-- end of answer -->
               <!-- end of loop -->

              <!-- end of answer -->
              <!-- end of loop -->
            <?php }} ?>
              <!-- //end of comment -->
            </div>

          </div>
          <script type="text/javascript">
          if(<?php echo post::is_bookmarked($_SESSION['user_id'],$post['post_id'])?> )
          {
            $('#bookmark_<?php echo $post["post_id"];?>').removeClass('btn-light');
            $('#bookmark_<?php echo $post["post_id"];?>').addClass('btn-primary');

          }
          $(".divC<?php echo $post['post_id'] ?>").hide();
            $(document).ready(function(){
          $("#answer_<?php echo $post['post_id'] ?>").click(function(){
            if($(".divA<?php echo $post['post_id'] ?>").is(":visible")){
              $(".divA<?php echo $post['post_id'] ?>").hide();
            }
            else  {
              $(".divA<?php echo $post['post_id'] ?>").show();
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
            $(".divA<?php echo $post['post_id'] ?>").show();
            $('#comment_text_<?php echo $post['post_id'] ?>').val("");
            $(".divA<?php echo $post['post_id'] ?>").prepend("<div class='card mb-3 ml-5'><div class='card-header'><div class='row'><div class='col-lg-4'> <img src='img/profile.png' width='30 px'>  "+data['user_name']+"   </div>                <div class='col-lg-4'>    <img src='img/calender.png' width='20 px'> "+ data['dates'] +"   </div>    <div class='col-lg-4'> <img src='img/time.png' width='20 px'>     " +data['times']+"        </div> </div>     </div>     <div class='card-body'>   <p class='card-text'>"+data['comment_text']+"</p><hr><div class='row'><div class='col-lg-4'></div><div class='col-lg-4'></div><div class='col-lg-4'><button type='button' class='btn btn-light btn-lg btn-block'><img src='img/helpful.png' width='20px'>  Helpful</button> </div>  </div>   </div>");
            $("#number_<?php echo $post["post_id"] ?>").html(data['comments_number'])
            });
          });
          $('#bookmark_<?php echo $post["post_id"];?>').click(function(){
               var formData =
               {
               'user_id'        : <?php echo $_SESSION['user_id'] ?>,
               'post_id'        : <?php echo $post['post_id'] ?>
               };

             if($('#bookmark_<?php echo $post["post_id"];?>').hasClass('btn-light'))
             {
               $('#bookmark_<?php echo $post["post_id"];?>').removeClass('btn-light');
               $('#bookmark_<?php echo $post["post_id"];?>').addClass('btn-primary');
             }
             else
             {
               $('#bookmark_<?php echo $post["post_id"];?>').addClass('btn-light');
               $('#bookmark_<?php echo $post["post_id"];?>').removeClass('btn-primary');

             }

                 $.post('Controllers/bookmark.php',formData,
                       function(data,status){
                       // alert("Data: " + data + "\nStatus: " + status);

                      });
             });
          });
          </script>
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
  </body>
</html>

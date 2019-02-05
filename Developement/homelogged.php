<?php
include_once("components/head_homelogged.php");
include_once("model/post.php");
Database::connect();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

  <body >
    <style media="screen">
    .filterDiv {
    display: none; /* Hidden by default */
    }

    /* The "show" class is added to the filtered elements */
    .show {
    display:block;
    }
    </style>
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
          <div class="card mb-3 filterDiv  <?php echo $post["language"]?>">
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
              else if ($post["language"]=="js") {
                ?>
                  <img src="img/javascript.png" height="30px" alt="">
                <?php
              }
              else if ($post["language"]=="jquery") {
                ?>
                  <img src="img/jquery.png" height="30px" alt="">
                <?php
              }
              if($post["language"]=='js'){
                echo "javascript";
              }else{
                  echo $post["language"];
              }?></h5>
              <!-- Question text -->
              <p class="card-text" style="border:solid 1px #5f6bdd"><?php echo $post["question"]?></p>
              <hr>
              <div class="row rowC<?php echo $post['post_id'] ?>">
                <div class="col-lg-4">
                  <?php
                    $number=comment::get_number_comments($post['post_id']);
                   ?>
                  <button type="button" id="answer_<?php echo $post["post_id"] ?>" class="btn btn-light btn-lg btn-block"><img src="img/answer.png" width="20px">
                    <span style="position:absolute; top:14px; right:40px;" class="badge badge-dark"><?php echo $number['number'];  ?></span>  Answers</button>
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
            <h4 class="lead">Filter posts by:</h4>
            <div class="row">
              <div class="col-lg-4">
                <button type="button" onclick="filterSelection('C/C++')" class="btn btn-outline-dark mb-2"><img src="img/c++.png" width="70px" ><br>C++</button>
              </div>
              <div class="col-lg-4">
                <button type="button" onclick="filterSelection('C#')" class="btn btn-outline-dark mb-2"><img src="img/csharp.png" width="70px" ><br>C#</button>
              </div>
              <div class="col-lg-4">
                <button type="button" onclick="filterSelection('java')" class="btn btn-outline-dark mb-2"><img src="img/java.png" width="70px" ><br>java</button>
              </div>
              <div class="col-lg-4">
                <button type="button" onclick="filterSelection('python')" class="btn btn-outline-dark mb-2"><img src="img/python.png" width="70px" ><br>python</button>
              </div>
              <div class="col-lg-4">
                <button type="button" onclick="filterSelection('HTML')" class="btn btn-outline-dark mb-2"><img src="img/html.png" width="70px" ><br>HTML</button>
              </div>
              <div class="col-lg-4">
                <button type="button" onclick="filterSelection('CSS')" class="btn btn-outline-dark mb-2"><img src="img/css.png" width="70px" ><br>CSS</button>
              </div>
              <div class="col-lg-4">
                <button type="button" onclick="filterSelection('js')" class="btn btn-outline-dark mb-2"><img src="img/javascript.png" width="70px"><br>javascript</button>
              </div>
              <div class="col-lg-4">
                <button type="button" onclick="filterSelection('jquery')" class="btn btn-outline-dark mb-2"><img src="img/jquery.png" width="70px"><br>jquery</button>
              </div>
              <div class="col-lg-4">
                <button type="button" onclick="filterSelection('php')" class="btn btn-outline-dark mb-2"><img src="img/php.png" width="70px"><br>php</button>
              </div>
              <div class="col-lg-12">
                <button type="button" class="btn btn-outline-dark btn-lg btn-block " onclick="filterSelection('all')"><br>All languages</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script type="text/javascript">
   filterSelection("all");
    function filterSelection(c) {
      var x, i;
      x = document.getElementsByClassName("filterDiv");
      if (c == "all") c = "";
      // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
      for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
      }
    }

// Show filtered elements
  function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      if (arr1.indexOf(arr2[i]) == -1) {
        element.className += " " + arr2[i];
      }
    }
  }

// Hide elements that are not selected
function w3RemoveClass(element, name) {
var i, arr1, arr2;
arr1 = element.className.split(" ");
arr2 = name.split(" ");
for (i = 0; i < arr2.length; i++) {
  while (arr1.indexOf(arr2[i]) > -1) {
    arr1.splice(arr1.indexOf(arr2[i]), 1);
  }
}
element.className = arr1.join(" ");
}

// Add active class to the current control button (highlight it)
// var btnContainer = document.getElementById("myBtnContainer");
// var btns = btnContainer.getElementsByClassName("btn");
// for (var i = 0; i < btns.length; i++) {
// btns[i].addEventListener("click", function() {
//   var current = document.getElementsByClassName("active");
//   current[0].className = current[0].className.replace(" active", "");
//   this.className += " active";
// });
// }
  </script>
</html>

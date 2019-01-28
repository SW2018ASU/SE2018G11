<?php include_once("components/head_group.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <body>
     <div class="row">
      <div class="col-lg-8 col-sm-12">
        <div class="container">
          <!-- loop for group posts -->
          <div class="card mb-3">
            <div class="card-header">
              <!-- username -->
              Omar alam
            </div>
            <div class="card-body">
              <!-- programming language -->
              <h5 class="card-title">Special title treatment</h5>
              <!-- question text -->
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
              <form class="formC" action="index.html" method="post">
                <div class="divC"></div>
              </form>
            </div>
          </div>
          <!-- loop end -->
        </div>
      </div>
      <div class="col-lg-4 col-sm-12">
        <div class="container">
          <div class="jumbotron">
            <img class="mr-2" src="img/logo.png" width="60 px"  height="50 px"/>
            <span style="font-size:35px; font-weight:bold;">Group name</span>
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
                    <!-- take name from search bar -->
                    <div class="input-group mb-3">
                      <input class="form-control" type="search" placeholder="Search community for members" aria-label="Search" aria-describedby="button-addon2">
                    </div>
                    <!-- loop for names using ajax -->
                    <button type="button" class="btn btn-light mb-1">
                      <!-- this button to select name from the results appeared -->
                      <img src="img/addMember.png" width="20 px">
                    </button>
                    <span> Omar hesham</span><br>
                    <!-- end loop -->
                    <hr class="lead">
                    <form class="" action="grouppage.php" method="post">
                      <!-- this button to add the selected name to the group -->
                      <button id="create" type="submit" class="btn btn-outline-primary">ADD</button>
                      <!-- this button to remove selected names -->
                      <span class="ml-2"> Omar hesham </span><button type="button" class="btn btn-light mb-1"><img src="img/removeMember.png" width="20 px"></button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <a class="btn btn-light btn-lg btn-block" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><img src="img/myGroups.png" class="mr-2" width="25px">  Group members</a>
            <div class="collapse multi-collapse" id="multiCollapseExample1">
              <div class="list-group">
                <!-- loop for group members -->
                <a href="#" class="list-group-item list-group-item-action">Omar Hesham</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </body>
</html>

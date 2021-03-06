<?php include_once("components/head_profile.php"); ?>
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
                    <form action="grouppage.php" method="post">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">Group name</span>
                        </div>
                        <!-- input for group name -->
                        <input type="text" class="form-control" placeholder="Enter group name" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                      <div class="input-group mb-3">
                        <!-- search for members input -->
                        <input class="form-control" type="search" placeholder="Search community for members" aria-label="Search" aria-describedby="button-addon2">
                      </div>
                      <!-- users appear by ajax on keyup -->
                      <button type="button" class="btn btn-light mb-1"><img src="img/addMember.png" width="20 px"></button><span> Omar hesham</span><br>
                      <button type="button" class="btn btn-light mb-1"><img src="img/addMember.png" width="20 px"></button> Mark youssef <br>
                      <br>
                      <hr class="lead">
                      <button id="create" type="submit" class="btn btn-outline-primary">Create group</button>
                      <!-- button to remove selected members -->
                      <span class="ml-2"> Omar hesham </span><button type="button" class="btn btn-light mb-1"><img src="img/removeMember.png" width="20 px"></button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <a class="btn btn-light btn-lg btn-block" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><img src="img/myGroups.png" class="mr-2" width="25px">  My groups</a>
            <div class="collapse multi-collapse" id="multiCollapseExample1">
              <div class="list-group">
                <!-- loop for group names -->
                <a href="#" class="list-group-item list-group-item-action">Group1</a>
                <a href="#" class="list-group-item list-group-item-action">Group2</a>
              </div>
            </div>
            <button type="button" class="btn btn-light btn-lg btn-block my-2"><img src="img/test.png" class="mr-2" width="25px"> Test yourself</button>
            <button type="button" class="btn btn-light btn-lg btn-block my-2"><img src="img/light.png" class="mr-2" width="18px"> Boost your knowledge</button>
          </div>
        </div>
      </div>
    </div>
    </div>
  </body>
</html>

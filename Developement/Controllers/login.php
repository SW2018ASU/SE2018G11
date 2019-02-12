<?php
  include_once("../model/visitor.php");
  include_once("../model/user.php");
  include_once("../model/specialist.php");
  Database::connect();
   session_start();
  if( visitor::sign_in($_POST['email'],$_POST['password'])){
  $user=user::get_user_info($_POST['email']);
  $_SESSION["user_id"] = $user['id'];
  $_SESSION["user_first_name"] = $user['first_name'];
  $_SESSION["user_last_name"] = $user['last_name'];
  echo json_encode(['status'=>1]); //this will return a json with key status and value 1 to tell him it match
  }
 else if (visitor::sign_in_specialist($_POST['email'],$_POST['password']))
  {

    //<script>console.log("hello");<\script>

    $user=specialist::get_specialist_info($_POST['email']);
    $_SESSION["specialist_id"] = $user['id'];
    $_SESSION["specialist_first_name"] = $user['s_first_name'];
    $_SESSION["specialist_last_name"] = $user['s_last_name'];
      echo json_encode(['status'=>2]);
  }
  else{
  echo json_encode(['status'=>0]);
}

 ?>

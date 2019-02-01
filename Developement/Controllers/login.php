<?php
  include_once("../model/visitor.php");
  include_once("../model/user.php");
  Database::connect();
   session_start();
  if( visitor::sign_in($_POST['email'],$_POST['password'] )){
  $user=user::get_user_info($_POST['email']);
  $_SESSION["user_id"] = $user['id'];
  $_SESSION["user_first_name"] = $user['first_name'];
  $_SESSION["user_last_name"] = $user['last_name'];
  echo json_encode(['status'=>1]); //this will return a json with key status and value 1 to tell him it match
  }
  else{
  echo json_encode(['status'=>0]);
}

 ?>

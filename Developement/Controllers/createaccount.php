<?php
  include_once("../model/visitor.php");
  include_once("../model/user.php");
   session_start();

  Database::connect();
  if(Visitor::sign_up($_POST['email'],$_POST['password'],$_POST['firstname'],$_POST['lastname'])){
    $user=user::get_user_info($_POST['email']);
    $_SESSION["user_id"] = $user['id'];
    $_SESSION["user_first_name"] = $user['first_name'];
    $_SESSION["user_last_name"] = $user['last_name'];

    header('Location: ../homelogged.php');
  }
  else{
    header('Location: ../signup.php');
}





 ?>

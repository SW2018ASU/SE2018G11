<?php
  session_start();
  include_once("../model/visitor.php");
  if(Visitor::sign_up($_POST['email'],$_POST['password'],$_POST['firstname'],$_POST['lastname'])){
    $user=user::userid($_POST['email']);
    $_SESSION["user_id"] = $user['id'];
    $_SESSION["user_name"] = $user['first_name'];
    header('Location: ../homelogged.php');
  }
  else{
    header('Location: ../signup.php');
}





 ?>

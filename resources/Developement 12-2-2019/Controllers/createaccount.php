<?php
  include_once("../model/visitor.php");
  include_once("../model/user.php");
  //include_once("../model/specialist.php");
   session_start();

  Database::connect();
  if(visitor::sign_up($_POST['email'],$_POST['password'],$_POST['firstname'],$_POST['lastname'])){
    $user=user::get_user_info($_POST['email']);
    $_SESSION["user_id"] = $user['id'];
    $_SESSION["user_first_name"] = $user['first_name'];
    $_SESSION["user_last_name"] = $user['last_name'];

    header('Location: ../homelogged.php');
  }
  else if (visitor::sign_up_specialist($_POST['Email'],$_POST['Password'],$_POST['firstname'],$_POST['lastname'],$_POST['BankInfo']))
  {
    $user=specialist::get_specialist_info($_POST['email']);
    $_SESSION["specialist_id"] = $user['id'];
    $_SESSION["specialist_first_name"] = $user['s_first_name'];
    $_SESSION["specialist_last_name"] = $user['s_last_name'];
    $_SESSION["specialist_bank_info"] = $user['bank_info'];

    header('Location: ../specialisthomelogged.php');
  }
  else{
    header('Location: ../signup.php');
}





 ?>

<?php
include_once("../model/visitorclass.php");
session_start();
if(Visitor::sign_up($_POST['email'],$_POST['password'],$_POST['firstname'],$_POST['lastname'])){
$user=user::userid($_POST['email']);

$_SESSION["user_id"] = $user['id'];
header('Location: ../homelogged.php');
}
else{
header('Location: ../signup.php');
}





 ?>

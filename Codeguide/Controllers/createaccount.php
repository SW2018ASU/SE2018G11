<?php
include_once("../model/visitorclass.php");
session_start();
if(Visitor::sign_up($_GET['email'],$_GET['password'],$_GET['firstname'],$_GET['lastname'])){
$user=user::userid($_GET['email']);

$_SESSION["user_id"] = $user['id'];
header('Location: ../homelogged.php');
}
else{
header('Location: ../signup.php');
}





 ?>

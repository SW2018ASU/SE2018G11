<?php

include_once("../classes/visitorclass.php");
session_start();
if( Visitor::sign_in($_POST['email'],$_POST['password'] )){


$user=user::userid($_POST['email']);


$_SESSION["user_id"] = $user['id'];
header('Location: ../homelogged.php');
}
else{
header('Location: ../login.php');

}





 ?>

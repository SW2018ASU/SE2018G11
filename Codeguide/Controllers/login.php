<?php

include_once("../model/visitorclass.php");
session_start();
if( Visitor::sign_in($_POST['email'],$_POST['password'] )){


$user=user::userid($_POST['email']);


$_SESSION["user_id"] = $user['id'];
// header('Location: ../homelogged.php');
echo json_encode(['status'=>1]);
}
else{

echo json_encode(['status'=>0]);

}





 ?>

<?php
include_once("../classes/visitorclass.php");
session_start();
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";


echo "hello";

if(Visitor::sign_up($_GET['email'],$_GET['password'],$_GET['firstname'],$_GET['lastname'])){
user::userid($_GET['email']);



}


 header('Location: ../Front_end/homelogged.php');



 ?>

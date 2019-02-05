<?php
  include_once("../model/post.php");

  Database::connect();
   session_start();


   $post_id=$_POST['post_id'];
   $user_id = $_SESSION["user_id"];

post::bookmark($user_id,$post_id);
  echo json_encode(['status'=>1,'data'=>'hi']); //this will return a json with key status and value 1 to tell him it match

 ?>

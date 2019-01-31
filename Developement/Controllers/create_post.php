<?php
  include_once("../model/post.php");

  Database::connect();
   session_start();


   $language=$_POST['language'];
   $question=$_POST['question'];
   $user_id=  $_SESSION["user_id"];
   post::create_post($question,$language,$user_id,date("Y/m/d"));

   // post::create_post($question,$language,$user_id,now());
  echo json_encode(['status'=>1]); //this will return a json with key status and value 1 to tell him it match







 ?>

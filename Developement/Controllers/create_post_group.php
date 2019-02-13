<?php
  include_once("../model/post.php");
  Database::connect();
   session_start();
   $language=$_POST['language'];
   $question=$_POST['question'];
   $user_id=  $_SESSION["user_id"];
   $group_id= $_POST['group_id'];
   date_default_timezone_set("Africa/Cairo");
 post::create_post_group($question,$language,$user_id,$group_id,date("Y/m/d"),date("h:ia"));
  echo json_encode(['status'=>1]); //this will return a json with key status and value 1 to tell him it match
 ?>

<?php
  include_once("../model/group.php");
  Database::connect();
   session_start();
   $group_name=$_POST['group_name'];
   $members = $_POST['data'];
   group::create_group($group_name,$_SESSION["user_id"],$members);
   $info = group::group_info($group_name,$_SESSION["user_id"]);
  echo json_encode($info); //this will return a json with key status and value 1 to tell him it match
 ?>

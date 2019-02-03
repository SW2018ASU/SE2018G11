<?php
  include_once("../model/group.php");
  Database::connect();
  session_start();
  $members = $_POST['data'];
  $group_id= $_POST['group_id'];
  group::add_member($members,$group_id);
  $info = group::group_info_id($group_id);

  echo json_encode($info); //this will return a json with key status and value 1 to tell him it match
 ?>

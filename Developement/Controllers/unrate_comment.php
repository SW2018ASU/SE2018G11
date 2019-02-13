<?php
include_once("../model/comment.php");
Database::connect();
session_start();
if(isset($_SESSION["user_id"]))
$rate=comment::unrate_comment($_POST['comment_id'],$_SESSION["user_id"]);
else if (isset($_SESSION["specialist_id"]))
  $rate=comment::unrate_comment($_POST['comment_id'],$_SESSION["specialist_id"]);

echo $rate;
?>

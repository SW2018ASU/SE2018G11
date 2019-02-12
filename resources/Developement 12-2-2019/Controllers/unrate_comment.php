<?php
include_once("../model/comment.php");
Database::connect();
session_start();
$rate=comment::unrate_comment($_POST['comment_id'],$_SESSION["user_id"]);
echo $rate;
?>

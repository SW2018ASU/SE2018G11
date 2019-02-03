<?php
include_once("../model/comment.php");
Database::connect();
session_start();
date_default_timezone_set("Africa/Cairo");
comment::create_comment($_POST['comment_text'],$_SESSION["user_id"],$_POST['post_id'],date("h:ia"),date("Y/m/d"));
echo json_encode(['status'=>1]);




 ?>

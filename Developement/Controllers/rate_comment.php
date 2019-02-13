<?php
include_once("../model/comment.php");
include_once("../model/post.php");
include_once("../model/specialist.php");
Database::connect();
session_start();
if(isset($_SESSION["user_id"]))
{
  if (post::is_for_specialist($_POST['post_id'])) {
    $specialist_id = specialist::get_specialist_id($_POST['comment_id']);
    specialist::incr_specialist_money($specialist_id);
 }
$rate=comment::rate_comment($_POST['comment_id'],$_SESSION["user_id"]);
}
else if (isset($_SESSION["specialist_id"]))
  $rate=comment::rate_comment($_POST['comment_id'],$_SESSION["specialist_id"]);

echo $rate;
?>

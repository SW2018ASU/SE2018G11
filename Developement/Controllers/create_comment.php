<?php
include_once("../model/comment.php");
include_once("../model/specialist.php");
Database::connect();
session_start();
date_default_timezone_set("Africa/Cairo");
if (isset($_SESSION["user_id"]))
{
comment::create_comment($_POST['comment_text'],$_SESSION["user_id"],$_POST['post_id'],date("h:ia"),date("Y/m/d"));

$number=comment::get_number_comments($_POST['post_id']);
$getcomment=comment::show_comment($_POST['post_id']);
echo json_encode(['user_name'=>$getcomment[0]['user_name'],'dates'=>$getcomment[0]['dates'],'times'=>$getcomment[0]['times'],'comment_text'=>$getcomment[0]['comment_text'],'comments_number'=>$number['number']]);
}
elseif (isset($_SESSION["specialist_id"])) {
comment::create_specialist_comment($_POST['comment_text'],$_SESSION["specialist_id"],$_POST['post_id'],date("h:ia"),date("Y/m/d"));
specialist::incr_specialist_answer($_SESSION['specialist_id']);
$number_of_answers= specialist::show_answer_rate($_SESSION['specialist_id']);
$number=comment::get_number_comments($_POST['post_id']);
$getcomment=comment::show_comment($_POST['post_id']);
echo json_encode(['specialist_name'=>$getcomment[0]['specialist_name'],'dates'=>$getcomment[0]['dates'],'times'=>$getcomment[0]['times'],'comment_text'=>$getcomment[0]['comment_text'],'comments_number'=>$number['number'],'answer_rate'=>$number_of_answers]);
}

?>

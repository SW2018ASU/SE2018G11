<?php
	header('Content-Type: application/json; charset=utf-8');
	include_once("../models/grade.php");
	Database::connect('students', 'root', '');
	$grade = new Grade($_GET['id']);
	$grade->delete();
	echo json_encode(['status'=>1]);
?>

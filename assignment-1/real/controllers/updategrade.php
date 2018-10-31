<?php
	include_once("../controllers/common.php");
	include_once("../models/grade.php");
  include_once("../models/student.php");
  include_once("../models/course.php");
	Database::connect('students', 'root', '');
	$id = safeGet("id", 0);
	$grade = new Grade($id);
	$grade->degree = safeGet("degree");
	$grade->examine_at = safeGet("date");

	$grade->save();
	header('Location: ../grades.php');
?>

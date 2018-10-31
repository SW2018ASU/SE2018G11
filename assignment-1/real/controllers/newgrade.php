<?php
	include_once("../controllers/common.php");
	include_once("../models/grade.php");
  include_once("../models/student.php");
  include_once("../models/course.php");
	Database::connect('students', 'root', '');

		Grade::add($_POST['st_select'],$_POST['cr_select'],safeGet("degree"),safeGet("date"));
	  header('Location: ../grades.php');
?>

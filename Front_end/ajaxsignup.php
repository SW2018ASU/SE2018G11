<?php
header('Content-Type: application/json; charset=utf-8');
include_once("../classes/visitorclass.php");

if(Visitor::checkemail ($_GET['email'])){

  echo json_encode(['status'=>1]);



}
else{
  echo json_encode(['status'=>0]);

}



 ?>

<?php
include_once("../model/visitorclass.php");
if(Visitor::checkemail($_POST['email'])){

  echo "exist";

}
else {
  echo "notexist";
}







 ?>

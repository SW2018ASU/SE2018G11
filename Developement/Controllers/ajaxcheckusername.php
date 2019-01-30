<?php
include_once("../model/visitorclass.php");
//this controller for ajax we check first that email exist in database or not
if(visitor::get_user_info($_POST['email'])){//checkmail will return 1 if exist and 0 if not exist

  echo "exist";//this will put in variable  data which is paramter in function (which mean this will be returned)

}
else {
  echo "notexist";
}







 ?>

<?php
  include_once("../model/user.php");
  Database::connect();
  if(isset($_POST["search_users"])){
    $data = user::get_user_name($_POST["search_users"]);
    echo json_encode($data);
  }
 ?>

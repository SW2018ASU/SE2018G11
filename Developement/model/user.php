<?php
include_once('database.php');
include_once('visitor.php');
class user extends visitor {
  public static function __construct($id) {
      $sql = "SELECT * FROM user WHERE id = $id;";
      $statement = Database::$db->prepare($sql);
      $statement->execute();
      $data = $statement->fetch(PDO::FETCH_ASSOC);
      if(empty($data)){return;}
      foreach ($data as $key => $value) {
        $this->{$key} = $value;
      }
  public static function set_name($FirstName,$LastName,$email){
    $sql = "UPDATE user SET first_name = ? , last_name = ? WHERE email = ?;";
    Database::$db->prepare($sql)->execute([$FirstName,$LastName, $email]);
  }
  public static function get_user_info($email) { //return data --
    $sql = "SELECT * FROM user where email='$email'";
    $statement = Database::$db->prepare($sql);
    $statement->execute();
    $user_info = $statement->fetch(PDO::FETCH_ASSOC) ;
    return $user_info;
  }
  public static function set_password($password){
    $sql = "UPDATE user SET password = ?  WHERE email = ?;";
    Database::$db->prepare($sql)->execute([$password, $email]);
        }
  public static function my_posts($user_id){
    $sql = "SELECT * FROM post WHERE user_id = ?;";
    $statement= Database::$db->prepare($sql)->execute([$user_id]);
    $my_posts= [];
    while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $my_posts [] = $row;
    }

        }

  public static function my_groups($user_id){
               $sql = "SELECT * FROM group
                       JOIN group_user
                       ON group.id=group_user.group_id
                       WHERE group_user.user_id = ?;";
                       $statement= Database::$db->prepare($sql)->execute([$user_id]);
                       $my_groups= [];
                       while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                       $my_groups [] = $row;

             }

}
?>

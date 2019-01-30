<?php
include_once('database.php');
include_once('post.php');
class group extends post {
  public static function __construct($id) {
      $sql = "SELECT * FROM group WHERE id = $id;";
      $statement = Database::$db->prepare($sql);
      $statement->execute();
      $data = $statement->fetch(PDO::FETCH_ASSOC);
      if(empty($data)){return;}
      foreach ($data as $key => $value) {
        $this->{$key} = $value;
      }

            public static  function create_group($name,$admin_id){
                $sql = "INSERT INTO group (admin_id,name) VALUES (?,?)";
                Database::$db->prepare($sql)->execute([$name,$admin_id]);
              }

            public static  function add_member($user_id,$group_id){
                $sql = "SELECT number_of_members FROM group WHERE id = ?;";
                $statement=Database::$db->prepare($sql);
                $statement->execute([$group_id]);
                $number_of_members = $statement->fetch(PDO::FETCH_ASSOC);
                $sql = "INSERT INTO group_user (group_id,user_id) VALUES (?,?)";
                Database::$db->prepare($sql)->execute([$group_id,$user_id]);
                $sql = "UPDATE group SET number_of_members=($number_of_members+1)
                WHERE id = ?;";
                Database::$db->prepare($sql)->execute([$group_id]);
                }

              public static  function delete_member($user_id,$group_id){
                  $sql = "SELECT number_of_members FROM group WHERE id = ?;";
                  $statement=Database::$db->prepare($sql);
                  $statement->execute([$group_id]);
                  $number_of_members = $statement->fetch(PDO::FETCH_ASSOC);
                  $sql = "DELETE FROM group_user WHERE group =?;";
                  Database::$db->prepare($sql)->execute([$group_id,$user_id]);
                  $sql = "UPDATE group SET number_of_members=($number_of_members-1)
                  WHERE id = ?;";
                  Database::$db->prepare($sql)->execute([$group_id]);
                  }
}
?>

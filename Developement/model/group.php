<?php
include_once('database.php');
include_once('post.php');
class group extends post {
  public function __construct($id) {
      $sql = "SELECT * FROM groups WHERE id = $id;";
      $statement = Database::$db->prepare($sql);
      $statement->execute();
      $data = $statement->fetch(PDO::FETCH_ASSOC);
      if(empty($data)){return;}
      foreach ($data as $key => $value) {
        $this->{$key} = $value;
      }
    }
            //adding array of members is missing
            public static  function create_group($name,$admin_id,$members){
                $sql = "INSERT INTO groups (admin_id,name) VALUES (?,?)";
                Database::$db->prepare($sql)->execute([$admin_id,$name]);
                $sql="SELECT id From groups WHERE name='$name' AND admin_id='$admin_id' ;";
                $statement=Database::$db->prepare($sql);
                $statement->execute();
                $id=$statement->fetch(PDO::FETCH_ASSOC);
                $sql = "INSERT INTO group_user (group_id,user_id) VALUES (?,?)";
                Database::$db->prepare($sql)->execute([$id['id'],$admin_id]);
                foreach ($members as $member_name) {
                  $sql="SELECT id FROM user
                  WHERE CONCAT(first_name,' ',last_name)='$member_name';";
                  $statement=Database::$db->prepare($sql);
                  $statement->execute();
                  $member_id=$statement->fetch(PDO::FETCH_ASSOC);
                  $sql = "INSERT INTO group_user (group_id,user_id) VALUES (?,?)";
                  Database::$db->prepare($sql)->execute([$id['id'],$member_id['id']]);
                }
              }
              //adding array of members is missing
            public static  function add_member($members,$group_id){
              foreach ($members as $member_name) {
                $sql="SELECT id FROM user
                WHERE CONCAT(first_name,' ',last_name)='$member_name';";
                $statement=Database::$db->prepare($sql);
                $statement->execute();
                $member_id=$statement->fetch(PDO::FETCH_ASSOC);
                $sql = "INSERT INTO group_user (group_id,user_id) VALUES (?,?)";
                Database::$db->prepare($sql)->execute([$group_id,$member_id['id']]);
              }
            }
                //missing from SRS
                //users must be array so it needs to be added in loop
              public static  function delete_member($user_id,$group_id){
                  $sql = "SELECT number_of_members FROM groups WHERE id = ?;";
                  $statement=Database::$db->prepare($sql);
                  $statement->execute([$group_id]);
                  $number_of_members = $statement->fetch(PDO::FETCH_ASSOC);
                  $sql = "DELETE FROM group_user WHERE group =?;";
                  Database::$db->prepare($sql)->execute([$group_id,$user_id]);
                  $sql = "UPDATE groups SET number_of_members=($number_of_members-1)
                  WHERE id = ?;";
                  Database::$db->prepare($sql)->execute([$group_id]);
                  }
                  //missing public static function all()
                  public static function my_groups($user_id){
                    $sql="SELECT groups.id as group_id,groups.name as group_name,group_user.user_id FROM groups
                    JOIN group_user ON groups.id=group_user.group_id
                    WHERE group_user.user_id='$user_id';";
                    $statement=Database::$db->prepare("$sql");
                    $statement->execute();
                    $groups=[];
                    while ($row=$statement->fetch(PDO::FETCH_ASSOC)) {
                      $groups[]=$row;
                    }
                    return $groups;
                  }
                  public static function group_info($group_name,$admin_id){
                    $sql="SELECT * From groups WHERE name='$group_name' AND admin_id='$admin_id';";
                    $statement=Database::$db->prepare($sql);
                    $statement->execute();
                    $group_info=$statement->fetch(PDO::FETCH_ASSOC);
                    return $group_info;
                  }
                  public static function group_info_id($group_id){
                    $sql="SELECT * From groups WHERE id='$group_id';";
                    $statement=Database::$db->prepare($sql);
                    $statement->execute();
                    $group_info=$statement->fetch(PDO::FETCH_ASSOC);
                    return $group_info;
                  }
                  public static function get_members($group_id){
                    $sql="SELECT user.id,user.first_name,user.last_name FROM group_user
                    JOIN user ON user.id=group_user.user_id WHERE group_user.group_id='$group_id';";
                    $statement=Database::$db->prepare("$sql");
                    $statement->execute();
                    $members=[];
                    while ($row=$statement->fetch(PDO::FETCH_ASSOC)) {
                      $members[]=$row;
                    }
                    return $members;

                  }

}
?>

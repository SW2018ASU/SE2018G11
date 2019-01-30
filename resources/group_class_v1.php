<?php
include_once('database.php');
include_once('post.php');
class group extends post {

              function create_group($name,$admin_id){
                $sql = "INSERT INTO group (admin_id,name) VALUES (?,?)";
                Database::$db->prepare($sql)->execute([$name,$admin_id]);
              }

              function add_member($user_id,$group_id){
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

                function delete_member($user_id,$group_id){
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

                                Function add member{
                  SELECT noofmembers from group where group id

                  $statment= database::db...prepare
                  Statmemt... Execute
                  Data= statement.... fetch

                  Data+1
                  Insert...  Bta3t El add

                  Update noofmemebers

}
}
?>

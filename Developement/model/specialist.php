<?php
include_once('database.php');
include_once('visitor.php');
class specialist extends visitor {
  public  function __construct($id) {
      $sql = "SELECT * FROM specialist WHERE id = $id;";
      $statement = Database::$db->prepare($sql);
      $statement->execute();
      $data = $statement->fetch(PDO::FETCH_ASSOC);
      if(empty($data)){return;}
      foreach ($data as $key => $value) {
        $this->{$key} = $value;
      }
    }

  public static function set_specialist_name($FirstName,$LastName,$email){
    $sql = "UPDATE specialist SET s_first_name = ? , s_last_name = ? WHERE email = ?;";
    Database::$db->prepare($sql)->execute([$FirstName,$LastName, $email]);
  }
  public static function get_specialist_name($keyword) { //return data --
    $sql = "SELECT *,CONCAT(s_first_name,' ',s_last_name) AS name FROM specialist where email ='$keyword' ";
    $statement = Database::$db->prepare($sql);
    $statement->execute();
    $row= $statement->fetch(PDO::FETCH_ASSOC);
    return $row;
  }

  public static function get_specialist_info($email) { //return data --
    $sql = "SELECT * FROM specialist where email='$email'";
    $statement = Database::$db->prepare($sql);
    $statement->execute();
    $user_info = $statement->fetch(PDO::FETCH_ASSOC) ;
    return $user_info;
  }
  public static function get_specialist_id($comment_id) { //return data --
    $sql = "SELECT specialist.id FROM specialist join comment on comment.specialist_id=specialist.id where comment.id='$comment_id'";
    $statement = Database::$db->prepare($sql);
    $statement->execute();
    $specialist_id = $statement->fetch(PDO::FETCH_ASSOC) ;
    return $specialist_id['id'];
  }

   public static function show_answer_rate($id)
  {

    $sql ="SELECT * FROM specialist where id='$id'";
    $statement = Database::$db->prepare($sql);
    $statement->execute();
    $number_of_answers = $statement->fetch(PDO::FETCH_ASSOC);
    $number = $number_of_answers['number_of_answers'];
    return $number;
  }
  public static function show_my_money($id)
 {

   $sql ="SELECT * FROM specialist where id='$id'";
   $statement = Database::$db->prepare($sql);
   $statement->execute();
   $money = $statement->fetch(PDO::FETCH_ASSOC);
   $number = $money['cash'];
   return $number;
 }
  public static function incr_specialist_answer($id)
  {
    $sql = "UPDATE specialist SET number_of_answers = number_of_answers+1 WHERE id = ?;";
    Database::$db->prepare($sql)->execute([$id]);
  }
  public static function incr_specialist_money($id)
  {
    $sql = "UPDATE specialist SET cash = cash+10 WHERE id = ?;";
    Database::$db->prepare($sql)->execute([$id]);
  }

  public static function set_specialist_password($password){
    $sql = "UPDATE specialist SET password = ?  WHERE email = ?;";
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

             }}

}

?>

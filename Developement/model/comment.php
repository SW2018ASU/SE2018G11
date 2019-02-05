<?php
include_once('database.php');
class comment extends Database {
public function __construct($id) {
    $sql = "SELECT * FROM comment WHERE id = $id;";
    $statement = Database::$db->prepare($sql);
    $statement->execute();
    $data = $statement->fetch(PDO::FETCH_ASSOC);
    if(empty($data)){return;}
    foreach ($data as $key => $value) {
      $this->{$key} = $value;
    }
  }

  public static function  create_comment ($text,$userId,$postId,$times,$dates){
    $sql="INSERT INTO comment (user_id,post_id,comment_text,dates,times) VALUES (?,?,?,?,?);";
    Database::$db->prepare($sql)->execute([$userId,$postId,$text,$dates,$times]);

  }
  public static function show_comment($postId){
    $sql = "SELECT *,concat(first_name,' ',last_name) as user_name,comment.id as comment_id FROM comment join user on comment.user_id=user.id WHERE post_id = $postId order by comment_id DESC ;";
    $statement = Database::$db->prepare($sql);
    $statement->execute();
    $comments = [];
    while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
      $comments [] = $row;
    }
    return $comments;
  }

  public static function edit_comment($comment_text,$comment_date){
    $sql= "UPDATE comment SET comment_text = ? ,dates = ? WHERE id = ? ;";
    Database::$db->prepare($sql)->execute([$comment_text,$comment_date, $this->id]);
  }
  public static function remove_comment() {
    $sql = "DELETE FROM comment WHERE id = $this->id;";
    Database::$db->query($sql);
  }
  public static function rate_comment ($comment_id,$user_id){
    $sql= "SELECT helpful FROM comment WHERE id = ? ;";
    $statement= Database::$db->prepare($sql);
    $statement->execute([$comment_id]);
    $rate = $statement->fetch(PDO::FETCH_ASSOC);
    $sql="UPDATE comment SET helpful=? WHERE id= ?  ;";
    Database::$db->prepare($sql)->execute([$rate['helpful']+1,$comment_id]);
    $sql="INSERT INTO rated(user_id,comment_id) VALUES (?,?);";
    Database::$db->prepare($sql)->execute([$user_id,$comment_id]);
    $sql= "SELECT helpful FROM comment WHERE id = ? ;";
    $statement= Database::$db->prepare($sql);
    $statement->execute([$comment_id]);
    $rate = $statement->fetch(PDO::FETCH_ASSOC);
    return $rate['helpful'];
  }
  public static function unrate_comment ($comment_id,$user_id){
    $sql= "SELECT helpful FROM comment WHERE id = ? ;";
    $statement= Database::$db->prepare($sql);
    $statement->execute([$comment_id]);
    $rate = $statement->fetch(PDO::FETCH_ASSOC);
    $sql="UPDATE comment SET helpful=? WHERE id= ?  ;";
    Database::$db->prepare($sql)->execute([$rate['helpful']-1,$comment_id]);
    $sql="DELETE FROM rated WHERE comment_id= $comment_id AND user_id=$user_id";
    Database::$db->prepare($sql)->execute();
    $sql= "SELECT helpful FROM comment WHERE id = ? ;";
    $statement= Database::$db->prepare($sql);
    $statement->execute([$comment_id]);
    $rate = $statement->fetch(PDO::FETCH_ASSOC);
    return $rate['helpful'];
  }
  public static function get_rate($comment_id){
    $sql= "SELECT helpful FROM comment WHERE id = ? ;";
    $statement= Database::$db->prepare($sql);
    $statement->execute([$comment_id]);
    $rate = $statement->fetch(PDO::FETCH_ASSOC);
    return $rate['helpful'];
  }

  public static function get_number_comments($post_id){
    $sql="SELECT COUNT(user_id) as number FROM comment WHERE post_id=$post_id;";
    $statement = Database::$db->prepare($sql);
    $statement->execute();
    $number=$statement->fetch(PDO::FETCH_ASSOC);
    return $number;
  }
  public static function get_user_rate ($comment_id){
    $sql="SELECT user_id FROM rated WHERE comment_id=$comment_id;";
    $statement = Database::$db->prepare($sql);
    $statement->execute();
    $user=$statement->fetch(PDO::FETCH_ASSOC);
    return $user['user_id'];

  }

}




 ?>

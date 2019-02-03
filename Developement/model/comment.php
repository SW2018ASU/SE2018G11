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
    $sql = "SELECT * FROM comment join user on comment.user_id=user.id WHERE post_id = $postId;";
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
  public static function rate_comment ($post_id ,$comment_id,$user_id){
    $sql= "SELECT helpful_rate FROM comment WHERE id = ? ;";
    $statement= Database::$db->prepare($sql)->execute([$comment_id]);
    $rate = $statement->fetch(PDO::FETCH_ASSOC);
    $sql="INSERT INTO rated (user_id) VALUES (?) WHERE post_id= ? AND comment_id = ? ;";
    Database::$db->prepare($sql)->execute([$user_id,$post_id,$comment_id]);
    $sql= "UPDATE comment SET helpful = ?  WHERE id = ? ;";
    Database::$db->prepare($sql)->execute([$rate+1,$comment_id]);

  }

}




 ?>

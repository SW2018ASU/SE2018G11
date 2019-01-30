<?php
include_once('database.php');

class post extends Database {
  public static function __construct($id) {
      $sql = "SELECT * FROM posts WHERE id = $id;";
      $statement = Database::$db->prepare($sql);
      $statement->execute();
      $data = $statement->fetch(PDO::FETCH_ASSOC);
      if(empty($data)){return;}
      foreach ($data as $key => $value) {
        $this->{$key} = $value;
      }

public static function create_Post($question,$programLanguage,$user_id)
{
    $sql = "INSERT INTO posts (question,programLanguage,user_id) VALUES (?,?,?)";
    Database::$db->prepare($sql)->execute([$question,$programLanguage,$user_id]);
}
public static function edit_post($question,$programLanguage,$user_id){
    $sql = "UPDATE posts SET (question=$question,programLanguage=$programLanguage) WHERE id =$this->id ? AND user_id = $user_id;";
			Database::$db->prepare($sql)->execute();
}
public static function delete_post(){
    $sql = "DELETE FROM posts WHERE id = $this->id;";
			Database::$db->query($sql);
}
public static function bookmarked($user_id,$post_id){
  $sql="INSERT INTO bookmarked (user_id,post_id) VALUES (?,?) ;";
  Database::$db->prepare($sql)->execute([$user_id,$post_id]);

}


}
?>

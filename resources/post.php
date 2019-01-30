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
/////////3ayzen nshof date wla dates
///tmm b2a $dates
public static function create_post($question,$language,$user_id,$dates)
{
    $sql = "INSERT INTO posts (question,language,user_id,dates) VALUES (?,?,?,?)";
    Database::$db->prepare($sql)->execute([$question,$language,$user_id,$dates]);
}
public static function get_post($question,$language,$user_id,$dates)
{
    $sql = "INSERT INT posts (question,language,user_id,dates) VALUES (?,?,?,?)";
    Database::$db->prepare($sql)->execute([$question,$language,$user_id,$dates]);
}


public static function edit_post($question,$language,$user_id,$dates,$post_id){
    $sql = "UPDATE posts SET (question=$question,language=$language,dates=$dates) WHERE id =$post_id  AND user_id = $user_id;";
			Database::$db->prepare($sql)->execute();
}
public static function delete_post($post_id){
    $sql = "DELETE FROM posts WHERE id = $post_id;";
			Database::$db->query($sql);
}
public static function bookmarked($user_id,$post_id){
  $sql="INSERT INTO bookmarked (user_id,post_id) VALUES (?,?) ;";
  Database::$db->prepare($sql)->execute([$user_id,$post_id]);
}
public static function remove_bookmarked($user_id,$post_id){
  $sql="DELETE FROM bookmarked WHERE user_id=$user_id AND post_id=$post_id ;";
  Database::$db->prepare($sql)->execute();
}
public static function search_post($keyword)
{
  $keyword = str_replace(" ", "%", $keyword);
  $sql = "SELECT * FROM posts WHERE question like ('%$keyword%') ORDER BY question;";
  $statement = Database::$db->prepare($sql);
  $statement->execute();
  $posts = [];
  while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $posts[] = new posts($row['id']);
  }
  return $posts;
}
}
?>

<?php
include_once('database.php');

class post extends Database {
  public  function __construct($id) {
      $sql = "SELECT * FROM post WHERE id = $id;";
      $statement = Database::$db->prepare($sql);
      $statement->execute();
      $data = $statement->fetch(PDO::FETCH_ASSOC);
      if(empty($data)){return;}
      foreach ($data as $key => $value) {
        $this->{$key} = $value;
      }
    }
/////////3ayzen nshof date wla dates
///tmm b2a $dates
public static function create_post($question,$language,$user_id,$dates,$times)
{
    $sql = "INSERT INTO post (question,language,user_id,dates,times) VALUES (?,?,?,?,?)";
    Database::$db->prepare($sql)->execute([$question,$language,$user_id,$dates,$times]);
}
public static function create_post_group($question,$language,$user_id,$group_id,$dates,$times)
{
    $sql = "INSERT INTO post (question,language,user_id,group_id,dates,times) VALUES (?,?,?,?,?,?)";
    Database::$db->prepare($sql)->execute([$question,$language,$user_id,$group_id,$dates,$times]);
}
public static function get_post($language,$dates,$question)
{
    $question = str_replace(" ", "%", $question);
    $sql = "SELECT * FROM post WHERE language=$language OR dates=$dates OR
    question like ('%$question%') ORDER BY dates";
    $statement=Database::$db->prepare($sql)->execute([$question,$language,$user_id,$dates]);
    $posts= [];
    while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $posts [] = $row;
    }
}
public static function get_post_by_id($id)
{

    $sql = "SELECT *,user.id as user_id ,concat (first_name,' ',last_name) as user_name FROM post  join user on post.user_id=user.id  WHERE post.id= $id ; " ;
    $statement=Database::$db->prepare($sql);
    $statement->execute();
    $posts= [];
    while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $posts [] = $row;
    }
    return $posts;
}


public static function edit_post($question,$language,$user_id,$dates,$post_id){
    $sql = "UPDATE post SET (question=$question,language=$language,dates=$dates)
    WHERE id =$post_id  AND user_id = $user_id;";
		Database::$db->prepare($sql)->execute();
}
public static function delete_post($post_id){
    $sql = "DELETE FROM post WHERE id = $post_id;";
			Database::$db->query($sql);
}
public static function bookmark($user_id,$post_id){
  $sql="INSERT INTO bookmarked (user_id,post_id) VALUES (?,?) ;";
  Database::$db->prepare($sql)->execute([$user_id,$post_id]);
}
public static function remove_bookmark($user_id,$post_id){
  $sql="DELETE FROM bookmarked WHERE user_id=$user_id AND post_id=$post_id ;";
  Database::$db->prepare($sql)->execute();
}

public static function is_bookmarked($user_id,$post_id){
  $sql="select * from bookmarked where post_id=$post_id ; ";
  $statement=Database::$db->prepare($sql);
  $statement->execute();
  $results=[];
  while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $results[] = $row;
  }
foreach ($results as $result ) {
    if($result['user_id']==$user_id)
      return 1;
}
  return 0;


}

public static function search_post($keyword)
{
  $keyword = str_replace(" ", "%", $keyword);
  $sql = "SELECT *,post.id as post_id FROM post join user on post.user_id=user.id
  WHERE question like ('%$keyword%') AND post.group_id=0 ORDER BY post.id DESC;";
  $statement = Database::$db->prepare($sql);
  $statement->execute();
  $posts = [];
  while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $posts[] = $row;
  }
  return $posts;
}
public static function get_my_post($keyword,$user_id)
{
  $keyword = str_replace(" ", "%", $keyword);
  $sql = "SELECT *,post.id as post_id FROM post join user on post.user_id=user.id
  WHERE question like ('%$keyword%')AND user.id=$user_id AND post.group_id=0 ORDER BY post.id DESC;";
  $statement = Database::$db->prepare($sql);
  $statement->execute();
  $posts = [];
  while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $posts[] = $row;
  }
  return $posts;
}
public static function group_post($keyword,$group_id)
{
  $keyword = str_replace(" ", "%", $keyword);
  $sql = "SELECT *,post.id as post_id  FROM post join user on post.user_id=user.id
  WHERE question like ('%$keyword%')AND post.group_id=$group_id ORDER BY post.id DESC;";
  $statement = Database::$db->prepare($sql);
  $statement->execute();
  $posts = [];
  while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $posts[] = $row;
  }
  return $posts;
}
}
?>

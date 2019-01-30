<?php
include_once('database.php');
class Visitor extends Database{
  public static function checkemail ($email){
    Database::connect();
  
        $sql = "SELECT email,password FROM user WHERE email ='$email';";
        $statement = Database::$db->prepare($sql);
        $statement->execute();
      $row=$statement->fetch(PDO::FETCH_ASSOC);
      if($email==$row['email'])
      {
      return 1;

      }
        return 0;
      }
  public static function sign_in ($email,$password){
    Database::connect();
        $sql = "SELECT email,password FROM user WHERE email ='$email';";
        $statement = Database::$db->prepare($sql);
        $statement->execute();
      $row=$statement->fetch(PDO::FETCH_ASSOC);
      if($email==$row['email'])
      {
        if ($password==$row['password'])
            return 1;  //login success registered-user
      }
        return 0; // login failed
        // else if() {
        //   $sql = "SELECT email FROM specialist WHERE email ='$email';";
        //   $statement = Database::$db->prepare($sql);
        //   $statement->execute();
        //   if ($email=$statement)
        //   {
        //     $sql ="SELECT Password FROM specialist WHERE Password ='$password';";
        //     $statement = Database::$db->prepare($sql);
        //     $statement->execute();
        //     if ($password=$statement)
        //         return 1;   // login success specialist
        //   }
        // }
  }
public static function sign_up ($email,$password,$FirstName,$LastName){
  Database::connect();
    $sql = "SELECT email FROM user WHERE email ='$email';";
    $statement = Database::$db->prepare($sql);
    $statement->execute();
  $row = $statement->fetch(PDO::FETCH_ASSOC);
    if ($email==$row['email'])
    {
        return 0; //signup error
    }
    $sql = "INSERT INTO user (first_name,last_name,email,password) VALUES (?,?,?,?)";
    Database::$db->prepare($sql)->execute([$FirstName,$LastName,$email,$password]);
    return 1; //signup success
  }
  public static function sign_up_specialist ($email,$password,$FirstName,$LastName,$bankinfo){
    $sql = "SELECT email FROM specialist WHERE email ='$email';";
    $statement = Database::$db->prepare($sql);
    $statement->execute();
    if ($email=$statement)
    {
        return 0; //signup error
    }
    $sql = "INSERT INTO specialist (firstName,LastName,email,Password,bankinfo) VALUES (?,?,?,?)";
    Database::$db->prepare($sql)->execute([$FirstName,$LastName,$email,$password,$bankinfo]);
    return 1; //signup success
  }
}
class user extends Visitor {
  function set_Name($FirstName,$LastName){
    $sql = "UPDATE registered_user SET FirstName = ? , LastName = ? WHERE email = ?;";
    Database::$db->prepare($sql)->execute([$this->FirstName,$this->LastName, $this->email]);
  }
  public static function userid($email) {
    $sql = "SELECT * FROM user where email='$email'";
    $statement = Database::$db->prepare($sql);
    $statement->execute();
    $User = $statement->fetch(PDO::FETCH_ASSOC) ;
    return $User;
  }
  public static function all() {
    $sql = "SELECT * FROM user ORDER BY id;";
    $statement = Database::$db->prepare($sql);
    $statement->execute();
    $registeredUser = [];
    while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
      $registeredUser[] = new registered_user($row['id']);
    }
    return $registeredUser;
  }
}
?>

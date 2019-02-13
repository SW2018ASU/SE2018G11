<?php
include_once('database.php');
class visitor extends Database{
  public static function check_email ($email){ ////add to SRS
    //Database::connect();
        $sql = "SELECT email,password FROM user WHERE email = '$email';";
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
  //  Database::connect();
        $sql = "SELECT email,password FROM user WHERE email = '$email';";
        $statement = Database::$db->prepare($sql);
        $statement->execute();
      $row=$statement->fetch(PDO::FETCH_ASSOC);
      if($email==$row['email'])
      {
        if ($password==$row['password'])
            return 1;  //login success registered-user
      }
      else return 0;
}
public static function sign_in_specialist ($email,$password){
        $sql = "SELECT email,password FROM specialist WHERE email ='$email';";
        $statement = Database::$db->prepare($sql);
        $statement->execute();
        $row=$statement->fetch(PDO::FETCH_ASSOC);
        if($email==$row['email'])
        {
          if ($password==$row['password'])
              return 1;  //login success - specialist
        }

      else return 0; // login failed
    }
public static function sign_up ($email,$password,$FirstName,$LastName){
  // Database::connect();
    $sql = "SELECT email FROM user WHERE email = $email;";
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
    $sql = "SELECT email FROM specialist WHERE email = $email;";
    $statement = Database::$db->prepare($sql);
    $statement->execute();
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    if ($email== $row['email'])
    {
        return 0; //signup error
    }
    $sql = "INSERT INTO specialist (s_first_name,s_last_name,email,password,bank_info) VALUES (?,?,?,?,?)";
    Database::$db->prepare($sql)->execute([$FirstName,$LastName,$email,$password,$bankinfo]);
    return 1; //signup success
  }
}
?>

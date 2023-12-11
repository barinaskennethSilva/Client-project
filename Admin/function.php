<?php
session_start();
include("../connection.php");

// IF
if(isset($_POST["action"])){
  if($_POST["action"] == "register"){
    register();
  }
  else if($_POST["action"] == "login"){
    login();
  }
}

// REGISTER
function register(){
  global $conn;
$usertype = $_POST["usertype"];  
$user_profile = $_POST["user_profile"];
$username = "Not required";
$password = $_POST["password"];
$First_Name = $_POST["First_Name"];
$Last_Name = $_POST["Last_Name"];
$email = $_POST["email"];
$contact_Num = $_POST["contact_Num"];
$ad_position = $_POST["ad_position"];

if (empty($username) && empty($password) && empty($First_Name) && empty($Last_Name) && empty($email)) {
  echo"All Field Required to Fill";
  exit();
}
$user = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
 if(mysqli_num_rows($user) > 0){
    echo "Email has already use";
    exit();
  }
else{
$sql = "Insert INTO user(usertype,user_profile,First_Name,Last_Name,email,contact_Num,username,ad_position, password) VALUES ('$usertype','$user_profile','$First_Name','$Last_Name','$email','$contact_Num','$username','$ad_position','$password')";
mysqli_query($conn,$sql);
echo"Register Successfully";
  exit();
}
}

// LOGIN
function login(){
  global $conn;

  $email = $_POST["email"];
  $password = $_POST["password"];
$user_type = "admin";
  $user = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' AND usertype = '$user_type'");

  if(mysqli_num_rows($user) > 0){

    $row = mysqli_fetch_assoc($user);

    if($password == $row['password']){
      echo "Login Successful";
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
    }
    else{
      echo "Wrong Password";
      exit;
    }
  }
  else{
    echo "User Not Registered";
    exit;
  }
}

?>
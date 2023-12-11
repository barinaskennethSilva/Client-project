<?php
include("connection.php");
session_start();
// IF
/*if(isset($_POST["action"])){
  if($_POST["action"] == "register"){
    register();
  }
  else if($_POST["action"] == "login"){
    login();
  }
}*/

if(!empty($_SESSION["id"])){
  echo"Login Successfully";
  header("Location: ../view/Home.php");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$User = $_POST["username"];
$pass = $_POST["password"];
if (empty($User) && empty($pass)) {
  echo"All Field Required Fill";
  exit();
}
else{
  
$sql = "SELECT * FROM user WHERE username = '$User' AND password='$pass'";
$results = mysqli_query($conn,$sql);
if (mysqli_num_rows($results) > 0) {
  echo"Login Successfully";
$_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
die;
}else{
 echo"wrong username and password";
  
}
}
}

?>
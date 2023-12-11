<?php
include("connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = $_POST["username"];
$password = $_POST["password"];
$First_Name = $_POST["First_Name"];
$Last_Name = $_POST["Last_Name"];
$email = $_POST["email"];
$contact_Num = $_POST["contact_Num"];
if (empty($username) && empty($password) && empty($First_Name) && empty($Last_Name) && empty($email)) {
  echo"All Field Required to Fill";
  exit();
}
else{
$sql = "Insert INTO user(First_Name,Last_Name,email,contact_Num,username, password) VALUES ('$First_Name','$Last_Name','$email','$contact_Num','$username','$password')";
mysqli_query($conn,$sql);
echo"Register Successfully";
  die;
}
} else {
  echo"No Data";
}


?>
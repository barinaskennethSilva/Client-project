<?php
require 'function.php';
if(isset($_SESSION["id"])){
  $id = $_SESSION["id"];
  $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user WHERE id = $id"));
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Index</title>
  </head>
  <body>
    <style>
    .toggler{
  background-color: transparent;
  outline: none;
  border: none;
  color:#fff;
  font-size: 25px;
}
.dashboard{
  position: absolute;
  top: 0px;
  left:0px;
  height: 100%;
  width: 0%;
  background-color: #111;
  overflow: hidden;
  z-index: 40;
}
 .Top_dash{
   display: flex;
   align-items: center;
   justify-content: center;
   flex-direction: column;
   padding: 10px;
   border-bottom: 1px solid #fff;
 }
 .Top_dash .profile{
  height: 80px;
  width: 80px;
  border-radius: 50%;
  
}
.name{
  font-size: 20px;
  font-weight: 700;
  color: #fff;
}
 .dashboard  ul li a{
  text-decoration: none;
  font-size: 16px;
  color: #fff;
 }
   .dashboard  ul li a:hover{
    color: gold;
  }
   .dashboard  ul li a i{
    position: absolute;
    left: 10px;
    margin-top: 5px;
  }
   .dashboard  ul li {
  list-style-type: none;
  margin-top: 10px;
   }
.dash_close{
  position: absolute;
  top: 0px;
  right:0px;
  height: 100%;
  width: 0%;
z-index: 40;
}
.navbar-brand{
  position: relative;
  right: 120px;
}
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">

    <button class="toggler" onclick="toggler_home()">
   <i class="fa fa-bars"></i>
    </button>
    <a href="#" class="navbar-brand ">Admin Dashboard</a>
      </div>
    </nav>
    <div class="dashboard" id="dashboard">
            <div class="Top_dash">
    <img src="../image/p1.png" class="profile">          
    <span class="name mt-3"> <label ><?php echo $user["First_Name"]?> </label>  <label><?php echo $user["Last_Name"]; ?></label> </span>
    <label class="text-white"><?php echo $user["email"];?></label>
      </div>
      
          <ul>
      <li><a href="Home_ad.php"><i class="fa fa-home"></i><span class="ms-3">Home</span></a></li>
     <li><a href="#"><i class="fa fa-user"></i><span class="ms-3">profile</span></a></li>   
 <li><a href="book_req.php"><i class="fa fa-tasks"></i><span class="ms-3"> Appointment Request</span></a></li>
   <li><a href="Upload_services.php"><i class="fa fa-tag"></i><span class="ms-3">Create Services</span></a></li>   
  <li><a href="#"><i class="fa fa-bell"></i><span class="ms-3">Notification</span></a></li>   
  <li><a href="logout.php"><i class="fa fa-sign-out"></i><span class="ms-3">Logout</span></a></li>
     </ul> 
      
    </div>
      <div class="dash_close" id="dash_close" onclick="dash_close()">
    </div>
  
     <script>
   function toggler_home(){
document.getElementById("dash_close").style.width = "40%";
document.getElementById("dashboard").style.width = "60%";
}
function dash_close(){
  document.getElementById("dash_close").style.width = "0px";
document.getElementById("dashboard").style.width = "0px";
}
</script> 
  </body>
  </html>
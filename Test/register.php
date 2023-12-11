<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: index.php");
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

    <title>Register</title>
  </head>
  <body style="background-image: url('../image/background_form.png') !important;background-size: cover; background-repeat:no-repeat; overflow:hidden;">
    <style>
     #myForm .form2{
    background-color: #fff;
    display: none;
     }
    .btn{
      height: 40px;
  }
  </style>
     <?php include"Dash_home.php"?>
    <form autocomplete="off" class=" m-auto 
   p-2 " action="" method="post" id="myForm">
    <input type="hidden" id="usertype" value="user" name="usertype">
  <input type="hidden" id="user_profile" value="avatar.png" name="user_profile">
<input type="hidden" id="action" value="register">
    <div class="form1" id="form1">   
  <div class="mb-3">
    <label for="First_Name" class="form-label">First Name</label>
    <input type="text" class="form-control" id="First_Name" name="First_Name" autocomplete="off">
  </div>
      
         <div class="mb-3">
    <label for="Last_Name" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="Last_Name" name="Last_Name" autocomplete="off">
  </div>
    <div class="mb-3">
    <label for="email" class="form-label">Email Address</label>
    <input type="email" class="form-control" id="email" name="email"autocomplete="off">
  </div>
     <button type="button" id="btn" class="btn btn-primary w-100 mb-3" onclick="Next()">Next</button>
  </div>
      <div class="form2" id="form2">
     <div class="mb-3">
    <label for="contact_Num" class="form-label">Contact Number</label>
    <input type="tel" class="form-control" id="contact_Num" name="contact_Num" autocomplete="off" maxlength="11">
  </div>   
       <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" autocomplete="off">
  </div>  
      <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="Password" autocomplete="off">
  </div> 
      <div id="responseMessage" class="text-center mb-3">
 </div>
  <div class="d-flex">
 <button type="button" id="btn" class="btn btn-primary w-100 mb-3 me-3" onclick="Back()">Back</button>
      <button type="button" id="btn" class="btn btn-primary w-100 mb-4" onclick="submitData();">Register</button>
   </div>   
     </div>   
    </form>
    <br>
      <label class="linkForm ms-3">Already have account? <a href="login.php">Login</a></label>
    <?php require 'script.php'; ?>
  <script>  
    function Next(){
  document.getElementById('form1').style.display = "none";
  document.getElementById('form2').style.display = "block";
}
function Back(){
  document.getElementById('form1').style.display = "block";
  document.getElementById('form2').style.display = "none";
}
</script>
  </body>
</html>
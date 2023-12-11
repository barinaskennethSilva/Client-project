<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: ../Admin/Home_ad.php");
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
<link rel="stylesheet" href="../css/index.css"  />
    <title>Login</title>
  </head>
  <body style="background-image: url('../image/p_background.png') !important;background-size: cover; background-repeat:no-repeat; overflow:hidden;">
     <!--?php include"Dash_home.php"?-->
    
    <form name="f1"  class=" m-auto 
   p-2 mt-4 shadow " id="myForm" autocomplete="off" action="" method="post">
      <input type="hidden" id="action" value="login">
     <input type="hidden" id="admin" value="admin" name="usertype">
      <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" name="email" autocomplete="off">
  </div>
       <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div> 
    <div id="responseMessage" class="text-center"></div>  
      <button type="button" id="btn_login" class="btn btn-primary w-100 mb-3" onclick="submitData();">Login</button>
    </form>
    <br>
    <label class="linkForm ms-3">Have not yet account?  <a href="register_ad.php">Sign Up</a></label>
    <?php require 'script.php'; ?>
  </body>
</html>
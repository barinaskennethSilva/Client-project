<?php
require '../Test/function.php';
if(isset($_SESSION["id"])){
  $id = $_SESSION["id"];
  $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user WHERE id = $id"));
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <title>Home Massage Spa</title>
  </head>
  <body>
    <style>
    *{
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }
     .navbar{
       border-bottom: 1px solid #111;
     }
    .navbar a{
      margin-left: 10px;
      font-size: 20px;
      text-decoration: none;
      outline: none;
      border: none;
      color: #111;
    }
    .Change-Profile {
      background-color: #fff;
      border-bottom: 1px solid #111;
      width: 0%;
      height: 56%;
      position: absolute;
      left: 0px;
      z-index: 40;
      overflow: hidden;
      transition: 0.5s;
    }
   .Change-Profile .change-pic  img{
     height: 200px;
     width: 100%;
   }
   .change-pic{
     height: 202px;
     width: 95%;
     border:  dashed 1px;
     margin: 2px 10px;
     text-align: center;
     
   }
    .change-pic i{
      font-size: 65px;
      color: #e631ff;
      margin-top: 40px;
    }
    .change-pic input{
      display: none;
    }
    .prof-header{
      border-bottom: 1px solid #111;
      padding: 10px;
    }
     .prof-header a{
       font-weight: 700;
       color: #111;
      
     }
      .prof-header button {
        float: right;
        outline: none;
        border: none;
        background-color: transparent;
        font-size: 20px;
      }
    .footer{
      display: flex;
  border-bottom: 1px solid #111;
    }
    .user-info{
     display: flex; 
     flex-direction: column;
     margin-top: 20px;
    }
    .user-profile{
      width: 80px;
      height: 80px;
      border-radius: 50%;
      border: 2px solid #111;
      margin:10px 10px;
    }
    .btn-con{
      width: 80%;
      margin: 10px 40px;
    }
    .user-name{
      font-size: 20px;
      font-weight: 700;
    }
     .btn-Icon{
       display: flex;
       position: absolute;
       top: 180px;
       left: 80px;
     }

    .btn-icon{
      position: absolute;
      right:10px;
      font-size: 25px;
      top:95px;
      outline: none;
      background-color: transparent;
      border:none;
    }
  .service_adds{
      position: relative;
    }
    .service_adds .adds1{
      height: 200px;
      width: 250px;
      background-color: #fff;
      text-align: center;
      padding: 10px;
      animation: fadeIn 0.5s ease-in-out;
      display: block;
    position: absolute;
    left: 10;
    top: 0;
    margin-top: 20px;
}
    @keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}
    .service-offer{
      height: 250px;
      width: 100%;
      background-color: #fff;
    }
   .button-navigation{
     background-color: transparent;
     border: 1px solid #111;
     position: absolute;
     right: 10px;
     bottom: 85px;
     font-size: 25px;
     outline: none;
     border-radius: 50%;
     height: 50px;
     width: 50px;
   }
    </style>
  <nav class="navbar navbar-lg ">
 <a href="Home.php" ><i class="fa fa-arrow-left"></i></a>   
 <a href="#" class="navbar-brand fw-bold text-dark">Profile</a>
  </nav>  
  <!------- Change Profile ---------->
  <div class="Change-Profile" id="Change-Profile">
   <div class="prof-header">
     <a class="navbar-brand" href="#">Change Profile</a>
   <button class="button" type="button" onclick="close_pic()"><i class="fa fa-close"></i></button>  
   </div> 
   <div class="change-pic">
       <img src="" alt="" id="pic-output">  
  <label for="change-pic">
 <div class="upload-Icon" id="upload-Icon">
   <input type="file" name="change-pic" id="change-pic" accept="image/*" onchange="Upload_Prof(event)"/>
   
   <i class="fa fa-cloud-upload"></i>
 <p>Upload Profile</p>
 </div>
 </label>
   </div>
<button class="btn btn-primary btn-con" type="button">Confirm</button>
  </div>
    <div class="footer">
      <img src="./image/p_home.png" class="user-profile">
 <div class="user-info">
 <label class="user-name"><label ><?php echo $user["First_Name"]?> </label>  <label><?php echo $user["Last_Name"]; ?></label> </label>
 <label><?php echo $user["email"]?></label>
   <button type="button" onclick="Open_pic()" class="btn-icon"><i class="fa fa-camera"></i></button>
 </div>

    </div>
   <div class="service-container">
      <div class="service-offer shadow">
<video width="360" height="240" autoplay controls id="myVideo">
  <source src="../adds_file/p11.mp4" type="video/mp4">
   </video>   
    </div>
 
 <div class="service_adds">

      <div class="adds1 shadow">
<h1>Packages</h1>     
 <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae imperdiet ligula.  </span> 
<a href="Booking_appoint.php" class="btn btn-primary mt-3">Book Appointment</a>
   </div>
    <div class="adds1 shadow">
<h1>Combo Packages</h1>     
 <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae imperdiet ligula.  </span> 
<a href="Booking_appoint.php" class="btn btn-primary mt-3">Book Appointment</a>
   </div>
      <div class="adds1 shadow">
<h1>Single Services</h1>     
 <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae imperdiet ligula.  </span> 
<a href="Booking_appoint.php" class="btn btn-primary mt-3">Book Appointment</a>
   </div>
 </div>
  <button class="button-navigation" type="button" onclick="showNextOffer()"><i class="fa fa-angle-right"></i></button>    
    </div>
   </div>
   <script type="text/javascript" charset="utf-8">
   //prof_function.php
     function close_pic(){
     document.getElementById('pic-output').src = "";
     document.getElementById("Change-Profile").style.width = "0%"; 
     }
     function Open_pic(){
    document.getElementById('upload-Icon').style.display = "block";
    const video = document.getElementById('myVideo');
    video.pause();
    video.currentTime = 0;
     document.getElementById("Change-Profile").style.width = "100%"; 
     }
     const Upload_Prof = function(event){
  var pic_output = document.getElementById('pic-output');
  var upload_Icon = document.getElementById('upload-Icon');
 pic_output.src = URL.createObjectURL(event.target.files[0]);
 upload_Icon.style.display = "none";
     }
     
     let currentOfferIndex = 0;

function showNextOffer() {
  document.getElementById("Change-Profile").style.width = "0%"; 
    const offers = document.querySelectorAll('.adds1');
    
    if (currentOfferIndex < offers.length - 1) {
        offers[currentOfferIndex].style.display = 'none';
        currentOfferIndex++;
        offers[currentOfferIndex].style.display = 'block';
    } else {
        // Loop back to the first offer when reaching the end
        offers[currentOfferIndex].style.display = 'none';
        currentOfferIndex = 0;
        offers[currentOfferIndex].style.display = 'block';
    }
}
   </script>
    </body>
    </html>
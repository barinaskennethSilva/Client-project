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
    body {
     background-color: #99fa82; 
    }
    *{
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }
    .p1{
      height: 60%;
      width:100%;
      position: absolute;
      top: 340px;
      left: 0px;
      z-index: -40;
    }
    .container-scroll{
      overflow-y:auto;
      overflow-x: hidden;
      position: absolute;
      top: 0px;
      left: 0px;
      width:100%;
      height: 100%;
      z-index: -40;
    }
    .header{
      margin-top: 50px;
      padding: 10px;
      background-image: url('./image/p4.png');
      width: 100%;
      height: 285px;
  background-size: 100% 100%;
    }
    .massage-list{
      width: 100%;
      display: flex;
      flex-direction: row;
      overflow-x: auto;
      overflow-y: hidden;
      position: absolute;
      top: 750px;
      margin-bottom: 50px;
      flex-wrap:nowrap;
      height: 260px;
    }
      .massage-list .agent{
        height: 250px;
        width: 200px;
        border-radius: 5px;
        display: flex;
        flex-direction: column;
        margin-left: 10px;
        text-align: center;
        flex: 1 0 auto;
        
      }
       .massage-list .agent .agent-name{
        color: #111;
       font-weight: 700;
        font-size: 20px;
        margin-top: 10px;
      }
     .massage-list .agent  .agent-skill{
       color: #111;
        font-weight: 600;
        font-size: 20px;
     }
  .massage-list .agent .agent-profile{
  height: 150px;
  }
  .bookingSysBtn{
    position: absolute;
   right: 10px;
   top: 280px;
  }
    </style>
  <?php include("../Test/Header.php") ?>
<div class="container-scroll">
<div class="header">

  <a href="Booking_appoint.php" class="btn btn-primary bookingSysBtn">Book Now</a>
</div>
<img src="./image/p_home.png" class="p1">

<div class="massage-list">
  <div class="agent text-white shadow">
  <img src="./image/p_home.png" class="agent-profile">
  <label class="agent-name"> Xiaolong </label>
  <label class="agent-skill"> Massage Therapist </label>
  </div>
  <div class="agent text-white shadow">
  <img src="./image/p_home.png" class="agent-profile">
  <label class="agent-name"> Xiaolong </label>
  <label class="agent-skill"> Massage Therapist </label>
  </div>
  
    <div class="agent text-white shadow">
  <img src="./image/p_home.png" class="agent-profile">
  <label class="agent-name"> Xiaolong </label>
  <label class="agent-skill"> Massage Therapist </label>
  </div>
  
</div>

 </div>
  </body>
</html>
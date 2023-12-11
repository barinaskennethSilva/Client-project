<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
  </head>
  <body>
  
<style>
.header{
  background-color: #000;
  text-align: center;
  position: absolute;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 280px;
  padding: 50px;
  z-index: -50;
  font-family: cursive;
  color: gold;
}
.header h1{
  font-size: 28px;
}
  .container-slide{
    width: 100%;
    height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
  left: 0px;
  top: 170px;
  z-index: -50;
  }
 .swiper{
   width: 100%;
   height: fit-content;
 } 
 .swiper-slide img{
   width: 100%;
   height:390px;
 }
 .swiper .swiper-button-prev, .swiper .swiper-button-next{
   color:#fff;
   outline: none;
 }
 .swiper .swiper-pagination-bullet-active{
   background:#fff;
   outline: none;
 }
</style>
  <?php include"Dash_home.php"?>
<div class="header">
  <h1> Jillie Jen's Massage Spa </h1>
</div>
 <div class="input-container">
 <div class="container-slide">
<div class="swiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide"> <img class="slidepic" src="./image/p1.png" alt="slidepic" /></div>
    <div class="swiper-slide"> <img class="slidepic" src="./image/p2.png" alt="slidepic" /></div>
    <div class="swiper-slide"> <img class="back_pages" src="./image/p3.png" alt="back_pages" /> </div>
  </div>
  <div class="swiper-pagination"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>
</div>
</div>

 <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"> 	
 </script>
 <script >
   const swiper = new Swiper('.swiper', {
  autoplay: {
    delay: 3000,
    disableOnInteraction:false,
  },
  loop: true,
  pagination: {
    el: '.swiper-pagination',
    clickable:true,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

});
 </script>
  </body>
</html>
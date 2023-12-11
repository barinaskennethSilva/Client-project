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
    <link rel="stylesheet"  href="./../css/index.css">
    <title>Dashboard Home</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
  <button class="toggler" onclick="toggler_home()">
   <i class="fa fa-bars"></i>
    </button>
      </div>
    </nav>
       <div class="dash_home shadow" id="dash_home">
      <div class="Top_dash">
    <label>Jillie Jen's Massage Spa</label> 
      </div>
     <ul>
      <li><a href="Main_Home.php">Home</a></li>
        <li><a href="Services_home.html">Services</a></li>
  <li><a href="login.php">Login</a></li>
     </ul>
    </div>
       <div class="dash_close" id="dash_close" onclick="dash_close()">
    </div>
    <script>
   function toggler_home(){
document.getElementById("dash_close").style.width = "30%";
document.getElementById("dash_home").style.width = "70%";
}
function dash_close(){
  document.getElementById("dash_close").style.width = "0px";
document.getElementById("dash_home").style.width = "0px";
}
</script>
  </body>
</html>
<?php
//$conn = mysqli_connect("sql110.infinityfree.com","if0_35418718","PP1owcTXbZyJpy4","if0_35418718_db");
$conn = mysqli_connect("localhost","root","","db");
//http://taskmanager.infinityfreeapp.com/index.html
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
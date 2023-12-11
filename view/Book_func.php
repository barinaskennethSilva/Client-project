<?php
include"../connection.php";
$Therapist_agent = $_POST["Therapist_agent"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$contact_Num = $_POST["contact_Num"];
$Type_service = $_POST["Type_service"];
$Mass_type = $_POST["Mass_type"];
$Date_arr = $_POST["Date_arr"];
$Time_arr = $_POST["Time_arr"];
$convertedTime = date("g:i A", strtotime($Time_arr));

$Time_inter = $_POST["Time_inter"];
if (empty($Therapist_agent) && empty($fname) && empty($lname) && empty($Last_Name) && empty($email)) {
  echo"All Field Required to Fill";
  exit();
}

else{
$sql = "Insert INTO Booking_appoint(Therapist_agent,Cust_fname,Cust_lname,Cust_gender,Cust_email, Cust_contNum,Type_service,Mass_type,Date_arr,Time_arr,Time_inter) VALUES ('$Therapist_agent','$fname','$lname','$gender','$email','$contact_Num','$Type_service','$Mass_type','$Date_arr','$convertedTime','$Time_inter')";
mysqli_query($conn,$sql);
echo"Booking Successfully";
  exit();
}
echo'SuccessFull booking';

?>
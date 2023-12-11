<?php
// search function
include("../connection.php");
$name = $_POST['name'];
   $sql = "SELECT * FROM Booking_appoint WHERE Therapist_agent LIKE '$name%'"; 
   $query = mysqli_query($conn,$sql);
   $data='';
   while($row = mysqli_fetch_assoc($query))
   {
     $Cust_fname = $row['Cust_fname'];
    $Cust_lname = $row['Cust_lname'];
     $Cust_email = $row['Cust_email'];
    $data .=  "<tr><td><input style='width:150px;border:none;outline:none;background-color:transparent' disabled type='text' value='" . $row["$Cust_emailst_fname"] . " " . $row["Cust_lname"] . "'></td><td>" . $row["Cust_email"] . "</td>
         <td>". $row["Date_arr"] ."</td><td>". $row["Time_arr"] ."</td><td>". $row["Therapist_agent"] ."</td> <td>". $row["Type_service"] ."</td><td>". $row["Mass_type"] ."</td><td><div class='d-flex'><button class='btn btn-danger bg-danger delete-btn' data-id='" . $row["id"] . "'>Approve</button><button class='btn btn-primary bg-primary ms-2 update-btn' data-id='" . $row["id"] . "' data-date='" . $row["date"] . "' data-notes='" . $row["notes"] . "'>Update</button></div></td></tr>";
    
   }
   echo $data;

?>
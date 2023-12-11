<?php
include("../connection.php");
$sql = "SELECT * FROM Booking_appoint";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td><input style='width:150px;border:none;outline:none;background-color:transparent' disabled type='text' value='" . $row["Cust_fname"] . " " . $row["Cust_lname"] . "'></td><td>" . $row["Cust_email"] . "</td>
         <td>". $row["Date_arr"] ."</td><td>". $row["Time_arr"] ."</td><td>". $row["Therapist_agent"] ."</td> <td>". $row["Type_service"] ."</td><td>". $row["Mass_type"] ."</td><td><div class='d-flex'><button class='btn btn-danger bg-danger delete-btn' data-id='" . $row["id"] . "'>Approve</button><button class='btn btn-primary bg-primary ms-2 update-btn' data-id='" . $row["id"] . "' data-date='" . $row["date"] . "' data-notes='" . $row["notes"] . "'>Update</button></div></td></tr>";
    }
} else {
    echo "<tr><td colspan='3'>No data found</td></tr>";
}

?>
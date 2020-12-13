<?php
include("../../database.php");

 $customer=$_POST['customer'];
 $schedule=$_POST['schedule'];
 $bus=$_POST['bus'];
 $seat_no=$_POST['seat_no'];
$sql="INSERT INTO  reservation (customer,schedule,bus) VALUES
('$customer','$schedule','$bus')";
if ($conn->query($sql) === TRUE) {
  header("location:reservation.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);


?>
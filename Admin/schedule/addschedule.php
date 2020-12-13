<?php
include("../../database.php");

 $departure_city=$_POST['departure_city'];
 $destination_city=$_POST['destination_city'];
 $start_time=$_POST['departure_time'];
 $arrival_time=$_POST['arrival_time'];
 $service=$_POST['service'];

$sql="INSERT INTO  schedule (departure_city,destination_city,start_time,arrival_time,service) VALUES
('$departure_city','$destination_city',STR_TO_DATE('$start_time','%d/%m/%Y %H:%i:%s'),STR_TO_DATE('$arrival_time','%d/%m/%Y %H:%i:%s'),'$service')";
if ($conn->query($sql) === TRUE) {
  header('Location:schedule.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);


?>
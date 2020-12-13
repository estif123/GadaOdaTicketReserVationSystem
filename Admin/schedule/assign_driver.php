<?php
include("../../database.php");



$driver_Id= $_POST['driver_Id'];
$schedule_Id = $_POST['schedule_Id'];

$sql = "INSERT INTO assign_driver(schedule,driver) VALUES('$schedule_Id','$driver_Id')";
if ($conn->query($sql) === TRUE) {
    echo 'Data insert Successfully';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);

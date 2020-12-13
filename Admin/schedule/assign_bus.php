<?php
include("../../database.php");



$bus_Id= $_POST['bus_Id'];
$schedule_Id = $_POST['schedule_Id'];

$sql = "INSERT INTO assign_bus(schedule,bus) VALUES('$schedule_Id','$bus_Id')";
if ($conn->query($sql) === TRUE) {
    echo 'Data insert Successfully';
    // header("location:modify_schedule.php?schedule_Id='$schedule_Id'");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);

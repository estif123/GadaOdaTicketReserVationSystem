<?php
include('../../database.php');
$deparure_city=$_POST['departure_city'];
$destination_city=$_POST['destination_city'];
$distance=$_POST['distance'];
$route_price=$_POST['route_price'];

$sql = "INSERT INTO route (departure_city,destination_city,distance ,tarif)
VALUES ('$deparure_city','$destination_city','$distance','$route_price')";

if ($conn->query($sql) === TRUE) {
header("location:route.php");
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>
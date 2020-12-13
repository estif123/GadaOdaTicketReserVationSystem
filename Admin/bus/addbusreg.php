<?php
include("../../database.php");

 $busname=$_POST['bus_name'];
 $paltenumber=$_POST['platenumber'];
 $sidenumber=$_POST['sidenumber'];
 $numberofseat=$_POST['seatnumber'];
 $model=$_POST['busmodel'];
 $price=$_POST['busprice'];
 $owner=$_POST['owner'];

$sql="INSERT INTO  addbus (busname,platenumber,sidenumber,numberofseat,model,price,owner) VALUES
('$busname','$paltenumber','$sidenumber','$numberofseat','$model','$price','$owner')";
if ($conn->query($sql) === TRUE) {
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);


?>
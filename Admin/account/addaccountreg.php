<?php
include('../../database.php');
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$uname=$_POST['username'];
$pass=md5($_POST['password']);
$phone=$_POST['phonenumber'];
//$photo=$_POST['photo'];
$type=$_POST['type'];

$sql = "INSERT INTO account (fullname,email,username,password,phonenumber,type)
VALUES ('$fullname','$email','$uname','$pass','$phone','$type')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>
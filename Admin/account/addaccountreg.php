<?php
include('../../database.php');
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$phone_number=$_POST['phone_number'];
$username=$_POST['username'];
$password=md5($_POST['password']);
$confirm_password=md5($_POST['confirm_password']);
//$photo=$_POST['photo'];
$type=$_POST['type'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$address=$_POST['adress'];
$sql = "INSERT INTO account (first_name,last_name,email,phone_number,username,password , confirm_password,type,age,gender,address)
VALUES ('$first_name','$last_name','$email','$phone_number','$username','$password','$confirm_password','$type','$age','$gender','$address')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>
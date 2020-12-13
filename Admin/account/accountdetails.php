<?php

$host="localhost";
$username="root";
$password="";
$db="gadaoda";
$conn=mysqli_connect($host,$username,$password,$db);

$uname="deg";
$sql = "SELECT * FROM account where username=$uname" ;
echo "hello";
$detailresult = $conn->query($sql);


?>
<?php

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'dob');
//$q1="insert into logs(username,amount)values('$username','$amount')";
//$result=mysqli_query($con,$q1);
$q2="delete from  logs";
$result1=mysqli_query($con,$q2);

header("Location:1.html");

?>
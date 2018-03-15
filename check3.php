<?php

session_start();

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'dob');
$q="select * from admin where username =".$_SESSION['username'] ;
$result=mysqli_query($con,$q);
$count=mysqli_num_rows($result);



if($count==1)
{
session_start();

header('Location:picdaalo.php');
}

else
{
	
	header('Location:login2.php');
 
}
mysqli_close($con);
?>

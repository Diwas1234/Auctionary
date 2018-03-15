


<?php
$a=$_POST['username'];
$b=$_POST['password'];


$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'dob');
$q="select * from register where username ='$a' and password='$b'";
$result=mysqli_query($con,$q);
$count=mysqli_num_rows($result);



if($count==1)
{
session_start();
$_SESSION["username"] = "$a";

header('Location:login1.php?vals='.$a);
}

else
{
	
	header('Location:login2.php');
 
}
mysqli_close($con);
?>




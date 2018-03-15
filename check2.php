<?php
$a=$_POST['username'];
$b=$_POST['password'];
$c=$_POST['tt'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'dob');
$q="select * from register where phone='$c'";
$result=mysqli_query($con,$q);
$count=mysqli_num_rows($result);



if($count==1)
{

header('Location:registration3.php?vals='.$a);
}

else
{
	
	


	header("Location:registration2.php?vals=".$a."&valsy=".$b."&valsr=".$c);
 
}
mysqli_close($con);
?>


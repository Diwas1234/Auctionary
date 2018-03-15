
  



  <!DOCTYPE html>
<html>
<head>
  <title>asas</title>
  <style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
</style>

</head>
<body style="background-image: url(http://uhqwallpapers.com/wp-content/uploads/2017/02/Full-HD-Wallpapers-1080p.jpg);">
  <script >
  
// Set the date we're counting down to


  </script>






<div style="width: 100%;height: 40px;margin-top: 5%;background-color: white;border-radius: 10px;padding-top: 10px;opacity: 0.5">

	<strong>
		<center>
			
		
		<?php
			session_start();
			echo "<font color=black size='4pt'> WELCOME :</font>";
			?>
  
</center>
</strong>
</div>
   <CENTER>
    <STRONG>
   <div style="width: 50%;height: 40px;margin-top: 40PX;background-color: white;border-radius: 10px;padding-top: 10px;opacity: 0.5">

    <?php  
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'dob');
//$q1="insert into logs(username,amount)values('$username','$amount')";
//$result=mysqli_query($con,$q1);
$q2="select username from logs where amount=(select max(amount)from logs); ";
$result1=mysqli_query($con,$q2);


while($extract=mysqli_fetch_array($result1)){
 //$username1=$extract['username'];
  echo "<font color=blue size='6pt'>" .$extract['username']. "</font> <font color=black size='5pt'> IS THE WINNER OF THIS AUCTION";
   //session_start();
    $_SESSION['usernamenew']=$extract['username'];
  //echo $extract['username']."IS THE WINNER OF THIS AUCTION"."<br>";
  $p=$_SESSION['usernamenew'];
  }
  
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'dob');
//$q1="insert into logs(username,amount)values('$username','$amount')";
//$result=mysqli_query($con,$q1);

$q3="select phone from register where username='$p'";


$result=mysqli_query($con,$q3);
while($row=$result->fetch_assoc()){
//$row=mysqli_fetch_row($result);
 //$username1=$extract['username'];
 // echo "<font color=blue size='6pt'>" .$extract['username']. "</font> <font color=black size='5pt'> IS THE WINNER OF THIS AUCTION";
   //session_start();
    
    $_SESSION['phonew']=$row['phone'];
  //echo $extract['username']."IS THE WINNER OF THIS AUCTIO.N"."<br>";
  
  
//while($extract=mysqli_fetch_array($result2)){
 //$phone=$extract['phone'];
  //echo "<font color=blue size='6pt'>" .$username1. "</font> <font color=black size='5pt'> IS THE WINNER OF THIS AUCTION";
  //echo $extract['username']."IS THE WINNER OF THIS AUCTION"."<br>";
  }
  
  $con=mysqli_connect('localhost','root');
mysqli_select_db($con,'dob');
$q="select amount from logs where username='$p' ";

$result=mysqli_query($con,$q);
$count=mysqli_num_rows($result);
while($row=$result->fetch_assoc()){

    
    $amount=$row['amount'];
  
  }




$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'dob');
$q="update cred set credits=credits+($amount*0.1) where username='$p' ";
$result=mysqli_query($con,$q);
//$count=mysqli_num_rows($result);
  // Authorisation details.
  




  $username = "diwasr10ue@gmail.com";
  $hash = "4162eeff5ae30f075d401040894b5263c3367f54369bcd179d2d5f1d3abc0884";

  // Config variables. Consult http://api.textlocal.in/docs for more info.
  $test = "0";

  // Data for text message. This is the text message data.
  $sender = "TXTLCL"; // This is who the message appears to be from.
  $numbers = $_SESSION['phonew']; // A single number or a comma-seperated list of numbers
  $message = "You are the winner of this auction congrats sir.";
  // 612 chars or less
  // A single number or a comma-seperated list of numbers
  $message = urlencode($message);
  $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
  $ch = curl_init('http://api.textlocal.in/send/?');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch); // This is the result from the API
  curl_close($ch);


  //echo "<pre>";
  //print_r($result);exit;
 


/*
      $con=mysqli_connect('localhost','root');
mysqli_select_db($con,'dob');
//$q1="insert into logs(username,amount)values('$username','$amount')";
//$result=mysqli_query($con,$q1);
$q2="delete from  logs";
$result1=mysqli_query($con,$q2);
*/






      

?>
		
	</CENTER>
  </STRONG>
  </div>		


		
	

	

<center style="margin-top: 7%;">


</center>



<center>
  
  <a href="3.php" style="display: inline-block;background-color:blue;color: white;text-decoration: none;padding: 14px 25px;text-align: center;margin-left: %" id="sube2" onmouseover="effect2()" onmouseleave="effect3()">Session Expired</a>
     
</center>


</body>

</html>
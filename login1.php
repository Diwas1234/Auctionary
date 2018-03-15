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
    alert('Welcome Sir');
// Set the date we're counting down to


  </script>



<?php
$name=$_GET['vals'];

session_start();
$_SESSION['username']=$name;

  $con=mysqli_connect('localhost','root');
mysqli_select_db($con,'dob');
$q="select credits from cred where username ='$name'";
//$result=mysqli_query($con,$q);
//$count=mysqli_num_rows($result);

$result=mysqli_query($con,$q);
while($row=$result->fetch_assoc()){
//$row=mysqli_fetch_row($result);
 //$username1=$extract['username'];
 // echo "<font color=blue size='6pt'>" .$extract['username']. "</font> <font color=black size='5pt'> IS THE WINNER OF THIS AUCTION";
   //session_start();
    
    $credits=$row['credits'];
  //echo $extract['username']."IS THE WINNER OF THIS AUCTIO.N"."<br>";
  
  
//while($extract=mysqli_fetch_array($result2)){
 //$phone=$extract['phone'];
  //echo "<font color=blue size='6pt'>" .$username1. "</font> <font color=black size='5pt'> IS THE WINNER OF THIS AUCTION";
  //echo $extract['username']."IS THE WINNER OF THIS AUCTION"."<br>";
  }


?>
<div style="width: 100%;height: 40px;margin-top: 5%;background-color: white;border-radius: 10px;padding-top: 10px;opacity: 0.5;padding-bottom: 35PX;">

	<strong>
		
			<center>
			<?php
			



      echo " <font color=black size='4pt' style=margin-left=400px > WELCOME :</font> <font color=blue size='5pt'>$name</font>";


			?>
		</center>
      <?php
echo " <font color=black size='4pt' style=margin-left=400px > CREDITS :</font> <font color=blue size='5pt'>$credits</font>";
      ?>

      <a href="1.html" style="display: inline-block;background-color:blue;color: white;text-decoration: none;padding: 14px 25px;text-align: center;margin-left: 80%" id="sube2" onmouseover="effect2()" onmouseleave="effect3()">LOGOUT</a>
    
      
    
   
	</strong>
	

</div>

<p id="demo"></p>

<script >
  
 
// Set the date we're counting down to
var countDownDate = new Date("MARCH 18, 2018 19:03:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  // Display the result in the element with id="demo"
 document.getElementById("demo").innerHTML
    =   "<span style=\"margin-left:400px;color:white;font-size:50px\">" + "AUCTION STARTS AFTER " +"<br><br>"+ "</span>"   + "<span style=\"color:white;font-size:50px;margin-left:550px\">" + days +"d"+":"+ hours+"h"+":"+minutes+"m"+":"+seconds+"s"+    "</span>" ; 
  
  // If the count down is finished, write some text 
  //document.getElementById('demo').innerHTML=minutes;
       






  if(minutes>=-1&&minutes<0){
  if (seconds<=0&&seconds>=-59) {
    //clearInterval(x);
    
   var time=Math.abs(seconds);
    var r=59-time;
    window.location.href="qq.php?tt="+r;
  }
}

  else if(minutes<=-1){
    //clearInterval(x);
   // var time=Math.abs(seconds);
    var time=seconds;
    window.location.href="qf.php?jk="+time;

  }

}, 1000);
</script>











</body>

</html>
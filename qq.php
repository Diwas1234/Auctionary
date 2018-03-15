
  <?php

    $time=$_GET['tt'];
    session_start();
    $_SESSION['newtime']="$time";


  ?>


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
  


  </script>






<div style="width: 100%;height: 40px;margin-top: 5%;background-color: white;border-radius: 10px;padding-top: 10px;opacity: 0.5">

	<strong>
		<center>
			
		
		<?php
			
			echo "<font color=black size='4pt'> WELCOME :</font> <font color=blue size='5pt'>".$_SESSION['username'];
			


?>
		
			


		
	

	</strong>
	
</div>

<center style="margin-top: 7%;">


</center>



<center>
  
  <a href="ff.php" style="display: inline-block;background-color:blue;color: white;text-decoration: none;padding: 14px 25px;text-align: center;margin-left: 10%" id="sube2" onmouseover="effect2()" onmouseleave="effect3()">BID NOW</a>
     
</center>


</body>

</html>
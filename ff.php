<?php
session_start();

$time=$_SESSION['newtime'];












?>


<html>
<head>
	<title>Welcome Sir</title>



<script src="http://code.jquery.com/jquery-latest.js"></script>
<script >
	function effect2() {
  var x=document.getElementById("sube2");
  x.style.backgroundColor="#446CB3";
  // body...
}
function effect3() {
  var x =document.getElementById("sube2");
  x.style.backgroundColor="blue";
}
	function effect() {
		var amount=form1.amount.value;
		var username=form1.username.value;

		//document.getElementById('message').innerHTML=message;

		var xmlhttp=new  XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        
		}
        xmlhttp.open("GET","insert.php?amount=" +amount +"&username="+username, true);
        xmlhttp.send();
}

var auto_refresh = setInterval(
function()
{

$('#txtHint').load('logs.php');
cache_clear();}, 2000);




</script>

</head>
<p id="tatti"></p>
<form name="form1">
<body style="background-color:grey">
<center><strong>
<div style="width: 100%;height: 40px;margin-top: 5%;background-color: white;border-radius: 10px;padding-top: 10px;opacity: 0.5">

  
   

  <strong>
    <center>
      <script >
       
      
       var time=<?php echo $time ?>;


      
      
         var x = setInterval(function() {
          

        
           
          
     //Get todays date and time
    //var now = new Date().getTime();
    
     //Find the distance between now an the count down date
    //var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
   //var days = Math.floor(distance / (1000 * 60 * 60 * 24));
   // var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    //var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    //var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
          
    time=time-1;
    if(time<0)
    {
     
      window.location.href="qs.php";
    } 
   document.getElementById("tatti").innerHTML
    =   "<span style=\"margin-left:500px;color:white;font-size:50px\">" + "VALIDITY  " +""+ "</span>"   + "<span style=\"color:white;font-size:50px;margin-left:5px\">:"+time+"s"+    "</span>" ; 

    


  

    }, 1000);

      
    

        </script>


    </center>

  </strong>
  

</div>
<CENTER><STRONG>


USERNAME:
<input type="text" name="username"  style="margin-top: 5%;margin-left: ;padding-left: 40px;padding-right: 40px;padding-top: 10px;opacity: 0.5"><br>
    AMOUNT:
<input type="text" name="amount"  style="margin-top: 5%;margin-left: %;padding-left: 40px;padding-right: 40px;padding-top: 10px;opacity: 0.5">
</center></strong>
<a href="#" onclick="effect()" style="display: inline-block;background-color:blue;color: white;text-decoration: none;padding: 14px 25px;text-align: center;margin-left: %;margin-top: 5%" id="sube2" onmouseover="effect2()" onmouseleave="effect3()">Submit</a><br><br>

<span id="message"></span>
<div id="txtHint"></div>

</form>
</body>
</html>





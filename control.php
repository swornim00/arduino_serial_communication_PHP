<html>
<form id="container">

<button class="btn" name="ledVal" value="1" >On</button>
<button class="btn" name="ledVal" value="2">Off</button>
</form>
</html>
<style>

#container{
	width:50%;
	margin:0 auto;
}
.btn{
	color:white;
	border:none;
	background-color:#009900;
	height:40%;
	font-size:1000%;
	width:100%;	
	float:right;
	margin-top:10%;
}
</style>

<?php
if(isset($_GET['ledVal'])){ //Check if there is any get request
	$val = $_GET['ledVal']; 
$fp = fopen("com3","w"); //opening the Serial port in write mode you can use fopen("com3","r+") if you want read and write 
			// /dev/ttyACM0 or something like this for linux	
	fwrite($fp,$val); //writing to serial port

fclose($fp); 
}

?>


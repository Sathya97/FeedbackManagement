
<?php
session_start();
  
  $db = mysqli_connect("localhost","root","","feedback");

  if (isset($_POST['getvalue'])) {
    
    $busno= mysql_real_escape_string($_POST['busno']);
    $select1 = mysql_real_escape_string($_POST['select1']);
    $select2 = mysql_real_escape_string($_POST['select2']);
    $select3 = mysql_real_escape_string($_POST['select3']);
    $select4 = mysql_real_escape_string($_POST['select4']);
    $general = mysql_real_escape_string($_POST['general']);
   
   /*switch ($select) {
   	case 'Bus':
   		# code...
   	header("location:bus.php");
   		break;
   		case 'Hostel':
   		# code...
   	header("location:hostel.php");
   		break;
   	
   	default:
   		# code...
   		break;
   }*/
        $sql = "INSERT INTO bus(busno,select1,select2,select3,select4,general) VALUES ( '$busno','$select1','$select2','$select3','$select4','$general')";
       
        mysqli_query($db, $sql);
        header("location:last.php");

        
}


?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Bus feedback</title>
	 <link rel="icon" href="img/logo.png" type="image/gif" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="css.css">
	<script>
       var x = document.getElementById("textfocus").autofocus;
	 </script>
</head>
<body>
	<center>
		<div class="page">
	<div class="container">
		<h1>SIET Bus Feedback</h1>
		<form name="getresult" method="post">
      <table>
			<tr><label><u>Bus Number</u></label><br></tr>
			<tr><input type="number" name="busno" id="textfocus" autofocus placeholder="Enter your Bus number" required/><br><br></tr>
      <tr><label><u>How well the driver drives the bus?</u></label><br></tr>
      <tr><input type="radio" name="select1" value="Safely and smoothly by keeping the time."/>Safely and smoothly by keeping the time.<br><br></tr>
     <tr> <input type="radio" name="select1" value="Slow and fails to keep timing"/>Slow and fails to keep timing<br><br></tr>
      <tr><input type="radio" name="select1" value="Fast and rash driving"/>Fast and rash driving<br><br></tr>
      <tr><label><u>Driver Name[Optional]</u></label><br></tr>

			<input type="text" name="name" placeholder="Enter driver name" /><br><br>
			<label><u>The bus reaches on time to your stop?</u></label><br><br>
			<input type="radio" name="select2" value="Always"/>Always<br><br>
			<input type="radio" name="select2" value="Most of the Time"/>Most of the Time<br><br>
			<input type="radio" name="select2" value="Poor in time keeping"/>Poor in time keeping<br><br>
      <label><u>Cleanliness of the vechicle</u></label><br><br>
      <label><input type="radio" name="select3" value="1"/>1</label>
      <label><input type="radio" name="select3" value="2"/>2</label>
      <label><input type="radio" name="select3" value="3"/>3</label>
      <label><input type="radio" name="select3" value="4"/>4</label>
      <label><input type="radio" name="select3" value="5"/>5</label><br><br>
      <label><u>The Driver behaves professionally and uses decent language? </u></label><br><br>
      <input type="radio" name="select4" value="yes"/>Yes<br><br>
      <input type="radio" name="select4" value="no"/>No<br><br>
      <label><u>General feedback on the bus transportation</u></label>
      <input type="text" placeholder="Your answer" name="general"><br><br>
      
      <a href="form.php"><input type="button" value="Back" name="back"></a>
			<input type="submit" value="Submit" name="getvalue">
			
		</form>
	</div>
</div>
</center>
</body>
</html>

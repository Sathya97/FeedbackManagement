
<?php
session_start();
  
  $db = mysqli_connect("localhost","root","","feedback");

  if (isset($_POST['getvalue'])) {
    
    $roll= mysql_real_escape_string($_POST['roll']);
    
    $name = mysql_real_escape_string($_POST['name']);
    $select = mysql_real_escape_string($_POST['select']);
   
   switch ($select) {
   	case 'Bus':
   		# code...
   	header("location:bus.php");
   		break;
   		case 'Hostel':
   		# code...
   	header("location:hostel.php");
   		break;
      case 'Other':
      # code...
    header("location:other.php");
      break;
   	
   	default:
   		# code...
   		break;
   }
        $sql = "INSERT INTO sietfeedback(rollno,name,typef) VALUES ( '$roll','$name','$select')";
       
        mysqli_query($db, $sql);

        
}

?>

<!DOCTYPE HTML>
<html>
<head>
	<title>SIET feedback</title>
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
		
    <h2>SIET Feedback</h2>
    <p>Provide feedback on day to day basis to understand the specific problem areas.Please ensure that you highlight positive aspects also related to Bus,Food and other things,so that they will be given special care and steps will be taken to maintain them.</p>

		<form name="getresult" method="post">
			<br><label><u>Roll number</u></label><br><br>
			<input type="text" name="roll" id="textfocus" autofocus placeholder="Enter your Roll number" required/><br><br>
      <label><u>Name</u></label><br><br>
			<input type="text" name="name" placeholder="Enter your name" required/><br><br>
			<label><u>Select the Feedback Category</label></u><br><br>
			<input type="radio" name="select" value="Bus"/>Bus Feedback<br><br>
			<input type="radio" name="select" value="Hostel"/>Hostel Food Feedback<br><br>
			<input type="radio" name="select" value="Other"/>Other Issues Feedback<br><br>


			<input type="submit" value="Next" name="getvalue">
			
		</form>
	</div>
</div>
</center>
</body>
</html>

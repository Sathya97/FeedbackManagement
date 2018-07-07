<?php
session_start();
  
  $db = mysqli_connect("localhost","root","","feedback");

  if (isset($_POST['getvalue'])) {
    
    $other= mysql_real_escape_string($_POST['other']);
   
    
   
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
         $sql = "INSERT INTO other(other) VALUES ('$other')";
        mysqli_query($db, $sql);
        header("location:last.php");

        
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
		
    <h1>SIET Other Feedback</h1>
    
		<form name="getresult" method="post">
			<label>Enter your feedback or suggestions related to the day to day Academics, sports and other facilities like Canteen</label>
			<br><br><input type="text" name="other" placeholder="Your answer"><br><br>
			<a href="form.php"><input type="button" value="Back" name="back"></a>
            <input type="submit" value="Submit" name="getvalue">

			
			
		</form>
	</div>
</div>
</center>
</body>
</html>
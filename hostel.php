
<?php
session_start();
  
  $db = mysqli_connect("localhost","root","","feedback");

  if (isset($_POST['getvalue'])) {
    
    $datee= mysql_real_escape_string($_POST['datee']);
    $select1 = mysql_real_escape_string($_POST['select1']);
    $item = mysql_real_escape_string($_POST['item']);
    $select2 = mysql_real_escape_string($_POST['select2']);
    
   
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
        $sql = "INSERT INTO hostel(datee,select1,item,select2) VALUES ('$datee','$select1','$item','$select2')";
       
        mysqli_query($db, $sql);
        header("location:last.php");

        
}

?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Hostel feedback</title>
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
		<h1>SIET Food Feedback</h1>
		<form name="getresult" method="post">
      <table>
			<tr><label><u>Date</u></label><br><br></tr>
			<tr><input type="date" name="datee" id="textfocus" autofocus placeholder="date" required/><br><br></tr>
      <label><u>Feedback on</u></label><br><br>
      <tr><input type="radio" name="select1" value="Breakfast"/>Breakfast<br><br></tr>
     <tr> <input type="radio" name="select1" value="Lunch"/>Lunch<br><br></tr>
      <tr><input type="radio" name="select1" value="Dinner"/>Dinner<br><br></tr>
      <label><u>Which is the item served?<br>
                    Give your feedback</u></label><br><br>

			<input type="text" name="item" placeholder="Your answer" /><br><br>
			
      <label><u>Your rating on the item</u></label><br><br>
      <label><input type="radio" name="select2" value="1"/>1</label>
      <label><input type="radio" name="select2" value="2"/>2</label>
      <label><input type="radio" name="select2" value="3"/>3</label>
      <label><input type="radio" name="select2" value="4"/>4</label>
      <label><input type="radio" name="select2" value="5"/>5</label><br><br>
      
      
 <a href="form.php"><input type="button" value="Back" name="back"></a>
			<input type="submit" value="Submit" name="getvalue">
		</table>	
		</form>
	</div>
</div>
</center>
</body>
</html>

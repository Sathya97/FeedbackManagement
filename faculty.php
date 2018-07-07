


<?php
session_start();
echo 'Welcome!'.$_SESSION['email']; echo'!';

echo '<a href="index.php?action=logout" class="btn ">logout</a>';
if (isset($_GET['back'])) {

       # code...
      session_unregister('email');
     }


?>





<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Faculty</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
			                    	
                                    <button type="submit" class="btn" name="getvalue">Open</button>
			                    </form>
			                    	


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
</body>
</html>

<?php

//session_start();
  $db= mysqli_connect("localhost","root","","feedback");
  //mysqli_select_db($link,"FacultySIET");


   $Email=$_SESSION['email'];
  if(isset($_POST['getvalue']))
  {
    
      $sql = "SELECT * FROM message1 WHERE email='$Email'";
     $result = mysqli_query($db,$sql);
     echo "<center>";
     echo "<table border='1px' > ";
     echo "<tr>";

     //echo "<th>"; echo "Email"; echo "</th>"; 
     
      echo "<th>"; echo "Message"; echo "</th>"; 
       //echo "<th>"; echo "Selection"; echo "</th>";
     echo "</tr>";
     while($row=mysqli_fetch_array($result)) {
      echo "<tr>";

       // echo "<td>"; echo $row['email']; echo "</td>";
        
        echo "<td>"; echo $row['feedback']; echo "</td>";
        
       echo "</tr>";
     }
     echo "</table>";
     echo "</center>";
   }

?>
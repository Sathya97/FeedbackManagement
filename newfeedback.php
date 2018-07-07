 <?php
session_start();

  
  $db = mysqli_connect("localhost","root","","feedback");

  if (isset($_POST['getvalue'])) {
    
    
    
    $email = mysql_real_escape_string($_POST['email']);
   
    $feedback = mysql_real_escape_string($_POST['feedback']);
    
       $user=$_SESSION['email'];
    
        $sql = "INSERT INTO message1(user,email, feedback) VALUES ('$user','$email', '$feedback')";
       
        mysqli_query($db, $sql);
       
       // $_SESSION['message'] = "You are now logged in";
        $_SESSION['userid'] = $userid;
        
        header("location: index.php"); 
        echo "<script type='text/javascript'>alert('Your Request has been sent');</script>";

    
 }
    


?>
<?php

echo 'Welcome!'.$_SESSION['email']; echo'!';

echo '<a href="home.php?action=back" class="btn ">back</a>';
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Feedback</title>

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
                        <div class="col-sm-8 col-sm-offset-2 text">
                            
                            <div class="description">
                                <p>
                                      Give your feedback!
                                     <a href="http://azmind.com"><strong></strong></a>,
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            
                            <div class="form-bottom">

 <form role="form" method="post" class="login-form">
			                    	<div class="form-group">
			                    		 </div>
                                         <div class="form-group">
                                         <label class="sr-only" for="form-password">Email</label>
                                         <?php
                                          $conn = mysqli_connect("localhost","root","","feedback");
                                          $query="SELECT email FROM signup";
                                          $result=mysqli_query($conn,$query);

                                         ?>
                                         <select name="email" class="form-username form-control" id="form-username">
                                            <option value=""  name="email" disabled selected hidden>Select Email</option>
        <?php
        while ($row =  mysqli_fetch_assoc($result)) {
            echo '<option value="'.$row['email'].'">'.$row['email'].'</option>';
        }
        ?>
    </select>
                                        
                                    </div>
                                         <div class="form-group">
                                        <label class="sr-only" for="form-password">Feedback</label>
                                        <input type="text" name="feedback" placeholder="Give your feedback" class="form-username form-control" id="form-username">
                                    </div>
                                    <button type="submit" class="btn" name="getvalue">Send</button>
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
			                    	
<?php
session_start();
$expireAfter = 1;
  
  $db = mysqli_connect("localhost","root","","feedback");
  if(isset($_SESSION['last_action'])){
    
    //Figure out how many seconds have passed
    //since the user was last active.
    $secondsInactive = time() - $_SESSION['last_action'];
    
    //Convert our minutes into seconds.
    $expireAfterSeconds = $expireAfter * 60;
    
    //Check to see if they have been inactive for too long.
    if($secondsInactive >= $expireAfterSeconds){
        //User has been inactive for too long.
        //Kill their session.
        session_unset();
        session_destroy();
    }
    
}
 
//Assign the current timestamp as the user's
//latest activity


  if (isset($_POST['getvalue'])) {
    
    $email= mysql_real_escape_string($_POST['email']);
    
    $password = mysql_real_escape_string($_POST['password']);
    $Role = mysql_real_escape_string($_POST['designation']);
    $password = md5($password);
    $_SESSION['email'] = $email;
     $roles = "s";
    $rolef = "f";
    $rolea = "a";

    if(isset($Role)==$rolea) {
      
    
    $sql = "SELECT * FROM signup WHERE email='$email' AND password='$password' AND designation='$rolea' ";
    $Result= mysqli_query($db, $sql);

    if (mysqli_num_rows($Result) == 1) {

    

    // echo "Welcome HOD";
        // $_SESSION['Email'] = $Email;
         header("location: admin.php");
        
         
     } }

     if (isset($Role)==$roles) {
      
    
    $sql = "SELECT * FROM signup WHERE email='$email' AND password='$password' AND designation='$roles' ";
    $Result= mysqli_query($db, $sql);

    if (mysqli_num_rows($Result) == 1) {

    

    
         //$_SESSION['Email'] = $Email;
         header("location: student.php");
         //$(".form")[0].reset();
        
         
     } }
     if(isset($Role)==$rolef) {
      
    
    $sql = "SELECT * FROM signup WHERE email='$email' AND password='$password' AND designation='$rolef' ";
    $Result= mysqli_query($db, $sql);

    if (mysqli_num_rows($Result) == 1) {

    

    // echo "Welcome HOD";
        // $_SESSION['Email'] = $Email;
         header("location: faculty.php");
        
         
     }
     else{
        echo "<script type='text/javascript'>alert('email/password combination incorrect');</script>";
        $_SESSION['message'] = "username/password combination incorrect";
    }
 

 }

 

}
?>




<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Feedback Login</title>

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
	                            	 Login to give your feedback!
	                            	 <a href="http://azmind.com"><strong></strong></a>,
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login to our site</h3>
                            		<p>Enter your Email and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
                                    <div class="form-group">

                                        
                                         <select  name="designation" class="form-password form-control" id="form-password">
                  <label><option value="" disabled selected hidden>designation</option>designation </lable>
                 
                  <option value="a">Admin</option>
                  <option value="s">Student</option>
                  <option value="f">Faculty</option>
                </select>
                                    </div>
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Email</label>
			                        	<input type="email" name="email" placeholder="Email..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" class="btn" name="getvalue">Sign in!</button>
                                    <a href="signup.php">Sign up?</a>
                                    <a href="forgot.php">Forgot Password?</a>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>


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
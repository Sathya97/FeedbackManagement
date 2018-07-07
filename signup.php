<?php
session_start();
  
  $db = mysqli_connect("localhost","root","","feedback");

  if (isset($_POST['getvalue'])) {
    
    //$userid= mysql_real_escape_string($_POST['userid']);
    
    $image = mysql_real_escape_string($_FILES['image']['name']);
    $imagedata = mysql_real_escape_string(file_get_contents($_FILES['image']['tmp_name']));
    $department = mysql_real_escape_string($_POST['department']);
    $designation = mysql_real_escape_string($_POST['designation']);
    $email = mysql_real_escape_string($_POST['email']);
    $password = mysql_real_escape_string($_POST['password']);
    $confirmpassword = mysql_real_escape_string($_POST['confirmpassword']);
    //$target = "assets/".basename($_FILES['image']['name']);
     //$filetype = $_FILES['image']['type'];
      //$filetmp = $_FILES['image']['tmp_name'];
     //$image=addslashes($_FILES['name']);
     $filename=$_FILES['image']['name'];
     $file = $_FILES['image']['tmp_name'];
     $pdf='profile/'.$_FILES['image']['name'];
         $data =move_uploaded_file($file, $pdf);
 if($data){

     // $file=base64_encode($imagedata);
     if($password == $confirmpassword) {
        //create user
        $password = md5($password);
        $confirmpassword = md5($confirmpassword);//hash password before storing for security purpose
        $sql = "INSERT INTO signup(department,designation, email,file,filename, password,confirmpassword) VALUES ('$department','$designation' ,'$email','$file','$filename','$password','$confirmpassword')";
       
        mysqli_query($db, $sql);
       // if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            # code...
          //  echo "image uploaded";
        //}
       
       // $_SESSION['message'] = "You are now logged in";
       // $_SESSION['userid'] = $userid;

        
        //echo "<script type='text/javascript'>alert('Your Request has been sent');</script>";
        header("location: index.php"); 

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
        <title>Feedback Signup</title>

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
	                            	 Signup to create your account!
	                            	 <a href="http://azmind.com"><strong></strong></a>,
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Signup to our site</h3>
                            		<p>Enter your details to sign up:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form" enctype="multipart/form-data">
			                    	 
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Email</label>
                                        <input type="Email" name="email" placeholder="Email..." class="form-password form-control" id="form-password">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Department</label>
                                        <input type="text" name="department" placeholder="Department..." class="form-password form-control" id="form-password">
                                    </div>
                                     <div class="form-group">

                                        
                                         <select  name="designation" class="form-password form-control" id="form-password">
                  <label><option value="" disabled selected hidden>designation</option>designation </lable>
                 
                  <option value="a">Admin</option>
                  <option value="s">Student</option>
                  <option value="f">Faculty</option>
                </select>
                                   
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Upload a photo</label>
                                        <input type="file" name="image" placeholder="Choose a photo" class="form-username form-control" id="form-username">
                                    </div>

                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Password</label>
                                        <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Confirm Password</label>
                                        <input type="password" name="confirmpassword" placeholder="Retype Password..." class="form-password form-control" id="form-password">
                                    </div>
			                        <button type="submit" class="btn" name="getvalue">Sign up!</button>
                                    <a href="index.php">Already have an account? login..</a>
                                    
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
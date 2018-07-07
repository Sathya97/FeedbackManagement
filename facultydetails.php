<?php
session_start();
echo 'Welcome!'.$_SESSION['email']; echo'!';

echo '<a href="admin.php?action=logout" class="btn ">back</a>';



?>


<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Faculty Details</title>

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
        <style> 
.search {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('search.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
   
    position:absolute;
   top:100;
   right:0;
   left: 500;
}

.search:focus {
    width: 100%;
}
</style>

    </head>

    <body>

        <!-- Top content -->
        
        <div class="top-content">
        	
            <div class="inner-bg">

                <div class="container">
                    <div class="row">
                        
                    <div class="row">

                        <form name="search" method="post" action="">
                        <input type="text" name="search" placeholder="Search by department">
                        <input type="submit" value="Go" name="Search">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        </form>
                        <div class="form-bottom">
                        <?php
                         
                         if (isset($_POST['go'])) {
                            $db= mysqli_connect("localhost","root","","feedback");
                         $search = mysql_real_escape_string($_POST['search']);
                         $sql = "SELECT * FROM signup WHERE designation='f' AND department='$search'";
                         $result = mysqli_query($db,$sql);
                         //header("location: new.php");
                         echo "<center>";
                         
     echo "<table border='1px' > ";
     echo "<tr>";
     //echo "<th>"; echo "Image"; echo "</th>"; 
     echo "<th>"; echo "Image"; echo "</th>"; 
     echo "<th>"; echo "Email"; echo "</th>";
     echo "<th>"; echo "Department"; echo "</th>";  
     
      
       //echo "<th>"; echo "Selection"; echo "</th>";
     echo "</tr>";
     while($row=mysqli_fetch_array($result)) {
      echo "<tr>";

        echo "<td>"; echo "<img src='assets/person.png' width='30px' height='30px'>"; echo "</td>";
        echo "<td>"; echo $row['email']; echo "</td>";
        echo "<td>"; echo $row['department']; echo "</td>";
        
        //echo "<td>"; echo $row['imagedata']; echo "</td>";
        //echo "<td>"; echo $row['email']; echo "</td>";
        
        //echo "<td>"; echo $row['']; echo "</td>";
        
       echo "</tr>";
     }
     echo "</table>";
     
     echo "</center>";
 }


else {



                        

                        
                        

//session_start();
  $db= mysqli_connect("localhost","root","","feedback");
  //mysqli_select_db($link,"FacultySIET");


   //$Email=$_SESSION['email'];
  
    
      $sql = "SELECT * FROM signup WHERE designation='f'";
     $result = mysqli_query($db,$sql);
     echo "<center>";
     echo "<table border='1px' > ";
     echo "<tr>";
     //echo "<th>"; echo "Image"; echo "</th>"; 
     echo "<th>"; echo "Image"; echo "</th>"; 
     echo "<th>"; echo "Email"; echo "</th>";
     echo "<th>"; echo "Department"; echo "</th>";  
     
      
       //echo "<th>"; echo "Selection"; echo "</th>";
     echo "</tr>";
     while($row=mysqli_fetch_array($result)) {
      echo "<tr>";

        echo "<td>"; echo "<img src='assets/person.png' width='30px' height='30px'>"; echo "</td>";
        echo "<td>"; echo $row['email']; echo "</td>";
        echo "<td>"; echo $row['department']; echo "</td>";
        
        //echo "<td>"; echo $row['imagedata']; echo "</td>";
        //echo "<td>"; echo $row['email']; echo "</td>";
        
        //echo "<td>"; echo $row['']; echo "</td>";
        
       echo "</tr>";
     }
     echo "</table>";
     echo "</center>";
 }
   

?>

                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                            
			                    
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
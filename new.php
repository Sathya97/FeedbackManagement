<html>
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Login Form Template</title>

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
     <div class="top-content">
            
            <div class="inner-bg">

                <div class="container">
<?php
         echo"hai";                
        $db= mysqli_connect("localhost","root","","feedback");
                         if (isset($_POST['go'])) {
                            
                         $search = mysql_real_escape_string($_POST['search']);
                         $sql = "SELECT * FROM signup WHERE designation='f' AND department='$search'";
                         $result = mysqli_query($db,$sql);
                         header("location: new.php");
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


echo"username";

                        ?>
                    </div>
                </div>
            </div>

                    </body>
                    </html>
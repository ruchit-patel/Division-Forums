<html>
<head>
<title>General Info Card</title>


</head>

<body>


<?php

			ini_set('display_errors',1);
			$servername = "localhost";
            $username = "root";
            $password = "admin";
            $dbname = "division";
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
			}	
			for($i=01;$i<12;$i++)
			{	
			$string="SELET wep_Img FROM Extra where wep_ID=\"WP00$i\"";
			//$char="s";
			//$attachment="\\";	
			$newstring = addcslashes($string,"s");
			$que="UPDATE Extra set wep_Img='$newstring' where wep_ID=\"WP00$i\"";
			echo "Hello executing $i";
			}
			
?>

</body>
</html>
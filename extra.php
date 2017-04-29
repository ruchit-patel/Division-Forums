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
			/*for($i=01;$i<12;$i++)
			{	
			$string="SELET wep_Img FROM Extra where wep_ID=\"WP00$i\""; */
			//$char="s";
			//$attachment="\\";	
			
			$result = mysql_query('SELECT wep_Img FROM Extra where wep_ID=\"WP00$i\"');

while ($row = mysql_fetch_assoc($result)){
     $rowslashes=addcslashes($row,"s"); //this will go for every result, so every row in the database
	 echo $rowslashes;
}
			
			/* $result=mysqli_query($conn,$string)
			$row=mysqli_fetch_assoc($result);
			$arr=array();
			for($i=0;$i<$row.length();$i++){
				foreach()
			$arr[$i]=$row['wep_Img'];
			
			} */
				
			
			
			
			
?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
<title>General Info Card</title>
<style>
@font-face {
  font-family: Borda;
  src: url("FontFiles/The.Northern.Block.Ltd_Borda.otf");
  
}
@font-face {
  font-family: Borda-ExtraBold;
  src: url("FontFiles/The.Northern.Block.Ltd_Borda.ExtraBold.otf"); 
}
body {
	font-family: Borda;
	
}
p{
	font-family: Borda;
}
.heading{
	font-family: Borda-ExtraBold;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="CSS\skills.css">

</head>

<body background="Images\ModsBg.jpg">


<?php
			$skill_id=$_GET['Skill_id'];
			$servername = "localhost";
            $username = "root";
            $password = "admin";
            $dbname = "division";
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
			
			
			$skill_id=$_GET['Skill_id'];
			$name=$_GET['Name'];
			$category_type=$_GET['Category_Type'];
			$skill_description=$_GET['Skill_Description'];
			$image=$_GET['Image'];
			
			$description=$_GET['Description'];
			$modification=$_GET['Modification'];
			
			$sql="SELECT * FROM Skills NATURAL JOIN Medical where Skill_id='$skill_id' AND Category_Type='$category_type'";
			$result=mysqli_query($conn,$sql) OR DIE ("".mysqli_error($conn));
			$row=mysqi_fetch_assoc($conn,$result);
			
			
			
			
			
			
			echo "<div class=\"wrapper\">";
            echo "<div class=\"row\">";
                echo "<div class=\"col-md-7 col-md-offset-1\">";
                    echo "<div class=\"card\" style=\"min-height:250px;\">";
					
                        echo "<div class=\"card-block\">";
							
                            echo "<p class=\"crd-h1\" style=\"font-size:30px;\"> $name </p>";							
							echo "<font size=\"5\"> $skill_description </font>";
                        echo "</div>";
						
                    echo "</div>";
                echo "</div>";
				
				echo "<div class=\"col-md-3\"> <!--fitting the image in 3 cols--> ";
 
				echo "<img src=\"$image\" style=\"width:100%;\">";

				echo "</div> <!--closing the fitting of the image in 3 cols-->";

				echo "<div class=\"col-md-1\"> <!--leaving one col from the right-->";

				echo "</div>";
				
				
				
			echo "</div> <!--closing the row div in which mod card and image is fitted-->";
echo "</div> <!--General info card ends here-->";
			


echo "<div class=\"row\">";
echo "<br> <br> <br> <br>";
echo "</div>"

echo "<div class=\"wrapper\">";
	echo "<div class=\"row\"> <!--row for fitting three cards for mods-->";

		echo "<div class=\"col-md-1\">"; 
		echo "</div>";

		echo "<div class=\"col-md-3\"> <!--fitting first mod card-->";
			echo "<div class=\"card\">";
                        echo "<div class=\"card-block\">";
                            echo "<p class=\"crd-h1\"> $modification </p>";
    

    
							echo "<br>";
		
						   // <img src="Images\thedivision_reconpack_final.jpg" height="70%" width="50%" align="center">
		
							echo "<font size=\"3\">"; 
							echo "<br>
							<br>  $description
							</font> ";
						echo "</div>";
			echo "</div>";
		echo "</div>";
		

		echo "<div class=\"col-md-0\">";
		echo "</div>";

		echo "<div class=\"col-md-3\"> <!--fitting second mod card-->";
			
			echo "<div class=\"card\">";
                        echo "<div class=\"card-block\">";
                            echo "<p class=\"crd-h1\"> $modification</p> ";
    

    
							echo "<br>";
		
						//	<img src="Images\thedivision_reconpack_final.jpg" height="70%" width="50%" align="center">
		
							echo "<font size=\"3\">"; 
							echo "<br>
							<br>  $description ";
							echo "</font>";
						echo "</div>";
			echo "</div>";
			
		echo "</div>";

		echo "<div class=\"col-md-0\">";
		echo "</div>";

		echo "<div class=\"col-md-4\"> <!--fitting third mod card-->";

			echo "<div class=\"card\">";
                        echo "<div class=\"card-block\">";
                            echo "<p class=\"crd-h1\">$modification</p>";
    

    
							echo "<br>";
		
							// <img src="Images\thedivision_reconpack_final.jpg" height="70%" width="50%" align="center">
		
							echo "<font size=\"3\">"; 
							echo "<br>
							<br>  $description ";
							echo "</font>";
						echo "</div>";
			echo "</div>";
		
		echo "</div>";

		echo "<div class=\"col-md-1\">";
		echo "</div>";

	echo "</div> <!--closing row for three card mods-->";
echo "</div> <!--closing wrapper class for three card mods-->";

echo "<div class=\"row\">
<br> <br> <br>
</div>";


echo "<div class=\"wrapper\"> ";
	echo "<div class=\"row\"> <!--master mod row begins--> ";

		echo "<div class=\"col-md-1\">
		</div> ";
	
		echo "<div class=\"col-md-10\"> <!--opening master mod container-->";
	
			echo "<div class=\"card\">";
                        echo "<div class=\"card-block\">";
                            echo "<p class=\"crd-h1\">Master: $modification</p> ";
    

    
							echo "<br>";
		
							// <img src="Images\thedivision_reconpack_final.jpg" height="70%" width="50%" align="center">
		
							echo "<font size=\"3\"> 
							<br>  $description <br> 

								  
							</font>";
						echo "</div>";
			echo "</div>";
		
		
	
	
		echo "</div> <!--closing master mod container-->";

	echo "</div> <!--closing master mod row-->";
echo "</div> <!--closing master mod wrapper-->";	

?>

</body>
</html>

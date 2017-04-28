<!-- <?php
    $string = 'bcadef abcdef';
    $substr = 'a';
    $attachment = '+++';

    //$position = strpos($string, 'a');

    $newstring = str_replace($substr, $substr.$attachment, $string);

    // bca+++def a+++bcdef
?> -->

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

			$wep_img=$_GET['wep_Img'];
			$servername = "localhost";
            $username = "root";
            $password = "admin";
            $dbname = "division";
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
				
			for($i=01;$i<12;$i++)
			{	
			$string="SELET wep_Img FROM Extra where wep_ID="WP00$i"";
			$char="s";
			$attachment="\\";	
			$newstring = str_replace($char, $char.$attachment, $string);
			$que="UPDATE Extra set wep_Img='$newstring' where wep_ID="WP00$i"";
			}
?>

</body>
</html>
			
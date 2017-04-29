<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "division";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT wep_Img FROM Extra";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
        $row['wep_Img']=addcslashes($row['wep_Img'],"I");
		 echo $row['wep_Img'];
		$query="INSERT INTO Extra(wep_Img) VALUES('$row[\'wep_Img\']')";
		$result1 = $conn->query($query);	
     }
} else {
     echo "0 results";
}

$conn->close();
?>  

</body>
</html>
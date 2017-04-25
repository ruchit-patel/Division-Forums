<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$db="division";
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="show tables";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
  
        echo '<option>'.$row["Tables_in_division"].'</option>';

        }
} else {
    echo "0 results";
}
?>

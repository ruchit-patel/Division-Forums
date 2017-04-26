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
      if($row["Tables_in_division"]=="wepBns" || $row["Tables_in_division"]=="wepMain" || $row["Tables_in_division"]=="wepStats" ){
        echo '<option> Weapons </option>';
      }
        else if($row["Tables_in_division"]=="Perks" || $row["Tables_in_division"]=="Security" || $row["Tables_in_division"]=="Technical"){
          echo '<option> Skills </option>';
        }
        else{
          echo "<option> ".$row["Tables_in_division"]."</option>";
        }

        }
} else {
    echo "0 results";
}
?>

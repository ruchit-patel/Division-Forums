<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "division";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$tal_id = mysqli_real_escape_string($conn,$_POST['tal_id']);
   $des = mysqli_real_escape_string($conn,$_POST['des']);
   $tal_name = mysqli_real_escape_string($conn,$_POST['tal_name']);
   $gear_id = mysqli_real_escape_string($conn,$_POST['gear_id']);

 $sql = "INSERT INTO gearTalents values ('$tal_id','$des','$tal_name','$gear_id')";

 if (mysqli_query($conn, $sql)) {
     echo "New record created successfully";
      header("location: gear_tal.html");
 } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }

 mysqli_close($conn);

 ?>

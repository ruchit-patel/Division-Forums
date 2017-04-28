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
    $setid = mysqli_real_escape_string($conn,$_POST['set_id']);
    $setname = mysqli_real_escape_string($conn,$_POST['set_name']);
    $set2 = mysqli_real_escape_string($conn,$_POST['set_tal2']);
    $set3 = mysqli_real_escape_string($conn,$_POST['set_tal3']);
    $set4 = mysqli_real_escape_string($conn,$_POST['set_tal4']);

  $sql = "INSERT INTO gear_set_tals values ('$setid','$setname','$set2','$set3','$set4')";


  if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
       header("location: gearsettal.html");
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);

?>

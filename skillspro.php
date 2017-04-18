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
$nm = mysqli_real_escape_string($conn,$_POST['name']);
    $cat = mysqli_real_escape_string($conn,$_POST['category']);


  $sql = "INSERT INTO Skills(Name,Category_type) values ('$nm','$cat')";

  if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
       header("location: skills.html");
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);

?>

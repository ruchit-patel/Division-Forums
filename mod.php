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
    $id = mysqli_real_escape_string($conn,$_POST['mod_id']);
    $mod = mysqli_real_escape_string($conn,$_POST['modname']);

  $sql = "INSERT INTO gearMods values ('$des','$mod')";

  if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
       header("location: mod.html");
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);

?>

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
    $id = mysqli_real_escape_string($conn,$_POST['id']);
    $mod = mysqli_real_escape_string($conn,$_POST['mod']);
    $des = mysqli_real_escape_string($conn,$_POST['des']);

  $sql = "INSERT INTO Technical values ('$des','$mod',$id)";

  if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
       header("location: medtechsec.html");
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);

?>

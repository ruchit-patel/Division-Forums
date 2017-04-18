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
    $des = mysqli_real_escape_string($conn,$_POST['des']);
  //$nm=$_POST['name'];
  //$cat=$_POST['category'];
  //$des=$_POST['des'];


  $sql = "INSERT INTO Talents values ('$nm','$cat','$des')";

  if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
       header("location: main.html");
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);

?>

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
    $majttrmin = mysqli_real_escape_string($conn,$_POST['majmin']);
    $majttrmax = mysqli_real_escape_string($conn,$_POST['majmax']);
    $strangemin = mysqli_real_escape_string($conn,$_POST['stsmin']);
    $strangemax = mysqli_real_escape_string($conn,$_POST['stsmax']);
    $modid = mysqli_real_escape_string($conn,$_POST['mod_id']);

  $sql = "INSERT INTO gearSkillsMod values ('$majttrmin','$majttrmax','$strangemin','$strangemax','$modid')";


  if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
       header("location: gear_skill_mod.html");
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);

?>

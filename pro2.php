<?php

  // $nm=$_POST['name'];
  $desc=$_POST['desc'];
  $mods=$_POST['mods'];
  $skill_id=$_POST['skill_id']
  $servername = "localhost";
  $username = "root";
  $password = "admin";
  $dbname = "division";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "INSERT INTO Medical(Description,Modification,Skill_id) values ('$desc','$mods','$skill_id')";

  if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
       header("location: main2.php");
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);

?>

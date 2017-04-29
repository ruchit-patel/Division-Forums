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
    $unm = mysqli_real_escape_string($conn,$_POST['unm']);
    $pass = mysqli_real_escape_string($conn,$_POST['pass1']);
    $fname = mysqli_real_escape_string($conn,$_POST['fname']);

  $sql = "INSERT INTO Account (Acc_Name, Password,Full_Name) values('$unm',SHA1('$pass'),'$fname')";

  if (mysqli_query($conn, $sql)) {
    session_start();
    $_SESSION['name']==$unm;
       header("location: ../home.php");
  }
   else {
      echo "".mysqli_error($conns);
  }

  mysqli_close($conn);

?>

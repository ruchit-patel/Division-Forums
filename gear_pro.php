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
$id=mysqli_real_escape_string($conn,$_POST['id']);
$type=mysqli_real_escape_string($conn,$_POST['type']);
$mnst=mysqli_real_escape_string($conn,$_POST['msq']);
$noma1=mysqli_real_escape_string($conn,$_POST['noma1']);
$noma2=mysqli_real_escape_string($conn,$_POST['noma2']);
$secstat=mysqli_real_escape_string($conn,$_POST['secnst']);
$mnstmin=mysqli_real_escape_string($conn,$_POST['mnstmin']);
$mnstmax=mysqli_real_escape_string($conn,$_POST['mnstmax']);
$natarmmin=mysqli_real_escape_string($conn,$_POST['natarmmin']);
$natarmmax=mysqli_real_escape_string($conn,$_POST['natarmmax']);

$sql = "INSERT INTO gearMain values ('$id','$type','$mnst','$noma1','$noma2','$secstat','$mnstmin','$mnstmax','$natarmmin','$natarmmax')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
     header("location: gear_ins.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>

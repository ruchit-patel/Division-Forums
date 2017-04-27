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
$id=mysqli_real_escape_string($conn,$_POST['gear_id']);

$dvemin=mysqli_real_escape_string($conn,$_POST['dvemin']);
$dvemax=mysqli_real_escape_string($conn,$_POST['dvemax']);

$shock_min=mysqli_real_escape_string($conn,$_POST['shock_min']);
$shock_max=mysqli_real_escape_string($conn,$_POST['shock_max']);

$burn_res_min=mysqli_real_escape_string($conn,$_POST['burn_res_min']);
$burn_res_max=mysqli_real_escape_string($conn,$_POST['burn_res_max']);

$dermin=mysqli_real_escape_string($conn,$_POST['dermin']);
$dermax=mysqli_real_escape_string($conn,$_POST['dermax']);

$bdres_min=mysqli_real_escape_string($conn,$_POST['b/dres_min']);
$bdres_max=mysqli_real_escape_string($conn,$_POST['b/dres_max']);

$disrupt_min=mysqli_real_escape_string($conn,$_POST['disrupt_min']);
$disrupt_max=mysqli_real_escape_string($conn,$_POST['disrupt_max']);

$bleedresmin=mysqli_real_escape_string($conn,$_POST['bleedresmin']);
$bleedresmax=mysqli_real_escape_string($conn,$_POST['bleedresmax']);

$killxpmin=mysqli_real_escape_string($conn,$_POST['killxpmin']);
$killxpmax=mysqli_real_escape_string($conn,$_POST['killxpmax']);

$sql = "INSERT INTO Minor_Attr (Dmg_vs_ElitesMin, Dmg_vs_ElitesMax, Shock_resMin , Shock_resMax,Burn_resMin ,Burn_resMax, Disorient_resMin, Disorient_resMax,Blind_Deaf_resMin ,Blind_Deaf_resMax,Disrupt_resMin ,Disrupt_resMax,Bleed_resMin ,Bleed_resMax,Kill_xpMin,Kill_xpMax,gear_id)values ($dvemin','$dvemax','$shock_min','$shock_max','$burn_res_min','$burn_res_max','$dermin','$dermax','$bdres_min','$bdres_max','$disrupt_min','$disrupt_max','$bleedresmin','$bleedresmax','$killxpmin','$killxpmax','$id')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
     header("location: gear_minor.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>

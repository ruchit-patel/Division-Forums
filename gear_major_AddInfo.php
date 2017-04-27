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
$sigresmin=mysqli_real_escape_string($conn,$_POST['signature_resource_gain_min']);
$sigresmax=mysqli_real_escape_string($conn,$_POST['signature_resource_gain_max']);

$weprpmin=mysqli_real_escape_string($conn,$_POST['weapon_reload_speed_min']);
$weprpmax=mysqli_real_escape_string($conn,$_POST['weapon_reload_speed_max']);

$wepstabmin=mysqli_real_escape_string($conn,$_POST['weapon_stability_min']);
$wepstabmax=mysqli_real_escape_string($conn,$_POST['weapon_stability_max']);

$skhstmin=mysqli_real_escape_string($conn,$_POST['skill_haste_min']);
$skhstmax=mysqli_real_escape_string($conn,$_POST['skill_haste_max']);

$ardmgmin=mysqli_real_escape_string($conn,$_POST['assault_rifle_damage_min']);
$ardmgmax=mysqli_real_escape_string($conn,$_POST['assault_rifle_damage_max']);

$smgdmgmin=mysqli_real_escape_string($conn,$_POST['smg_damage_min']);
$smgdmgmax=mysqli_real_escape_string($conn,$_POST['smg_damage_max']);

$critdmgmin=mysqli_real_escape_string($conn,$_POST['crit_damage_min']);
$critdmgmax=mysqli_real_escape_string($conn,$_POST['crit_damage_max']);

$critchancemin=mysqli_real_escape_string($conn,$_POST['crit_chance_min']);
$critchancemax=mysqli_real_escape_string($conn,$_POST['crit_chance_max']);

$edrmin=mysqli_real_escape_string($conn,$_POST['exotic_damage_resilience_min']);
$edrmax=mysqli_real_escape_string($conn,$_POST['exotic_damage_resilience_max']);

$allresmin=mysqli_real_escape_string($conn,$_POST['all_status_res_min']);
$allresmax=mysqli_real_escape_string($conn,$_POST['all_status_res_max']);

$hpkillmin=mysqli_real_escape_string($conn,$_POST['hp_on_kill_min']);
$hpkillmax=mysqli_real_escape_string($conn,$_POST['hp_on_kill_max']);

$lmgdmgmin=mysqli_real_escape_string($conn,$_POST['lmg_damage_min']);
$lmgdmgmax=mysqli_real_escape_string($conn,$_POST['lmg_damage_max']);

$healthmin=mysqli_real_escape_string($conn,$_POST['health_min']);
$healthmax=mysqli_real_escape_string($conn,$_POST['health_max']);

$shotgundmgmin=mysqli_real_escape_string($conn,$_POST['shotgun_damage_min']);
$shotgundmgmax=mysqli_real_escape_string($conn,$_POST['shotgun_damage_max']);

$enmyarmmin=mysqli_real_escape_string($conn,$_POST['enemy_armor_damage_min']);
$enmyarmmax=mysqli_real_escape_string($conn,$_POST['enemy_armor_damage_max']);

$pistoldmgmin=mysqli_real_escape_string($conn,$_POST['pistol_damage_min']);
$pistoldmgmax=mysqli_real_escape_string($conn,$_POST['pistol_damage_max']);

$sniperdmgmin=mysqli_real_escape_string($conn,$_POST['sniper_rifle_damage_min']);
$sniperdmgmax=mysqli_real_escape_string($conn,$_POST['sniper_rifle_damage_max']);

$skillpowermin=mysqli_real_escape_string($conn,$_POST['skill_power_min']);
$skillpowermax=mysqli_real_escape_string($conn,$_POST['skill_power_max']);

$id=mysqli_real_escape_string($conn,$_POST['gear_id']);

$sql = "INSERT INTO Major_Attr values ('$sigresmin','$sigresmax','$weprpmin','$weprpmax','$wepstabmin','$wepstabmax','$skhstmin','$skhstmax','$ardmgmin','$ardmgmax','$smgdmgmin','$smgdmgmax','$critdmgmin','$critdmgmax','$critchancemin','$critchancemax','$edrmin','$edrmax','$allresmin','$allresmax','$hpkillmin','$hpkillmax','$lmgdmgmin','$lmgdmgmax','$healthmin','$healthmax','$shotgundmgmin','$shotgundmgmax','$enmyarmmin','$enmyarmmax','$pistoldmgmin','$pistoldmgmax','$sniperdmgmin','$sniperdmgmax','$skillpowermin','$skillpowermax','$id')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
     header("location: gear_major_AddInfo.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>

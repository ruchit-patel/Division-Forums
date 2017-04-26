<?php
include 'select.php';
 ?>
<div class="row">
  <div class="col-md-3">
  </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-block">
<?php
if($_SERVER['REQUEST_METHOD']=="GET"){
  if($_GET['table']=="Medical"){
      echo "<h1><center>Medical Table</h1></center>";
echo '<br><br><form action="techpro.php" method="post">
  Description:<input type="text" name="des" required><br><br>
  Modifiaction: <input type="text" name="mod" required><br><br>
  ID: <input type="text" name="id"><br><br>
  <input type="submit">';
}
elseif ($_GET['table']=="News") {
  echo "<h1><center>News Table</h1></center>";
  echo '<br><br><form action="techpro.php" method="post">
    News Content :<br> <textarea name="comment" rows="5" cols="40"></textarea><br><br>
    <input type="submit">';
}
elseif ($_GET['table']=="Perks") {
    echo "<h1><center>Perks Table</h1></center>";
  echo '<br><br><form action="techpro.php" method="post">
  Name: <input type="text" name="des" required><br><br>
    Category: <input type="text" name="mod" required><br><br>
    Description: <input type="text" name="id" required ><br><br>
    <input type="submit">';
}
elseif ($_GET['table']=="Security") {
    echo "<h1><center>Security Table</h1></center>";
  echo '<br><br><form action="techpro.php" method="post">
    Description:<input type="text" name="des" required><br><br>
    Modifiaction: <input type="text" name="mod" required><br><br>
    Skill ID: <input type="text" name="id" required><br><br>
    <input type="submit">';
}
elseif ($_GET['table']=="Skills") {
    echo "<h1><center>Skills Table</h1></center>";
  echo '<br><br><form action="techpro.php" method="post">
    Skill Id:<input type="text" name="id" required><br><br>
    Name: <input type="text" name="name" required><br><br>
    <label for="sel2"> Category Type: </label>
     <select  id="sel1" name="cat_type">
    <option selected disabled>Choose here</option>
    <option>Medical</option>
    <option>Technical</option>
    <option>Security</option>
    <select><br><br>
    <input type="submit">';
}
elseif ($_GET['table']=="Talents") {
    echo "<h1><center>Talents Table</h1></center>";
  echo '<br><br><form action="techpro.php" method="post">
    Name :<input type="text" name="name" required><br><br>
    <label for="sel3"> Category Type: </label>
     <select  id="sel3" name="cat_type">
    <option selected disabled>Choose here</option>
    <option>Medical Talents</option>
    <option>Tech Talents</option>
    <option>Security Talents</option>
    <select><br><br>
    Description:<br><br><textarea name="comment" rows="5" cols="40"></textarea><br><br>
    <input type="submit">';
}
elseif ($_GET['table']=="Technical") {
    echo "<h1><center>Technical Table</h1></center>";
  echo '<br><br><form action="techpro.php" method="post">
    Description:<input type="text" name="des" required><br><br>
    Modifiaction: <input type="text" name="mod" required><br><br>
    Skill ID: <input type="text" name="id"><br><br>
    <input type="submit">';
}

elseif ($_GET['table']=="wepBns") {
    echo "<h1><center>Weapon Bonus Table</h1></center>";
  echo '<br><br><form action="techpro.php" method="post">
    Weapon Id:<input type="text" name="wepid" required><br><br>
    Weapon Bonus Type:<input type="text" name="" required><br><br>
    Weapon Bonus Max:<input type="text" name="wepid" required><br><br>
    Weapon Bonus Min:<input type="text" name="wepid" required><br><br>
    <input type="submit">';
}
elseif ($_GET['table']=="wepMain") {
    echo "<h1><center>Weapon Main Table</h1></center>";
  echo '<br><br><form action="techpro.php" method="post">
    Weapon Id:<input type="text" name="wepid" required><br><br>
    Weapon Name: <input type="text" name="wepname" required><br><br>
    Weapon Variants: <input type="text" name="varinats" required><br><br>
    Weapon Info: <input type="text" name=""><br><br>
    Weapon Image: <input type="text" name=""><br><br>
    Weapon Real World Info: <input type="text" name=""><br><br>

    <input type="submit">';
}
elseif ($_GET['table']=="wepStats") {
    echo "<h1><center>Weapon Stats Table</h1></center>";
  echo '<br><br><form action="techpro.php" method="post">
    Weapon Id:<input type="text" name="" required><br><br>
    Weapon Type: <input type="text" name="" required><br><br>
    Weapon RPM: <input type="text" name="" required><br><br>
    Weapon Magazine Size: <input type="text" name="" required><br><br>
    Weapon Range: <input type="text" name="" required><br><br>
    Weapon Reload Speed: <input type="text" name="" required><br><br>
    Weapon Head Shot Damage Multiplier: <input type="text" name="" required><br><br>
    <input type="submit">';
}
}




  ?>
</form></div></div></div>
  <div class="col-md-3"></div>
</div>


?>

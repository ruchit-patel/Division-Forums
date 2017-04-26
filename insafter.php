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
if ($_GET['table']=="News") {
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
    <input type="submit"></form>';
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


elseif ($_GET['table']=="Weapons") {
    echo "<h1><center>Weapon Bonus Table</h1></center>";
  echo '<br><br><form method="post" action="FinalScripts/weaponsprocess.php">
            Wep ID: <input type="text" name="wid"><br><br>
            Name: <input type="text" name="wname"><br><br>
            Varients: <input type="text" name="wvar"><br><br>
            Info: <textarea rows="4" cols="50" name="winfo"></textarea><br><br>
            Real World: <textarea rows="4" cols="50" name="wrw"></textarea><br><br>
            Img: <input type="text" name="wimg"><br><br>
            Type: <input type="text" name="wtyp"><br><br>
            RPM: <input type="text" name="wrpm"><br><br>
            Mag Size: <input type="text" name="wmgsi"><br><br>
            Range: <input type="text" name="wrng"><br><br>
            Reload: <input type="text" name="wrld"><br><br>
            Headshot Bonus: <input type="text" name="whsd"><br><br>
            Bonus Type: <input type="text" name="wbnstyp"><br><br>
            Bonus min: <input type="text" name="wbnsmin"><br><br>
            Bonus max: <input type="text" name="wbnsmax"><br><br>
            <input type="Submit">
        </form>';
}


}




  ?>
</form></div></div></div>
  <div class="col-md-3"></div>
</div>


?>

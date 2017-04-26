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
    News Content : <textarea name="comment" rows="5" cols="40"></textarea><br><br>
    <input type="submit">';
}
elseif ($_GET['table']=="Perks") {
    echo "<h1><center>Perks Table</h1></center>";
  echo '<br><br><form action="techpro.php" method="post">
    Description:<input type="text" name="des" required><br><br>
    Modifiaction: <input type="text" name="mod" required><br><br>
    ID: <input type="text" name="id"><br><br>
    <input type="submit">';
}
elseif ($_GET['table']=="Security") {
    echo "<h1><center>Security Table</h1></center>";
  echo '<br><br><form action="techpro.php" method="post">
    Description:<input type="text" name="des" required><br><br>
    Modifiaction: <input type="text" name="mod" required><br><br>
    ID: <input type="text" name="id"><br><br>
    <input type="submit">';
}
elseif ($_GET['table']=="Skills") {
    echo "<h1><center>Skills Table</h1></center>";
  echo '<br><br><form action="techpro.php" method="post">
    Description:<input type="text" name="des" required><br><br>
    Modifiaction: <input type="text" name="mod" required><br><br>
    ID: <input type="text" name="id"><br><br>
    <input type="submit">';
}
elseif ($_GET['table']=="Talents") {
    echo "<h1><center>Talents Table</h1></center>";
  echo '<br><br><form action="techpro.php" method="post">
    Description:<input type="text" name="des" required><br><br>
    Modifiaction: <input type="text" name="mod" required><br><br>
    ID: <input type="text" name="id"><br><br>
    <input type="submit">';
}
elseif ($_GET['table']=="Technical") {
    echo "<h1><center>Technical Table</h1></center>";
  echo '<br><br><form action="techpro.php" method="post">
    Description:<input type="text" name="des" required><br><br>
    Modifiaction: <input type="text" name="mod" required><br><br>
    ID: <input type="text" name="id"><br><br>
    <input type="submit">';
}

elseif ($_GET['table']=="wepBns") {
    echo "<h1><center>Weapon Bonus Table</h1></center>";
  echo '<br><br><form action="techpro.php" method="post">
    Description:<input type="text" name="des" required><br><br>
    Modifiaction: <input type="text" name="mod" required><br><br>
    ID: <input type="text" name="id"><br><br>
    <input type="submit">';
}
elseif ($_GET['table']=="wepMain") {
    echo "<h1><center>Weapon Main Table</h1></center>";
  echo '<br><br><form action="techpro.php" method="post">
    Description:<input type="text" name="des" required><br><br>
    Modifiaction: <input type="text" name="mod" required><br><br>
    ID: <input type="text" name="id"><br><br>
    <input type="submit">';
}
elseif ($_GET['table']=="wepStats") {
    echo "<h1><center>Weapon Stats Table</h1></center>";
  echo '<br><br><form action="techpro.php" method="post">
    Description stats:<input type="text" name="des" required><br><br>
    Modifiaction: <input type="text" name="mod" required><br><br>
    ID: <input type="text" name="id"><br><br>
    <input type="submit">';
}
}




  ?>
</form></div></div></div>
  <div class="col-md-3"></div>
</div>


?>

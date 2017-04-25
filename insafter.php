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
echo '<br><br><form action="techpro.php" method="post">
  Description:<input type="text" name="des" required><br><br>
  Modifiaction: <input type="text" name="mod" required><br><br>
  ID: <input type="text" name="id"><br><br>
  <input type="submit">';
}
elseif ($_GET['table']=="News") {
  echo '<br><br><form action="techpro.php" method="post">
    Description:<input type="text" name="des" required><br><br>
    Modifiaction: <input type="text" name="mod" required><br><br>
    ID: <input type="text" name="id"><br><br>
    <input type="submit">';
}
elseif ($_GET['table']=="Perks") {
  echo '<br><br><form action="techpro.php" method="post">
    Description:<input type="text" name="des" required><br><br>
    Modifiaction: <input type="text" name="mod" required><br><br>
    ID: <input type="text" name="id"><br><br>
    <input type="submit">';
}
elseif ($_GET['table']=="Security") {
  echo '<br><br><form action="techpro.php" method="post">
    Description:<input type="text" name="des" required><br><br>
    Modifiaction: <input type="text" name="mod" required><br><br>
    ID: <input type="text" name="id"><br><br>
    <input type="submit">';
}
elseif ($_GET['table']=="Skills") {
  echo '<br><br><form action="techpro.php" method="post">
    Description:<input type="text" name="des" required><br><br>
    Modifiaction: <input type="text" name="mod" required><br><br>
    ID: <input type="text" name="id"><br><br>
    <input type="submit">';
}
elseif ($_GET['table']=="Talents") {
  echo '<br><br><form action="techpro.php" method="post">
    Description:<input type="text" name="des" required><br><br>
    Modifiaction: <input type="text" name="mod" required><br><br>
    ID: <input type="text" name="id"><br><br>
    <input type="submit">';
}
elseif ($_GET['table']=="Technical") {
  echo '<br><br><form action="techpro.php" method="post">
    Description:<input type="text" name="des" required><br><br>
    Modifiaction: <input type="text" name="mod" required><br><br>
    ID: <input type="text" name="id"><br><br>
    <input type="submit">';
}

elseif ($_GET['table']=="wepBns") {
  echo '<br><br><form action="techpro.php" method="post">
    Description:<input type="text" name="des" required><br><br>
    Modifiaction: <input type="text" name="mod" required><br><br>
    ID: <input type="text" name="id"><br><br>
    <input type="submit">';
}
elseif ($_GET['table']=="wepMain") {
  echo '<br><br><form action="techpro.php" method="post">
    Description:<input type="text" name="des" required><br><br>
    Modifiaction: <input type="text" name="mod" required><br><br>
    ID: <input type="text" name="id"><br><br>
    <input type="submit">';
}
elseif ($_GET['table']=="wepStats") {
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

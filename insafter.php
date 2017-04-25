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
echo "<form action="techpro.php" method="post">
  Description:<input type="text" name="des" required><br><br>
  Modifiaction: <input type="text" name="mod" required><br><br>
  ID: <input type="text" name="id"><br><br>
  <input type="submit">";?>
</form></div></div></div>
  <div class="col-md-3"></div>
</div>


?>

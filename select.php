<html>
<head>
  <title>
    Insert into the table
  </title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="CSS\wep.css">
  </head>
<body class="parallax1">
      <div class="wrapper">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-block">
          <center><p class="crd-h1">Select The name of the table</p></center>
          <div class="container">
            <div class="dropdown"><form action="select.php" method="get">

                    <select  id="sel1" name="table">
                      <?php
                      include 'tabinfo.php';
                      ?>
                    </select><br><br>
                <input type="submit"></form>
                <?php
                  if($_SERVER['REQUEST_METHOD']=="GET"){
                    if($_GET['table']=="Medical"){
                      echo "<form> <label for="sel1">Select list (select one):</label><br> Description: <input type="text"><br> Modification :<input type="text"><br>Skill Id: <input type="text"> <br><submit></form>";
                    }
                  }
                 ?>
            </div>
        </div>
      </div>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>
</body>
<html>

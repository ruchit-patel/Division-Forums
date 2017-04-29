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
  <link rel="stylesheet" type="text/css" href="CSS\navbar.css">
  </head>
<body class="parallax1">
  <?php
  //echo "$_SESSION['previ']";
  session_start();
  echo $_SESSION['role'];
  if($_SESSION['role']=="admin")
  {
    include 'nav.html';
  }
  else if($_SESSION['role']=="NULL"){
    include 'nav1.html';
  }
  else {
    header("location: login/index.php");
  }
   ?>
      <div class="wrapper">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-block">
          <center><p class="crd-h1">Select The name of the table</p></center>
          <div class="container">
            <div class="dropdown"><form action="insafter.php" method="get">

                    <select  id="sel1" name="table">
                      <option selected disabled>Choose here</option>
                      <?php
                      include 'tabinfo.php';
                      ?>
                    </select><br><br>
                <input type="submit"></form>
            </div>
        </div>
      </div>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>
</body>
<html>

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
            <div class="dropdown"><form action="insafter.php" method="get">
          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select Table
                  <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <?php
                      include 'tabinfo.php';
                      ?>
                    </ul>
                </div>
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

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title> Login/Sign Up Form</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" type="text/css" href="CSS\navbar.css">


</head>

<body>
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
   ?>
<br><br><br><br>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form action="login.php" method="post">
      <div class="input-container">
        <input type="text" id="#{label}" name="uname" required="required"/>
        <label for="#{label}">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="#{label}" name="pass" required="required"/>
        <label for="#{label}">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button type="submit"><span>Go</span></button>
      </div>
    </form>
  </div>
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Register
      <div class="close"></div>
    </h1>
    <form action="signup.php" method="post">
      <div class="input-container">
        <input type="text" id="#{label}" Name="unm12" required="required"/>
        <label for="#{label}">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="#{label}" Name="pass1" required="required"/>
        <label for="#{label}">Password</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="text" id="#{label}" name="fname" required="required"/>
        <label for="#{label}">Full Name</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button type="submit"><span>Next</span></button>
      </div>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="index.js"></script>

</body>
</html>

<html>
<head>
<title>
Login/SignUp
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

  <div class="w3-container">
    <h2>Click the button below!</h2>
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Open Modal</button>

    <div id="id01" class="w3-modal">
      <div class="w3-modal-content">
        <div class="w3-container">
          <?php
          include 'login/index.html';
          ?>



          </div>
        </div>
      </div>
    </div>


</body>
</html>

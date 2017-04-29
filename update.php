<html>
    <head>   
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="CSS\wep.css">
        <style>
            .card{
                min-height: 155px;
            }
        </style>
    </head>
    <body class="parallax1">
        <div class="wrapper">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="card">
                        <div class="card-block">
                            <p class="crd-h1">Select The name of the table</p>
                            <div class="container">
                               <div class="dropdown">
                                   <form action="updater.php" method="get">
                                       <select  id="sel1" name="table">
                                             <option selected disabled>Choose here</option>
                                             <?php
                                                require 'tabinfo.php';
                                             ?>
                                        </select><br><br>
                                        <input type="submit">
                                   </form>
                                 </div>
                            </div>
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
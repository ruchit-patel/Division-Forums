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
                <div class="col-md-6 col-md-offset-1">
                    <div class="card">
                        <div class="card-block">
                            <p class="crd-h1">WEAPONS</p>
                                <p>Weapons in Tom Clancy's The Division are separated into 6 unique classes. They are:</p>
                                <ul>
                                    <li><a href="#">Shotguns</a></li>
                                    <li><a href="#">Submachine Guns</a></li>
                                    <li><a href="#">Assault Rifles</a></li>
                                    <li><a href="#">Marksman Rifles</a></li>
                                    <li><a href="#">Light Machine Guns</a></li>
                                    <li><a href="#">Sidearms</a></li>
                                </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div card="card">
                        <img src="Images\WepImgs\wepTypes.png" width="100%">
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:15px;">
                <div class="col-md-10 col-md-offset-1">
                    <div class="card">
                        <div class="card-block">
                             <p>Players are able to customize their weapons to make them unique and personal to their agent. Guns can be customized with a variety of attachments which are referred to as modifications, such as scopes, grips, sights, magazines, muzzle attachments and weapon skins. Weapons also have a different rarity, Such as:</p>
                                <ul>
                                    <li><l style="color: #9E9E9E;">Worn</l></li>
                                    <li><l style="color: #8BC34A;">Standard</l></li>
                                    <li><l style="color: #1E88E5;">Specialized</l></li>
                                    <li><l style="color: #9C27B0;">Superior</l></li>
                                    <li><l style="color: #FFD600;">High-end</l></li>
                                    <li><l style="color: #D32F2F;">Exotic</l></li> 
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:15px;">
                <div class="col-md-10 col-md-offset-1">
                    <div class="card">
                        <div class="card-block">
                             <?php
                                include 'dispWep.php';
                             ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
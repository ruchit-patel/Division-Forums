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
                            <p class="crd-h1">Shotguns</p>
                            <p>Shotguns are best used for combating enemies at close range, where their buckshot spread can hit the target effectively. Shotguns fire a variety of shells, most common types are buckshot and slugs.</p>
                            <p>Shotguns are categorized into either: Pump-action, semi-automatic, or automatic.</p>
                            <p>The M870 is the only pump-action shotgun, having high damage at a cost of a slow rate of fire and slow reload speed. The SASG-12 is a semi-automatic shotgun, having a high rate of fire, and fast reload speed, at a cost of moderate damage. The Showstopper is the only automatic shotgun, having a high rate of rate of fire at a cost of low stability and damage.Shotguns have a bonus talent of increased stagger towards enemies. When an NPC gets hit by a shotgun, they will have an increased chance to stagger, making them unable to fire, and expose themselves for a short time. When using it in the Dark Zone against players, their aim will flinch, making their reticle sway off target.</p>
                            <p>The Shotguns in Tom Clancy's The Division are:</p>
                             <?php
                                require 'FinalScripts/dispShot.php';
                             ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:15px;">
                <div class="col-md-10 col-md-offset-1">
                    <div class="card">
                        <div class="card-block">
                            <p class="crd-h1">Assault Rifles</p>
                            <p>Assault rifles fall intermediately in accuracy, range, rates of fire, and firepower. Assault rifles are selective fire, which can contribute to overall accuracy and marksmanship skills from a Marksman Rifles adapted onto this class of weapon.</p>
                            <p>Assault rifles tend to be mid-range, full-automatic weapons, with some limited exceptions. Compared to SMGs, assault rifles tend to have a smaller bullet spread, stronger recoil, and longer optimal range. Additionally, all assault rifles have an innate headshot damage bonus of +75%, compared to +50% on most other weapons.</p>
                            <p>Assault Rifles have a in-class bonus of 17.5-24% Enemy Armor Damage, increasing damage towards enemies having armor.</p>
                            <p>The Assualt Rifles in Tom Clancy's The Division are:</p>
                             <?php
                                require 'FinalScripts/dispAR.php';
                             ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
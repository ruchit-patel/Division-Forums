<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="CSS\wep.css">
        <link rel="stylesheet" type="text/css" href="CSS\navbar.css">
        <style>
            .card{
                min-height: 155px;
            }
        </style>
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
                <div class="col-md-6 col-md-offset-1">
                    <div class="card">
                        <div class="card-block">
                            <p class="crd-h1">WEAPONS</p>
                                <p>Weapons in Tom Clancy's The Division are separated into 6 unique classes. They are:</p>
                                <ul>
                                    <li><a href="#Shot" style="color: #ff8f00;">Shotguns</a></li>
                                    <li><a href="#SMG" style="color: #ff8f00;">Submachine Guns</a></li>
                                    <li><a href="#AR" style="color: #ff8f00;">Assault Rifles</a></li>
                                    <li><a href="#MMR" style="color: #ff8f00;">Marksman Rifles</a></li>
                                    <li><a href="#LMG" style="color: #ff8f00;">Light Machine Guns</a></li>
                                    <li><a href="#Side" style="color: #ff8f00;">Sidearms</a></li>
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
            <span class="anchor" id="Shot"></span>
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
                             <div id="AR"></div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="anchor" id="AR"></span>
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
                             <div id="LMG"></div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="anchor" id="LMG"></span>
            <div class="row" style="margin-top:15px;">
                <div class="col-md-10 col-md-offset-1">
                    <div class="card">
                        <div class="card-block">
                            <p class="crd-h1">Light Machine Guns</p>
                            <p>Light Machine Guns are intended to be use at a mid-long range, supporting other players with accurate fire. LMGs have an increased suppression value, able to keep enemies in cover and unable to attack or deploy abilities.
                                LMGs are quite hard to handle when out of cover, having low accuracy and stability. However, prolong amounts firing will increase accuracy and stability to almost the maximum possible.</p>
                            <p>LMGs can be divided into two categories: belt-fed, and magazine fed.The belt-fed weapons have large magazines, high damage and decent rate of fire, but suffers from longer reload times.Magazine fed weapons have a higher rate of fire, but at a cost of a lower magazine size and lower damage.Light Machine Guns have a in-class bonus of bonus damage to enemies out of cover, increasing damage towards enemies that are not taking cover.</p>
                            <p>Assault Rifles have a in-class bonus of 17.5-24% Enemy Armor Damage, increasing damage towards enemies having armor.</p>
                            <p>The Light Machine Gun in Tom Clancy's The Division are:</p>
                             <?php
                                require 'FinalScripts/dispLMG.php';
                             ?>
                             <div id="MMR"></div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="anchor" id="MMR"></span>
            <div class="row" style="margin-top:15px;">
                <div class="col-md-10 col-md-offset-1">
                    <div class="card">
                        <div class="card-block">
                            <p class="crd-h1">Marksman Rifles</p>
                            <p>Marksman Rifles are separated into two types: bolt-action and semi-automatic. Bolt-Action rifles have a slower rate of fire, but have much higher damage. Semi-Automatic MMRs on the other hand have a faster rate of fire at the cost of damage.Marksman Rifles are accurate, but only from a stationary position. If the player moves, the reticle will bloom to almost max. When aiming the weapon, the reticle takes time to achieve maximum accuracy.In Tom Clancy's The Division, Marksman Rifles do a base +110% damage on headshots. In addition Marksman Rifles gain an additional 140-170% extra Headshot Damage as a bonus.</p>
                            <p>The Marksman Rifles in Tom Clancy's The Division are:</p>
                             <?php
                                require 'FinalScripts/dispMMR.php';
                             ?>
                             <div id="SMG"></div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="anchor" id="SMG"></span>
            <div class="row" style="margin-top:15px;">
                <div class="col-md-10 col-md-offset-1">
                    <div class="card">
                        <div class="card-block">
                            <p class="crd-h1">Submachine Guns</p>
                            <p>Submachine Guns are used for close-range engagements, where their high rate of fire would outperform other weapons. They are also easy to handle due to light recoil and high stability.Submachine guns are high rate of fire, low damage weapons. They have rather low range, but have rather good handling traits.SMGs also have a in-class bonus of increased Critical Hit Chance, increasing chances to land critical hits and deal more damage towards enemies.</p>
                            <p>The Submachine Guns in Tom Clancy's The Division are:</p>
                             <?php
                                require 'FinalScripts/dispSMG.php';
                             ?>
                             <div id="side"></div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="anchor" id="Side"></span>
            <div class="row" style="margin-top:15px;">
                <div class="col-md-10 col-md-offset-1">
                    <div class="card">
                        <div class="card-block">
                            <p class="crd-h1">Sidearms</p>
                            <p>Pistols are short range weapons, and have a lower damage range compared to primary weapons. The weapons differ from their rate of fire, damage, and handling traits. One of the advantages of pistols is that is has unlimited ammo supply.</p>
                            <p>Each pistol will come with two talents, with the second talent being rolled with Expert, increasing damage towards enemies at low health.</p>
                            <p>The Sidearms Guns in Tom Clancy's The Division are:</p>
                             <?php
                                require 'FinalScripts/dispSide.php';
                             ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

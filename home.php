<!DOCTYPE html>
<html lang="en">

<head>
  <title>I.S.A.C's Data Warehouse</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS\home.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="CSS\mods.css">
  <link rel="stylesheet" type="text/css" href="CSS\navbar.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--For font awesome-->
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>

</head>

<body style="background-color:black;">
  <?php
  echo "$_SESSION['previ']";
  if($_SESSION['previ']=="admin")
  {
    include 'nav.html';
  }
  else {
    include 'nav1.html';
  }
   ?>
  <br><br>
  <div class="row">
    <br><br><br>
    <div class="col-md-1"></div>
    <div class="col-md-7">


        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">

          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>


          <div class="carousel-inner">
            <div class="item active">

              <img src="Images/Homepage_Images/slideshow_1.jpg" alt="Los Angeles" style="width:100%;">

            </div>

            <div class="item">
              <img src="Images/Homepage_Images/slideshow_2.jpg" alt="Chicago" style="width:100%;">
            </div>

            <div class="item">
              <img src="Images/Homepage_Images/slideshow_3.jpg" alt="New york" style="width:100%;">
            </div>

            <!--div class="item">
              <iframe  width="850" height="450" src="https://www.youtube.com/embed/NjqKMhx1k5w?rel=0" frameborder="0" allowfullscreen></iframe>
            </div-->
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      <!--/div-->
    </div>

  <!--/div-->
  <div class="col-md-1"></div>


  <div class="col-md-2">

          <div class="card" style="height:470px; width:300px; margin-left:-75px; ">

          <div class="card-block">

            <p class="crd-h1" style="font-size:30px;">News</p>
              <font size="5">

              <marquee direction="up" scrollamount="3" loop="true" height=400px onmouseover="this.stop();" onmouseout="this.start();">
			  <!--content of General Info -->
			  <a href="https://tomclancy-thedivision.ubisoft.com/game/en-US/news/152-259002-16/new-activity-for-our-season-pass-owners">We come to you today with news on a topic that has generated a lot of discussion in the community: the “monthly events for Season Pass owners”. </a> <br>
			  <a href="https://tomclancy-thedivision.ubisoft.com/game/en-US/news/152-256996-16/state-of-the-game-june-28th-2016"> Underground is now available for Xbox One and PC players. If you haven’t already, make sure you download the patch and let us know what you think! </a> <br>
			  <a href="https://tomclancy-thedivision.ubisoft.com/game/en-US/news/152-254806-16/state-of-the-game-june-9th-2016"> Challenge Mode Clear Sky is now available! Grab your friends, organize your group, and get at it! </a> <br>
			  <a href="https://tomclancy-thedivision.ubisoft.com/game/en-US/news/152-252565-16/state-of-the-game-may-24th-2016"> We are extremely happy to get the update out there and can’t wait to hear what you think of it! </a> <br>
			  <a href="https://tomclancy-thedivision.ubisoft.com/game/en-US/news/152-288024-16/introducing-agent-highlights"> It's our pleasure to introduce you to the Agent Highlights – a community focused article series to celebrate all kinds of content made by you. </a>
      </marquee>
              </font>
		          </div>
              </div>


  </div>
  <div class="col-md-1"></div>
  </div>

  <div class="row">
    <br><br><br><br><br>
  </div>






  <div class="wrapper">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="card" style="min-height:250px;">
          <div class="card-block">

            <p class="crd-h1" style="font-size:30px;">General Info</p>
            <font size="5">
              <!--content of General Info -->
            </font>
          </div>
        </div>
      </div>

      <div class="col-md-1">
        <!--leaving one col from the right-->

      </div>



    </div>
  </div>
  <!--General info card ends here-->

  <div class="row">
    <br><br><br><br><br>
  </div>

  <div class="wrapper">
    <div class="row">


      <div class="col-md-5 col-md-offset-1">
        <div class="card" style="min-height:600px;">
          <img src="Images\Homepage_Images\wep.jpg" width="100%" style="min-height:310px;">

          <div class="card-block">

            <p class="crd-h1" style="font-size:30px;">Weapon</p>
            <font size="5">
              <!--content of Weapon -->
              <!--img src="Images\Homepage_Images\wep.jpg" class="w3-circle" width="100%">
							<!--info-->Players are able to customize their weapons to make them unique and personal to their agent. Guns can be customized with a variety of attachments which are referred to as modifications, such as scopes, grips, sights, magazines, muzzle attachments
              and weapon skins. Weapons also have a different rarity.
            </font>
          </div>


          <div class="row" style="background-color:black;"> <br> <br> <br> </div>

          <img src="Images\Homepage_Images\gear.jpg" width="100%" style="min-height:310px;">


          <div class="card-block">

            <p class="crd-h1" style="font-size:30px;">Gear</p>
            <font size="5">
              <!--content of Weapon -->
              <!--img src="Images\Homepage_Images\gear.jpg" class="w3-circle" width="100%">
							<!--info-->In Tom Clancy's The Division, agents can wear various types of gear that improve their abilities and stats and change their appearance.
            </font>
          </div>

        </div>
      </div>

      <div class="col-md-5 col-md-offset-0">
        <div class="card" style="min-height:250px;">

          <img src="Images\Homepage_Images\skills.jpg" width="100%" style="min-height:310px;">

          <div class="card-block">

            <p class="crd-h1" style="font-size:30px;">Skill</p>
            <font size="5">
              <!--content of Weapon -->
              <!--img src="Images\Homepage_Images\skills.jpg" class="w3-circle" width="100%">
							<!--info-->In Tom Clancy's The Division, players are able to use various different skills to gain an advantage over others in combat. Skills are unlocked as the player upgrades the Base of Operations.
            </font>
          </div>

          <div class="row" style="background-color:black;"> <br> <br> <br> </div>

          <img src="Images\Homepage_Images\gear_mods.jpg" width="100%" style="min-height:310px;">

          <div class="card-block">

            <p class="crd-h1" style="font-size:30px;">Mod</p>
            <font size="5">
              <!--content of Weapon -->
              <!--img src="Images\Homepage_Images\gear_mods.jpg" class="w3-circle" width="100%">
							<!--info-->Mods in The Division can be applied to your Gear to improve it's Attributes. They can be crafted, acquired as drops from Enemies, or purchased from Vendors.Only some gear has a mod slot, just like weapons have mod slots, and you add gear mod to your gear in the same method as you do in weapon mods.
            </font>
          </div>

        </div>
      </div>


      <div class="col-md-1 col-md-offset-0"> </div>

    </div>
  </div>
  <!--General info card ends here-->

  </div class="row"><br><br><br></div>
  <div class="row">
  <div class="col-md-1">
  </div>
  <div class="col-md-4">
    <div style="background-color: grey; height: 100%; width:100%; border-radius:5px;">
      <div style="margin-left:12px;">
        <div class="fb-page" data-href="https://www.facebook.com/ISACs-Data-Warehouse-1902289280055639/" data-tabs="timeline" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <blockquote cite="https://www.facebook.com/ISACs-Data-Warehouse-1902289280055639/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ISACs-Data-Warehouse-1902289280055639/">ISAC&#039;s Data Warehouse</a></blockquote>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-1">
  </div>
  <div class="col-md-5">
    <a class="twitter-timeline" data-theme="dark" data-link-color="#E95F28" href="https://twitter.com/ISAC_DW">Tweets by ISAC_DW</a>
    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
  </div>
  <div class="col-md-1">
  </div>
</div><br><br><br>
<?php include 'footer.php';
?>
</body>

</html>

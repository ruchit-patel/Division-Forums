<html>
<head>
<title> Skills </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="CSS\skills_general.css">
</head>
<body background="Images\skills_bg.jpg" style="background-repeat: no-repeat;
    background-attachment: fixed;">

<div class="row"> <br> <br> <br> </div>

<div class="row">
	<div class="col-md-7 col-md-offset-1">
		<div class="card" style="min-height:250px;">
          <div class="card-block">

            <p class="crd-h1" style="font-size:30px;">General Info</p>
            
              <!--content of General Info Skills -->
			  <p>In Tom Clancy's The Division, players are able to use various different skills to gain an advantage over others in combat. Skills are unlocked as the player upgrades the Base of Operations. So the skills are divided up into three groups; Medical, Tech, and Security. Players are able to choose what skills they wish to focus on or specialize in. These skills are active abilities used by the player which then recharge before the player can use them again.There are 2 slots for skills and 1 slot for signature skill.</p>
			  
				<p>There 3 types of Skills:</p>
				<ul>
                    <li><a href="#Shot" style="color: #76FF03;">Medical</a></li>
                    <li><a href="#SMG" style="color: #FFA000;">Technical</a></li>
                    <li><a href="#AR" style="color: #2196F3;">Security</a></li>
                </ul>
            
          </div>
        </div>
	</div>

	<div class="col-md-2 col-md-offset-0">
		<img src="Images\skills.jpg" width="100%" style="min-height:310px;">
	</div>
	
</div>

<div class="row">
<br> <br> <br> 
</div>

<div class="row">
	<div class="col-md-9 col-md-offset-1">
		<div class="card" style="min-height:250px;">
          <div class="card-block">

            <p class="crd-h1" style="font-size:30px;">Medical Skills</p>
            <font size="4.5">
              <!--content of Medical Info Skills -->
			  The Medical Wing is one of the three wings in the player's Base of Operations. It is unlocked after completing the mission Madison Field Hospital, in which you rescue Dr. Jessica Kandel who runs the Medical Wing. As with all three wings there are 10 available upgrades available. The Medical Wing gives access to the Skills First Aid, Support Station, and Recovery Link; as well as the already available Pulse. <br> 
			  Medical skills provide support and Intel for the agent and their team. <br> 
			  <?php
                                require 'FinalScripts/skills_dispMedical.php';
               ?>
			<!--ul>
			<li> <a href="">Pulse </a> <br> </li>
			<li> <a href="">First Aid </a> <br> </li>
			<li> <a href="">Support Station </a> <br> </li>
			<li> <a href="">Recovery Link </a> </li>
			</ul-->
            </font>
          </div>
        </div>
	</div>
</div>	

<div class="row">
<br> <br> <br>
</div>

<div class="row">
	<div class="col-md-9 col-md-offset-1">
		<div class="card" style="min-height:250px;">
          <div class="card-block">

            <p class="crd-h1" style="font-size:30px;">Tech Skills</p>
            <font size="4.5">
              <!--content of Tech Info Skills -->
			  The Tech Wing is one of the three wings in the player's Base of Operations. It is unlocked after completing the mission Subway Morgue, in which you rescue engineer Paul Rhodes who runs the Tech Wing. As with all three wings there are 10 available upgrades available. The Tech Wing gives access to the Skills Turret, Seeker Mine, and Tactical Link; as well as the already available Sticky Bomb. <br> 
			  Tech skills give agents an offensive edge. <br>
			  <?php
                                require 'FinalScripts/skills_dispTechnical.php';
               ?>


			<!--ul>
			<li> <a href="">Sticky Bomb </a> <br> </li>
			<li> <a href="">Turret </a> <br> </li>
			<li> <a href="">Seeker Mine </a> <br> </li>
			<li> <a href="">Tactical Link </a> </li>
			</ul-->
            </font>
          </div>
        </div>
	</div>
</div>	

<div class="row">
<br> <br> <br>
</div>

<div class="row">
	<div class="col-md-9 col-md-offset-1">
		<div class="card" style="min-height:250px;">
          <div class="card-block">

            <p class="crd-h1" style="font-size:30px;">Security Skills</p>
            <font size="4.5">
              <!--content of Tech Info Skills -->
			  The Security Wing is one of the three wings in the player's Base of Operations. It is unlocked after completing the mission Lincoln Tunnel Checkpoint, in which you rescue Captain Roy Benitez who runs the Security Wing. As with all three wings there are 10 available upgrades available. The Security Wing gives access to the Skills Smart Cover, Mobile Cover, and Survivor Link; as well as the already available Ballistic Shield. <br> 
			  Security skills are focused on defensive capabilities. <br>

			  <?php
                                require 'FinalScripts/skills_dispSecurity.php';
               ?>



			<!--ul>
			<li> <a href="">Ballistic Shield </a> <br> </li>
			<li> <a href="">Smart Cover </a> <br> </li>
			<li> <a href="">Mobile Cover </a> <br> </li>
			<li> <a href="">Survivor Link </a> </li>
			</ul-->
            </font>
          </div>
        </div>
	</div>
</div>	

<div class="row">
<br> <br> <br>
</div>

</body>
</html>		
		
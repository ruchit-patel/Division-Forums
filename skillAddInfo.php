<?php

$servername = "localhost";
            $username = "root";
            $password = "admin";
            $dbname = "division";
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }


if($_SERVER['REQUEST_METHOD']=="POST")
{
	$skill_description=$_POST['skill_description'];
	$skill_image=$_POST['skill_image'];

	$skill_mastermod_category=$_POST['skill_mastermod_category'];
	$skill_mastermod_name=$_POST['skill_mastermod_name'];
	$skill_mastermod_description=$_POST['skill_mastermod_description'];
	$skill_mastermod_id=$_POST['skill_mastermod_id'];
	

	$skill_stats_name=$_POST['skill_stats_name'];
	$skill_stats_mod1=$_POST['skill_stats_mod1'];
	$skill_stats_mod2=$_POST['skill_stats_mod2'];
	$skill_stats_mod3=$_POST['skill_stats_mod3'];
}

$query_skills="insert into Skills('Skill_Description','Image') values('$skill_description','$skill_image');";	

if(mysqli_query($conn,$query_skills))
{
	
}
else
{
	echo "Error Check Again";
}

if($skill_mastermod_category=="Medical")
{	
$query_mod1="insert into Medical values('$skill_mastermod_description','$skill_mastermod_name','$skill_mastermod_id');"; 	
	
	if(mysqli_query($conn,$query_mod1))
	{
	
	}
	else
	{
	echo "Error Check Again In Medical";
	}	
	
}

else if($skill_mastermod_category=="Technical")
{
$query_mod2="insert into Technical values('$skill_mastermod_description','$skill_mastermod_name','$skill_mastermod_id');";

	if(mysqli_query($conn,$query_mod2))
	{
	
	}
	else
	{
	echo "Error Check Again In Technical";
	}
	
}
else if($skill_mastermod_category=="Security")
{
$query_mod3="insert into Security values('$skill_mastermod_description','$skill_mastermod_name','$skill_mastermod_id');";

	if(mysqli_query($conn,$query_mod3))
	{
	
	}
	else
	{
	echo "Error Check Again In Security";
	}

}
else
{
	echo "Error Check Again";
}	

$query_stats="insert into Skills_Stats values('$skill_stats_name','$skill_stats_mod1','$skill_stats_mod2','$skill_stats_mod3');";

if(mysqli_query($conn,$query_stats))
{
	header("location: skillInfoAdd.php");
}
else
{
    echo "Error in Stats";
} 
mysqli_close($conn);
?>
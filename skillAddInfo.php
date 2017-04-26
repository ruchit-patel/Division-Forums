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
	

	/* $skill_stats_name=$_POST['skill_stats_name'];
	$skill_stats_skillname=$_POST['skill_stats_skillname'];
	$skill_stats_base=$_POST['skill_stats_base'];
	$skill_stats_mod1=$_POST['skill_stats_mod1'];
	$skill_stats_mod2=$_POST['skill_stats_mod2'];
	$skill_stats_mod3=$_POST['skill_stats_mod3']; */
}

$query_skills="INSERT INTO Skills(Skill_Description,Image) VALUES('$skill_description','$skill_image')";	

if(mysqli_query($conn,$query_skills))
{
	header("location: skillAddInfo.html");
}
else
{
	echo "Error Check Again";
}

if($skill_mastermod_category=="Medical")
{	
$query_mod1="INSERT INTO Medical VALUES('$skill_mastermod_description','$skill_mastermod_name','$skill_mastermod_id')"; 	
	
	if(mysqli_query($conn,$query_mod1))
	{
		header("location: skillAddInfo.html");
	}
	else
	{
	echo "Error Check Again In Medical";
	}	
	
}

else if($skill_mastermod_category=="Technical")
{
$query_mod2="INSERT INTO Technical VALUES('$skill_mastermod_description','$skill_mastermod_name','$skill_mastermod_id')";

	if(mysqli_query($conn,$query_mod2))
	{
		header("location: skillAddInfo.html");
	}
	else
	{
	echo "Error Check Again In Technical";
	}
	
}
else if($skill_mastermod_category=="Security")
{
$query_mod3="INSERT INTO Security VALUES('$skill_mastermod_description','$skill_mastermod_name','$skill_mastermod_id')";

	if(mysqli_query($conn,$query_mod3))
	{
		header("location: skillAddInfo.html");
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

/* $query_stats="INSERT INTO Skills_Stats VALUES('$skill_stats_name','$skill_stats_base','$skill_stats_mod1','$skill_stats_mod2','$skill_stats_mod3','$skill_stats_skillname')";

if(mysqli_query($conn,$query_stats))
{
	header("location: skillAddInfo.html");
}
else
{
    echo "Error in Stats";
} */
mysqli_close($conn);
?>
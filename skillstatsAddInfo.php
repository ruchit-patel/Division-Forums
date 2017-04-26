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
						
		$skill_stats_name=$_POST['skill_stats_name'];
		$skill_stats_skillname=$_POST['skill_stats_skillname'];
		$skill_stats_id=$_POST['skill_stats_id'];
		$skill_stats_base=$_POST['skill_stats_base'];
		$skill_stats_mod1=$_POST['skill_stats_mod1'];
		$skill_stats_mod2=$_POST['skill_stats_mod2'];
		$skill_stats_mod3=$_POST['skill_stats_mod3'];
		
		
		$query_stats="INSERT INTO Skills_Stats VALUES('$skill_stats_name','$skill_stats_base','$skill_stats_mod1','$skill_stats_mod2','$skill_stats_mod3','$skill_stats_skillname','$skill_stats_id')";

if(mysqli_query($conn,$query_stats))
{
	header("location: skillstatsAddInfo.html");
}
else
{
    echo "Error in Stats";
} 
mysqli_close($conn);

?>
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
	$image_path=$_POST['image_path'];
  $id=$_POST['id'];
}

//for($i=1;$i<13;$i++)
//{
		//$q="INSERT INTO Skills (Skill_Description,Image) values('$skill_description','$image_path') where Skill_Id='$id'";
    $q="UPDATE Skills set Skill_Description='$skill_description', Image='$image_path' where Skill_Id='$id'";
		mysqli_query($conn,$q);
//}

mysqli_close($conn);
?>

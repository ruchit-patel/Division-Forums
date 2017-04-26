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
            $id=$_POST['tid'];
            $name=$_POST['tname'];
            $desc=$_POST['tdesc'];
            $ar=$_POST['tar'];
            $lmg=$_POST['tlmg'];
            $smg=$_POST['tsmg'];
            $mmr=$_POST['tmmr'];
            $shot=$_POST['tshot'];
            $side=$_POST['tside'];
            if(empty($_POST['tar'])){
                $ar='F';
            }
            if(empty($_POST['tlmg'])){
                $lmg='F';
            }
            if(empty($_POST['tsmg'])){
                $smg='F';
            }
            if(empty($_POST['tmmr'])){
                $mmr='F';
            }
            if(empty($_POST['tshot'])){
                $shot='F';
            }
            if(empty($_POST['tside'])){
                $ar='F';
            }
            $qmain="INSERT INTO wepTal VALUES('$id','$name','$desc','$ar','$lmg','$smg','$mmr','$shot','$side')";
            if (mysqli_query($conn, $qmain)) {
                 header("location: wepTalAdd.php");
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
           
            mysqli_close($conn);
?>
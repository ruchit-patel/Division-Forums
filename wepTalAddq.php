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
            $qmain="INSERT INTO wepTal VALUES('$id','$name','$desc','$ar','$lmg','$smg','$mmr','$shot','$side')";
            if (mysqli_query($conn, $qmain)) {
                 header("location: wepTalAdd.php");
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
           
            mysqli_close($conn);
?>
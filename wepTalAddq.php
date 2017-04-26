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
            $qmain="INSERT INTO wepMain VALUES('$id','$name','$var','$info','$img','$rw')";
            if (mysqli_query($conn, $qmain)) {
                 $qsts="INSERT INTO wepStats VALUES('$id','$typ',$rpm,$mgsi,$rng,$rld,$hsd)";
                if (mysqli_query($conn, $qsts)) {

                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                $qbns="INSERT INTO wepBns VALUES('$id','$bnstyp',$bnsmin,$bnsmax)";
                if (mysqli_query($conn, $qbns)) {
                    header("location: wepInfoAdd.php");
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
           
            mysqli_close($conn);
?>
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
            $id=$_POST['wid'];
            $name=$_POST['wname'];
            $var=$_POST['wvar'];
            $info=$_POST['winfo'];
            $rw=$_POST['wrw'];
            $img=$_POST['wimg'];
            $typ=$_POST['wtyp'];
            $rpm=$_POST['wrpm'];
            $mgsi=$_POST['wmgsi'];
            $rng=$_POST['wrng'];
            $rld=$_POST['wrld'];
            $hsd=$_POST['whsd'];
            $bnstyp=$_POST['wbnstyp'];
            $bnsmin=$_POST['wbnsmin'];
            $bnsmax=$_POST['wbnsmax'];
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
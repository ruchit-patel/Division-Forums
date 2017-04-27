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
            $mos=$_POST['mos'];
            $mus=$_POST['mus'];
            $mul=$_POST['mul'];
            $mmg=$_POST['mmg'];
            $mms=$_POST['mms'];
            $mml=$_POST['mml'];
            $mol=$_POST['mol'];
            if(empty($_POST['mos'])){
                $mos='F';
            }
            if(empty($_POST['mus'])){
                $mus='F';
            }
            if(empty($_POST['mul'])){
                $mul='F';
            }
            if(empty($_POST['mmg'])){
                $mmg='F';
            }
            if(empty($_POST['mms'])){
                $mms='F';
            }
            if(empty($_POST['mml'])){
                $mml='F';
            }
            if(empty($_POST['mol'])){
                $mol='F';
            }
            $qmain="INSERT INTO wepMods VALUES('$id','$mos','$mol','$mus','$mul','$mmg','$mms','$mml')";
            if (mysqli_query($conn, $qmain)) {
                 header("location: wepModsAdd.php");
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
           
            mysqli_close($conn);
?>
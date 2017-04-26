<html>
    <body>
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

            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            $qsts="INSERT INTO wepStats VALUES('$id','$typ','$rpm','$mgsi','$rng','$rld','$hsd')";
            if (mysqli_query($conn, $qsts)) {

            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            $qbns="INSERT INTO wepBns VALUES('$id','$bnstyp','$bnsmin','$bnsmax')";
            if (mysqli_query($conn, $qbns)) {
                header("location: wepInfoAdd.php");
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
        ?>
        <form method="post">
            Wep ID: <input type="text" name="wid"><br><br>
            Name: <input type="text" name="wname"><br><br>
            Varients: <input type="text" name="wvar"><br><br>
            Info: <textarea rows="4" cols="50" name="winfo"></textarea><br><br>
            Real World: <textarea rows="4" cols="50" name="wrw"></textarea><br><br>
            Img: <input type="text" name="wimg"><br><br>
            Type: <input type="text" name="wtyp"><br><br>
            RPM: <input type="text" name="wrpm"><br><br>
            Mag Size: <input type="text" name="wmgsi"><br><br>
            Range: <input type="text" name="wrng"><br><br>
            Reload: <input type="text" name="wrld"><br><br>
            Headshot Bonus: <input type="text" name="whsd"><br><br>
            Bonus Type: <input type="text" name="wbnstyp"><br><br>
            Bonus min: <input type="text" name="wbnsmin"><br><br>
            Bonus max: <input type="text" name="wbnsmax"><br><br>
            <input type="Submit">
        </form>
    </body>
</html>

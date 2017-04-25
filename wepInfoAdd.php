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
        </form>
    </body>
</html>
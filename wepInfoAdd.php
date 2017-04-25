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
            if(){
                
            }
        ?>
        <form method="post">
            Wep ID: <input type="text" name="wid"><br>
            Name: <input type="text" name="wname"><br>
            Varients: <input type="text" name="wvar"><br>
            Info: <textarea rows="4" cols="50" name="winfo"></textarea><br>
            Real World: <textarea rows="4" cols="50" name="wrw"></textarea><br>
            Img: <input type="text" name="wimg"><br>
            Type: <input type="text" name="wtyp"><br>
            RPM: <input type="text" name="wrpm"><br>
            Mag Size: <input type="text" name="wmgsi"><br>
            Range: <input type="text" name="wrng"><br>
            Reload: <input type="text" name="wrld"><br>
            Headshot Bonus: <input type="text" name="whsd"><br>
            Bonus Type: <input type="text" name="wbnstyp"><br>
            Bonus min: <input type="text" name="wbnsmin"><br>
            Bonus max: <input type="text" name="wbnsmax"><br>
        </form>
    </body>
</html>
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
            $qur="SELECT Name FROM Talents";
                echo "<table style='table-layout: fixed; text-align:center;width:100%;'>";
                echo "<tr>";
                $i=1;
                $result = mysqli_query($conn, $qur) OR die("".mysqli_error($conn));
                while($row = mysqli_fetch_assoc($result)){
                    $tNm=$row['Name'];
                    echo "<td><form action=\"updaterz.php\" name=\"talList\" method=\"GET\">";
                    echo "<input type='hidden' name='wID' value='$tNm'>";
                    echo "<input type='Submit' class='caser' value='$tNm'>";
                    echo "</form></td>";
                    if($i%3==0){
                        echo "</tr>";
                        echo "<tr>";                        
                    }
                    $i++;
                }
                echo "</tr>";
                echo "</table>";
            
            mysqli_close($conn);
?>
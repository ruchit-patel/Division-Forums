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
            $qur="SELECT wep_ID, wep_Name FROM wepMain";
                echo "<table>";
                echo "<tr>";
                $i=1;
                $result = mysqli_query($conn, $qur) OR die("".mysqli_error($conn));
                while($row = mysqli_fetch_assoc($result)){
                    $wName=$row['wep_Name'];
                    $wId=$row['wep_ID'];
                    echo "<td><form action='' method='POST' id='wepDecide'>";
                    echo "<input type='hidden' name='wID' value='$wId'>";
                    echo "<input type='Submit' value='$wName' form='wepDecide'>";
                    echo "</form></td>";
                    $i++;
                    if($i%10==0){
                        echo "</tr>";
                        echo "<tr>";                        
                    }
                }
                echo "</tr>";
                echo "</table>";
            
            mysqli_close($conn);
?>
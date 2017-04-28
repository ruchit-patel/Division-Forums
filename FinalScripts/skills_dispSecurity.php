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
             $qur="SELECT Skill_Id,Name FROM Skills WHERE Category_Type='Security Skills'";
                echo "<table style='table-layout: fixed; text-align:center;width:100%;'>";
                echo "<tr>";
                $i=1;
                $result = mysqli_query($conn, $qur) OR die("".mysqli_error($conn));
                while($row = mysqli_fetch_assoc($result)){
                    $skill_id=$row['Skill_id'];
                    $name=$row['Name'];
                    echo "<td><form action='skills_PHP.php' method='GET'>";
                    echo "<input type='hidden' name='skill_id' value='$skill_id'>";
					echo "<input type='hidden' name='category_type' value='Security Skills'>";
                    echo "<input type='Submit' class='caserSecurity' value='$name'>";
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
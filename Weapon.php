<html>
    <head>   
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="CSS\wep.css">
        <style>
            .card{
                min-height: 155px;
            }
        </style>
    </head>
    <body class="parallax1">
        <?php 
            if($_SERVER['REQUEST_METHOD']='GET'){
                $id= $_GET['wID'];
                $servername = "localhost";
                $username = "root";
                $password = "admin";
                $dbname = "division";
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                $sql="SELECT * FROM wepMain NATURAL JOIN wepStats NATURAL JOIN wepBns NATURAL JOIN wepMods NATURAL JOIN wepTal WHERE wep_ID='$id'";
                $result = mysqli_query($conn, $sql) OR die("".mysqli_error($conn));
                $row = mysqli_fetch_assoc($result);
                $wName= $row['wep_Name'];
                $wVars= $row['wep_Vars'];
                $wInfo= $row['wep_Info'];
                $wImg= $row['wep_Img'];
                $wRwi=$row['wep_Rwi'];
                $wId=$row['wep_ID'];
                $wBtyp=$row['wep_Btyp'];
                $wBmin=$row['wep_Bmin'];
                $wBmax=$row['wep_Bmax'];
                $wType=$row['wep_Type'];
                $wRPM=$row['wep_RPM'];
                $wMgsi=$row['wep_MgSi'];
                $wRng=$row['wep_Rng'];
                $wRld=$row['wep_Rld'];
                $wHsd=$row['wep_Hsd'];
                $wOpticssm=$row['Optics_sm'];
                $wOpticslg=$row['Optics_lg'];
                $wUndsm=$row['Und_sm'];
                $wUndlg=$row['Und_lg'];
                $wMag=$row['Mag'];
                $wMuzsm=$row['Muz_sm'];
                $wMuzlg=$row['Muz_lg'];
                $talId=$row['tal_Id'];
                $talName=$row['tal_Name'];
                $talDesc=$row['tal_Desc'];
                $AR=$row['AR'];
                $LMG=$row['LMG'];
                $SMG=$row['SMG'];
                $MMR=$row['MMR'];
                $Shotgun=$row['Shotgun'];
                $Sidearm=$row['Sidearm'];
                echo "<div class=\"wrapper\">";
                    echo "<div class=\"row\">";
                        echo "<div class=\"col-md-6 col-md-offset-1\">";
                            echo "<div class=\"card\">";
                                echo "<div class=\"card-block\">";
                                    echo "<p class=\"crd-h1\">$wName</p>";
                                    echo $wInfo;
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                        echo "<div class=\"col-md-4\">";
                            echo "<div class=\"card\">";
                                echo "<img src=\"$wImg\" style=\"width:100%;\">";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                    echo "<div class=\"row\" style=\"margin-top:15px;\">";
                        echo "<div class=\"col-md-6 col-md-offset-1\">";
                            echo "<div class=\"card\">";
                                echo "<div class=\"card-block\">";
                                    echo "<p class=\"crd-h1\">Some Real World Trivia</p>";
                                    echo $wRwi;
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                        echo "<div class=\"col-md-4\">";
                            echo "<div class=\"card\">";
                                echo "<div class=\"card-block\">";      
                                    echo "<p class=\"crd-h1\">Available Mod Slots</p>";
                                        echo"<ul>";
                                            echo "<li> Skin </li>";
                                            if($wOpticssm=='F' && $wOpticslg=='F' && $wUndsm=='F' && $wUndlg=='F' && $wMag=='F' && $wMuzsm=='F' && $wMuzlg=='F'){
                                            }
                                            else{
                                                if($wOpticssm=='T'){
                                                    echo "<li> Optics Small </li>"; 
                                                } 
                                                if($wOpticslg=='T'){
                                                    echo "<li> Optics Large </li>"; 
                                                }
                                                if($wUndlg=='T'){
                                                    echo "<li> Underbarrel Large </li>"; 
                                                }
                                                if($wUndsm=='T'){
                                                    echo "<li> Underbarrel Small </li>"; 
                                                }
                                                if($wMag=='T'){
                                                    echo "<li> Magazine </li>"; 
                                                }
                                                if($wMuzsm=='T'){
                                                    echo "<li> Muzzle Small </li>"; 
                                                }
                                                if($wMuzlg=='T'){
                                                    echo "<li> Muzzle Large </li>"; 
                                                }
                                            }    
                                        echo "</ul>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                    echo "<div class=\"row\" style=\"margin-top:15px;\">";
                        echo "<div class=\"col-md-10 col-md-offset-1\">";
                            echo "<div class=\"card\">";
                                echo "<div class=\"card-block\">";
                                    echo "<p class=\"crd-h1\">Stats</p>";
                                    echo "<table class=\"statTbl\" border=\"1\" style='table-layout: fixed; text-align:center;width:100%;font-size: 20px;'>";
                                        echo "<tr><td>Weapon Type</td><td>RPM</td><td>Magazine Size</td><td>Optimal Range</td><td>Reload Speed</td><td>Headshot Multiplier</td></tr>";
                                        echo "<tr><td>$wType</td><td>$wRPM</td><td>$wMgsi</td><td>$wRng</td><td>$wRld</td><td>$wHsd</td></tr>";
                                    echo "</table>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                    echo "<div class=\"row\" style=\"margin-top:15px;\">";
                        echo "<div class=\"col-md-10 col-md-offset-1\">";
                            echo "<div class=\"card\">";
                                echo "<div class=\"card-block\">";
                                    echo "<p class=\"crd-h1\">Talents</p>";

                                echo "</div>";
                            echo "</div>";
                        echo "</div>";  
                    echo "</div>";
                echo "</div>";
            }
        ?>
    </body>
</html>
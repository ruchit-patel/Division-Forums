<?php
    require 'updater.php';
?>
<div class="row" style="margin-top:15px;">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-block">
                <?php
                    ini_set('display_errors',1);
                    if($_SERVER['REQUEST_METHOD']=='GET'){
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
                        $talId=$row['tal_ID'];
                        $talName=$row['tal_Name'];
                        $talDesc=$row['tal_Desc'];
                        $AR=$row['AR'];
                        $LMG=$row['LMG'];
                        $SMG=$row['SMG'];
                        $MMR=$row['MMR'];
                        $Shotgun=$row['Shotgun'];
                        $Sidearm=$row['Sidearm'];
                        echo "<br><br><form method=\"post\" action=\"FinalScripts/wepUpdt.php\"> <table style=\"width:100%;\">
                        <tr> <td>    Wep ID: </td> <td> <input type=\"text\" name=\"wid\" value=\"$id\"><br><br> </td> </tr>
                        <tr> <td>    Name: </td> <td> <input type=\"text\" name=\"wname\"M value=\"$wName\"><br><br> </td> </tr>
                        <tr> <td>    Varients: </td> <td> <input type=\"text\" name=\"wvar\"  value=\"$wVars\"><br><br> </td> </tr>
                        <tr> <td>    Info: </td> <td> <textarea rows=\"4\" cols=\"50\" name=\"winfo\">".$wInfo."</textarea><br><br> </td> </tr>
                        <tr> <td>    Real World: </td> <td> <textarea rows=\"4\" cols=\"50\" name=\"wrw\">".$wRwi."</textarea><br><br> </td> </tr>
                        <tr> <td>    Img: </td> <td> <input type=\"text\" name=\"wimg\"  value=\"$wImg\"><br><br> </td> </tr>
                        <tr> <td>    Type: </td> <td> <input type=\"text\" name=\"wtyp\" value=\"$wType\"><br><br> </td> </tr>
                        <tr> <td>    RPM: </td> <td> <input type=\"text\" name=\"wrpm\"  value=\"$wRPM\"><br><br> </td> </tr>
                        <tr> <td>    Mag Size: </td> <td> <input type=\"text\" name=\"wmgsi\"  value=\"$wMgsi\"><br><br> </td> </tr>
                        <tr> <td>    Range: </td> <td> <input type=\"text\" name=\"wrng\"  value=\"$wRng\"><br><br> </td> </tr>
                        <tr> <td>    Reload: </td> <td> <input type=\"text\" name=\"wrld\"  value=\"$wRld\"><br><br> </td> </tr>
                        <tr> <td>    Headshot Bonus: </td> <td> <input type=\"text\" name=\"whsd\"  value=\"$wHsd\"><br><br> </td> </tr>
                        <tr> <td>    Bonus Type: </td> <td> <input type=\"text\" name=\"wbnstyp\"  value=\"$wBtyp\"><br><br> </td> </tr>
                        <tr> <td>    Bonus min: </td> <td> <input type=\"text\" name=\"wbnsmin\"  value=\"$wBmin\"><br><br> </td> </tr>
                        <tr> <td>    Bonus max: </td> <td> <input type=\"text\" name=\"wbnsmax\"  value=\"$wBmax\"><br><br> </td> </tr>
                        <tr> <td>    <input type=\"Submit\" value=\"Update\"> </td> </tr> </table>
                        </form>";
                    }
                ?>
            </div>
        </div>
    </div>
</div>
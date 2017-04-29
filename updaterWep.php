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
                    }
                ?>
            </div>
        </div>
    </div>
</div>
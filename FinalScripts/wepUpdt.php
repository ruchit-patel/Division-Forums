<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
		$wid=$_POST['wid'];
		$wname=$_POST['wname'];
		$wvar=$_POST['wvar'];
		$winfo=$_POST['winfo'];
		$wrw=$_POST['wrw'];
		$wimg=$_POST['wimg'];
		$wtyp=$_POST['wtyp'];
		$wrpm=$_POST['wrpm'];
		$wmgsi=$_POST['wmgsi'];
		$wrng=$_POST['wrng'];
		$wrld=$_POST['wrld'];
		$whsd=$_POST['whsd'];
		$wbnstyp=$_POST['wbnstyp'];
		$wbnsmin=$_POST['wbnsmin'];
		$wbnsmax=$_POST['wbnsmax'];
		
        $weaponmain="UPDATE wepMain SET wep_Name='$wname',wep_Vars='$wvar',wep_Info='$winfo',wep_Img='$wimg',wep_Rwi='$wrw' where wep_ID='$wid'";
		
		$weaponbonus="UPDATE wepBns SET wep_Btyp='$wbnstyp',wep_Bmin='$wbnsmin',wep_Bmax='$wbnsmax' where wep_ID='$wid'";
		
		$weaponstats="UPDATE wepStats SET wep_Type='$wtyp',wep_RPM='$wrpm',wep_MgSi='$wmgsi',wep_Rng='$wrng',wep_Rld='$wrld',wep_Hsd='$whsd' where wep_ID='$wid'";
		
		header("location:..\update.php");
		
    }
	

?>
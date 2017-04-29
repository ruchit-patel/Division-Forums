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
		
        $weaponmain="UPDATE wepMain SET wep_ID='$wid',wep_Name='$wname',wep_Vars='$wvar',wep_Info='$winfo',wep_Img='$wimg',wep_Rwi='$'";
		
		$weaponbonus="UPDATE wepBns SET wep_ID='$wid',wep_Btyp='$wbnstyp',wep_Bmin='$wbnsmin',wep_Bmax='$wbnsmax'";
		
		$weaponstats="UPDATE wepStats SET wep_ID='$wid',wep_Type='$wtyp',wep_RPM='$wrpm',wep_MgSi='$wmgsi',wep_Rng='$wrng',wep_Rld='$wrld',wep_Hsd='$whsd'";
		
    }
	

?>
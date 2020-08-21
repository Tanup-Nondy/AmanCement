<?php
session_start();

	if(isset($_POST['update'])){
		ini_set( "display_errors", 0); 
include("dbconnect.php");

	$id=$_POST['update'];
	$com=$_POST['com'];
$bd=$_POST['bd'];
$dn=$_POST['dn'];
$mn=$_POST['mn'];
$ads=$_POST['ads'];
$ts=$_POST['ts'];
$year=$_POST['year'];
$month=$_POST['month'];
$re=$_POST['re'];
$insert="UPDATE dis SET Company='$com',Brand='$bd',D_N='$dn',Mob_No='$mn',Address='$ads',T_S='$ts',year='$year',month='$month',Remarks='$re' WHERE SI_NO='$id'";
if(mysqli_query($cn,$insert)){
	$_SESSION['edit']=2;
	header("location:dis.php");
}else{
	echo "Error!";
}
		
	}
		?>

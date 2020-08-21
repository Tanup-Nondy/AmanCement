<?php
session_start();

	if(isset($_POST['update'])){
		ini_set( "display_errors", 0); 
include("dbconnect.php");
	$id=$_POST['update'];
	$com=$_POST['com'];
$bd=$_POST['bd'];
$tsm=$_POST['tsm'];
$nsm=$_POST['nsm'];
$dsm=$_POST['dsm'];
$mhs=$_POST['mhs'];
$tp=$_POST['tp'];
$dtp=$_POST['dtp'];
$mtp=$_POST['mtp'];

$re=$_POST['re'];

$insert="UPDATE emp SET Company='$com',Brand='$bd',T_S_M='$tsm',N_S_M='$nsm',D_S_M='$dsm',M_H_S='$mhs',
T_P='$tp',D_T_P='$dtp',M_T_P='$mtp',Remarks='$re' WHERE SI_NO='$id'";
if(mysqli_query($cn,$insert)){
	$_SESSION['edit']=2;
	header("location:emp.php");
}else{
	echo "Error!";
}
		
	}
		?>

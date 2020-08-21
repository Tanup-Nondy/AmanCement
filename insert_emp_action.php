<?php
session_start(); 
if(isset($_POST['submit'])){
include("dbconnect.php");

$dis=$_SESSION["dis"];
$_SESSION["dis"]=$dis;
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
$insert="INSERT INTO `emp`(`Company`, `Brand`, `T_S_M`, `N_S_M`, `D_S_M`, `M_H_S`, `T_P`, `D_T_P`, `M_T_P`, `Remarks`, `district`)
VALUES ('$com','$bd','$tsm','$nsm','$dsm','$mhs','$tp','$dtp','$mtp','$re','$dis')";
if(mysqli_query($cn,$insert)){
	$_SESSION['add']=3;
	header("location:emp.php");
}else{
	echo "Error!";
}

}

?>

<?php
session_start(); 
if(isset($_POST['submit'])){
include("dbconnect.php");

$dis=$_SESSION["dis"];
$_SESSION["dis"]=$dis;
$com=$_POST['com'];
$bd=$_POST['bd'];
$dn=$_POST['dn'];
$mn=$_POST['mn'];
$ads=$_POST['ads'];
$ts=$_POST['ts'];
$year=$_POST['year'];
$month=$_POST['month'];
$re=$_POST['re'];
//echo $dis.$com.$bd.$dn.$mn.$ads.$ts.$re;
$insert="INSERT INTO `dis`(`Company`, `Brand`, `D_N`, `Mob_No`, `Address`, `T_S`, `district`,`year`, `month`, `Remarks`)
VALUES ('$com','$bd','$dn','$mn','$ads','$ts','$dis','$year','$month','$re')";
if(mysqli_query($cn,$insert)){
	$_SESSION['add']=3;
	header("location:dis.php");
}else{
	echo "Error!";
}

}

?>

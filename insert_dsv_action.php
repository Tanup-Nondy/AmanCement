<?php
session_start();
ini_set( "display_errors", 0); 
if(isset($_POST['submit'])){
include("dbconnect.php");

$dis=$_SESSION["dis"];
$_SESSION["dis"]=$dis;
//$com=$_POST['com'];
$bd=$_POST['bd'];
$sv=$_POST['sv'];
$year=$_SESSION['y'];
$month=$_SESSION['m'];
$remarks=$_POST['remarks'];
$insert="INSERT INTO `dsv`(`Brand`, `S_V`, `year`, `month`, `Remarks`, `district`) 
VALUES ('$bd','$sv','$year','$month','$remarks','$dis')";
if(mysqli_query($cn,$insert)){
	$_SESSION['add']=3;
	header("location:insert_dsv.php");
}else{
	echo "Error!";
}

}

?>

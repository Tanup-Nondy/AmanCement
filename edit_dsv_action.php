<?php
session_start();
	if(isset($_POST['update'])){
		
		ini_set( "display_errors", 0); 
include("dbconnect.php");

	$id=$_POST['update'];
$bd=$_POST['bd'];
$sv=$_POST['sv'];
$year=$_POST['year'];
$month=$_POST['month'];
$remarks=$_POST['remarks'];

$insert="UPDATE dsv SET Brand='$bd',S_V='$sv',year='$year',month='$month',Remarks='$remarks' WHERE SI_NO='$id'";
if(mysqli_query($cn,$insert)){
	$_SESSION['edit']=2;
	header("location:dsv_main.php");
}else{
	echo "Error!";
}
		
	}
		?>

<?php
session_start();
	if(isset($_POST['update'])){
		
		ini_set( "display_errors", 0); 
include("dbconnect.php");

	$id=$_POST['update'];
		$org=$_POST['org'];
$name=$_POST['name'];
$desn=$_POST['desn'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$office=$_POST['office'];
$thana=$_POST['thana'];
$remarks=$_POST['remarks'];

$insert="UPDATE pac SET name_of_org='$org',name='$name',designation='$desn',contact='$contact',email='$email',office='$office',thana='$thana',remarks='$remarks' WHERE SI_NO='$id'";
if(mysqli_query($cn,$insert)){
	$_SESSION['edit']=2;
	header("location:pac.php");
}else{
	echo "Error!";
}
		
	}
		?>

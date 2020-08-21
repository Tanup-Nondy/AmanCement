<?php
session_start();
ini_set( "display_errors", 0); 
include("dbconnect.php");

if(isset($_POST['submit'])){
$des=$_POST['des'];
$name=$_POST['name'];
$com=$_POST['company'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$area=$_POST['area'];
$exp=$_POST['exp'];
$insert="INSERT INTO `sales_emp`(`name`, `designation`, `company`, `phone`, `email`, `area`, `experience`) 
VALUES ('$name','$des','$com','$phone','$email','$area','$exp')";
if(mysqli_query($cn,$insert)){
	$_SESSION['add']=3;
	header("location:sales_emp.php");
}else{
	echo "Error!";
}

}

?>

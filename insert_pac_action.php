<?php
session_start();
ini_set( "display_errors", 0); 
if(isset($_POST['name'])){
include("dbconnect.php");

$dis=$_SESSION["dis"];
$_SESSION["dis"]=$dis;
echo $dis;
$org=$_POST['org'];
$name=$_POST['name'];
$desn=$_POST['desn'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$office=$_POST['office'];
$thana=$_POST['thana'];
$remarks=$_POST['remarks'];
$insert="INSERT INTO `pac`(`name_of_org`, `name`, `designation`, `contact`, `email`, `office`, `district`, `thana`, `remarks`) 
VALUES ('$org','$name','$desn','$contact','$email','$office','$dis','$thana','$remarks')";
if(mysqli_query($cn,$insert)){
	$_SESSION['add']=3;
	header("location:pac.php");
}else{
	echo "Error!";
}

}

?>

<?php
session_start();
ini_set( "display_errors", 0); 
if(isset($_POST['name'])){
include ("dbconnect.php");

$dis=$_SESSION["dis"];
$_SESSION["dis"]=$dis;
$name=$_POST['name'];
$phone=$_POST['phone'];
$voter=$_POST['voter'];
$mason=$_POST['mason'];
$type=$_POST['type'];
$thana=$_POST['thana'];
$word=$_POST['word'];
$remarks=$_POST['remarks'];
$insert="INSERT INTO `mas`(`name`, `phone`, `voter_id`, `mason_id`, `type`, `district`, `thana`, `word`, `remarks`)
VALUES ('$name','$phone','$voter','$mason','$type','$dis','$thana','$word','$remarks')";
if(mysqli_query($cn,$insert)){
	$_SESSION['add']=3;
	header("location:mas.php");
}else{
	echo "Error!";
}

}

?>

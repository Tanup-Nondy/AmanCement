<?php
session_start();
ini_set( "display_errors", 0); 
include ("dbconnect.php");
$name=$_POST["name"];
echo $name;
if(isset($_POST['add'])){
	header("location:insert_emp.php");
}
else if(isset($_POST['delete'])){
		$id=$_POST['delete'];
		$q="Delete FROM emp WHERE SI_NO='$id'";
		$res=mysqli_query($cn,$q);
		if($res){
			echo '<script> alert("Data has been successfully deleted");</script>';
			header("location:emp.php");
		}
}
?>
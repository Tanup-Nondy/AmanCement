<?php
session_start();
include ("dbconnect.php");
if(isset($_POST['add'])){
	header("location:insert_ngo.php");
}
else if(isset($_POST['delete'])){
		$id=$_POST['delete'];
		$q="Delete FROM ngo WHERE SI_NO='$id'";
		$res=mysqli_query($cn,$q);
		if($res){
			echo '<script> alert("Data has been successfully deleted");</script>';
			header("location:ngo.php");
		}
}
?>
<?php
session_start();
include ("dbconnect.php");
$name=$_POST["name"];
//echo $name;
if(isset($_POST['add'])){
	header("location:insert_gae.php");
}
else if(isset($_POST['delete'])){
		$id=$_POST['delete'];
		$q="Delete FROM gae WHERE SI_NO='$id'";
		$res=mysqli_query($cn,$q);
		if($res){
			//echo '<script> alert("Data has been successfully deleted");</script>';
			header("location:gae.php");
		}
}

?>
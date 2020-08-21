<?php
	include("dbconnect.php");
	session_start();
		$name=$_SESSION['update'];
		if(isset($_POST['edit'])){
		$id=$_POST['edit'];
		$_SESSION['id']=$id;
		$_SESSION['dis']="$name";
		header("location:update_action.php");
		}
		else if(isset($_POST['delete'])){
		$id=$_POST['delete'];
		$q="Delete FROM $name WHERE SI_NO='$id'";
		$res=mysqli_query($cn,$q);
		header("location:view_action.php");
		}
?>
<?php
session_start();
if(isset($_POST['update'])){
include "dbconnect.php";
$dis=$_SESSION['dis'];
$id=$_SESSION['id'];
$types=$_POST['types'];
$org=$_POST['org'];
$name=$_POST['name'];
$desn=$_POST['desn'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$office=$_POST['office'];
$thana=$_POST['thana'];
$remarks=$_POST['remarks'];

$insert="UPDATE $dis SET types='$types',name_of_org='$org',name='$name',designation='$desn',contact='$contact',email='$email',office='$office',thana='$thana',remarks='$thana' WHERE SI_NO='$id'";
if(mysqli_query($cn,$insert)){
	header("location:view.php");
}else{
	echo "Error!";
}
}
?>
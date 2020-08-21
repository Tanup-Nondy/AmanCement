<?php
session_start(); 
ini_set( "display_errors", 0); 
include("dbconnect.php");
if(isset($_POST['submit'])){

$dis=$_SESSION["dis"];
$_SESSION["dis"]=$dis;
$p_n=$_POST['p_n'];
$p_d=$_POST['p_d'];
$im_au=$_POST['im_au'];
$con=$_POST['con'];
$loc=$_POST['loc'];
$cont=$_POST['cont'];
$f_b=$_POST['f_b'];
$p_c=$_POST['p_c'];
$s_t=$_POST['s_t'];
$e_t=$_POST['e_t'];
$d=$_POST['d'];
$re=$_POST['re'];
$insert="INSERT INTO `op`(`P_Name`, `P_Details`, `Im_Au`, `Consultant`, `Location`, `Contractor`, `Founded_By`,
 `P_C`, `S_Time`, `E_Time`, `Duration`, `Remarks`, `district`) 
VALUES ('$p_n','$p_d','$im_au','$con','$loc','$cont','$f_b','$p_c','$s_t','$e_t','$d','$re','$dis')";
if(mysqli_query($cn,$insert)){
	$_SESSION['add']=3;
	header("location:op.php");
}else{
	echo "Error!";
}

}

?>

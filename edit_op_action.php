<?php
session_start();
ini_set( "display_errors", 0); 
include("dbconnect.php");
	if(isset($_POST['update'])){
		
	$id=$_POST['update'];
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

$insert="UPDATE op SET P_Name='$p_n',P_Details='$p_d',Im_Au='$im_au',Consultant='$con',Location='$loc',Contractor='$cont',
Founded_By='$f_b',P_C='$p_c',S_Time='$s_t',E_Time='$e_t',Duration='$d',Remarks='$re' WHERE SI_NO='$id'";
if(mysqli_query($cn,$insert)){
	$_SESSION['edit']=2;
	header("location:op.php");
}else{
	echo "Error!";
}
		
	}
		?>

<?php
session_start();
ini_set( "display_errors", 0); 
include("dbconnect.php");

if(isset($_POST['submit'])){

$dis=$_SESSION["dis"];
$_SESSION["dis"]=$dis;
$cat=$_POST['cat'];
$n_com=$_POST['n_com'];
$pup=$_POST['po_up'];
$n_d_m=$_POST['n_d_m'];
$pos=$_POST['pos'];
$ads=$_POST['ads'];
$mp=$_POST['mp'];
$pp=$_POST['pp'];
$MP=$_POST['MP'];
$insert="INSERT INTO `lc`(`Category`, `Name_of_com`, `PUP`, `Name_of_des_maker`, `Position`, `Address`, `Mob_phn`, `Pro_Per`, `Mobile_Phn`, `district`) 
VALUES ('$cat','$n_com','$pup','$n_d_m','$pos','$ads','$mp','$pp','$MP','$dis')";
if(mysqli_query($cn,$insert)){
	$_SESSION['add']=3;
	header("location:lc.php");
}else{
	echo "Error!";
}

}

?>

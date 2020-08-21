<?php
session_start();
ini_set( "display_errors", 0); 
if(isset($_POST['submit'])){
include("dbconnect.php");
$dis=$_SESSION["dis"];
$_SESSION["dis"]=$dis;
$cat=$_POST['cat'];
$n_com=$_POST['n_com'];
$po_up=$_POST['po_up'];
$n_d_m=$_POST['n_d_m'];
$pos=$_POST['pos'];
$ads=$_POST['ads'];
$mp=$_POST['mp'];

$insert="INSERT INTO `ua`(`Category`, `Name_of_com`, `PO_UP`, `Name_of_des_maker`, `Position`, `Address`, `Mob_phn`, `district`) 
VALUES ('$cat','$n_com','$po_up','$n_d_m','$pos','$ads','$mp','$dis')";
if(mysqli_query($cn,$insert)){
	$_SESSION['add']=3;
	header("location:ua.php");
}else{
	echo "Error!";
}

}

?>

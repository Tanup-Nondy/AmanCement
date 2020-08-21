<?php
session_start();
ini_set( "display_errors", 0); 
include("dbconnect.php");

if(isset($_POST['submit'])){

$dis=$_SESSION["dis"];
$_SESSION["dis"]=$dis;
$name=$_POST['name'];
$nature=$_POST['nature'];
$address=$_POST['address'];
$p_name=$_POST['p_name'];
$shop_contact=$_POST['shop_contact'];
$p_birth=$_POST['p_birth'];
$p_marriage=$_POST['p_marriage'];
$a_officer=$_POST['a_officer'];
$year=$_POST['year'];
$month=$_POST['month'];
$brand=$_POST['brand'];
$volume=$_POST['volume'];
$free_bag=$_POST['free_bag'];
$cnf_price=$_POST['cnf_price'];
$fob_price=$_POST['fob_price'];
$d_commision=$_POST['d_commision'];
$r_commision=$_POST['r_commision'];
$other=$_POST['other'];
//echo $address."".$p_name."".$p_birth."".$year;
$insert="INSERT INTO `ret`(`name`, `nature`, `address`, `p_name`, `shop_contact`, `p_birth`, `p_marriage`, `a_officer`, `year`, `month`, `brand`, `volume`, `free_bag`, `cnf_price`, `fob_price`, `d_commision`, `r_commision`, `other`, `district`) VALUES ('$name', '$nature', '$address','$p_name', '$shop_contact', '$p_birth','$p_marriage', '$a_officer', '$year', '$month', '$brand', '$volume', '$free_bag`', '$cnf_price', '$fob_price','$d_commision', '$r_commision', '$other', '$dis')";
if(mysqli_query($cn,$insert)){
	$_SESSION['add']=3;
	header("location:man.php");
}else{
	echo "Error!";
}

}

?>

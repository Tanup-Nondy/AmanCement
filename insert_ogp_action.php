<?php
session_start(); 
if(isset($_POST['submit'])){
include("dbconnect.php");

$dis=$_SESSION["dis"];
$_SESSION["dis"]=$dis;
$pname=$_POST['pname'];
$pmeasure=$_POST['pmeasure'];
$iauthority=$_POST['iauthority'];
$consultant=$_POST['consultant'];
$contructor=$_POST['contructor'];
$fb=$_POST['fb'];
$pc=$_POST['pc'];
$ac=$_POST['ac'];
$cc=$_POST['cc'];
$st=$_POST['st'];
$et=$_POST['et'];
$dur=$_POST['dur'];
$sp=$_POST['sp'];
$nv=$_POST['nv'];
$req=$_POST['req'];
$improve=$_POST['improve'];
$remarks=$_POST['remarks'];
$insert="INSERT INTO `ogp`(`pname`, `pmeasure`, `iauthority`, `consultant`, `contructor`, `fb`, `pc`, 
`ac`, `cc`, `st`, `et`, `dur`, `sp`, `nv`, `req`, `improve`, `remarks`)
VALUES ('$pname','$pmeasure','$iauthority','$consultant','$contructor','$fb','$pc','$ac','$cc',
'$st','$et','$dur','$sp','$nv','$req','$improve','$remarks')";
if(mysqli_query($cn,$insert)){
	$_SESSION['add']=3;
	header("location:ogp.php");
}else{
	echo "Error!";
}

}

?>

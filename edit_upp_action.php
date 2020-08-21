<?php
session_start();
ini_set( "display_errors", 0); 
include("dbconnect.php");
	if(isset($_POST['update'])){
		
	$id=$_POST['update'];
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

$insert="UPDATE upp SET pname='$pname',pmeasure='$pmeasure',iauthority='$iauthority',consultant='$consultant',contructor='$contructor',fb='$fb',
fb='$fb',pc='$pc',ac='$ac',cc='$cc',st='$st',et='$et',dur='$dur',sp='$sp',nv='$nv',req='$req',improve='$improve',remarks='$remarks' WHERE SI_NO='$id'";
if(mysqli_query($cn,$insert)){
	$_SESSION['edit']=2;
	header("location:upp.php");
}else{
	echo "Error!";
}
		
	}
		?>

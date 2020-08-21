<?php
session_start();
ini_set( "display_errors", 0); 
include("dbconnect.php");
if(isset($_POST['submit'])){
$name=$_POST['name'];
$dis=$_SESSION["dis"];
$thana=$_POST['thana'];
$y=$_POST['year'];
$m=$_POST['month'];
$type=$_POST['type'];
$cf=$_POST['cf'];
$truck=$_POST['truck'];
$free=$_POST['free'];
$dc=$_POST['dc'];
$rc=$_POST['rc'];
$tc=$_POST['tc'];
$ec=$_POST['ec'];
$yc=$_POST['yc'];
$retc=$_POST['retc'];
$delc=$_POST['delc'];
$sd=$_POST['sd'];
$p1=$_POST['p1'];
$p1tk=$_POST['p1tk'];
$p2=$_POST['p2'];
$p2tk=$_POST['p2tk'];
$p3=$_POST['p3'];
$p3tk=$_POST['p3tk'];
$p4=$_POST['p4'];
$p4tk=$_POST['p4tk'];
$insert="INSERT INTO `pricing`(`name`, `district`, `thana`, `type`, `cf`, `truck`, `free`, `dc`, `rc`, `tc`, `ec`, `yc`, `retc`, 
`delc`, `sd`, `p1`, `p1tk`, `p2`, `p2tk`, `p3`, `p3tk`, `p4`, `p4tk`, `year`, `month`) 
VALUES ('$name','$dis','$thana','$type','$cf','$truck','$free','$dc','$rc','$tc',
'$ec','$yc','$retc','$delc','$sd','$p1','$p1tk','$p2','$p2tk','$p3','$p3tk','$p4','$p4tk','$y','$m')";
if(mysqli_query($cn,$insert)){
	$_SESSION['add']=3;
	header("location:pricing.php");
}else{
	echo "Error!";
}

}

?>

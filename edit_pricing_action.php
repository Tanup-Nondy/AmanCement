<?php
session_start();
	if(isset($_POST['update'])){
		include ("dbconnect.php");
	$id=$_POST['update'];
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
//$id=$_POST['update'];
//echo $name.$desn.$contact.$email.$office.$thana.$remarks.$id;
$insert="UPDATE `pricing` SET `name`='$name',`district`='$dis',`thana`='$thana',`type`='$type',`cf`='$cf',`truck`='$truck',`free`='$free',`dc`='$dc',`rc`='$rc',`tc`='$tc',`ec`='$ec',`yc`='$yc',`retc`='$retc',`delc`='$delc',`sd`='$sd',`p1`='$p1',`p1tk`='$p1tk',`p2`='$p2',`p2tk`='$p2tk',`p3`='$p3',`p3tk`='$p3tk',`p4`='$p4',`p4tk`='$p4tk',`year`='$y',`month`='$m' WHERE SI_NO='$id'";
if(mysqli_query($cn,$insert)){
	$_SESSION['edit']=2;
	header("location:pricing.php");
}else{
	echo "Error!";
}
		
	}
		?>

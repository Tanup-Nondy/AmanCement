<?php
session_start();
	if(isset($_POST['update'])){
	  
		include ("dbconnect.php");
	$id=$_POST['update'];

	$dis=$_SESSION["dis"];
$_SESSION["dis"]=$dis;
$name=$_POST['name'];
$phone=$_POST['phone'];
$voter=$_POST['voter'];
$mason=$_POST['mason'];
$type=$_POST['type'];
$thana=$_POST['thana'];
$word=$_POST['word'];
$remarks=$_POST['remarks'];

//$id=$_POST['update'];
//echo $name."".$phone."".$voter."".$mason."".$type."".$thana."".$word."".$id;
$insert="UPDATE mas SET name='$name',phone='$phone',voter_id='$voter',mason_id='$mason',type='$type',thana='$thana',word='$word',remarks='$remarks' WHERE SI_NO='$id'";
if(mysqli_query($cn,$insert)){
	$_SESSION['edit']=2;
	header("location:mas.php");
}else{
	echo "Error!";
}
		
	}
		?>

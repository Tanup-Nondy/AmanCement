<?php
session_start();
	if(isset($_POST['update'])){
		include ("dbconnect.php");
	$id=$_POST['update'];
		$des=$_POST['des'];
$name=$_POST['name'];
$com=$_POST['company'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$area=$_POST['area'];
$exp=$_POST['exp'];
//$id=$_POST['update'];
//echo $name.$desn.$contact.$email.$office.$thana.$remarks.$id;
$insert="UPDATE tech_emp SET name='$name',designation='$des',company='$com',phone='$phone',email='$email',area='$area',experience='$exp' WHERE SI_NO='$id'";
if(mysqli_query($cn,$insert)){
	$_SESSION['edit']=2;
	header("location:tech_emp.php");
}else{
	echo "Error!";
}
		
	}
		?>

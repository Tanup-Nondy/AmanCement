<?php
session_start();
ini_set( "display_errors", 0); 
if(isset($_POST['name'])){
include ("dbconnect.php");

$dis=$_SESSION["dis"];
$_SESSION["dis"]=$dis;

$org=$_POST['org'];
$name=$_POST['name'];
$desn=$_POST['desn'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$office=$_POST['office'];
$thana=$_POST['thana'];
$remarks=$_POST['remarks'];
$ocon=$_POST['ocontact'];
$dob=$_POST['dob'];
$dom=$_POST['dom'];

$filename = addslashes($_FILES['image']['name']);
$tmpname = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$filetype = addslashes($_FILES['image']['type']);
$filesize = addslashes($_FILES['image']['size']);
$array = array('jpg','jpeg','png','PNG','JPG','PSD');
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if(in_array($ext, $array)||$filename==""){
$insert="INSERT INTO `gae`(`name_of_org`, `name`, `designation`, `contact`, `email`, `office`, `district`, `thana`, `remarks`,`img_name`,`image`,`ocontact`,`dob`,`dom`) 
VALUES ('$org','$name','$desn','$contact','$email','$office','$dis','$thana','$remarks','$filename','$tmpname','$ocon','dob','dom')";
if(mysqli_query($cn,$insert)){
	$_SESSION['add']=3;
	header("location:gae.php");
}else{
	echo "Error!";
}

}
else{
	echo "Unsupported image format!";
}
}

?>

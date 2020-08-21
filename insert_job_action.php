<?php
session_start();
ini_set( "display_errors", 0); 
include("dbconnect.php");

if(isset($_POST['submit'])){

$title=$_POST['title'];
$file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 move_uploaded_file($file_loc,$folder.$file);
 $insert="INSERT INTO `job`(`title`, `file`, `type`, `size`) VALUES ('$title','$file','$file_type','$file_size')";
if(mysqli_query($cn,$insert)){
	$_SESSION['add']=3;
	header("location:job.php");
}else{
	echo "Error!";
}

}

?>

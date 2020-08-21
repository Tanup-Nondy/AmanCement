<?php
session_start();
ini_set( "display_errors", 0); 
include("dbconnect.php");
	if(isset($_POST['update'])){
	    $id=$_POST['update'];
	$title=$_POST['title'];
$file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 move_uploaded_file($file_loc,$folder.$file);
 echo $id." ".$title." ".$file." ",$file_type." ".$file_size;
$insert="UPDATE job SET title='$title',file='$file',type='$file_type',size='$file_size' WHERE SI_NO='$id'";
if(mysqli_query($cn,$insert)){
	$_SESSION['edit']=2;
	header("location:job_view.php");
}else{
	echo "Error!";
}
		
	}
		?>

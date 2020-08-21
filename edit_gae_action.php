<?php
session_start();
	if(isset($_POST['update'])){
		include ("dbconnect.php");
	$id=$_POST['update'];
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

if($filename==""){
$insert="UPDATE gae SET name_of_org='$org',name='$name',designation='$desn',contact='$contact',email='$email',office='$office',thana='$thana',remarks='$remarks',ocontact='$ocon',dob='$dob',dom='$dom' WHERE SI_NO='$id'";
if(mysqli_query($cn,$insert)){
	$_SESSION['edit']=2;
	header("location:gae.php");
}else{
	echo "Error!";
}
}
else if(in_array($ext, $array)){
    $insert="UPDATE gae SET name_of_org='$org',name='$name',designation='$desn',contact='$contact',email='$email',office='$office',thana='$thana',remarks='$remarks',img_name='$filename',image='$tmpname',ocontact='$ocon',dob='$dob',dom='$dom' WHERE SI_NO='$id'";
    if(mysqli_query($cn,$insert)){
	$_SESSION['edit']=2;
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

<?php
session_start();

	if(isset($_POST['update'])){
		include("dbconnect.php");
	$id=$_POST['update'];
	$en=$_POST['en'];
$oa=$_POST['oa'];
$cnn=$_POST['cn'];
$th=$_POST['th'];
$des=$_POST['des'];
$mail=$_POST['mail'];
$eq=$_POST['eq'];
$uc=$_POST['uc'];
$y=$_POST['y'];
$ac=$_POST['ac'];
$db=$_POST['db'];
$md=$_POST['md'];
$hb=$_POST['hb'];
$ic=$_POST['ic'];

$filename = addslashes($_FILES['image']['name']);
$tmpname = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$filetype = addslashes($_FILES['image']['type']);
$filesize = addslashes($_FILES['image']['size']);
$array = array('jpg','jpeg','png','PNG','JPG','PSD');
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if($filename==""){
$insert="UPDATE `pe` SET `E_N`='$en',`O_A`='$oa',`C_N`='$cnn',`Thana`='$th',`Des`='$des',
`E_Mail`='$mail',`E_Q`='$eq',`U_C`='$uc',`Year`='$y',`A_C`='$ac',`D_of_B`='$db',`M_D`='$md',`Hobby`='$hb',`I_C`='$ic' WHERE SI_NO='$id'";
if(mysqli_query($cn,$insert)){
	$_SESSION['edit']=2;
	header("location:pe.php");
}else{
	echo "Error!";
}
}
else if(in_array($ext, $array)){
    $insert="UPDATE `pe` SET `E_N`='$en',`O_A`='$oa',`C_N`='$cnn',`Thana`='$th',`Des`='$des',
`E_Mail`='$mail',`E_Q`='$eq',`U_C`='$uc',`Year`='$y',`A_C`='$ac',`D_of_B`='$db',`M_D`='$md',`Hobby`='$hb',`I_C`='$ic',name='$filename',image='$tmpname' WHERE SI_NO='$id'";
if(mysqli_query($cn,$insert)){
	$_SESSION['edit']=2;
	header("location:pe.php");
}else{
	echo "Error!";
}
}
else{
    	echo "Unsupported image format!";
}
	}
		?>

<?php
session_start();
if(isset($_POST['submit'])){
include("dbconnect.php");
//ini_set( "display_errors", 0); 
$dis=$_SESSION["dis"];
$_SESSION["dis"]=$dis;

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
$array = array('jpg','jpeg','png');
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if(in_array($ext, $array)||$filename==""){
$insert="INSERT INTO `pe`(`E_N`, `O_A`, `C_N`, `Thana`, `Des`, `E_Mail`, `E_Q`, `U_C`, `Year`, 
`A_C`, `D_of_B`, `M_D`, `Hobby`, `I_C`, `district`,`name`,`image`)
VALUES ('$en','$oa','$cnn','$th','$des','$mail','$eq','$uc','$y','$ac','$db','$md','$hb','$ic','$dis','$filename','$tmpname')";
if(mysqli_query($cn,$insert)){
	$_SESSION['add']=3;
	header("location:pe.php");
}
else{
	echo "Failed";
}

}
else{
    echo "Unsupported Format of Image";
}
}
?>

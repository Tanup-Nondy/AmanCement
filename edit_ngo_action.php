<?php
session_start();
	if(isset($_POST['update'])){
		include("dbconnect.php");
	$id=$_POST['update'];
	$cat=$_POST['cat'];
$n_com=$_POST['n_com'];
$po_up=$_POST['po_up'];
$n_d_m=$_POST['n_d_m'];
$pos=$_POST['pos'];
$ads=$_POST['ads'];
$mp=$_POST['mp'];
$pp=$_POST['pp'];
$MP=$_POST['MP'];
//$id=$_POST['update'];
//echo $name.$desn.$contact.$email.$office.$thana.$remarks.$id;
$insert="UPDATE ngo SET Category='$cat',Name_of_com='$n_com',PO_UP='$po_up',Name_of_des_maker='$n_d_m',Position='$pos',Address='$ads',
Mob_phn='$mp',Pro_Per='$pp',Mobile_Phn='$MP' WHERE SI_NO='$id'";
if(mysqli_query($cn,$insert)){
	$_SESSION['edit']=2;
	header("location:ngo.php");
}else{
	echo "Error!";
}
		
	}
		?>

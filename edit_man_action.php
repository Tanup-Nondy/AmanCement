<?php
session_start();
	if(isset($_POST['update'])){
		include ("dbconnect.php");
	$id=$_POST['update'];
$name=$_POST['name'];
$nature=$_POST['nature'];
$address=$_POST['address'];
$p_name=$_POST['p_name'];
$shop_contact=$_POST['shop_contact'];
$p_birth=$_POST['p_birth'];
$p_marriage=$_POST['p_marriage'];
$a_officer=$_POST['a_officer'];
$year=$_POST['year'];
$month=$_POST['month'];
$brand=$_POST['brand'];
$volume=$_POST['volume'];
$free_bag=$_POST['free_bag'];
$cnf_price=$_POST['cnf_price'];
$fob_price=$_POST['fob_price'];
$d_commision=$_POST['d_commision'];
$r_commision=$_POST['r_commision'];
$other=$_POST['other'];

//$id=$_POST['update'];
//echo $name.$desn.$contact.$email.$office.$thana.$remarks.$id;
$insert="UPDATE ret SET name='name',nature='$nature',address='$address',p_name='$p_name',shop_contact='$shop_contact',p_birth='$p_birth', p_marriage='$p_marriage',a_officer='$a_officer',year='$year',month='$month',brand='$brand',volume='$volume',free_bag='$free_bag',cnf_price='$cnf_price',fob_price='$fob_price',d_commision='$d_commision',r_commision='$r_commision',other='$other' WHERE SI_NO='$id'";
if(mysqli_query($cn,$insert)){
	$_SESSION['edit']=2;
	header("location:man.php");
}else{
	echo "Error!";
}
		
	}
		?>

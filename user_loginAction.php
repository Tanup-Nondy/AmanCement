<?php
	session_start();
	//sever connection
	include "dbconnect.php";
	$email=$_POST['email'];
	$pass=$_POST['password'];
	
	//database selection
//	mysql_select_db("cement",$connect);
	
	$query="SELECT * FROM registration WHERE Email='$email' AND Password='$pass'";
	$result=mysqli_query($cn,$query);
	
	$count=mysqli_num_rows($result);
	
	if($count==1)
	{
		//echo "Successfully loged in";
		$_SESSION['user']=1;
		header("location:home.php");
	}
	else
	{
		header("location:user_login.php");
	}
	
	
	mysqli_close($connect);
?>

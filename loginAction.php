<?php
//sever connection
	session_start();
	include "dbconnect.php";
	
	$uname=$_POST['username'];
	$pass=$_POST['password'];
	
	//database selection
	//mysqli_select_db("cement",$connect);
	
	$query="SELECT * FROM login WHERE username='$uname' AND password='$pass'";
	$result=mysqli_query($cn,$query);
	
	$count=mysqli_num_rows($result);
	
	if($count==1)
	{
		//echo "Successfully loged in";
		$_SESSION['admin']=2;
		header("location:option.php");
	}
	else
	{
		header("location:home.php");
	}
	mysqli_close($cn);
?>
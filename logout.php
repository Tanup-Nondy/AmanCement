<?php
	session_start();
	if($_SESSION['user']==1){
		unset($_SESSION['user']);
		header("location:index.php");
	}
	else if($_SESSION['admin']==2){
		unset($_SESSION['admin']);
		header("location:index.php");
	}

?>
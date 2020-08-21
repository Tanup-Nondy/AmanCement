<?php
    //$cn=mysqli_connect("localhost","root","");
   	include ("dbconnect.php");
        $name=$_POST['name'];
        $contact=$_POST['contact'];
		$ea=$_POST['ea'];
		$dob=$_POST['dob'];
        $a=$_POST['a'];
		$pass=$_POST['pass'];
     //mysqli_select_db($cn,"cement");
     $qu="INSERT INTO `registration`(`Name`, `Contact_number`, `Email`, `Date_of_Birth`, `Address`, `Password`)
	 VALUES('$name','$contact','$ea','$dob','$a','$pass')";
     $result=mysqli_query($cn,$qu);
 	 if($result)
	  {
	      header("location:index.php");
	   }
	  else
	 {
	 	die("Could not insert".mysqli_error());
	  }
    mysqli_close($cn);

?>
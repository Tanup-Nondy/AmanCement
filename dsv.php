<?php
session_start();
ini_set( "display_errors", 0); 
$ad=5;
$us=6;
if($_SESSION['admin']){
    $ad=$_SESSION['admin'];
}
if($_SESSION['user']){
    $us=$_SESSION['user'];
}
if($ad!=2 && $us!=1){
    //echo $_SESSION['admin']."first";
	header("location:index.php");
}

if($_SESSION['user']==1){
	header("location:user_dsv.php");
}
?>
<?php
ini_set( "display_errors", 0); 
if($_SESSION['edit']==2){
	unset($_SESSION['edit']);
	echo '<script> alert("Data has been Updated.");</script>';
	
	}
?>
<?php
ini_set( "display_errors", 0); 
if($_SESSION['add']==3){
	unset($_SESSION['add']);
	echo '<script> alert("Data has been added.");</script>';
	
	}
?>

<!DOCTYPE html>
<html>
<head>
<title>Cement Tech Bd</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<div class="bgded" style="background-image:url('images/demo/backgrounds/pur.jpg');"> 
 
  <div class="wrapper overlay">
    <header id="header" class="hoc clear">
      <nav id="mainav" class="clear"> 
       <div id="logo"> 
        <!-- ################################################################################################ -->
        <h1><a href="index.html">Cement Tech Bd</a></h1>
		<br>
        <p>2, Ishakha Avenue ,Sector-06, Uttara, Dhaka-1230</p>
        <!-- ################################################################################################ -->
      </br>
	
	 
	  </div>
        <ul class="clear">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a class="drop" href="#">Dhaka</a>
            <ul>
			
              <li><a href="dhaka.php">Dhaka</a></li>
              <li><a href="faridpur.php">Faridpur</a></li>
              <li><a href="gazipur.php">Gazipur</a></li>
              <li><a href="gopalganj.php">Gopalganj</a></li>
              <li><a href="jamalpur.php">Jamalpur</a></li>
			  <li><a href="kishoreganj.php">Kishoreganj</a></li>
			  <li><a href="madaripur.php">Madaripur</a></li>
              <li><a href="manikganj.php">Manikganj</a></li>
              <li><a href="munshiganj.php">Munshiganj</a></li>
              <li><a href="mymensing.php">Mymensing</a></li>
			  <li><a href="narayanganj.php">Narayanganj</a></li>
			  <li><a href="narsingdi.php">Narsingdi</a></li>
              <li><a href="netrokona.php">Netrokona</a></li>
              <li><a href="shariatpur.php">Shariatpur</a></li>
              <li><a href="sherpur.php">Sherpur</a></li>
              <li><a href="tangail.php">Tangail</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Chittagong</a>
            <ul>
			
              <li><a href="bandarban.php">Bandarban</a></li>
              <li><a href="brahmanbaria.php">Brahmanbaria</a></li>
              <li><a href="chandpur.php">Chandpur</a></li>
              <li><a href="chittagong.php">Chittagong</a></li>
              <li><a href="comilla.php">Comilla</a></li>
			  <li><a href="coxsbazar.php">Coxsbazar</a></li>
			  <li><a href="feni.php">Feni</a></li>
              <li><a href="khagrachari.php">Khagrachari</a></li>
              <li><a href="lakhsmipur.php">Lakhsmipur</a></li>
              <li><a href="noakhali.php">Noakhali</a></li>
			  <li><a href="rangamati.php">Rangamati</a></li>
            </ul>
          </li>
		  <li><a class="drop" href="#">Rajshahi</a>
		  <ul>
            <li><a href="bogra.php">Bogra</a></li>
              <li><a href="chapainawabganj.php">Chapainawabganj</a></li>
              <li><a href="joypurhat.php">Joypurhat</a></li>
              <li><a href="naogaon.php">Naogaon</a></li>
              <li><a href="natore.php">Natore</a></li>
			  <li><a href="pabna.php">Pabna</a></li>
			  <li><a href="rajshahi.php">Rajshahi</a></li>
              <li><a href="sirajganj.php">Sirajganj</a></li>
			  </ul>
          </li>
		  <li><a class="drop" href="#">Khulna</a>
		  <ul>
            <li><a href="bagerhat.php">Bagerhat</a></li>
              <li><a href="chuadanga.php">Chuadanga</a></li>
              <li><a href="jessore.php">Jessore</a></li>
              <li><a href="jhenaidah.php">Jhenaidah</a></li>
              <li><a href="khulna.php">Khulna</a></li>
			  <li><a href="kushtia.php">Kushtia</a></li>
			  <li><a href="magura.php">Magura</a></li>
              <li><a href="meherpur.php">Meherpur</a></li>
              <li><a href="narail.php">Narail</a></li>
              <li><a href="satkhira.php">Satkhira</a></li>
			  </ul>
          </li>
		  
		  <li><a class="drop" href="#">Rangpur</a>
		  <ul>
            <li><a href="dinajpur.php">Dinajpur</a></li>
              <li><a href="gaibandha.php">Gaibandha</a></li>
              <li><a href="kurigram.php">Kurigram</a></li>
              <li><a href="lalmonirhat.php">Lalmonirhat</a></li>
              <li><a href="nilphamari.php">Nilphamari</a></li>
			  <li><a href="panchagarh.php">Panchagarh</a></li>
			  <li><a href="rangpur.php">Rangpur</a></li>
              <li><a href="thakurgaon.php">Thakurgaon</a></li>
			 </ul>
          </li>
		  <li><a class="drop" href="#">Sylhet</a>
		  <ul>
            <li><a href="habiganj.php">Habiganj</a></li>
              <li><a href="moulvibazar.php">Moulvibazar</a></li>
              <li><a href="sunamganj.php">Sunamganj</a></li>
              <li><a href="sylhet.php">Sylhet</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Barisal</a>
            <ul>
			
              <li><a href="barguna.php">Barguna</a></li>
              <li><a href="barisal.php">Barisal</a></li>
              <li><a href="bhola.php">Bhola</a></li>
              <li><a href="jhalokathi.php">Jhalokathi</a></li>
              <li><a href="patuakhali.php">Patuakhali</a></li>
			  <li><a href="pirojpur.php">Pirojpur</a></li>
			  
            </ul>
          </li>
		  <li><a href="logout.php">Logout</a> 
		  
          </li>
        </ul>
        <!-- ################################################################################################ -->
      </nav>
	 <div class="bgded overlay">
	  <center><h1><u>Total List</u></h1>
	  <h2><?php $name=$_SESSION["dis"]; 
	  echo $name; 
	  ?>
	  </h2>
	  <form method="post" action="dsv_action.php" > 
	  <button type="submit" style="color:blue;" value="add" name="add">Add Data</button>
	  </form>
	  </br>
	  <button type="submit" style="color:blue;" value="print" name="print"><a href="print_dsv.php"> Print Data</a></button>
	  </center>
	  </br>
	  </div>
	  </div>
	  <div id="div-id-name">
	  <table border="1 px solid white" width="100%">
			
				<tr>
					<th>SI_No</th>
					
					<th>Company</th>
					<th>Brand</th>
					<th>Sales Volume(MT)</th>
					<th>Year</th>
					<th>Month</th>
					<th>Remarks</th>
					<th colspan="3">Actions</th>
				</tr>
				<!--<tr>
				<th colspan="6">Total:</th>
				</tr>
				<tr>
				<th colspan="6">Maximum Sales Volume(MT):</th>
				</tr>
				<tr>
				<th colspan="6">Aman Cement Market Share:</th>
				</tr>-->
<?php
	

ini_set( "display_errors", 0); 
include("dbconnect.php");
	//$name=$_POST['dist'];
	//$_SESSION["update"]="$name";
	$select="SELECT * FROM `dsv` where district='$name'";
	$chk=mysqli_query($cn,$select);
	if($chk){
		//echo '<form method="post" action="edit.php">';
		while($row=mysqli_fetch_array($chk)){
							
								?>
							    <tr style="color:black">
								<td><?php echo $row['SI_NO'];?></td>
								<td><?php echo $row['Company'];?></td>
								<td><?php echo $row['Brand'];?></td>
								<td><?php echo $row['S_V'];?></td>
								<td><?php echo $row['year'];?></td>
								<td><?php echo $row['month'];?></td>
								<td><?php echo $row['Remarks'];?></td>
								<form method="post" action="view_single_dsv.php" >
								<td><button style="color:green" value="<?php echo $row['SI_NO'];?>" name="view">View</button></td>
								</form>
								<form method="post" action="edit_dsv.php" >
								<td><button style="color:green" value="<?php echo $row['SI_NO'];?>" name="update">Update</button></td>
								</form>
								<!--<td><button style="color:green" value="<?php echo $row['SI_NO'];?>" name="update">Update</button></td>-->
								<form method="post" action="dsv_action.php" >
								<td><button style="color:red" value="<?php echo $row['SI_NO'];?>" name="delete">Delete</button></td>
								</form>
								<?php
								echo '</tr>';
								}
								
	}
	
	
?>

</table>
</div>
<!--</form>
<!--</div>-->
    </header>
    <div class="fix footer">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>



	
  <!--</div>-->
  
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>

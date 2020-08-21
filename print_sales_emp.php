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
?>


<?php include 'admin_inc/head.php'?>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="home.php" class="scrollto">CementTechBd</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

<?php include 'admin_inc/nav.php'?>
	  
    </div>
  </header><!-- #header -->


  <main id="main">
  
    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Print Data</h3>
          <center>
		  <h2><?php $name=$_SESSION["dis"]; 
		  echo $name; 
		  ?>
		  </h2>
		  <!--<form method="post" action="print_gae.php" >-->
		  <button type="submit" class="btn btn-outline-primary" value="print" name="print"><a href="#" id="print" onclick="javascript:printlayer('div-id-name')">Print</a></button>
		  <!--</form>-->
		  </center>
        </header>
		
      </div>
    </section><!-- #services -->

  </main>
  
	  <div id="div-id-name">
	      <center><h1 style="color:lightgreen"><b><u>Sales Employee list</u></b></h1></center>
	      <div class="data">
	  <table border="1 px solid white" width="100%" cellspacing="0px">
			
				<tr>
					<th>SI No.</th>
					<th>Name</th>
					<th>Designation</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Working Area</th>
					<th>Total Working Experience</th>
				</tr>
<?php
	
	
include ("dbconnect.php");
	$des=$_SESSION['des'];
	$company=$_SESSION['com'];
	$area=$_SESSION['area'];
	foreach($des AS $org){
	    if($area=='All'){
	       $search="SELECT * FROM `sales_emp` WHERE designation='$org' AND company='$company'"; 
	    }
	    else{
	$search="SELECT * FROM `sales_emp` WHERE designation='$org' AND area='$area' AND company='$company'";
	    }
	$chk=mysqli_query($cn,$select);
	if($chk){
	    $c=0;
		//echo '<form method="post" action="edit.php">';
		while($row=mysqli_fetch_array($chk)){
								//echo '<tr style="color:black">';
								//echo '<td>'.$row['SI_NO'].'</td>';
								$c=$c+1;
								?>
							    <tr style="color:black">
								<td><?php echo $c;?></td>
								<td><?php echo $row['name'];?></td>
								<td><?php echo $row['designation'];?></td>
								<td><?php echo $row['phone'];?></td>
								<td><?php echo $row['email'];?></td>
								<td><?php echo $row['area'];?></td>
								<td><?php echo $row['experience'];?></td>
								<?php
								echo '</tr>';
								}
								
	}
	}	
	
?>


		</table>
	  </div>
	</div>
	<div class="card-footer small text-muted">Data Table</div>
  </div>
</div>

	
<?php include 'admin_inc/footer.php'?>
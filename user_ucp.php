<?php
session_start();
ini_set( "display_errors", 0); 
$us=6;
if($_SESSION['user']){
    $us=$_SESSION['user'];
}
if($us!=1){
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
          <h3>Upcoming Porjects List</h3>
          <center>
		  <h2><?php $name=$_SESSION["dis"]; 
		  echo $name; 
		  ?>
		  </h2>
		  </center>
        </header>
        
		<center>
		
		<div class="row">
		
          <div class="col-lg-12 col-md-9 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><button class="form-control" type="submit" value="print" name="print"><a href="print_ucp.php">Print Data</a></button></h4>
          </div>
		  
        </div>

		</center>
		
      </div>
    </section><!-- #services -->

<div class="container-fluid">
  <!-- Example DataTables Card-->
  <div class="card mb-3">
	<div class="card-header">
	  <i class="fa fa-table"></i> Upcoming Project List of <?php $name=$_SESSION["dis"]; 
		  echo $name; 
		  ?> District</div>
	<div class="card-body">
	  <div class="table-responsive">
		<table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
		  <thead>
			<tr>
					<th>SI_NO</th>
					<th>Project Name</th>
					<th>Project Detail</th>
					<th>Implementation Authority</th>
					<th>Consultant</th>
					<th>Location</th>
					<th>Contractor</th>
					<th>Founded By</th>
					<th>Project Cost (BDT million)</th>
					<th>Start Time</th>
					<th>Ending Time</th>
					<th>Duration</th>
					<th>Remarks</th>
				<th><center>Actions</center></th>
			</tr>
		  </thead>

<?php
	
	
include("dbconnect.php");
	
	$select="SELECT * FROM `ucp`where district='$name'";
	$chk=mysqli_query($cn,$select);
	if($chk){
		
		while($row=mysqli_fetch_array($chk)){
								
								?>
							    <tr style="color:black">
								<td><?php echo $row['SI_NO'];?></td>
								<td><?php echo $row['P_Name'];?></td>
								<td><?php echo $row['P_Details'];?></td>
								<td><?php echo $row['Im_Au'];?></td>
								<td><?php echo $row['Consultant'];?></td>
								<td><?php echo $row['Location'];?></td>
								<td><?php echo $row['Contractor'];?></td>
								<td><?php echo $row['Founded_By'];?></td>
								<td><?php echo $row['P_C'];?></td>
								<td><?php echo $row['S_Time'];?></td>
								<td><?php echo $row['E_Time'];?></td>
								<td><?php echo $row['Duration'];?></td>
								<td><?php echo $row['Remarks'];?></td>
								<form method="post" action="view_single_ucp.php" >
								<td><center><button type="submit" class="btn btn-outline-primary" value="<?php echo $row['SI_NO'];?>" name="view">View</button></center></td>
								</form>
								<?php
								echo '</tr>';
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
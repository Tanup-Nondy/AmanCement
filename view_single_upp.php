<?php
session_start();
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
	  <center>
	  <h3>Personal Data</h3>
	  <!--<form method="post" action="print_gae.php" >-->
	  <button type="submit"  class="btn btn-outline-primary" value="print" name="print"><a href="#" id="print" onclick="javascript:printlayer('div-id-name')">Print</a></button>
	  <!--</form>-->
	  </center>
	</header>
	
  </div>
</section><!-- #services -->

</main>

<div class="container-fluid" id="div-id-name">
  <!-- Example DataTables Card-->
  <div class="card mb-3">
	<div class="card-header">
	  <i class="fa fa-table"></i> Single Data of Upcoming Project</div>
	<div class="card-body">
	  <div class="table-responsive">
		<table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0" border="1">
		  <thead>
			<tr>
					<th>SI NO.</th>
					<th>Project Name</th>
					<th>Project Measurement</th>
					<th>Implementation Authority</th>
					<th>Consultantr</th>
					<th>Contractor</th>
					<th>Founded By</th>
					<th>Project Cost</th>
					<th>Approx Consumption</th>
					<th>Cement Consumption Per Month</th>
					<th>Start Time</th>
					<th>Ending Time</th>
					<th>Duration</th>
					<th>Status of the Project</th>
					<th>No. of Visit</th>
					<th>Requirement</th>
					<th>Improvement</th>
					<th>Remarks</th>
			</tr>
		  </thead>
		
<?php
	
	
include("dbconnect.php");
	$name=$_SESSION["dis"]; 
	$id=$_POST['view'];
	//$_SESSION["update"]="$name";
	$select="SELECT * FROM `upp`where SI_NO='$id'";
	$chk=mysqli_query($cn,$select);
	if($chk){
	    $c=0;
		//echo '<form method="post" action="edit.php">';
		while($row=mysqli_fetch_array($chk)){
		    $c=$c+1;
								//echo '<tr style="color:black">';
								//echo '<td>'.$row['SI_NO'].'</td>';
								?>
							     <tr style="color:black">
								<td><?php echo $row['pname'];?></td>
								<td><?php echo $row['pmeasure'];?></td>
								<td><?php echo $row['iauthority'];?></td>
								<td><?php echo $row['consultant'];?></td>
								<td><?php echo $row['contructor'];?></td>
								<td><?php echo $row['fb'];?></td>
								<td><?php echo $row['pc'];?></td>
								<td><?php echo $row['ac'];?></td>
								<td><?php echo $row['cc'];?></td>
								<td><?php echo $row['st'];?></td>
								<td><?php echo $row['et'];?></td>
								<td><?php echo $row['dur'];?></td>
								<td><?php echo $row['sp'];?></td>
								<td><?php echo $row['nv'];?></td>
								<td><?php echo $row['req'];?></td>
								<td><?php echo $row['improve'];?></td>
								<td><?php echo $row['remarks'];?></td>
								
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
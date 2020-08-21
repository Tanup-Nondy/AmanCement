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
  
<div class="container-fluid">
  <!-- Example DataTables Card-->
  <div class="card mb-3">
	<div class="card-header">
	  <i class="fa fa-table"></i> Employee List of <?php $name=$_SESSION["dis"]; 
		  echo $name; 
		  ?> District</div>
	<div class="card-body">
	  <div class="table-responsive">
		<table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
		  <thead>
			<tr>
					<th>SI_NO</th>
					<th>Company </th>
					<th>Brand</th>
					<th>Total Sales Man</th>
					<th>Name of Head Of Sales Man</th>
					<th>Designation of Head of Sales</th>
					<th>Mobile of Head of Sales</th>
					<th>Technical Person</th>
					<th>Designation of Technical Person</th>
					<th>Mobile of Technical Person</th>
					<th>Remarks</th>
			</tr>
		  </thead>

<?php
	
	
ini_set( "display_errors", 0); 
include("dbconnect.php");
	$name=$_SESSION["dis"]; 
	$id=$_POST['view'];
	//$_SESSION["update"]="$name";
$select="SELECT * FROM `emp`where SI_NO='$id'";
	$chk=mysqli_query($cn,$select);
	if($chk){
		//echo '<form method="post" action="edit.php">';
		while($row=mysqli_fetch_array($chk)){
								
								?>
							     <tr style="color:black">
								<td><?php echo $row['SI_NO'];?></td>
								<td><?php echo $row['Company'];?></td>
								<td><?php echo $row['Brand'];?></td>
								<td><?php echo $row['T_S_M'];?></td>
								<td><?php echo $row['N_S_M'];?></td>
								<td><?php echo $row['D_S_M'];?></td>
								<td><?php echo $row['M_H_S'];?></td>
								<td><?php echo $row['T_P'];?></td>
								<td><?php echo $row['D_T_P'];?></td>
								<td><?php echo $row['M_T_P'];?></td>
								
								<td><?php echo $row['Remarks'];?></td>
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
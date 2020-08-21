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
	  <i class="fa fa-table"></i> Personal Data of Semi Autonomous of <?php $name=$_SESSION["dis"]; echo $name; ?> District</div>
	<div class="card-body">
	  <div class="table-responsive">
		<table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0" border="1">
		  <thead>
			<tr>
				<th>Name of Organization</th>
				<th>Name</th>
				<th>Designation</th>
				<th>Contact</th>
				<th>Email</th>
				<th>Office</th>
				<th>Thana</th>
				<th>Remarks</th>
				<th>Image</th>
			</tr>
		  </thead>

		  
<?php

include ("dbconnect.php");
	$name=$_SESSION["dis"]; 
	$id=$_POST['view'];
	//$_SESSION["update"]="$name";
	$select="SELECT * FROM `sa`where SI_NO='$id'";
	$chk=mysqli_query($cn,$select);
	if($chk){
		//echo '<form method="post" action="edit.php">';
		while($row=mysqli_fetch_array($chk)){
								//echo '<tr style="color:black">';
								//echo '<td>'.$row['SI_NO'].'</td>';
								?>
							    <tr style="color:black">
								<td><?php echo $row['name_of_org'];?></td>
								<td><?php echo $row['name'];?></td>
								<td><?php echo $row['designation'];?></td>
								<td><?php echo $row['contact'];?></td>
								<td><?php echo $row['email'];?></td>
								<td><?php echo $row['office'];?></td>
								<td><?php echo $row['thana'];?></td>
								<td><?php echo $row['remarks'];?></td>
								<td style="font-size:10px;width:50px;height:25px;"><?php 
								echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"width="10px" height="10px">';?></td>
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
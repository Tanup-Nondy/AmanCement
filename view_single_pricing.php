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
	  <i class="fa fa-table"></i> Personal Data of Pricing of <?php $name=$_SESSION["dis"]; echo $name; ?> District</div>
	<div class="card-body">
	  <div class="table-responsive">
		<table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0" border="1">
		  <thead>
			<tr>
					<th>Name of Company</th>
					<th>District</th>
					<th>Thana/Upozila</th>
					<th>Type of Cement </th>
					<th>C&amp;F Price</th>
					<th>Truck Fare</th>
					<th>FOB Rate</th>
					<th>Free Bag</th>
					<th>Dealer Commission </th>
					<th>Rolling Commission </th>
					<th>Target Commission </th>
					<th>Eclusive Commission (D+R)</th>
					<th>Yearly/ Hidden  Commission </th>
					<th>Retail Commission  </th>
					<th>Delivery Commission </th>
					<th>Spot discount</th>
					<th>Package-1 Name</th>
					<th>Tk</th>
					<th>Package-2 Name </th>
					<th>Tk</th>
					<th>Package-3 Name</th>
					<th>Tk </th>
					<th>Package-4 Name</th>
					<th>Tk</th>
					<th>TOTAL Commission </th>
					<th>NSP C&amp;F</th>
					<th>NSP-FOB</th>
			</tr>
		  </thead>

		  
<?php
	
	
include ("dbconnect.php");
	$id=$_POST['view'];
	//$_SESSION["update"]="$name";
	$select="SELECT * FROM `pricing` WHERE SI_NO='$id'";
	$chk=mysqli_query($cn,$select);
	if($chk){
		//echo '<form method="post" action="edit.php">';
		while($row=mysqli_fetch_array($chk)){
								//echo '<tr style="color:black">';
								//echo '<td>'.$row['SI_NO'].'</td>';
								?>
							    <tr style="color:black">
								<td><?php echo $row['name'];?></td>
								<td><?php echo $row['district'];?></td>
								<td><?php echo $row['thana'];?></td>
								<td><?php echo $row['type'];?></td>
								<td><?php echo $row['cf'];?></td>
								<td><?php echo $row['truck'];?></td>
								<td><?php 
									$sub=$row['cf']-$row['truck'];
									echo $sub;
								?></td>
								<td><?php echo $row['free'];?></td>
								<td><?php echo $row['dc'];?></td>
								<td><?php echo $row['rc'];?></td>
								<td><?php echo $row['tc'];?></td>
								<td><?php echo $row['ec'];?></td>
								<td><?php echo $row['yc'];?></td>
								<td><?php echo $row['retc'];?></td>
								<td><?php echo $row['delc'];?></td>
								<td><?php echo $row['sd'];?></td>
								<td><?php echo $row['p1'];?></td>
								<td><?php echo $row['p1tk'];?></td>
								<td><?php echo $row['p2'];?></td>
								<td><?php echo $row['p2tk'];?></td>
								<td><?php echo $row['p3'];?></td>
								<td><?php echo $row['p3tk'];?></td>
								<td><?php echo $row['p4'];?></td>
								<td><?php echo $row['p4tk'];?></td>
								<td><?php 
								$t=$row['free']+$row['dc']+$row['rc']+$row['tc']+$row['ec']+$row['yc']+$row['retc']+$row['delc']+$row['sd']+$row['p1tk']+$row['p2tk']+$row['p3tk']+$row['p4tk'];
								echo $t;
								?></td>
								<td><?php 
								$n=$row['cf']-$t;
								echo $n;
								?></td>
								<td><?php 
								$f=$sub-$t;
								echo $f;
								?></td>
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
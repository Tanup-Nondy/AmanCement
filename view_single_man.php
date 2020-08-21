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
	  <i class="fa fa-table"></i> Personal Data of Retailer of <?php $name=$_SESSION["dis"]; echo $name; ?> District</div>
	<div class="card-body">
	  <div class="table-responsive">
		<table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0" border="1">
		  <thead>
			<tr>
					<th>Name of Distributor/Dealer</th>
					<th>Nature</th>
					<th>Address</th>
					<th>Name of Distributor/Dealer</th>
					<th>Shop Contact No</th>
					<th>Date of Birth of Proprietor</th>
					<th>Marriage Day of Proprietor</th>
					<th>Attached Officer's Name, Designation & ID</th>
					<th>Name of Brand</th>
					<th>Sales volume</th>
					<th>Free Bag</th>
					<th>CNF price </th>
					<th>FOB price</th>
					<th>Dealer Commision</th>
					<th>Retailer Commision </th>
					<th>Other Packages (Average per Bag)</th>
			</tr>
		  </thead>

<?php	
	
include ("dbconnect.php");
	$name=$_SESSION["dis"]; 
	$id=$_POST['view'];
	//$_SESSION["update"]="$name";
	$select="SELECT * FROM `ret` WHERE SI_NO='$id'";
	$chk=mysqli_query($cn,$select);
	if($chk){
		//echo '<form method="post" action="edit.php">';
		while($row=mysqli_fetch_array($chk)){
								//echo '<tr style="color:black">';
								//echo '<td>'.$row['SI_NO'].'</td>';
								?>
							    <tr style="color:black" class="table-info">
								<td><?php echo $row['name'];?></td>
								<td><?php echo $row['nature'];?></td>
								<td><?php echo $row['address'];?></td>
								<td><?php echo $row['p_name'];?></td>
								<td><?php echo $row['shop_contact'];?></td>
								<td><?php echo $row['p_birth'];?></td>
								<td><?php echo $row['p_marriage'];?></td>
								<td><?php echo $row['a_officer'];?></td>
								<td><?php echo $row['brand'];?></td>
								<td><?php echo $row['volume'];?></td>
								<td><?php echo $row['free_bag'];?></td>
								<td><?php echo $row['cnf_price'];?></td>
								<td><?php echo $row['fob_price'];?></td>
								<td><?php echo $row['d_commision'];?></td>
								<td><?php echo $row['r_commision'];?></td>
								<td><?php echo $row['other'];?></td>
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
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

<div class="container-fluid" id="div-id-name">
  <!-- Example DataTables Card-->
  <div class="card mb-3">
	<div class="card-header">
	  <i class="fa fa-table"></i> NGO List of <?php $name=$_SESSION["dis"];  echo $name; ?> District</div>
	<div class="card-body">
	  <div class="table-responsive">
		<table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0"  border="1">
		  <thead>
			<tr>
					<th>SI NO.</th>
					<th>Category</th>
					<th>Name of Company</th>
					<th>Potenial Ongoing/upcoming projects</th>
					<th>Name of the decision maker</th>
					<th>Position</th>
					<th>Address</th>
					<th>Mobile Phone</th>
					<th>Procurement  Person</th>
					<th>Mobile Phone</th>
			</tr>
		  </thead>

<?php
	
	
include ("dbconnect.php");
	$name=$_SESSION["dis"]; 
	//$_SESSION["update"]="$name";
	$select="SELECT `SI_NO`,`Category`, `Name_of_com`, `PO_UP`, `Name_of_des_maker`, `Position`, `Address`, `Mob_Phn`, `Pro_Per`, `Mobile_Phn` FROM `ngo` where district='$name'";
	$chk=mysqli_query($cn,$select);
	if($chk){
		//echo '<form method="post" action="edit.php">';
		while($row=mysqli_fetch_array($chk)){
								//echo '<tr style="color:black">';
								//echo '<td>'.$row['SI_NO'].'</td>';
								?>
							    <tr style="color:black">
								<td><?php echo $row['SI_NO'];?></td>
								<td><?php echo $row['Category'];?></td>
								<td><?php echo $row['Name_of_com'];?></td>
								<td><?php echo $row['PO_UP'];?></td>
								<td><?php echo $row['Name_of_des_maker'];?></td>
								<td><?php echo $row['Position'];?></td>
								<td><?php echo $row['Address'];?></td>
								<td><?php echo $row['Mob_Phn'];?></td>
								<td><?php echo $row['Pro_Per'];?></td>
								<td><?php echo $row['Mobile_Phn'];?></td>
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
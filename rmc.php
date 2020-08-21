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
	header("location:user_rmc.php");
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
          <h3>Total List</h3>
          <center>
		  <h2><?php $name=$_SESSION["dis"]; 
		  echo $name; 
		  ?>
		  </h2>
		  </center>
        </header>
        
		<center>
		
		<div class="row">
		
          <div class="col-lg-6 col-md-9 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><button class="form-control" type="submit" value="add" name="add"><a href="insert_rmc.php">Add Data</a></button></h4>
          </div>
          <div class="col-lg-6 col-md-9 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><button class="form-control" type="submit" value="print" name="print"><a href="print_rmc.php">Print Data</a></button></h4>
          </div>
		  
        </div>

		</center>
		
      </div>
    </section><!-- #services -->

  </main>
 
<div class="container-fluid">
  <!-- Example DataTables Card-->
  <div class="card mb-3">
	<div class="card-header">
	  <i class="fa fa-table"></i> Ready Mix Company List of <?php $name=$_SESSION["dis"]; 
		  echo $name; 
		  ?> District</div>
	<div class="card-body">
	  <div class="table-responsive">
		<table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
		  <thead>
			<tr>
					<th>SI_NO</th>
					<th>Category</th>
					<th>Name of Company</th>
					<th>Monthly Consumption</th>
					<th>Name of the decision maker</th>
					<th>Position</th>
					<th>Address</th>
					<th>Mobile Phone</th>
					<th>Procurement  Person</th>
					<th>P. Mobile Phone</th>
				<th colspan="3"><center>Actions</center></th>
			</tr>
		  </thead>
		  
<?php
	
	
include("dbconnect.php");
	
	$select="SELECT `SI_NO`,`Category`, `Name_of_com`, `PO_UP`, `Name_of_des_maker`, `Position`, `Address`, `Mob_Phn`, `Pro_Per`, `Mobile_Phn`, `district` FROM `rmc` where district='$name'";
	$chk=mysqli_query($cn,$select);
	if($chk){

		while($row=mysqli_fetch_array($chk)){
								
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
								<form method="post" action="view_single_rmc.php" >
								<td><button type="submit" class="btn btn-outline-primary" value="<?php echo $row['SI_NO'];?>" name="view">View</button></td>
								</form>
								<form method="post" action="edit_rmc.php" >
								<td><button type="submit" class="btn btn-outline-warning" value="<?php echo $row['SI_NO'];?>" name="update">Update</button></td>
								</form>
								<form method="post" action="rmc_action.php" >
								<td><button type="submit" class="btn btn-outline-danger" value="<?php echo $row['SI_NO'];?>" name="delete">Delete</button></td>
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
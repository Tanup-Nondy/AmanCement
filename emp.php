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
	header("location:user_emp.php");
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
		
          <div class="col-lg-6 col-md-9 box wow bounceInUp" data-wow-duration="1s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><button class="form-control" type="submit" value="add" name="add"><a href="insert_emp.php">Add Data</a></button></h4>
          </div>
          <div class="col-lg-6 col-md-9 box wow bounceInUp" data-wow-duration="1s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><button class="form-control" type="submit" value="print" name="print"><a href="print_emp.php">Print Data</a></button></h4>
          </div>
		  
        </div>

		</center>
		
      </div>
    </section><!-- #services -->

  </main>

<br>

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
				<th colspan="3"><center>Actions</center></th>
			</tr>
		  </thead>

<?php
	
	
ini_set( "display_errors", 0); 
include("dbconnect.php");
	
	$select="SELECT * FROM `emp`where district='$name'";
	$chk=mysqli_query($cn,$select);
	if($chk){
		
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
								<form method="post" action="view_single_emp.php" >
								<td><button type="submit" class="btn btn-outline-primary" value="<?php echo $row['SI_NO'];?>" name="view">View</button></td>
								</form>
								<form method="post" action="edit_emp.php" >
								<td><button type="submit" class="btn btn-outline-warning" value="<?php echo $row['SI_NO'];?>" name="update">Update</button></td>
								</form>
								
								<form method="post" action="emp_action.php" >
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

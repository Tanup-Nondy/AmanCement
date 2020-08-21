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
		
          <div class="col-lg-12 col-md-9 box wow bounceInUp" data-wow-duration="1s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><button class="form-control" type="submit" value="print" name="print"><a href="print_sa.php">Print Data</a></button></h4>
          </div>
        </div>

		</center>
		
      </div>
    </section><!-- #services -->

  </main>

<br>
  
<div class="container-fluid">
<div class="card mb-3"> 
<form class="form-inline" method="post" action="#">
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Category</label>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref"  name="cat[]" multiple="multiple">
		<option value="City Corporation" selected="">City Corporation</option>
		<option value="Municipal">Municipal </option>
		<option value="PDB">PDB</option>
		<option value="Wasa">Wasa </option>
		<option value="RAJUK">RAJUK</option>
		<option value="Others">Others</option>
  </select>

  <button type="submit" class="btn btn-primary my-1"  name="submit" value="submit">Submit</button>
</form>
</div>
</div>

<br>
  
<div class="container-fluid">
  <!-- Example DataTables Card-->
  <div class="card mb-3">
	<div class="card-header">
	  <i class="fa fa-table"></i> Personal Data of Semi Autonomous of <?php $name=$_SESSION["dis"]; echo $name; ?> District</div>
	<div class="card-body">
	  <div class="table-responsive">
		<table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
		  <thead>
			<tr>
				<th>SI No.</th>
				<th>Name of Organization</th>
				<th>Name</th>
				<th>Designation</th>
				<th>Persional Contact</th>
				<th>Official Contact</th>
				<th>Email</th>
				<th>Birth Date</th>
				<th>Marriage Date</th>
				<th>Office</th>
				<th>Thana</th>
				<th>Remarks</th>
				<th><center>Actions</center></th>
			</tr>
		  </thead>

<?php
if(isset($_POST['submit'])){
    $cat=$_POST['cat'];
    $_SESSION['cat']=$cat;
include ("dbconnect.php");
$c=0;
	//$name=$_POST['dist'];
	//$_SESSION["update"]="$name";
	foreach($cat AS $org){
	if($org=='Others'){
	    $select="SELECT * FROM `sa`where district='$name' AND name_of_org!='City Corporation' AND name_of_org!='Municipal' AND name_of_org!='PDB' AND name_of_org!='Wasa' AND name_of_org!='RAJUK'";
	}
	else{
	$select="SELECT * FROM `sa`where district='$name' AND name_of_org='$org'";
	}
	$chk=mysqli_query($cn,$select);
	if($chk){
		while($row=mysqli_fetch_array($chk)){
								$c=$c+1;
								?>
							    <tr style="color:black">
								<td><?php echo $c;?></td>
								<td><?php echo $row['name_of_org'];?></td>
								<td><?php echo $row['name'];?></td>
								<td><?php echo $row['designation'];?></td>
								<td><?php echo $row['contact'];?></td>
								<td><?php echo $row['ocontact'];?></td>
								<td><?php echo $row['email'];?></td>
								<td><?php echo $row['dob'];?></td>
								<td><?php echo $row['dom'];?></td>
								<td><?php echo $row['office'];?></td>
								<td><?php echo $row['thana'];?></td>
								<td><?php echo $row['remarks'];?></td>
								<form method="post" action="view_single_sa.php" >
								<td><center><button type="submit" class="btn btn-outline-primary" value="<?php echo $row['SI_NO'];?>" name="view">View</button></center></td>
								</form>
								<?php
								echo '</tr>';
								}
								
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
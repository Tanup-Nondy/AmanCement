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
            <h4 class="title"><button class="form-control" type="submit" value="print" name="print"><a href="print_pe.php">Print Data</a></button></h4>
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
	  <i class="fa fa-table"></i> Private Engineer List of <?php $name=$_SESSION["dis"]; echo $name; ?> District</div>
	<div class="card-body">
	  <div class="table-responsive">
		<table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
		  <thead>
			<tr>
				<th style="font-size:10px;">SI NO.</th>
				<th style="font-size:10px;">Engineer name</th>
				<th style="font-size:10px;">Office Address</th>
				<th style="font-size:10px;">Contact No.</th>
				<th style="font-size:10px;">Thana</th>
				<th style="font-size:10px;">Designation</th>
				<th style="font-size:10px;width:350px;">E_Mail</th>
				<th style="font-size:10px;">Educational Qualification</th>
				<th style="font-size:10px;">University
				/College</th>
				<th style="font-size:10px;">How to long working in this field(y)</th>
				<th style="font-size:10px;">Area Cover</th>
				<th style="font-size:10px;">Date of birth</th>
				<th style="font-size:10px;">Marriage Day</th>
				<th style="font-size:10px;">Hobby</th>
				<th style="font-size:10px;">Involve Community</th>
				<th><center>Actions</center></th>
			</tr>
		  </thead>


<?php
	
	
include("dbconnect.php");
	
	$select="SELECT * FROM `pe`where district='$name'";
	$chk=mysqli_query($cn,$select);
	if($chk){
$c=0;
		while($row=mysqli_fetch_array($chk)){
							$c=$c+1;	
								?>
							    <tr style="color:black">
								<td style="font-size:10px;"><?php echo $c;?></td>
								<td style="font-size:10px;" ><?php echo $row['E_N'];?></td>
								<td style="font-size:10px;"><?php echo $row['O_A'];?></td>
								<td style="font-size:10px;"><?php echo $row['C_N'];?></td>
								<td style="font-size:10px;"><?php echo $row['Thana'];?></td>
								<td style="font-size:10px;"><?php echo $row['Des'];?></td>
								<td style="font-size:10px;"><?php echo $row['E_Mail'];?></td>
								<td style="font-size:10px;"><?php echo $row['E_Q'];?></td>
								<td style="font-size:10px;"><?php echo $row['U_C'];?></td>
								<td style="font-size:10px;"><?php echo $row['Year'];?></td>
								<td style="font-size:10px;"><?php echo $row['A_C'];?></td>
								<td style="font-size:10px;"><?php echo $row['D_of_B'];?></td>
								<td style="font-size:10px;"><?php echo $row['M_D'];?></td>
								<td style="font-size:10px;"><?php echo $row['Hobby'];?></td>
								<td style="font-size:10px;"><?php echo $row['I_C'];?></td>
								<form method="post" action="view_single_pe.php" >
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
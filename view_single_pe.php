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
	  <i class="fa fa-table"></i> Government Agencies Engineers of <?php $name=$_SESSION["dis"]; echo $name; ?> District</div>
	<div class="card-body">
	  <div class="table-responsive">
		<table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0" border="1">
		  <thead>
			<tr>
					<th style="font-size:10px;width:150px;">Engineer name</th>
					<th style="font-size:10px;width:200px;">Office Address</th>
					<th style="font-size:10px;">Contact No.</th>
					<th style="font-size:10px;">Thana</th>
					<th style="font-size:10px;">Designation</th>
					<th style="font-size:10px;width:200px;">E_Mail</th>
					<th style="font-size:10px;">Educational Qualification</th>
					<th style="font-size:10px;">University
					/College</th>
					<th style="font-size:10px;">How to long working in this field(y)</th>
					<th style="font-size:10px;">Area Cover</th>
					<th style="font-size:10px;">Date of birth</th>
					<th style="font-size:10px;">Marriage Day</th>
					<th style="font-size:10px;">Hobby</th>
					<th style="font-size:10px;">Involve Community</th>
					<th style="font-size:10px;">Image</th>
			</tr>
		  </thead>

<?php
	
	
include ("dbconnect.php");
	$name=$_SESSION["dis"]; 
	$id=$_POST['view'];
	//$_SESSION["update"]="$name";
	$select="SELECT * FROM `pe`where SI_NO='$id'";
	$chk=mysqli_query($cn,$select);
	if($chk){
		//echo '<form method="post" action="edit.php">';
		while($row=mysqli_fetch_array($chk)){
								//echo '<tr style="color:black">';
								//echo '<td>'.$row['SI_NO'].'</td>';
								?>
							     <tr style="color:black">
								<tr style="color:black">
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
								<td style="font-size:10px;"><?php 
								echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"width="25px" height="25px">';?></td>
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
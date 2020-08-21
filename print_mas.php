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
	  <i class="fa fa-table"></i> Mason List of <?php $name=$_SESSION["dis"]; 
		  echo $name; 
		  ?> District</div>
	<div class="card-body">
	  <div class="table-responsive">
		<table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
		  <thead>
			<tr>
				<th>SI No.</th>	
				<th>Name of Mason</th>
				<th>Mobile No</th>
				<th>Voter Id No</th>
				<th>Mason Id</th>
				<th>Type</th>
				<th>Thana</th>
				<th>Word</th>
				<th>Remarks</th>
				<th colspan="3"><center>Actions</center></th>
			</tr>
		  </thead>

<?php
	
	
include ("dbconnect.php");
	$name=$_SESSION["dis"]; 
	//$_SESSION["update"]="$name";
	$select="SELECT `SI_NO`, `name`, `phone`, `voter_id`, `mason_id`, `type`, `district`, `thana`, `word`, `remarks` FROM `mas` WHERE district='$name'";
	$chk=mysqli_query($cn,$select);
	if($chk){
	    $c=0;
		//echo '<form method="post" action="edit.php">';
		while($row=mysqli_fetch_array($chk)){
		    $c=$c+1;
								//echo '<tr style="color:black">';
								//echo '<td>'.$row['SI_NO'].'</td>';
								?>
							    <tr style="color:black">
							<td style="color:black"><?php echo $c;?></td>
								<td style="color:black"><?php echo $row['name'];?></td>
								<td style="color:black"><?php echo $row['phone'];?></td>
								<td style="color:black"><?php echo $row['voter_id'];?></td>
								<td style="color:black"><?php echo $row['mason_id'];?></td>
								<td style="color:black"><?php echo $row['type'];?></td>
								<td style="color:black"><?php echo $row['thana'];?></td>
								<td style="color:black"><?php echo $row['word'];?></td>
								<td style="color:black"><?php echo $row['remarks'];?></td>
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
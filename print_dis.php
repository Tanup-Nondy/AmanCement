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
  
	  <div id="div-id-name" class="data">
	      <center><h1 style="color:lightgreen"><b><u>Distributors List of <?php $name=$_SESSION["dis"]; 
	  echo $name; 
	  ?> district</u></b></h1>
	  <h1 style="color:lightgreen"><b><u><?php  
	  $m=$_SESSION["month"];
	  $y=$_SESSION["year"];
	  echo $m."      ". $y;
	  ?></u></b></h1>
	  </center>
	  
	  <table border="1 px solid white" width="100%" cellspacing="0px">
			
				<tr class="table-info">
					<th>SI NO.</th>
					<th>Company </th>
					<th>Brand</th>
					<th>Delar Name</th>
					<th>Mobile No.</th>
					<th>Address</th>
					<th>Total Sales</th>
					<th>Remarks</th>
					
				</tr>
<?php
	
	
include("dbconnect.php");
	$name=$_SESSION["dis"]; 
	//$_SESSION["update"]="$name";
	$select="SELECT * FROM `dis`where district='$name' AND year='$y' AND month='$m'";
	$chk=mysqli_query($cn,$select);
	if($chk){
		$c=0;
		while($row=mysqli_fetch_array($chk)){
								$c=$c+1;
								?>
							    <tr style="color:black">
								<td><?php echo $c;?></td>
								<td><?php echo $row['Company'];?></td>
								<td><?php echo $row['Brand'];?></td>
								<td><?php echo $row['D_N'];?></td>
								<td><?php echo $row['Mob_No'];?></td>
								<td><?php echo $row['Address'];?></td>
								<td><?php echo $row['T_S'];?></td>
								<td><?php echo $row['Remarks'];?></td>
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
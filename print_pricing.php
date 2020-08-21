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
          <h3>Print Data - <?php $name=$_SESSION["dis"]; echo $name; ?></h3>
          <center>
		  <!--<form method="post" action="print_gae.php" >-->
		  <button type="submit" class="btn btn-outline-primary" value="print" name="print"><a href="#" id="print" onclick="javascript:printlayer('div-id-name')">Print</a></button>
		  <!--</form>-->
		  </center>
        </header>
		
      </div>
    </section><!-- #services -->

  </main>

	  <div id="div-id-name" class="data">
	      <center><h1 style="color:lightgreen"><b><u>Pricing List of <?php $name=$_SESSION["dis"]; 
	  echo $name; 
	  ?> District</u></b></h1></center>
	  <table border="1 px solid white" width="100%">
			
				<tr class="table-info">
					<th>SI No.</th>
					
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
<?php
	
	
include ("dbconnect.php");
$dis=$_SESSION["dis"];
	$m=$_SESSION['m'];
	$y=$_SESSION['y'];
	$select="SELECT * FROM `pricing` WHERE district='$dis' AND year='$y' AND month='$m'";
	$chk=mysqli_query($cn,$select);
	if($chk){
		$c=0;
		//echo '<form method="post" action="edit.php">';
		while($row=mysqli_fetch_array($chk)){
								//echo '<tr style="color:black">';
								//echo '<td>'.$row['SI_NO'].'</td>';
								$c=$c+1;
								?>
							    <tr style="color:black">
								<td><?php echo $c;?></td>
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

<?php include 'admin_inc/footer.php'?>
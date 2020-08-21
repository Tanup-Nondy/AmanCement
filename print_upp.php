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
		  <!--<form method="post" action="print_gae.php" >-->
		  <button type="submit" class="btn btn-outline-primary" value="print" name="print"><a href="#" id="print" onclick="javascript:printlayer('div-id-name')">Print</a></button>
		  <!--</form>-->
		  </center>
        </header>
		
      </div>
    </section><!-- #services -->

  </main>

	  <div id="div-id-name">
	  <table border="5 px solid black" class="table" width="100%">
			
				<tr class="table-info">
					<th>SI NO.</th>
					<th>Project Name</th>
					<th>Project Measurement</th>
					<th>Implementation Authority</th>
					<th>Consultantr</th>
					<th>Contractor</th>
					<th>Founded By</th>
					<th>Project Cost</th>
					<th>Approx Consumption</th>
					<th>Cement Consumption Per Month</th>
					<th>Start Time</th>
					<th>Ending Time</th>
					<th>Duration</th>
					<th>Status of the Project</th>
					<th>No. of Visit</th>
					<th>Requirement</th>
					<th>Improvement</th>
					<th>Remarks</th>
					
					
				</tr>
<?php
	
	
include("dbconnect.php");
	$name=$_SESSION["dis"]; 
	//$_SESSION["update"]="$name";
	$select="SELECT * FROM `upp`";
	$chk=mysqli_query($cn,$select);
		if($chk){
$c=0;
		while($row=mysqli_fetch_array($chk)){
								$c=$c+1;
								?>
							    <tr style="color:black">
								<td><?php echo $c;?></td>
								<td><?php echo $row['pname'];?></td>
								<td><?php echo $row['pmeasure'];?></td>
								<td><?php echo $row['iauthority'];?></td>
								<td><?php echo $row['consultant'];?></td>
								<td><?php echo $row['contructor'];?></td>
								<td><?php echo $row['fb'];?></td>
								<td><?php echo $row['pc'];?></td>
								<td><?php echo $row['ac'];?></td>
								<td><?php echo $row['cc'];?></td>
								<td><?php echo $row['st'];?></td>
								<td><?php echo $row['et'];?></td>
								<td><?php echo $row['dur'];?></td>
								<td><?php echo $row['sp'];?></td>
								<td><?php echo $row['nv'];?></td>
								<td><?php echo $row['req'];?></td>
								<td><?php echo $row['improve'];?></td>
								<td><?php echo $row['remarks'];?></td>
								<?php
								echo '</tr>';
								}
								
	}
	
	
?>

</table>
</div>

<?php include 'admin_inc/footer.php'?>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
<script type="text/javascript">
function printlayer(layer){
	var generator =window.open(",'name,");
	var layertext = document.getElementById(layer);
	generator.document.write(layertext.innerHTML.replace("Print"));
	generator.document.close();
	generator.print();
	generator.close();
}
</script>
</body>
</html>

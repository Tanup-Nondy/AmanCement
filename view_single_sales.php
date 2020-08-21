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

	  <div id="div-id-name">
	  <table border="1 px solid white" width="100%">
			
				<tr class="table-info">
					<th>SI No.</th>
					<th>Company</th>
					<th>Brand</th>
					<th>Sales Volume(MT)</th>
					<th>Remarks</th>
				</tr>
				<!--<tr>
				<th colspan="6">Total:</th>
				</tr>
				<tr>
				<th colspan="6">Maximum Sales Volume(MT):</th>
				</tr>
				<tr>
				<th colspan="6">Aman Cement Market Share:</th>
				</tr>-->
<?php
	
	
include ("dbconnect.php");
	$id=$_POST['view'];
	//$_SESSION["update"]="$name";
	$select="SELECT * FROM `dsv`where SI_NO='$id'";
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
								<td><?php echo $row['S_V'];?></td>
								<td><?php echo $row['Remarks'];?></td>
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
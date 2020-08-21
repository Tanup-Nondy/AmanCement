<?php
session_start();
ini_set( "display_errors", 0); 
$ad=5;
if($_SESSION['admin']){
    $ad=$_SESSION['admin'];
}
if($ad!=2){
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
          <h3>Update Entry</h3>
          <center>
		  <h2><?php $name=$_SESSION["dis"]; 
		  ?>
		  </h2>
		  </center>
        </header>
		
      </div>
    </section><!-- #services -->

  </main>
  
	  <?php 
	  ini_set( "display_errors", 0); 
include("dbconnect.php");
//session_start();
$name=$_SESSION['dis'];
	
	$id=$_POST['update'];
	$select="SELECT * FROM `op`where SI_NO='$id'";
	$chk=mysqli_query($cn,$select);
	if($chk){
		echo '<form method="post" action="edit_op_action.php">';
		//echo '<form method="post" action="gae.php">';
		while($row=mysqli_fetch_array($chk)){

	?>
		  
	  <div class="form-row">
		<div class="form-group col-md-6">
		  <label for="inputEmail4">Project Name</label>
		  <input type="text" class="form-control" name="p_n" value="<?php echo $row['P_Name'];?>">
		</div>
		<div class="form-group col-md-6">
		  <label for="inputPassword4">Project Detail</label>
		  <input type="text" class="form-control" name="p_d" value="<?php echo $row['P_Details'];?>">
		</div>
	  </div>
	  <div class="form-group">
		<label for="inputAddress">Implementation Authority</label>
		<input type="text" class="form-control" name="im_au" value="<?php echo $row['Im_Au'];?>">
	  </div>
	  <div class="form-group">
		<label for="inputAddress">Consultant</label>
		<input type="text" class="form-control" name="con" value="<?php echo $row['Consultant'];?>">
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-6">
		  <label for="inputEmail4">Location</label>
		  <input type="text" class="form-control" name="loc" value="<?php echo $row['Location'];?>">
		</div>
		<div class="form-group col-md-6">
		  <label for="inputPassword4">Contractor</label>
		  <input type="text" class="form-control" name="cont" value="<?php echo $row['Contractor'];?>">
		</div>
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-6">
		  <label for="inputCity">Founded By</label>
		  <input type="text" class="form-control" name="f_b" value="<?php echo $row['Founded_By'];?>">
		</div>
		<div class="form-group col-md-6">
		  <label for="inputState">Project Cost (BDT million)</label>
		  <input type="text" class="form-control" name="p_c" value="<?php echo $row['P_C'];?>">
		</div>
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-3">
		  <label for="inputCity">Start Time</label>
		  <input type="text" class="form-control" name="s_t" value="<?php echo $row['S_Time'];?>">
		</div>
		<div class="form-group col-md-3">
		  <label for="inputState">Ending Time</label>
		  <input type="text" class="form-control" name="e_t" value="<?php echo $row['E_Time'];?>">
		</div>
		<div class="form-group col-md-3">
		  <label for="inputCity">Duration</label>
		  <input type="text" class="form-control" name="d" value="<?php echo $row['Duration'];?>">
		</div>
		<div class="form-group col-md-3">
		  <label for="inputState">Remarks</label>
		  <input type="text" class="form-control" name="re" value="<?php echo $row['Remarks'];?>">
		</div>
	  </div>
		  
		  
	  <div class="form-group">
	  <center><button type="submit" class="btn btn-primary" name="update" value="<?php echo $row['SI_NO'];?>">Update</button></center>
	  </div>
	  
	  <?php

		}
		echo '</form>';
	}
	?>

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

</body>
</html>
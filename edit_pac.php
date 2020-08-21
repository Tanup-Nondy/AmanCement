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
		  echo $name; 
		  ?>
		  </h2>
		  </center>
        </header>
		
      </div>
    </section><!-- #services -->

  </main>

	  <?php 
	  include ("dbconnect.php");
	  ini_set( "display_errors", 0);
//session_start();
$name=$_SESSION['dis'];
	
	$id=$_POST['update'];
	$select="SELECT `SI_NO`,`name_of_org`, `name`, `designation`, `contact`, `email`, `office`, `district`, `thana`, `remarks` FROM `pac`where SI_NO='$id'";
	$chk=mysqli_query($cn,$select);
	if($chk){
		echo '<form method="post" action="edit_pac_action.php">';
		//echo '<form method="post" action="gae.php">';
		while($row=mysqli_fetch_array($chk)){

	?>
	  
	  <div class="form-group">
		<label for="inputAddress">Organization</label>
		<input type="text" class="form-control" name="org" value="<?php echo $row['name_of_org'];?>">
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-6">
		  <label for="inputEmail4">Name</label>
		  <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>">
		</div>
		<div class="form-group col-md-6">
		  <label for="inputPassword4">Designation</label>
		  <input type="text" class="form-control" name="desn" value="<?php echo $row['designation'];?>">
		</div>
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-6">
		  <label for="inputEmail4">Email</label>
		  <input type="email" class="form-control" name="email" value="<?php echo $row['email'];?>">
		</div>
		<div class="form-group col-md-6">
		  <label for="inputPassword4">Contact</label>
		  <input type="text" class="form-control" name="contact" maxlength="11" value="<?php echo $row['contact'];?>">
		</div>
	  </div>
	  <div class="form-group">
		<label for="inputAddress">Office</label>
		<input type="text" class="form-control" name="office" value="<?php echo $row['office'];?>">
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-6">
		  <label for="inputCity">Thana</label>
		  <input type="text" class="form-control" name="thana" value="<?php echo $row['thana'];?>">
		</div>
		<div class="form-group col-md-6">
		  <label for="inputState">Remarks</label>
		  <input type="text" class="form-control" name="remarks" value="<?php echo $row['remarks'];?>">
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
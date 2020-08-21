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
	  ini_set( "display_errors", 0); 
include("dbconnect.php");
//session_start();
$name=$_SESSION['dis'];
	
	$id=$_POST['update'];
	$select="SELECT `SI_NO`,`Category`, `Name_of_com`, `PUP`, `Name_of_des_maker`, `Position`, `Address`, `Mob_Phn`, `Pro_Per`, `Mobile_Phn`, 'district' FROM `lc`where SI_NO='$id'";
	$chk=mysqli_query($cn,$select);
	if($chk){
		echo '<form method="post" action="edit_lc_action.php">';
		//echo '<form method="post" action="gae.php">';
		while($row=mysqli_fetch_array($chk)){

	?>
	  
	  <div class="form-row">
		<div class="form-group col-md-6">
		  <label for="inputEmail4">Category</label>
		  <input type="text" class="form-control" name="cat" value="<?php echo $row['Category'];?>">
		</div>
		<div class="form-group col-md-6">
		  <label for="inputPassword4">Name of Company</label>
		  <input type="text" class="form-control" name="n_com" value="<?php echo $row['Name_of_com'];?>">
		</div>
	  </div>
	  <div class="form-group">
		<label for="inputAddress">Potenial Ongoing/upcoming projects</label>
		<input type="text" class="form-control" name="po_up" value="<?php echo $row['PUP'];?>">
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-6">
		  <label for="inputEmail4">Name of the decision maker</label>
		  <input type="text" class="form-control" name="n_d_m" value="<?php echo $row['Name_of_des_maker'];?>">
		</div>
		<div class="form-group col-md-6">
		  <label for="inputPassword4">Position</label>
		  <input type="text" class="form-control" name="pos" value="<?php echo $row['Position'];?>">
		</div>
	  </div>
	  <div class="form-group">
		<label for="inputAddress">Address</label>
		<input type="text" class="form-control" name="ads" value="<?php echo $row['Address'];?>">
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-6">
		  <label for="inputCity">Procurement Person</label>
		  <input type="text" class="form-control" name="pp" value="<?php echo $row['Pro_Per'];?>">
		</div>
		<div class="form-group col-md-6">
		  <label for="inputState">Mobile Phone</label>
		  <input type="text" class="form-control" name="MP" value="<?php echo $row['Mobile_Phn'];?>">
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
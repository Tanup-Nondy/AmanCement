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
	$select="SELECT * FROM `emp`where SI_NO='$id'";
	$chk=mysqli_query($cn,$select);
	if($chk){
	echo '<form method="post" action="edit_emp_action.php">';
	//echo '<form method="post" action="gae.php">';
	while($row=mysqli_fetch_array($chk)){

?>
	  
	  <div class="form-group">
		<label for="inputAddress">Company</label>
		<input type="text" class="form-control" name="com" value="<?php echo $row['Company'];?>">
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-6">
		  <label for="inputEmail4">Brand</label>
		  <input type="text" class="form-control" name="bd" value="<?php echo $row['Brand'];?>">
		</div>
		<div class="form-group col-md-6">
		  <label for="inputPassword4">Total Sales Man</label>
		  <input type="text" class="form-control" name="tsm" value="<?php echo $row['T_S_M'];?>">
		</div>
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-4">
		  <label for="inputEmail4">Name of Head Of Sales Man</label>
		  <input type="text" class="form-control" name="nsm" value="<?php echo $row['N_S_M'];?>">
		</div>
		<div class="form-group col-md-4">
		  <label for="inputPassword4">Designation of Head of Sales</label>
		  <input type="text" class="form-control" name="dsm" value="<?php echo $row['D_S_M'];?>">
		</div>
		<div class="form-group col-md-4">
		  <label for="inputEmail4">Mobile of Head of Sales</label>
		  <input type="text" class="form-control" name="mhs" maxlength="11" value="<?php echo $row['M_H_S'];?>">
		</div>
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-4">
		  <label for="inputPassword4">Technical Person</label>
		  <input type="text" class="form-control" name="tp" value="<?php echo $row['T_P'];?>">
		</div>
		<div class="form-group col-md-4">
		<label for="inputAddress">Designation of Technical Person</label>
		<input type="text" class="form-control" name="dtp" value="<?php echo $row['D_T_P'];?>">
		</div>
		<div class="form-group col-md-4">
		  <label for="inputCity">Mobile of Technical Person</label>
		  <input type="text" class="form-control" name="mtp" maxlength="11" value="<?php echo $row['M_T_P'];?>">
		</div>
	  </div>
	  <div class="form-group">
		  <label for="inputState">Remarks</label>
		  <input type="text" class="form-control" name="re" value="<?php echo $row['Remarks'];?>">
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
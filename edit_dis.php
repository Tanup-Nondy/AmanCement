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
          <h3>Update Entry in Distributor Database of <?php $name=$_SESSION["dis"]; echo $name; ?> District</h3>
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
	$select="SELECT * FROM `dis`where SI_NO='$id'";
	$chk=mysqli_query($cn,$select);
	if($chk){
		echo '<form method="post" action="edit_dis_action.php">';
		//echo '<form method="post" action="gae.php">';
		while($row=mysqli_fetch_array($chk)){

?>
  
	  <div class="form-group">
		  <label for="inputPassword4">Company</label>
		  <input type="text" class="form-control" name="com" value="<?php echo $row['Company'];?>">
	  </div>
	  
	  <div class="form-row">
		<div class="form-group col-md-4">
		  <label for="inputPassword4">Brand</label>
		  <input type="text" class="form-control" name="bd" value="<?php echo $row['Brand'];?>">
		</div>
	  <div class="form-group col-md-4">
		  <label for="inputPassword4">Delar Name</label>
		  <input type="text" class="form-control" name="dn" value="<?php echo $row['D_N'];?>">
	  </div>
	  <div class="form-group col-md-4">
		  <label for="inputPassword4">Mobile No.</label>
		  <input type="text" class="form-control" name="mn" value="<?php echo $row['Mob_No'];?>">
	  </div>
	  </div>
	  
	  <div class="form-group">
		  <label for="inputPassword4">Address</label>
		  <input type="text" class="form-control" name="ads" value="<?php echo $row['Address'];?>">
	  </div>
	  
	  <div class="form-row">
	  <div class="form-group col-md-4">
		  <label for="inputPassword4">Total Sales</label>
		  <input type="text" class="form-control" name="ts" value="<?php echo $row['T_S'];?>">
	  </div>
	  <div class="form-group col-md-4">
		<label for="inputAddress">Month</label>
		<select class="form-control" name="month" size="1">
			<option value="<?php echo $row['month'];?>" selected=""><?php echo $row['month'];?></option>
			<option value="January">January</option>
			<option value="February">February</option>
			<option value="March">March</option>
			<option value="April">April</option>
			<option value="May">May</option>
			<option value="June">June</option>
			<option value="July">July</option>
			<option value="August">August</option>
			<option value="September">September</option>
			<option value="October">October</option>
			<option value="November">november</option>
			<option value="December">December</option>
		</select>
	  </div>
	  <div class="form-group col-md-4">
		  <label for="inputPassword4">Year</label>
		  <input type="text" class="form-control" name="year" value="<?php echo $row['year'];?>">
	  </div>	  
      </div>
	  
	  <div class="form-group">
		  <label for="inputState">Remarks</label>
		  <input type="text" class="form-control" name="remarks" value="<?php echo $row['Remarks'];?>">
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
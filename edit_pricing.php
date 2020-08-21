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
          <h3>Update Retailer List of <?php $name=$_SESSION["dis"]; echo $name; ?> District</h3>
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
	$select="SELECT * FROM `pricing` where SI_NO='$id'";
	$chk=mysqli_query($cn,$select);
	if($chk){
		echo '<form method="post" action="edit_pricing_action.php">';
		//echo '<form method="post" action="gae.php">';
		while($row=mysqli_fetch_array($chk)){

	?>
	  
	  <div class="form-group">
		  <label for="inputPassword4">Name of Company</label>
		  <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>">
	  </div>
	  <div class="form-row">
	  <div class="form-group col-md-4">
		  <label for="inputPassword4">Thana/Upozila</label>
		  <input type="text" class="form-control" name="thana" value="<?php echo $row['thana'];?>">
	  </div>	  
	  <div class="form-group col-md-4">
		  <label for="inputPassword4">Year</label>
		  <input type="text" class="form-control" name="year" value="<?php echo $row['year'];?>">
	  </div>
	  <div class="form-group col-md-4">
		  <label for="inputAddress">Month</label>
		  <select class="form-control" name="month" size="1">
		  <option value="<?php echo $row['month'];?>"><?php echo $row['month'];?></option>
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
			<option value="November">November</option>
			<option value="December">December</option>
		  </select>
	  </div>
	  </div>
	  <div class="form-row">		
		<div class="form-group col-md-3">
		  <label for="inputPassword4">Type of Cement</label>
		  <input type="text" class="form-control" name="type" value="<?php echo $row['type'];?>">
		</div>
		<div class="form-group col-md-3">
			<label for="inputPassword4">C&amp;F Price</label>
			<input type="text" class="form-control" name="cf" value="<?php echo $row['cf'];?>">
		</div>
	    <div class="form-group col-md-3">
		  <label for="inputPassword4">Truck Fare</label>
		  <input type="text" class="form-control" name="truck" value="<?php echo $row['truck'];?>">
	    </div>
	    <div class="form-group col-md-3">
		  <label for="inputPassword4">Free Bag</label>
		  <input type="text" class="form-control" name="free" value="<?php echo $row['free'];?>">
	    </div>
	  </div>
	  <div class="form-row">
	    <div class="form-group col-md-3">
		  <label for="inputPassword4">Dealer Commision</label>
		  <input type="text" class="form-control" name="dc" value="<?php echo $row['dc'];?>">
	    </div>
	    <div class="form-group col-md-3">
		  <label for="inputPassword4">Rolling Commision</label>
		  <input type="text" class="form-control" name="rc" value="<?php echo $row['rc'];?>">
	    </div>
	    <div class="form-group col-md-3">
		  <label for="inputPassword4">Target Commision</label>
		  <input type="text" class="form-control" name="tc" value="<?php echo $row['tc'];?>">
	    </div>
	    <div class="form-group col-md-3">
		  <label for="inputPassword4">Eclusive Commision (D+R)</label>
		  <input type="text" class="form-control" name="ec" value="<?php echo $row['ec'];?>">
	    </div>
	  </div>
	  <div class="form-row">
	    <div class="form-group col-md-3">
		  <label for="inputPassword4">Yearly/ Hidden  Commission</label>
		  <input type="text" class="form-control" name="yc" value="<?php echo $row['yc'];?>">
	    </div>
	    <div class="form-group col-md-3">
		  <label for="inputPassword4">Retail Commision</label>
		  <input type="text" class="form-control" name="retc" value="<?php echo $row['retc'];?>">
	    </div>
	    <div class="form-group col-md-3">
		  <label for="inputPassword4">Delivery Commision</label>
		  <input type="text" class="form-control" name="delc" value="<?php echo $row['delc'];?>">
	    </div>
	    <div class="form-group col-md-3">
		  <label for="inputPassword4">Spot Discount</label>
		  <input type="text" class="form-control" name="sd" value="<?php echo $row['sd'];?>">
	    </div>
	  </div>
	  <div class="form-row">
	  <div class="form-group col-md-6">
		  <label for="inputPassword4">Package-1 Name</label>
		  <input type="text" class="form-control" name="p1" value="<?php echo $row['p1'];?>">
	  </div>
	  <div class="form-group col-md-6">
		  <label for="inputPassword4">Tk</label>
		  <input type="text" class="form-control" name="p1tk" value="<?php echo $row['p1tk'];?>">
	  </div>
	  </div>
	  <div class="form-row">
	  <div class="form-group col-md-6">
		  <label for="inputPassword4">Package-2 Name</label>
		  <input type="text" class="form-control" name="p2" value="<?php echo $row['p2'];?>">
	  </div>
	  <div class="form-group col-md-6">
		  <label for="inputPassword4">Tk</label>
		  <input type="text" class="form-control" name="p2tk" value="<?php echo $row['p2tk'];?>">
	  </div>
	  </div>
	  <div class="form-row">
	  <div class="form-group col-md-6">
		  <label for="inputPassword4">Package-3 Name</label>
		  <input type="text" class="form-control" name="p3" value="<?php echo $row['p3'];?>">
	  </div>
	  <div class="form-group col-md-6">
		  <label for="inputPassword4">Tk</label>
		  <input type="text" class="form-control" name="p3tk" value="<?php echo $row['p3tk'];?>">
	  </div>
	  </div>
	  <div class="form-row">
	  <div class="form-group col-md-6">
		  <label for="inputPassword4">Package-4 Name</label>
		  <input type="text" class="form-control" name="p4" value="<?php echo $row['p4'];?>">
	  </div>
	  <div class="form-group col-md-6">
		  <label for="inputPassword4">Tk</label>
		  <input type="text" class="form-control" name="p4tk" value="<?php echo $row['p4tk'];?>">
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
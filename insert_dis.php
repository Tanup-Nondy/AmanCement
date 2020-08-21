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
          <h3>Data Entry in Distributor Database of <?php $name=$_SESSION["dis"]; echo $name; ?> District</h3>
		  </center>
        </header>
		
      </div>
    </section><!-- #services -->

  </main>


<div class="container-fluid">
<div class="card mb-3">
  
	<form method="post" action="insert_dis_action.php">
	  <div class="form-group">
		  <label for="inputPassword4">Company</label>
		  <input type="text" class="form-control" name="com" placeholder="Company" required>
	  </div>
	  
	  <div class="form-row">
		<div class="form-group col-md-4">
		  <label for="inputPassword4">Brand</label>
		  <input type="text" class="form-control" name="bd" placeholder="Brand" required>
		</div>
	  <div class="form-group col-md-4">
		  <label for="inputPassword4">Delar Name</label>
		  <input type="text" class="form-control" name="dn" placeholder="Delar Name" required>
	  </div>
	  <div class="form-group col-md-4">
		  <label for="inputPassword4">Mobile No.</label>
		  <input type="text" class="form-control" name="mn" placeholder="Mobile Number" required>
	  </div>
	  </div>
	  
	  <div class="form-group">
		  <label for="inputPassword4">Address</label>
		  <textarea type="text" class="form-control" name="ads" placeholder="Enter Address" required></textarea>
	  </div>
	  
	  <div class="form-row">
	  <div class="form-group col-md-4">
		  <label for="inputPassword4">Total Sales</label>
		  <input type="text" class="form-control" name="ts" placeholder="Total Sales " required>
	  </div>
	  <div class="form-group col-md-4">
		<label for="inputAddress">Month</label>
		<select class="form-control" name="month" size="1">
			<option value="January" selected="">January</option>
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
		  <input type="text" class="form-control" name="year" placeholder="Year" required>
	  </div>	  
      </div>
	  
	  <div class="form-group">
		  <label for="inputState">Remarks</label>
		  <textarea type="text" class="form-control" name="remarks" placeholder="Remarks"></textarea>
	  </div>
	  
	  <div class="form-group col-lg-12 col-md-12 box wow bounceInUp">
	    <center><button name="submit" type="submit" value="submit" class="btn btn-primary">Submit</button></center>
	  </div>
	  
	</form>
</div>
</div>	  

<?php include 'admin_inc/footer.php'?>
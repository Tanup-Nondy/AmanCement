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
          <h3>Data Entry for Upcoming Project</h3>
        </header>
		
      </div>
    </section><!-- #services -->

  </main>

<div class="container-fluid">
<div class="card mb-3">
  
	<form method="post" action="insert_upp_action.php">

		  
	  <div class="form-group col-lg-12 col-md-12 box wow bounceInUp">
		<label for="inputAddress">Project Name</label>
		<input type="text" class="form-control" name="pname" placeholder="Project Name" required></>
	  </div>
	  <div class="form-row col-lg-12 col-md-12 box wow bounceInUp">
		<div class="form-group col-md-6">
		  <label for="inputEmail4">Project Measurement</label>
		  <textarea type="text" class="form-control" name="pmeasure" placeholder="Project Measurement" required></textarea>
		</div>
		<div class="form-group col-md-6">
		  <label for="inputPassword4">Implementation Authority</label>
		  <textarea type="text" class="form-control" name="iauthority" placeholder="Implementation Authority" required></textarea>
		</div>
	  </div>
	  <div class="form-row col-lg-12 col-md-12 box wow bounceInUp">
		<div class="form-group col-md-6">
		  <label for="inputEmail4">Consultant</label>
		  <input type="text" class="form-control" name="consultant" placeholder="Consultant" required>
		</div>
		<div class="form-group col-md-6">
		  <label for="inputPassword4">Contractor</label>
		  <input type="text" class="form-control" name="contractor" placeholder="Contractor" required>
		</div>
	  </div>
	  <div class="form-group col-lg-12 col-md-12 box wow bounceInUp">
		<label for="inputAddress">Founded By</label>
		<input type="text" class="form-control" name="fb" placeholder="Founded By" required>
	  </div>
	  <div class="form-row col-lg-12 col-md-12 box wow bounceInUp">
		<div class="form-group col-md-4">
		  <label for="inputCity">Project Cost</label>
		  <input type="text" class="form-control" name="pc" placeholder="Project Cost" required>
		</div>
		<div class="form-group col-md-4">
		  <label for="inputState">Approx Consumption</label>
		  <input type="text" class="form-control" name="ac" placeholder="Approx Consumption">
		</div>
		<div class="form-group col-md-4">
		  <label for="inputState">Cement Consumption per Month</label>
		  <input type="text" class="form-control" name="cc" placeholder="Cement Consumption per Month">
		</div>
	  </div>
	  <div class="form-row col-lg-12 col-md-12 box wow bounceInUp">
		<div class="form-group col-md-4">
		  <label for="inputPassword4">Start Time</label>
		  <input type="text" class="form-control" name="st" placeholder="Start Time" required>
		</div>
		<div class="form-group col-md-4">
		<label for="inputAddress">Ending Time</label>
		<input type="text" class="form-control" name="et" placeholder="Ending Time" required>
		</div>
		<div class="form-group col-md-4">
		  <label for="inputCity">Duration</label>
		  <input type="text" class="form-control" name="dur" placeholder="Duration" required>
		</div>
	  </div>
	  <div class="form-group col-lg-12 col-md-12 box wow bounceInUp">
		  <label for="inputState">Status of the Project</label>
		  <textarea type="text" class="form-control" name="sp" placeholder="Status of the Project"></textarea>
	  </div>
	  <div class="form-group col-lg-12 col-md-12 box wow bounceInUp">
		  <label for="inputCity">No. of Visit</label>
		  <input type="text" class="form-control" name="nv" placeholder="No. of Visit" required>
	  </div>
	  <div class="form-row col-lg-12 col-md-12 box wow bounceInUp">
		<div class="form-group col-md-6">
		  <label for="inputState">Requirement</label>
		  <textarea type="text" class="form-control" name="req" placeholder="Requirement"></textarea>
		</div>
		<div class="form-group col-md-6">
		  <label for="inputCity">Improvement</label>
		  <textarea type="text" class="form-control" name="improve" placeholder="Improvement" required></textarea>
		</div>
	  </div>
	  <div class="form-group col-lg-12 col-md-12 box wow bounceInUp">
		  <label for="inputState">Remarks</label>
		  <textarea type="text" class="form-control" name="Remarks" placeholder="Remarks"></textarea>
	  </div>
	  <div class="form-group col-lg-12 col-md-12 box wow bounceInUp">
	    <center><button name="submit" type="submit" value="submit" class="btn btn-primary">Submit</button></center>
	  </div>      
	</form>
	  
</div>
</div>	
	  
<?php include 'admin_inc/footer.php'?>
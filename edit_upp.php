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
          <h3>Update Entry in Ongoing Projects Database</h3>
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
	$select="SELECT * FROM `upp` where SI_NO='$id'";
	$chk=mysqli_query($cn,$select);
	if($chk){
		echo '<form method="post" action="edit_upp_action.php">';
		//echo '<form method="post" action="gae.php">';
		while($row=mysqli_fetch_array($chk)){

?>
  
	  <div class="form-group col-lg-12 col-md-12 box wow bounceInUp">
		<label for="inputAddress">Project Name</label>
		<input type="text" class="form-control" name="pname" value="<?php echo $row['pname'];?>"></>
	  </div>
	  <div class="form-row col-lg-12 col-md-12 box wow bounceInUp">
		<div class="form-group col-md-6">
		  <label for="inputEmail4">Project Measurement</label>
		  <input type="text" class="form-control" name="pmeasure" value="<?php echo $row['pmeasure'];?>">
		</div>
		<div class="form-group col-md-6">
		  <label for="inputPassword4">Implementation Authority</label>
		  <input type="text" class="form-control" name="iauthority" value="<?php echo $row['iauthority'];?>">
		</div>
	  </div>
	  <div class="form-row col-lg-12 col-md-12 box wow bounceInUp">
		<div class="form-group col-md-6">
		  <label for="inputEmail4">Consultant</label>
		  <input type="text" class="form-control" name="consultant" value="<?php echo $row['consultant'];?>">
		</div>
		<div class="form-group col-md-6">
		  <label for="inputPassword4">Contractor</label>
		  <input type="text" class="form-control" name="contractor" value="<?php echo $row['contructor'];?>">
		</div>
	  </div>
	  <div class="form-group col-lg-12 col-md-12 box wow bounceInUp">
		<label for="inputAddress">Founded By</label>
		<input type="text" class="form-control" name="fb" value="<?php echo $row['fb'];?>">
	  </div>
	  <div class="form-row col-lg-12 col-md-12 box wow bounceInUp">
		<div class="form-group col-md-4">
		  <label for="inputCity">Project Cost</label>
		  <input type="text" class="form-control" name="pc" value="<?php echo $row['pc'];?>">
		</div>
		<div class="form-group col-md-4">
		  <label for="inputState">Approx Consumption</label>
		  <input type="text" class="form-control" name="ac" value="<?php echo $row['ac'];?>">
		</div>
		<div class="form-group col-md-4">
		  <label for="inputState">Cement Consumption per Month</label>
		  <input type="text" class="form-control" name="cc" value="<?php echo $row['cc'];?>">
		</div>
	  </div>
	  <div class="form-row col-lg-12 col-md-12 box wow bounceInUp">
		<div class="form-group col-md-4">
		  <label for="inputPassword4">Start Time</label>
		  <input type="text" class="form-control" name="st" value="<?php echo $row['st'];?>">
		</div>
		<div class="form-group col-md-4">
		<label for="inputAddress">Ending Time</label>
		<input type="text" class="form-control" name="et" value="<?php echo $row['et'];?>">
		</div>
		<div class="form-group col-md-4">
		  <label for="inputCity">Duration</label>
		  <input type="text" class="form-control" name="dur" value="<?php echo $row['dur'];?>">
		</div>
	  </div>
	  <div class="form-group col-lg-12 col-md-12 box wow bounceInUp">
		  <label for="inputState">Status of the Project</label>
		  <input type="text" class="form-control" name="sp" value="<?php echo $row['sp'];?>">
	  </div>
	  <div class="form-group col-lg-12 col-md-12 box wow bounceInUp">
		  <label for="inputCity">No. of Visit</label>
		  <input type="text" class="form-control" name="nv" value="<?php echo $row['nv'];?>">
	  </div>
	  <div class="form-row col-lg-12 col-md-12 box wow bounceInUp">
		<div class="form-group col-md-6">
		  <label for="inputState">Requirement</label>
		  <input type="text" class="form-control" name="req" value="<?php echo $row['cc'];?>">
		</div>
		<div class="form-group col-md-6">
		  <label for="inputCity">Improvement</label>
		  <input type="text" class="form-control" name="improve" value="<?php echo $row['improve'];?>">
		</div>
	  </div>
	  <div class="form-group col-lg-12 col-md-12 box wow bounceInUp">
		  <label for="inputState">Remarks</label>
		  <input type="text" class="form-control" name="remarks" value="<?php echo $row['remarks'];?>">
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
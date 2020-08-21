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
          <h3>Data Entry in Private Engineer of <?php $name=$_SESSION["dis"]; 
		  echo $name; 
		  ?></h3>
        </header>
		
      </div>
    </section><!-- #services -->

  </main>

<div class="container-fluid">
<div class="card mb-3">  
	<form method="post" action="insert_pe_action.php">
	
	  <div class="form-group">
		<label for="inputAddress">Engineer Name</label>
		<input type="text" class="form-control" name="en" placeholder="Engineer name" required>
	  </div>
	  <div class="form-group">
		<label for="inputAddress">Office Address</label>
		<input type="text" class="form-control" name="oa" placeholder="Office Address"  required>
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-4">
		  <label for="inputEmail4">Contact No.</label>
		  <input type="text" class="form-control" name="cn" placeholder="Contact No." required>
		</div>
		<div class="form-group col-md-4">
		  <label for="inputPassword4">Thana</label>
		  <input type="text" class="form-control" name="th" placeholder="Enter Thana" required>
		</div>
		<div class="form-group col-md-4">
		  <label for="inputPassword4">Designation</label>
		  <input type="text" class="form-control" name="des" placeholder="Enter Designation" required >
		</div>
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-4">
		  <label for="inputEmail4">Email</label>
		  <input type="mail" class="form-control" name="mail" placeholder="Enter E_Mail">
		</div>
		<div class="form-group col-md-4">
		  <label for="inputPassword4">Educational Qualification</label>
		  <input type="text" class="form-control" name="eq" placeholder="Educational Qualification" required>
		</div>
		<div class="form-group col-md-4">
		  <label for="exampleInputFile">Image</label>
		  <input type="file" name="image">
		</div>
	  </div>
	  <div class="form-group">
		<label for="inputAddress">University/College</label>
		<input type="text" class="form-control" name="uc" placeholder="University/College" required>
	  </div>
	  <div class="form-group">
		<label for="inputAddress">How long working in this area(y)</label>
		<input type="text" class="form-control" name="y" placeholder="How long working in this area(y)" required>
	  </div>
	  <div class="form-group">
		<label for="inputAddress">Area Cover</label>
		<input type="text" class="form-control" name="ac" placeholder="Enter area cover" required>
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-3">
		  <label for="inputEmail4">Date of birth</label>
		  <input type="date" class="form-control" name="db" placeholder="Enter Date of Birth" required>
		</div>
		<div class="form-group col-md-3">
		  <label for="inputPassword4">Marriage Day</label>
		  <input type="date" class="form-control" name="md" placeholder="Enter marriage day" required>
		</div>
		<div class="form-group col-md-3">
		  <label for="inputPassword4">Hobby</label>
		  <input type="text" class="form-control" name="hb" placeholder="Enter Hobby" required>
		</div>
		<div class="form-group col-md-3">
		  <label for="inputPassword4">Involve Community</label>
		  <input type="text" class="form-control" name="ic" placeholder="Enter Involve Community" required>
		</div>
	  </div>
	  
	  <div class="form-group col-lg-12 col-md-12 box wow bounceInUp">
	    <center><button name="submit" type="submit" value="submit" class="btn btn-primary">Submit</button></center>
	  </div>
	  
	</form>
</div>
</div>	  

<?php include 'admin_inc/footer.php'?>
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
          <h3>Data Entry</h3>
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
  
<div class="container-fluid">
<div class="card mb-3">  
	<form method="post" action="insert_emp_action.php">
	
	  <div class="form-group">
		<label for="inputAddress">Company</label>
		<input type="text" class="form-control" name="com" placeholder="Company" required>
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-6">
		  <label for="inputEmail4">Brand</label>
		  <input type="text" class="form-control" name="bd" placeholder="Brand" required>
		</div>
		<div class="form-group col-md-6">
		  <label for="inputPassword4">Total Sales Man</label>
		  <input type="text" class="form-control" name="tsm" placeholder="Total sales man" required>
		</div>
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-4">
		  <label for="inputEmail4">Name of Head Of Sales Man</label>
		  <input type="text" class="form-control" name="nsm" placeholder="Name of head of sales man" required>
		</div>
		<div class="form-group col-md-4">
		  <label for="inputPassword4">Designation of Head of Sales</label>
		  <input type="text" class="form-control" name="dsm" placeholder="Designation of head of sales" required>
		</div>
		<div class="form-group col-md-4">
		  <label for="inputEmail4">Mobile of Head of Sales</label>
		  <input type="text" class="form-control" name="mhs" maxlength="11" placeholder="Mobile of head of sales" required>
		</div>
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-4">
		  <label for="inputPassword4">Technical Person</label>
		  <input type="text" class="form-control" name="tp" placeholder="Technical Person " required>
		</div>
		<div class="form-group col-md-4">
		<label for="inputAddress">Designation of Technical Person</label>
		<input type="text" class="form-control" name="dtp" placeholder="Designation of technical person" required>
		</div>
		<div class="form-group col-md-4">
		  <label for="inputCity">Mobile of Technical Person</label>
		  <input type="text" class="form-control" name="mtp" maxlength="11" placeholder="Mobile of technical person" required>
		</div>
	  </div>
	  <div class="form-group">
		  <label for="inputState">Remarks</label>
		  <textarea type="text" class="form-control" name="re" placeholder="Remarks" required></textarea>
	  </div>
	  
	  <div class="form-group col-lg-12 col-md-12 box wow bounceInUp">
	    <center><button name="submit" type="submit" value="submit" class="btn btn-primary">Submit</button></center>
	  </div>
	</form>
</div>
</div>	  

<?php include 'admin_inc/footer.php'?>
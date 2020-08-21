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
	<form method="post" action="insert_rmc_action.php">
	  <div class="form-row">
		<div class="form-group col-md-6">
		  <label for="inputEmail4">Category</label>
		  <input type="text" class="form-control" name="cat" placeholder="Category">
		</div>
		<div class="form-group col-md-6">
		  <label for="inputPassword4">Name of Company</label>
		  <input type="text" class="form-control" name="n_com" placeholder="Name of Company">
		</div>
	  </div>
	  <div class="form-group">
		<label for="inputAddress">Monthly Consumption</label>
		<input type="text" class="form-control" name="po_up" placeholder="Monthly Consumption">
	  </div>
	  <div class="form-group">
		<label for="inputAddress">Name of the decision makers</label>
		<input type="text" class="form-control" name="n_d_m" placeholder="Name of the decision makers">
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-6">
		  <label for="inputEmail4">Position</label>
		  <input type="text" class="form-control" name="pos" placeholder="Position">
		</div>
		<div class="form-group col-md-6">
		  <label for="inputPassword4">Mobile</label>
		  <input type="text" class="form-control" name="mp" placeholder="Decision Maker's Mobile">
		</div>
	  </div>
	  <div class="form-group">
		<label for="inputAddress">Address</label>
		<input type="text" class="form-control" name="ads" placeholder="Address">
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-6">
		  <label for="inputCity">Procurement Person</label>
		  <input type="text" class="form-control" name="pp" placeholder="Procurement Person">
		</div>
		<div class="form-group col-md-6">
		  <label for="inputState">Mobile Phone</label>
		  <input type="text" class="form-control" name="MP" placeholder="Procurement Person's Mobile Phone">
		</div>
	  </div>
	  <div class="form-group">
	    <center><button type="submit" class="btn btn-primary" name="update" value="update">Submit</button></center>
	  </div>
	</form>
</div>
</div>	  

<?php include 'admin_inc/footer.php'?>
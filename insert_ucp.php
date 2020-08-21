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
	<form method="post" action="insert_ucp_action.php">

	  <div class="form-row">
		<div class="form-group col-md-6">
		  <label for="inputEmail4">Project Name</label>
		  <input type="text" class="form-control" name="p_n" placeholder="Project Name">
		</div>
		<div class="form-group col-md-6">
		  <label for="inputPassword4">Project Detail</label>
		  <input type="text" class="form-control" name="p_d" placeholder="Project Detail">
		</div>
	  </div>
	  <div class="form-group">
		<label for="inputAddress">Implementation Authority</label>
		<input type="text" class="form-control" name="im_au" placeholder="Implementation Authority">
	  </div>
	  <div class="form-group">
		<label for="inputAddress">Consultant</label>
		<input type="text" class="form-control" name="con" placeholder="Consultant">
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-6">
		  <label for="inputEmail4">Location</label>
		  <input type="text" class="form-control" name="loc" placeholder="Location">
		</div>
		<div class="form-group col-md-6">
		  <label for="inputPassword4">Contractor</label>
		  <input type="text" class="form-control" name="cont" placeholder="Contractor">
		</div>
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-6">
		  <label for="inputCity">Founded By</label>
		  <input type="text" class="form-control" name="f_b" placeholder="Founded By">
		</div>
		<div class="form-group col-md-6">
		  <label for="inputState">Project Cost (BDT million)</label>
		  <input type="text" class="form-control" name="p_c" placeholder="Project Cost (BDT million)">
		</div>
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-3">
		  <label for="inputCity">Start Time</label>
		  <input type="date" class="form-control" name="s_t" placeholder="Start Time">
		</div>
		<div class="form-group col-md-3">
		  <label for="inputState">Ending Time</label>
		  <input type="date" class="form-control" name="e_t" placeholder="Ending Time">
		</div>
		<div class="form-group col-md-3">
		  <label for="inputCity">Duration</label>
		  <input type="text" class="form-control" name="d" placeholder="Duration">
		</div>
		<div class="form-group col-md-3">
		  <label for="inputState">Remarks</label>
		  <input type="text" class="form-control" name="re" placeholder="Remarks">
		</div>
	  </div>
		  
		  
	  <div class="form-group">
	  <center><button type="submit" class="btn btn-primary" name="update" value="update">Submit</button></center>
	  </div>	
	</form>
</div>
</div>	  

<?php include 'admin_inc/footer.php'?>
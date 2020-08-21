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
          <h3>Data Entry in District Sales Volume of <?php $name=$_SESSION["dis"]; echo $name; ?> District</h3>
        </header>
		
      </div>
    </section><!-- #services -->

</main>


<div class="container-fluid">
<div class="card mb-3"> 
<form method="post" action="insert_dsv.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Year</label>
      <input class="form-control" type="text" name="year" placeholder="Year" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Month</label>
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
		<option value="November">November</option>
		<option value="December">December</option>
      </select>
    </div>
  </div>
  <div class="form-group col-lg-12 col-md-12 box wow bounceInUp">
	<center><button name="submit" type="submit" value="submit" class="btn btn-primary">Add</button></center>
  </div>
</form>
</div>
</div>

<?php include 'admin_inc/footer.php'?>
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
		  </center>
        </header>
		
      </div>
    </section><!-- #services -->

  </main>


<div class="container-fluid">
<div class="card mb-3">
  
	<form method="post" action="insert_dsv_action.php">
	
	  <div class="form-group">
		<label for="inputAddress">Brand</label>
		<select class="form-control" name="bd" size="1">
		  <option value="Amancem" selected="">Amancem</option>
			<option value="Shah">Shah</option>
			<option value="Bashundhara">Bashundhara</option>
			<option value="Kingbrand">Kingbrand </option>
			<option value="Fresh">Fresh</option>
			<option value="Crown">Crown</option>
			<option value="Seven Circle">Seven Circle</option>
			<option value="Premier">Premier</option>
			<option value="Scan">Scan</option>
			<option value="Supercrete">Supercrete</option>
			<option value="Royal">Royal</option>
			<option value="Tiger">Tiger</option>
			<option value="Confidence">Confidence</option>
			<option value="Elephant">Elephant</option>
			<option value="Five Rings">Five Rings</option>
			<option value="Anchor">Anchor</option>
			<option value="Akij">Akij</option>
			<option value="Ultratech">Ultratech</option>
			<option value="Seven Horse">Seven Horse</option>
			<option value="Metrocem">Metrocem</option>
			<option value="Ince">Ince</option>
			<option value="Diamond">Diamond</option>
			<option value="Anwar">Anwar</option>
			<option value="Mir">Mir </option>
			<option value="S. Alam">S. Alam</option>
			<option value="Aramit">Aramit</option>
			<option value="Hakim">Hakim</option>
			<option value="NGS">NGS</option>
			<option value="Chattak">Chattak</option>
			<option value="Noapara">Noapara</option>
			<option value="Deshbandhu">Deshbandhu</option>
			<option value="Holcim">Holcim</option>
			<option value="Bengal Tiger (Taiheiyo)">Bengal Tiger (Taiheiyo)</option>
			<option value="Ayanpur">Ayanpur</option>
			<option value="Other">Other</option>
		  </select>
	  </div>
	  <div class="form-group">
		  <label for="inputPassword4">Sales Volume(MT)</label>
		  <input type="text" class="form-control" name="sv" placeholder="Enter Sales Volume(MT)" required>
	  </div>

	  <div class="form-group>
		  <label for="inputState">Remarks</label>
		  <textarea type="text" class="form-control" name="remarks" placeholder="Remarks"></textarea>
	  </div>
	  
	  <br>
	  
	  <div class="form-group col-lg-12 col-md-12 box wow bounceInUp">
	    <center><button name="submit" type="submit" value="submit" class="btn btn-primary">Submit</button></center>
	  </div>
	  
	</form>
</div>
</div>	  

<?php include 'admin_inc/footer.php'?>
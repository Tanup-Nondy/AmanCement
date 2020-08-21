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
          <h3>Data Entry in Pricing List of <?php $name=$_SESSION["dis"]; echo $name; ?> District</h3>
		  </center>
        </header>
		
      </div>
    </section><!-- #services -->

  </main>


<div class="container-fluid">
<div class="card mb-3">
  
	<form method="post" action="insert_pricing_action.php">

	  <div class="form-group">
		  <label for="inputPassword4">Name of Company</label>
		  <input type="text" class="form-control" name="name" placeholder="Name of Company" required>
	  </div>
	  <div class="form-row">
	  <div class="form-group col-md-4">
		  <label for="inputPassword4">Thana/Upozila</label>
		  <input type="text" class="form-control" name="thana" placeholder="Thana/Upozila" required>
	  </div>	  
	  <div class="form-group col-md-4">
		  <label for="inputPassword4">Year</label>
		  <input type="text" class="form-control" name="year" placeholder="Year" required>
	  </div>
	  <div class="form-group col-md-4">
		  <label for="inputAddress">Month</label>
		  <select class="form-control" name="month" size="1">
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
		  <input type="text" class="form-control" name="type" placeholder="Type of Cement" required>
		</div>
		<div class="form-group col-md-3">
			<label for="inputPassword4">C&amp;F Price</label>
			<input type="text" class="form-control" name="cf" placeholder="C&amp;F Price" required>
		</div>
	    <div class="form-group col-md-3">
		  <label for="inputPassword4">Truck Fare</label>
		  <input type="text" class="form-control" name="truck" placeholder="Truck Fare" required>
	    </div>
	    <div class="form-group col-md-3">
		  <label for="inputPassword4">Free Bag</label>
		  <input type="text" class="form-control" name="free" placeholder="Free Bag" required>
	    </div>
	  </div>
	  <div class="form-row">
	    <div class="form-group col-md-3">
		  <label for="inputPassword4">Dealer Commision</label>
		  <input type="text" class="form-control" name="dc" placeholder="Dealer Commision" required>
	    </div>
	    <div class="form-group col-md-3">
		  <label for="inputPassword4">Rolling Commision</label>
		  <input type="text" class="form-control" name="rc" placeholder="Rolling Commision" required>
	    </div>
	    <div class="form-group col-md-3">
		  <label for="inputPassword4">Target Commision</label>
		  <input type="text" class="form-control" name="tc" placeholder="Target Commision" required>
	    </div>
	    <div class="form-group col-md-3">
		  <label for="inputPassword4">Eclusive Commision (D+R)</label>
		  <input type="text" class="form-control" name="ec" placeholder="Eclusive Commision (D+R)" required>
	    </div>
	  </div>
	  <div class="form-row">
	    <div class="form-group col-md-3">
		  <label for="inputPassword4">Yearly/ Hidden  Commission</label>
		  <input type="text" class="form-control" name="yc" placeholder="Yearly/ Hidden  Commission" required>
	    </div>
	    <div class="form-group col-md-3">
		  <label for="inputPassword4">Retail Commision</label>
		  <input type="text" class="form-control" name="retc" placeholder="Retail Commision" required>
	    </div>
	    <div class="form-group col-md-3">
		  <label for="inputPassword4">Delivery Commision</label>
		  <input type="text" class="form-control" name="delc" placeholder="Delivery Commision (D+R)" required>
	    </div>
	    <div class="form-group col-md-3">
		  <label for="inputPassword4">Spot Discount</label>
		  <input type="text" class="form-control" name="sd" placeholder="Spot Discount" required>
	    </div>
	  </div>
	  <div class="form-row">
	  <div class="form-group col-md-6">
		  <label for="inputPassword4">Package-1 Name</label>
		  <input type="text" class="form-control" name="p1" placeholder="Package-1 Name" required>
	  </div>
	  <div class="form-group col-md-6">
		  <label for="inputPassword4">Tk</label>
		  <input type="text" class="form-control" name="p1tk" placeholder="Tk" required>
	  </div>
	  </div>
	  <div class="form-row">
	  <div class="form-group col-md-6">
		  <label for="inputPassword4">Package-2 Name</label>
		  <input type="text" class="form-control" name="p2" placeholder="Package-2 Name" required>
	  </div>
	  <div class="form-group col-md-6">
		  <label for="inputPassword4">Tk</label>
		  <input type="text" class="form-control" name="p2tk" placeholder="Tk" required>
	  </div>
	  </div>
	  <div class="form-row">
	  <div class="form-group col-md-6">
		  <label for="inputPassword4">Package-3 Name</label>
		  <input type="text" class="form-control" name="p3" placeholder="Package-3 Name" required>
	  </div>
	  <div class="form-group col-md-6">
		  <label for="inputPassword4">Tk</label>
		  <input type="text" class="form-control" name="p3tk" placeholder="Tk" required>
	  </div>
	  </div>
	  <div class="form-row">
	  <div class="form-group col-md-6">
		  <label for="inputPassword4">Package-4 Name</label>
		  <input type="text" class="form-control" name="p4" placeholder="Package-4 Name" required>
	  </div>
	  <div class="form-group col-md-6">
		  <label for="inputPassword4">Tk</label>
		  <input type="text" class="form-control" name="p4tk" placeholder="Tk" required>
	  </div>
	  </div>	  
	  <div class="form-group col-lg-12 col-md-12 box wow bounceInUp">
	    <center><button name="submit" type="submit" value="submit" class="btn btn-primary">Submit</button></center>
	  </div>
	  
	</form>
</div>
</div>	  

<?php include 'admin_inc/footer.php'?>
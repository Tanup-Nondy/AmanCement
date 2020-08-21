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
  
	<form method="post" action="insert_man_action.php">
	  <div class="form-group">
		  <label for="inputPassword4">Name of Distributor/Dealer</label>
		  <input type="text" class="form-control" name="name" placeholder="Name of Distributor/Dealer" required>
	  </div>
	  <div class="form-group">
		<label for="inputAddress">Nature</label>
		<select class="form-control" name="nature" size="1">
			<option value="dealer" selected="">Dealer</option>
			<option value="exclusive dealer">Exclusive Dealer</option>
			<option value="retailer">Retailer</option>
		</select>
	  </div>
	  <div class="form-group">
		  <label for="inputPassword4">Address</label>
		  <textarea type="text" class="form-control" name="address" placeholder="Enter Address" required></textarea>
	  </div>	  
	  <div class="form-row">
		<div class="form-group col-md-3">
		  <label for="inputPassword4">Proprietor's Name</label>
		  <input type="text" class="form-control" name="p_name" placeholder="Name of Proprietor" required>
		</div>
		<div class="form-group col-md-3">
		  <label for="inputPassword4">Shop Contact No</label>
		  <input type="text" class="form-control" name="shop_contact" placeholder="Shop Contact No" maxlength="11" required>
		</div>
		<div class="form-group col-md-3">
			<label for="inputPassword4">Date of Birth of Proprietor</label>
			<input type="date" class="form-control" name="p_birth" placeholder="Date of Birth of Proprietor">
		</div>
	    <div class="form-group col-md-3">
		  <label for="inputPassword4">Marriage Day of Proprietor</label>
		  <input type="date" class="form-control" name="p_marriage" placeholder="Marriage Day of Proprietor">
	    </div>
	  </div>
	  <div class="form-group">
		  <label for="inputPassword4">Attached Officer's Name, Designation & ID</label>
		  <input type="text" class="form-control" name="a_officer" placeholder="Attached Officer's Name, Designation & ID" required>
	  </div>
	  <div class="form-row">
	  <div class="form-group col-md-6">
		  <label for="inputPassword4">Selling Year</label>
		  <input type="text" class="form-control" name="year"  placeholder="Selling Year" required>
	  </div>
	  <div class="form-group col-md-6">
		<label for="inputAddress">Selling Month</label>
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
	  <div class="form-group">
		  <label for="inputPassword4">Name of Brand</label>
		  <input type="text" class="form-control" name="brand" placeholder="Name of Brand" required>
	  </div>
	  <div class="form-row">
	  <div class="form-group col-md-3">
		  <label for="inputPassword4">Sales Volume</label>
		  <input type="text" class="form-control" name="volume" placeholder="Sales Volume" required>
	  </div>
	  <div class="form-group col-md-3">
		  <label for="inputPassword4">Free Bag</label>
		  <input type="text" class="form-control" name="free_bag" placeholder="Free Bag" required>
	  </div>
	  <div class="form-group col-md-3">
		  <label for="inputPassword4">CNF price</label>
		  <input type="text" class="form-control" name="cnf_price" placeholder="CNF Price" required>
	  </div>
	  <div class="form-group col-md-3">
		  <label for="inputPassword4">FOB price</label>
		  <input type="text" class="form-control" name="fob_price" placeholder="FOB Price" required>
	  </div>
	  </div>
	  <div class="form-row">
	  <div class="form-group col-md-4">
		  <label for="inputPassword4">Dealer Commision</label>
		  <input type="text" class="form-control" name="d_commision" placeholder="Dealer Commision" required>
	  </div>
	  <div class="form-group col-md-4">
		  <label for="inputPassword4">Retailer Commision</label>
		  <input type="text" class="form-control" name="r_commision" placeholder="Retailer Commision" required>
	  </div>
	  <div class="form-group col-md-4">
		  <label for="inputPassword4">Other Packages (Average per Bag)</label>
		  <input type="text" class="form-control" name="other" placeholder="Other Packages (Average per Bag)" required>
	  </div>
	  </div>	  
	  <div class="form-group col-lg-12 col-md-12 box wow bounceInUp">
	    <center><button name="submit" type="submit" value="submit" class="btn btn-primary">Submit</button></center>
	  </div>
	  
	</form>
</div>
</div>	  

<?php include 'admin_inc/footer.php'?>
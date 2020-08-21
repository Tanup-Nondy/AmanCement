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
          <h3>Update Retailer List of <?php $name=$_SESSION["dis"]; echo $name; ?> District</h3>
		  </center>
        </header>
		
      </div>
    </section><!-- #services -->

  </main>
  
	  <?php 
	  include ("dbconnect.php");
	  ini_set( "display_errors", 0);
//session_start();
$name=$_SESSION['dis'];
	
	$id=$_POST['update'];
	$select="SELECT * FROM `ret` where SI_NO='$id'";
	$chk=mysqli_query($cn,$select);
	if($chk){
		echo '<form method="post" action="edit_man_action.php">';
		//echo '<form method="post" action="gae.php">';
		while($row=mysqli_fetch_array($chk)){

	?>
	  
	  <div class="form-group">
		  <label for="inputPassword4">Name of Distributor/Dealer</label>
		  <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>">
	  </div>
	  <div class="form-group">
		<label for="inputAddress">Nature</label>
		<select class="form-control" name="nature" size="1">
			<option value="<?php echo $row['nature'];?>" selected=""><?php echo $row['nature'];?></option>
			<option value="dealer" selected="">Dealer</option>
			<option value="exclusive dealer">Exclusive Dealer</option>
			<option value="retailer">Retailer</option>
		</select>
	  </div>
	  <div class="form-group">
		  <label for="inputPassword4">Address</label>
		  <input type="text" class="form-control" name="address" value="<?php echo $row['address'];?>">
	  </div>	  
	  <div class="form-row">
		<div class="form-group col-md-3">
		  <label for="inputPassword4">Proprietor's Name</label>
		  <input type="text" class="form-control" name="p_name" value="<?php echo $row['p_name'];?>">
		</div>
		<div class="form-group col-md-3">
		  <label for="inputPassword4">Shop Contact No</label>
		  <input type="text" class="form-control" name="shop_contact" value="<?php echo $row['shop_contact'];?>">
		</div>
		<div class="form-group col-md-3">
			<label for="inputPassword4">Date of Birth of Proprietor</label>
			<input type="date" class="form-control" name="p_birth" value="<?php echo $row['p_birth'];?>">
		</div>
	    <div class="form-group col-md-3">
		  <label for="inputPassword4">Marriage Day of Proprietor</label>
		  <input type="date" class="form-control" name="p_marriage" value="<?php echo $row['p_marriage'];?>">
	    </div>
	  </div>
	  <div class="form-group">
		  <label for="inputPassword4">Attached Officer's Name, Designation & ID</label>
		  <input type="text" class="form-control" name="a_officer" value="<?php echo $row['a_officer'];?>">
	  </div>
	  <div class="form-row">
	  <div class="form-group col-md-6">
		  <label for="inputPassword4">Selling Year</label>
		  <input type="text" class="form-control" name="year" value="<?php echo $row['year'];?>">
	  </div>
	  <div class="form-group col-md-6">
		<label for="inputAddress">Selling Month</label>
		<select class="form-control" name="month" size="1">
			<option value="<?php echo $row['month'];?>" selected=""><?php echo $row['month'];?></option>
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
		  <input type="text" class="form-control" name="brand" value="<?php echo $row['brand'];?>">
	  </div>
	  <div class="form-row">
	  <div class="form-group col-md-3">
		  <label for="inputPassword4">Sales Volume</label>
		  <input type="text" class="form-control" name="volume" value="<?php echo $row['volume'];?>">
	  </div>
	  <div class="form-group col-md-3">
		  <label for="inputPassword4">Free Bag</label>
		  <input type="text" class="form-control" name="free_bag" value="<?php echo $row['free_bag'];?>">
	  </div>
	  <div class="form-group col-md-3">
		  <label for="inputPassword4">CNF price</label>
		  <input type="text" class="form-control" name="cnf_price" value="<?php echo $row['cnf_price'];?>">
	  </div>
	  <div class="form-group col-md-3">
		  <label for="inputPassword4">FOB price</label>
		  <input type="text" class="form-control" name="fob_price" value="<?php echo $row['fob_price'];?>">
	  </div>
	  </div>
	  <div class="form-row">
	  <div class="form-group col-md-4">
		  <label for="inputPassword4">Dealer Commision</label>
		  <input type="text" class="form-control" name="d_commision" value="<?php echo $row['d_commision'];?>">
	  </div>
	  <div class="form-group col-md-4">
		  <label for="inputPassword4">Retailer Commision</label>
		  <input type="text" class="form-control" name="r_commision" value="<?php echo $row['r_commision'];?>">
	  </div>
	  <div class="form-group col-md-4">
		  <label for="inputPassword4">Other Packages (Average per Bag)</label>
		  <input type="text" class="form-control" name="other" value="<?php echo $row['other'];?>">
	  </div>
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
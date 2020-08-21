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
          <h3>Edit data from private engineer list of <?php $name=$_SESSION["dis"]; 
	  echo $name; 
	  ?> district</h3>
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
	$select="SELECT * FROM `pe`where SI_NO='$id'";
	$chk=mysqli_query($cn,$select);
	if($chk){
		echo '<form method="post" action="edit_pe_action.php" enctype="multipart/form-data">';
		//echo '<form method="post" action="gae.php">';
		while($row=mysqli_fetch_array($chk)){

	?>
	  
	  <div class="form-group">
		<label for="inputAddress">Engineer Name</label>
		<input type="text" class="form-control" name="en" value="<?php echo $row['E_N'];?>">
	  </div>
	  <div class="form-group">
		<label for="inputAddress">Office Address</label>
		<input type="text" class="form-control" name="oa" value="<?php echo $row['O_A'];?>">
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-4">
		  <label for="inputEmail4">Contact No.</label>
		  <input type="text" class="form-control" name="cn" value="<?php echo $row['C_N'];?>">
		</div>
		<div class="form-group col-md-4">
		  <label for="inputPassword4">Thana</label>
		  <input type="text" class="form-control" name="th" value="<?php echo $row['Thana'];?>">
		</div>
		<div class="form-group col-md-4">
		  <label for="inputPassword4">Designation</label>
		  <input type="text" class="form-control" name="des" value="<?php echo $row['Des'];?>">
		</div>
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-4">
		  <label for="inputEmail4">Email</label>
		  <input type="mail" class="form-control" name="mail" value="<?php echo $row['E_Mail'];?>">
		</div>
		<div class="form-group col-md-4">
		  <label for="inputPassword4">Educational Qualification</label>
		  <input type="text" class="form-control" name="eq" value="<?php echo $row['E_Q'];?>">
		</div>
		<div class="form-group col-md-4">
		  <label for="exampleInputFile">Image</label>
		  <input type="file" name="image">
		</div>
	  </div>
	  <div class="form-group">
		<label for="inputAddress">University/College</label>
		<input type="text" class="form-control" name="uc" value="<?php echo $row['U_C'];?>">
	  </div>
	  <div class="form-group">
		<label for="inputAddress">How long working in this area(y)</label>
		<input type="text" class="form-control" name="y" value="<?php echo $row['Year'];?>">
	  </div>
	  <div class="form-group">
		<label for="inputAddress">Area Cover</label>
		<input type="text" class="form-control" name="ac" value="<?php echo $row['A_C'];?>">
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-3">
		  <label for="inputEmail4">Date of birth</label>
		  <input type="date" class="form-control" name="db" value="<?php echo $row['D_of_B'];?>">
		</div>
		<div class="form-group col-md-3">
		  <label for="inputPassword4">Marriage Day</label>
		  <input type="date" class="form-control" name="md" value="<?php echo $row['M_D'];?>">
		</div>
		<div class="form-group col-md-3">
		  <label for="inputPassword4">Hobby</label>
		  <input type="text" class="form-control" name="hb" value="<?php echo $row['Hobby'];?>">
		</div>
		<div class="form-group col-md-3">
		  <label for="inputPassword4">Involve Community</label>
		  <input type="text" class="form-control" name="ic" value="<?php echo $row['I_C'];?>">
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
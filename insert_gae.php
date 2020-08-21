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
	<form method="post" action="insert_gae_action.php">
	
	  <div class="form-group">
		<label for="inputAddress">Organization</label>
		<input type="text" class="form-control" name="org" placeholder="Organization">
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-6">
		  <label for="inputEmail4">Name</label>
		  <input type="text" class="form-control" name="name" placeholder="Name">
		</div>
		<div class="form-group col-md-6">
		  <label for="inputPassword4">Designation</label>
		  <input type="text" class="form-control" name="desn" placeholder="Designation">
		</div>
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-6">
		  <label for="inputEmail4">Personal Contact</label>
		  <input type="text" class="form-control" name="contact" maxlength="11" placeholder="Personal Contact">
		</div>
		<div class="form-group col-md-6">
		  <label for="inputPassword4">Official Contact</label>
		  <input type="text" class="form-control" name="ocontact" maxlength="11" placeholder="Official Contact">
		</div>
	  </div>
	  <div class="form-row">
	  <div class="form-group col-md-6">
	  <label for="inputEmail4">Email</label>
	  <input type="email" class="form-control" name="email" placeholder="Email">
	  </div>
	  <div class="form-group col-md-6">
		<label for="exampleInputFile">Image</label>
		<input type="file" name="image">
	  </div>
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-6">
		  <label for="inputEmail4">Birth Date</label>
		  <input type="date" class="form-control" name="dob" placeholder="Birth Date">
		</div>
		<div class="form-group col-md-6">
		  <label for="inputPassword4">Marriage Date</label>
		  <input type="date" class="form-control" name="dom" placeholder="Marriage Date">
		</div>
	  </div>
	  <div class="form-group">
		<label for="inputAddress">Office</label>
		<textarea type="text" class="form-control" name="office" placeholder="Office"></textarea>
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-6">
		  <label for="inputCity">Thana</label>
		  <input type="text" class="form-control" name="thana" placeholder="Thana">
		</div>
		<div class="form-group col-md-6">
		  <label for="inputState">Remarks</label>
		  <textarea type="text" class="form-control" name="remarks" placeholder="Remarks"></textarea>
		</div>
	  </div>
	  
	  <div class="form-group col-lg-12 col-md-12 box wow bounceInUp">
	    <center><button name="submit" type="submit" value="submit" class="btn btn-primary">Submit</button></center>
	  </div>
	</form>
</div>
</div>	  

<?php include 'admin_inc/footer.php'?>
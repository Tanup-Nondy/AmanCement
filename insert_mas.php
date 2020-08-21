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
	<form method="post" action="insert_mas_action.php">

	  <div class="form-group">
		<label for="inputAddress">Name of Mason</label>
		<input type="text" class="form-control" name="name" placeholder="Name of mason" required>
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-4">
		  <label for="inputEmail4">Mobile No</label>
		  <input type="text" class="form-control" name="phone" placeholder="Mobile No" required>
		</div>
		<div class="form-group col-md-4">
		  <label for="inputPassword4">Voter Id</label>
		  <input type="text" class="form-control" name="voter" placeholder="Voter Id" required>
		</div>
		<div class="form-group col-md-4">
		  <label for="inputPassword4">Mason Id</label>
		  <input type="text" class="form-control" name="mason" placeholder="Mason Id" required>
		</div>
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-4">
		  <label for="inputEmail4">Type</label>
		  <input type="text" class="form-control" name="type" placeholder="Type" required>
		</div>
		<div class="form-group col-md-4">
		  <label for="inputPassword4">Thana</label>
		  <input type="text" class="form-control" name="thana" placeholder="Thana" required>
		</div>
		<div class="form-group col-md-4">
		  <label for="inputPassword4">Word</label>
		  <input type="text" class="form-control" name="word" placeholder="Word" required>
		</div>
	  </div>
		<div class="form-group">
		  <label for="inputState">Remarks</label>
		  <textarea type="text" class="form-control" name="remarks" placeholder="Remarks"></textarea>
		</div>
	  
	  <div class="form-group col-lg-12 col-md-12 box wow bounceInUp">
	    <center><button name="submit" type="submit" value="submit" class="btn btn-primary">Submit</button></center>
	  </div>
	</form>
</div>
</div>	  

<?php include 'admin_inc/footer.php'?>

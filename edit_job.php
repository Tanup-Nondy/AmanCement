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

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="option.php">Home</a></li>
		  <li class="menu-active"><a href="home.php">Data Entry</a></li>
          <li class="menu-active"><a href="logout.php">Logout</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
	  
    </div>
  </header><!-- #header -->


  <main id="main">
  
    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Update Job Entry</h3>
        </header>
		
      </div>
    </section><!-- #services -->

  </main>

	  <?php 
	  ini_set( "display_errors", 0); 
include("dbconnect.php");
//session_start();
	
	$id=$_POST['update'];
	$select="SELECT * FROM `job`where SI_NO='$id'";
	$chk=mysqli_query($cn,$select);
	if($chk){
		echo '<form method="post" action="edit_job_action.php" enctype="multipart/form-data">';
		//echo '<form method="post" action="gae.php">';
		while($row=mysqli_fetch_array($chk)){

	?>
	  
	  <div class="form-row">
		<div class="form-group col-md-6">
		  <label for="inputEmail4">Job Title</label>
		  <input type="text" class="form-control" name="title" value="<?php echo $row['title'];?>">
		</div>
		<div class="form-group col-md-6">
		  <label for="inputPassword4">File</label>
		  <input class="form-control" type="file" name="file" value="<?php echo $row['file'];?>"/>
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
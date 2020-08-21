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
          <h3>Update Entry</h3>
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

<?php 
	include ("dbconnect.php");
	ini_set( "display_errors", 0);
	//session_start();
	$name=$_SESSION['dis'];

	$id=$_POST['update'];
	$select="SELECT `SI_NO`,`name`, `phone`, `voter_id`, `mason_id`, `type`, `district`, `thana`, `word`, `remarks` FROM `mas` WHERE  SI_NO='$id'";
	$chk=mysqli_query($cn,$select);
	if($chk){
	echo '<form method="post" action="edit_mas_action.php">';
	//echo '<form method="post" action="gae.php">';
	while($row=mysqli_fetch_array($chk)){

?>
	  
	  <div class="form-group">
		<label for="inputAddress">Name of Mason</label>
		<input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>">
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-4">
		  <label for="inputEmail4">Mobile No</label>
		  <input type="text" class="form-control" name="phone" value="<?php echo $row['phone'];?>">
		</div>
		<div class="form-group col-md-4">
		  <label for="inputPassword4">Voter Id</label>
		  <input type="text" class="form-control" name="voter" value="<?php echo $row['voter_id'];?>">
		</div>
		<div class="form-group col-md-4">
		  <label for="inputPassword4">Mason Id</label>
		  <input type="text" class="form-control" name="mason" value="<?php echo $row['mason_id'];?>">
		</div>
	  </div>
	  <div class="form-row">
		<div class="form-group col-md-4">
		  <label for="inputEmail4">Type</label>
		  <input type="text" class="form-control" name="type" value="<?php echo $row['type'];?>">
		</div>
		<div class="form-group col-md-4">
		  <label for="inputPassword4">Thana</label>
		  <input type="text" class="form-control" name="thana" value="<?php echo $row['thana'];?>">
		</div>
		<div class="form-group col-md-4">
		  <label for="inputPassword4">Word</label>
		  <input type="text" class="form-control" name="word" value="<?php echo $row['word'];?>">
		</div>
	  </div>
		<div class="form-group">
		  <label for="inputState">Remarks</label>
		  <input type="text" class="form-control" name="remarks" value="<?php echo $row['remarks'];?>">
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
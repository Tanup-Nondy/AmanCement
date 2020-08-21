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
          <h3>Total Job List</h3>
        </header>
		
      </div>
    </section><!-- #services -->

  </main>
 
<div class="container-fluid">
  <!-- Example DataTables Card-->
  <div class="card mb-3">
	<div class="card-header">
	  <i class="fa fa-table"></i> All Job List</div>
	<div class="card-body">
	  <div class="table-responsive">
  <?php
    ini_set( "display_errors", 0); 
    include("dbconnect.php");
	echo '<div class="data">';
	echo '<table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">';
	echo '<tr>';
	echo '<th style="color:black;"><center>Title</center></th>';
	echo '<th style="color:black;" colspan="3"><center>Actions</center></th>';
	echo '</tr>';
	$search="SELECT * FROM job";
	$chk=mysqli_query($cn,$search);
	if($chk){
	while($row=mysqli_fetch_array($chk)){
	   echo '<tr>';
	   echo '<td style="color:black;">'.$row['title'].'</td>';
	   
	   ?>
		<td><center><button type="submit" class="btn btn-outline-primary" value="<?php echo $row['SI_NO'];?>" name="view"><a href="uploads/<?php echo $row['file'] ?>" target="_blank">View</button></center></td>
		<form method="post" action="edit_job.php" >
		<td><center><button type="submit" class="btn btn-outline-warning" value="<?php echo $row['SI_NO'];?>" name="update">Update</button></center></td>
		</form>
		<form method="post" action="job_action.php" >
		<td><center><button type="submit" class="btn btn-outline-danger" value="<?php echo $row['SI_NO'];?>" name="delete">Delete</button></center></td>
		</form>
	   <?php
	   echo '</tr>';
	}


}	
	echo '</table>';
	echo '</div>';
?>
	  </div>
	</div>
	<div class="card-footer small text-muted">All Job Opportunity</div>
  </div>
</div>
	
<?php include 'admin_inc/footer.php'?>
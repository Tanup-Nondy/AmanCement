<?php
session_start();
ini_set( "display_errors", 0); 
$ad=5;
$us=6;
if($_SESSION['admin']){
    $ad=$_SESSION['admin'];
}
if($_SESSION['user']){
    $us=$_SESSION['user'];
}
if($ad!=2 && $us!=1){
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
          <h3>Distributer List of <?php $name=$_SESSION["dis"]; echo $name; ?> District</h3>
        </header>
        
		<center>
		
		<div class="row">
		
          <div class="col-lg-12 col-md-9 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><button class="form-control" type="submit"  value="print" name="print"><a href="print_dis.php">Print Data</a></button></h4>
          </div>
		  
        </div>

		</center>
		
      </div>
    </section><!-- #services -->

</main>

<br>

<div class="search-style">
<div class="container">
	<div class="row">
		<div class="col-md-12">
            <div class="input-group" id="adv-search">
                <input type="text" class="form-control" placeholder="Search for Data" />
                <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <div class="dropdown dropdown-lg">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <form class="form-horizontal" role="form" method="post" action="#">
                                  <div class="form-group">
                                    <label for="contain">Year</label>
                                    <input class="form-control" type="text" name="year" placeholder="Year" required>
                                  </div>
                                  <div class="form-group">
									<label for="filter">Month</label>
                                    <select class="form-control" name="month"  size="1">
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
									<option value="November">november</option>
									<option value="December">December</option>
									</select>
                                  </div>
								  <br>
                                  <button name="submit" type="submit" value="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                </form>
                            </div>
                        </div>
                        <button name="submit" type="submit" value="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </div>
                </div>
            </div>
          </div>
        </div>
</div>
</div>
<br>

<div class="container-fluid">
  <!-- Example DataTables Card-->
  <div class="card mb-3">
	<div class="card-header">
	  <i class="fa fa-table"></i> Distributer List of <?php $name=$_SESSION["dis"]; echo $name; ?> District</div>
	<div class="card-body">
	  <div class="table-responsive">
  <?php
if(isset($_POST['submit'])){
    ini_set( "display_errors", 0); 
    include("dbconnect.php");
    $dis=$name;
	$year=$_POST['year'];
	$month=$_POST['month'];
	$_SESSION["year"]=$year;
	$_SESSION["month"]=$month;
	//echo $year.$month.$dis;
	$search="SELECT * FROM `dis` WHERE year='$year' AND district='$dis' AND month='$month'";
	$chk=mysqli_query($cn,$search);
	if($chk){
	   $c=0; 
	echo '<div class="data">';
	echo '<table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">';
	echo '<tr>';
	echo '<th style="color:black;">SI No</th>';
	echo '<th style="color:black;">Company</th>';
	echo '<th style="color:black;">Brand</th>';
	echo '<th style="color:black;">Delar Name</th>';
	echo '<th style="color:black;">Mobile No</th>';
	echo '<th style="color:black;">Address</th>';
	echo '<th style="color:black;">Total Sales</th>';
	echo '<th style="color:black;">Remarks</th>';
	echo '<th style="color:black;" colspan="3"><center>Actions</center></th>';
	echo '</tr>';
	while($row=mysqli_fetch_array($chk)){
	    $c=$c+1;
	   echo '<tr>';
	   echo '<td style="color:black;">'.$c.'</td>';
	   echo '<td style="color:black;">'.$row['Company'].'</td>';
	   echo '<td style="color:black;">'.$row['Brand'].'</td>';
	   echo '<td style="color:black;">'.$row['D_N'].'</td>';
	   echo '<td style="color:black;">'.$row['Mob_No'].'</td>';
	   echo '<td style="color:black;">'.$row['Address'].'</td>';
	   echo '<td style="color:black;">'.$row['T_S'].'</td>';
	   echo '<td style="color:black;">'.$row['Remarks'].'</td>';
	   ?>
		<form method="post" action="view_single_dis.php" >
		<td><center><button type="submit" class="btn btn-outline-primary" value="<?php echo $row['SI_NO'];?>" name="view">View</button></center></td>
		</form>
		<form method="post" action="edit_dis.php" >
		<td><center><button type="submit" class="btn btn-outline-warning" value="<?php echo $row['SI_NO'];?>" name="update">Update</button></center></td>
		</form>
		<form method="post" action="dis_action.php" >
		<td><center><button type="submit" class="btn btn-outline-danger" value="<?php echo $row['SI_NO'];?>" name="delete">Delete</button></center></td>
		</form>
	   <?php
	   echo '</tr>';
	}
	echo '</table>';
	echo '</div>';
	}
}
?>
	  </div>
	</div>
	<div class="card-footer small text-muted">Data Table</div>
  </div>
</div>

<?php include 'admin_inc/footer.php'?>
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

if($_SESSION['user']==1){
	header("location:user_pricing.php");
}
?>
<?php
ini_set( "display_errors", 0); 
if($_SESSION['edit']==2){
	unset($_SESSION['edit']);
	echo '<script> alert("Data has been Updated.");</script>';
	
	}
?>
<?php
ini_set( "display_errors", 0); 
if($_SESSION['add']==3){
	unset($_SESSION['add']);
	echo '<script> alert("Data has been added.");</script>';
	
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
          <h3>Pricing List of <?php $name=$_SESSION["dis"]; echo $name; ?> District</h3>
        </header>
        
		<center>
		
		<div class="row">
		
          <div class="col-lg-6 col-md-9 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><button class="form-control" type="submit"  value="print" name="print"><a href="insert_pricing.php">Add Data</a></button></h4>
          </div>
		<div class="col-lg-6 col-md-9 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><button class="form-control" type="submit"  value="print" name="print"><a href="print_pricing.php">Print Data</a></button></h4>
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
	  <i class="fa fa-table"></i> Pricing List of <?php $name=$_SESSION["dis"]; echo $name; ?> District</div>
	<div class="card-body">
	  <div class="table-responsive">
		<table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0" border="2">
		  <thead>
			<tr>
					<th>SI No.</th>
					<th>Name of Company</th>
					<th>District</th>
					<th>Thana/Upozila</th>
					<th>Type of Cement </th>
					<th>C&amp;F Price</th>
					<th>Truck Fare</th>
					<th>FOB Rate</th>
					<th>Free Bag</th>
					<th>Dealer Commission </th>
					<th>Rolling Commission </th>
					<th>Target Commission </th>
					<th>Eclusive Commission (D+R)</th>
					<th>Yearly/ Hidden  Commission </th>
					<th>Retail Commission  </th>
					<th>Delivery Commission </th>
					<th>Spot discount</th>
					<th>Package-1 Name</th>
					<th>Tk</th>
					<th>Package-2 Name </th>
					<th>Tk</th>
					<th>Package-3 Name</th>
					<th>Tk </th>
					<th>Package-4 Name</th>
					<th>Tk</th>
					<th>TOTAL Commission </th>
					<th>NSP C&amp;F</th>
					<th>NSP-FOB</th>
					<th colspan="3"><center>Actions</center></th>
			</tr>
		  </thead>

		  
 <?php
if(isset($_POST['submit'])){
	$m=$_POST['month'];
	$y=$_POST['year'];
    $_SESSION['m']=$m;
	$_SESSION['y']=$y;
include ("dbconnect.php");
	//$name=$_POST['dist'];
	//$_SESSION["update"]="$name";
	    $select="SELECT * FROM `pricing` where district='$name' AND year='$y' AND month='$m' ORDER BY name ASC";
	
	$chk=mysqli_query($cn,$select);
	if($chk){
		$c=0;
		while($row=mysqli_fetch_array($chk)){
								$c=$c+1;
								?>
							    <tr style="color:black">
								<td><?php echo $c;?></td>
								<td><?php echo $row['name'];?></td>
								<td><?php echo $row['district'];?></td>
								<td><?php echo $row['thana'];?></td>
								<td><?php echo $row['type'];?></td>
								<td><?php echo $row['cf'];?></td>
								<td><?php echo $row['truck'];?></td>
								<td><?php 
									$sub=$row['cf']-$row['truck'];
									echo $sub;
								?></td>
								<td><?php echo $row['free'];?></td>
								<td><?php echo $row['dc'];?></td>
								<td><?php echo $row['rc'];?></td>
								<td><?php echo $row['tc'];?></td>
								<td><?php echo $row['ec'];?></td>
								<td><?php echo $row['yc'];?></td>
								<td><?php echo $row['retc'];?></td>
								<td><?php echo $row['delc'];?></td>
								<td><?php echo $row['sd'];?></td>
								<td><?php echo $row['p1'];?></td>
								<td><?php echo $row['p1tk'];?></td>
								<td><?php echo $row['p2'];?></td>
								<td><?php echo $row['p2tk'];?></td>
								<td><?php echo $row['p3'];?></td>
								<td><?php echo $row['p3tk'];?></td>
								<td><?php echo $row['p4'];?></td>
								<td><?php echo $row['p4tk'];?></td>
								<td><?php 
								$t=$row['free']+$row['dc']+$row['rc']+$row['tc']+$row['ec']+$row['yc']+$row['retc']+$row['delc']+$row['sd']+$row['p1tk']+$row['p2tk']+$row['p3tk']+$row['p4tk'];
								echo $t;
								?></td>
								<td><?php 
								$n=$row['cf']-$t;
								echo $n;
								?></td>
								<td><?php 
								$f=$sub-$t;
								echo $f;
								?></td>
		<form method="post" action="view_single_pricing.php" >
		<td><center><button type="submit" class="btn btn-outline-primary" value="<?php echo $row['SI_NO'];?>" name="view">View</button></center></td>
		</form>
		<form method="post" action="edit_pricing.php" >
		<td><center><button type="submit" class="btn btn-outline-warning" value="<?php echo $row['SI_NO'];?>" name="update">Update</button></center></td>
		</form>
		<form method="post" action="pricing_action.php" >
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

		</table>
	  </div>
	</div>
	<div class="card-footer small text-muted">Data Table</div>
  </div>
</div>
  
<?php include 'admin_inc/footer.php'?>
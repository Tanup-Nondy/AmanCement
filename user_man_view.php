<?php
session_start();
ini_set( "display_errors", 0); 
$us=6;
if($_SESSION['user']){
    $us=$_SESSION['user'];
}
if($us!=1){
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
            <h4 class="title"><button class="form-control" type="submit"  value="print" name="print"><a href="print_man.php">Print Data</a></button></h4>
          </div>
		  
        </div>

		</center>
		
      </div>
    </section><!-- #services -->

</main>

<div class="search-style">
<div class="container">
	<div class="row">
		<div class="col-md-12">
            <div class="input-group" id="adv-search">
                <input type="text" class="form-control" placeholder="Search for Sales Information" />
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
                                    <select class="form-control" name="month">
									<option value="January" selected="">January</option>
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
	$search="SELECT * FROM `ret` WHERE year='$year' AND district='$dis' AND month='$month'";
	$chk=mysqli_query($cn,$search);
	if($chk){
		$c=0;
	echo '<div class="data">';
	echo '<table border="5 px solid black" class="table" width="100%">';
	echo '<tr class="table-info">';
	echo '<th style="color:black;">SI No</th>';
	echo '<th style="color:black;">Name of Distributor/Dealer</th>';
	echo '<th style="color:black;">Nature</th>';
	echo '<th style="color:black;">Address</th>';
	echo '<th style="color:black;">Proprietors Name</th>';
	echo '<th style="color:black;">Shop Contact No</th>';
	echo '<th style="color:black;">Date of Birth of Proprietor</th>';
	echo '<th style="color:black;">Marriage Day of Proprietor</th>';
	echo '<th style="color:black;">Attached Officers Name, Designation & ID</th>';
	echo '<th style="color:black;">Name of Brand</th>';
	echo '<th style="color:black;">Sales volume</th>';
	echo '<th style="color:black;">Free Bag</th>';
	echo '<th style="color:black;">CNF price</th>';
	echo '<th style="color:black;">FOB price</th>';
	echo '<th style="color:black;">Dealer Commision</th>';
	echo '<th style="color:black;">Retailer Commision</th>';
	echo '<th style="color:black;">Other Packages (Average per Bag)</th>';
	echo '</tr>';
		while($row=mysqli_fetch_array($chk)){
								$c=$c+1;
								?>
							    <tr style="color:black">
								<td><?php echo $c;?></td>
								<td><?php echo $row['name'];?></td>
								<td><?php echo $row['nature'];?></td>
								<td><?php echo $row['address'];?></td>
								<td><?php echo $row['p_name'];?></td>
								<td><?php echo $row['shop_contact'];?></td>
								<td><?php echo $row['p_birth'];?></td>
								<td><?php echo $row['p_marriage'];?></td>
								<td><?php echo $row['a_officer'];?></td>
								<td><?php echo $row['brand'];?></td>
								<td><?php echo $row['volume'];?></td>
								<td><?php echo $row['free_bag'];?></td>
								<td><?php echo $row['cnf_price'];?></td>
								<td><?php echo $row['fob_price'];?></td>
								<td><?php echo $row['d_commision'];?></td>
								<td><?php echo $row['r_commision'];?></td>
								<td><?php echo $row['other'];?></td>
								<?php
								echo '</tr>';
								}
								echo '</table>';
								echo '</div>';
								
	}

}	
?>

<?php include 'admin_inc/footer.php'?>

	
  <!--</div>-->
  
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>

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
          <h3>Print Data</h3>
          <center>
		  <h2><?php $name=$_SESSION["dis"]; 
		  echo $name; 
		  ?>
		  </h2>
		  <!--<form method="post" action="print_gae.php" >-->
		  <button type="submit" class="btn btn-outline-primary" value="print" name="print"><a href="#" id="print" onclick="javascript:printlayer('div-id-name')">Print</a></button>
		  <!--</form>-->
		  </center>
        </header>
		
      </div>
    </section><!-- #services -->

  </main>
  
	  <div id="div-id-name" class="data">
	      <center><h1 style="color:lightgreen"><b><u>Retailer List of <?php $name=$_SESSION["dis"]; 
	  echo $name; 
	  ?> District</u></b></h1>
	  <h1 style="color:lightgreen"><b><u><?php  
	  $m=$_SESSION["month"];
	  $y=$_SESSION["year"];
	  echo $m."      ". $y;
	  ?></u></b></h1>
	  </center>
	  <table border="1 px solid white" width="100%">
			
				<tr class="table-info">
					<th>SI No</th>
                    <th>Name of Distributor/Dealer</th>
                    <th>Nature</th>
                    <th>Address</th>
                    <th>Proprietors Name</th>
                    <th>Shop Contact No</th>
                    <th>Date of Birth of Proprietor</th>
                    <th>Marriage Day of Proprietor</th>
                    <th>Attached Officers Name, Designation & ID</th>
                    <th>Name of Brand</th>
                    <th>Sales volume</th>
                    <th>Free Bag</th>
                    <th>CNF price</th>
                    <th>FOB price</th>
                    <th>Dealer Commision</th>
                    <th>Retailer Commision</th>
                    <th>Other Packages (Average per Bag)</th>
			     </tr>
<?php
	
	
include ("dbconnect.php");
	$name=$_SESSION["dis"]; 
	//$_SESSION["update"]="$name";
	$select="SELECT * FROM `ret` WHERE district='$name' AND year='$y' AND month='$m'";
	$chk=mysqli_query($cn,$select);
	if($chk){
	    $c=0;
		//echo '<form method="post" action="edit.php">';
		while($row=mysqli_fetch_array($chk)){
								//echo '<tr style="color:black">';
								//echo '<td>'.$row['SI_NO'].'</td>';
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
								
	}
	
	
?>

</table>
</div>

<?php include 'admin_inc/footer.php'?>
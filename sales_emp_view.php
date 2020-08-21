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
	header("location:user_man.php");
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
          <h3>Sales Employee List <?php $name=$_SESSION["dis"]; ?></h3>
        </header>
        
		<center>
		
		<div class="row">
		
          <div class="col-lg-12 col-md-9 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><button class="form-control" type="submit"  value="print" name="print"><a href="print_sales_emp.php">Print Data</a></button></h4>
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
									<label for="filter">Designation</label>
                                    <select class="form-control" name="des[]" multiple="multiple">
										<option value="Executive Director" selected="">Executive Director(ED)</option>
										<option value="Chief Marketing Officer (CMO)">Chief Marketing Officer (CMO)</option>
										<option value="GM">GM</option>
										<option value="DGM">DGM</option>
										<option value="AGM">AGM</option>
										<option value="Senior Manager">Senior Manager</option>
										<option value="Manager">Manager</option>
										<option value="Deputy Manager">Deputy Manager</option>
										<option value="Assit. Manager">Assit. Manager</option>
										<option value="Sr. Executive">Sr. Executive</option>
										<option value="Executive">Executive</option>
										<option value="Officer">Officer</option>
									</select>
                                  </div>
                                  <div class="form-group">
									<label for="filter">Company Name</label>
                                    <select class="form-control" name="company" size="1">
								    <option value="Aman Cement Mills Ltd" selected="">Aman Cement Mills Ltd</option>
									<option value="Shah Cement Ind. Ltd.">Shah Cement Ind. Ltd.</option>
									<option value="Bashundhara Industrial Complex Ltd.">Bashundhara Industrial Complex Ltd.</option>
									<option value="Unique Cement Ind. Ltd.">Unique Cement Ind. Ltd.</option>
									<option value="Unique Cement Ind. Ltd.">Unique Cement Ind. Ltd.</option>
									<option value="M. I. Cement Factory Ltd.">M. I. Cement Factory Ltd.</option>
									<option value="Shun Shing Group International Ltd.">Shun Shing Group International Ltd.</option>
									<option value="Premier Cement Mills Limited">Premier Cement Mills Limited</option>
									<option value="Heidelberg Cement Bangladesh">Heidelberg Cement Bangladesh</option>
									<option value="Lafarge Surma Cement Ltd.">Lafarge Surma Cement Ltd.</option>
									<option value="Royal Cement Limited">Royal Cement Limited</option>
									<option value="Madina Cement Industries Limited">Madina Cement Industries Limited</option>
									<option value="Confidence Cement Ltd.">Confidence Cement Ltd.</option>
									<option value="Sena Kalyan Sangstha">Sena Kalyan Sangstha</option>
									<option value="Dubai Bangladesh Cement Mills Ltd">Dubai Bangladesh Cement Mills Ltd</option>
									<option value="Olympic Cement Ltd.">Olympic Cement Ltd.</option>
									<option value="Akij Cement Company Ltd.">Akij Cement Company Ltd.</option>
									<option value="Grasim Industries">Grasim Industries</option>
									<option value="Eastern Cement Industries Limited">Eastern Cement Industries Limited</option>
									<option value="Metrocem Cement Ltd">Metrocem Cement Ltd</option>
									<option value="Cemex Cement BD. Ltd">Cemex Cement BD. Ltd</option>
									<option value="Diamond Cement Limited">Diamond Cement Limited</option>
									<option value="Anwar Group of Industries (AGI)">Anwar Group of Industries (AGI)</option>
									<option value="Mir Cement Limited">Mir Cement Limited</option>
									<option value="S. Alam Cement Limited">S. Alam Cement Limited</option>
									<option value="Aramit Cement Limited">Aramit Cement Limited</option>
									<option value="Alhaj Mostafa-Hakim Cement Industries">Alhaj Mostafa-Hakim Cement Industries</option>
									<option value="NGS CEMENT INDUSTRIES LIMITED">NGS CEMENT INDUSTRIES LIMITED</option>
									<option value="Chattak Cement Co. Ltd">Chattak Cement Co. Ltd</option>
									<option value="Noapara Cement Mills Ltd">Noapara Cement Mills Ltd</option>
									<option value="Deshbandhu Cement Mills Limited">Deshbandhu Cement Mills Limited</option>
									<option value="Holcim Cement Bangladesh Ltd">Holcim Cement Bangladesh Ltd</option>
									<option value="Bengal Tiger Cement Inds. Ltd.">Bengal Tiger Cement Inds. Ltd.</option>
									</select>
                                  </div>
                                  <div class="form-group">
									<label for="filter">Working Area</label>
                                    <select class="form-control" name="area" size="1">
										<option value="Head Offices" selected="">Head Offices</option>
										<option value="All">All</option>
										<option value="Bagerhat">Bagerhat</option>
										<option value="Bandarban">Bandarban</option>
										<option value="Barguna">Barguna</option>
										<option value="Barisal">Barisal</option>
										<option value="Bhola">Bhola</option>
										<option value="Bogra">Bogra</option>
										<option value="Brahmanbaria">Brahmanbaria</option>
										<option value="Chandpur">Chandpur</option>
										<option value="Chapainawabganj">Chapainawabganj</option>
										<option value="Chittagong">Chittagong</option>
										<option value="Chuadanga">Chuadanga</option>
										<option value="Comilla">Comilla</option>
										<option value="Coxsbazar">Coxsbazar</option>
										<option value="Dinajpur">Dinajpur</option>
										<option value="Faridpur">Faridpur</option>
										<option value="Feni">Feni</option>
										<option value="Gaibandha">Gaibandha</option>
										<option value="Gazipur">Gazipur</option>
										<option value="Gopalganj">Gopalganj</option>
										<option value="Habiganj">Habiganj</option>
										<option value="Jamalpur">Jamalpur</option>
										<option value="Jatrabari">Jatrabari</option>
										<option value="Jessore">Jessore</option>
										<option value="Jhalokathi">Jhalokathi</option>
										<option value="Jhenaidah">Jhenaidah</option>
										<option value="Joypurhat">Joypurhat</option>
										<option value="Keraniganj">Keraniganj</option>
										<option value="Khagrachari">Khagrachari</option>
										<option value="Khulna">Khulna</option>
										<option value="Kisorganj">Kisorganj</option>
										<option value="Kurigram">Kurigram</option>
										<option value="Kushtia">Kushtia</option>
										<option value="Lakhsmipur">Lakhsmipur</option>
										<option value="Lalmonirhat">Lalmonirhat</option>
										<option value="Madaripur">Madaripur</option>
										<option value="Magura">Magura</option>
										<option value="Manikganj">Manikganj</option>
										<option value="Meherpur">Meherpur</option>
										<option value="Mirpur">Mirpur</option>
										<option value="Moulvibazar">Moulvibazar</option>
										<option value="Munshiganj">Munshiganj</option>
										<option value="Mymenshing">Mymenshing</option>
										<option value="Naogaon">Naogaon</option>
										<option value="Narail">Narail</option>
										<option value="Narayanganj">Narayanganj</option>
										<option value="Narsingdi">Narsingdi</option>
										<option value="Natore">Natore</option>
										<option value="Netrokona">Netrokona</option>
										<option value="Nilphamari">Nilphamari</option>
										<option value="Noakhali">Noakhali</option>
										<option value="Old Dhaka">Old Dhaka</option>
										<option value="Pabna">Pabna</option>
										<option value="Panchagarh">Panchagarh</option>
										<option value="Patuakhali">Patuakhali</option>
										<option value="Pirojpur">Pirojpur</option>
										<option value="Rajbari">Rajbari</option>
										<option value="Rajshahi">Rajshahi</option>
										<option value="Rangamati">Rangamati</option>
										<option value="Rangpur">Rangpur</option>
										<option value="Satkhira">Satkhira</option>
										<option value="Saver">Saver</option>
										<option value="Shariatpur">Shariatpur</option>
										<option value="Sherpur">Sherpur</option>
										<option value="Sirajganj">Sirajganj</option>
										<option value="Sunamganj">Sunamganj</option>
										<option value="Sylhet">Sylhet</option>
										<option value="Tangail">Tangail</option>
										<option value="Thakurgaon">Thakurgaon</option>
										<option value="Uttara">Uttara</option>
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
	  <i class="fa fa-table"></i> Sales Employee List of <?php $name=$_SESSION["dis"]; echo $name; ?> District</div>
	<div class="card-body">
	  <div class="table-responsive">

<?php
	
if(isset($_POST['submit'])){
    ini_set( "display_errors", 0); 
    include("dbconnect.php");
    $des=$_POST['des'];
	$area=$_POST['area'];
	$company=$_POST['company'];
	$_SESSION['des']=$des;
	$_SESSION['com']=$company;
	$_SESSION['area']=$area;
	$c=0;
	echo '<div class="data">';
	echo '<table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">';
	echo '<tr>';
	echo '<th style="color:black;">SI No</th>';
	echo '<th style="color:black;">Name</th>';
	echo '<th style="color:black;">Designation</th>';
	echo '<th style="color:black;">Phone</th>';
	echo '<th style="color:black;">Email</th>';
	echo '<th style="color:black;">Working Area</th>';
	echo '<th style="color:black;">Total Working Experience</th>';
	echo '<th style="color:black;" colspan="3"><center>Actions</center></th>';
	echo '</tr>';
	foreach($des AS $org){
	    if($area=='All'){
	       $search="SELECT * FROM `sales_emp` WHERE designation='$org' AND company='$company'"; 
	    }
	    else{
	$search="SELECT * FROM `sales_emp` WHERE designation='$org' AND area='$area' AND company='$company'";
	    }
	$chk=mysqli_query($cn,$search);
	if($chk){
	
		while($row=mysqli_fetch_array($chk)){
								$c=$c+1;
								?>
							    <tr style="color:black">
								<td><?php echo $c;?></td>
								<td><?php echo $row['name'];?></td>
								<td><?php echo $row['designation'];?></td>
								<td><?php echo $row['phone'];?></td>
								<td><?php echo $row['email'];?></td>
								<td><?php echo $row['area'];?></td>
								<td><?php echo $row['experience'];?></td>
								<form method="post" action="view_single_sales_emp.php">
			<td><center><button type="submit" class="btn btn-outline-primary" value="<?php echo $row['SI_NO'];?>" name="view">View</button></center></td>
			</form>
			<form method="post" action="edit_sales_emp.php" >
			<td><center><button type="submit" class="btn btn-outline-warning" value="<?php echo $row['SI_NO'];?>" name="update">Update</button></center></td>
			</form>
			<form method="post" action="sales_emp_action.php" >
			<td><center><button type="submit" class="btn btn-outline-danger" value="<?php echo $row['SI_NO'];?>" name="delete">Delete</button></center></td>
			</form>
			<?php
			echo '</tr>';
			}
		}

	}
	echo '</table>';
	echo '</div>';
}	
?>
	  </div>
	</div>
	<div class="card-footer small text-muted">Data Table</div>
  </div>
</div>

<?php include 'admin_inc/footer.php'?>
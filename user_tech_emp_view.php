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
          <h3>Technical Employee List</h3>
        </header>
        
		<center>
		
		<div class="row">
		
          <div class="col-lg-12 col-md-12 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><button class="form-control" type="submit"  value="print" name="print"><a href="print_tech_emp.php">Print Data</a></button></h4>
          </div>
		  
        </div>

		</center>
		
      </div>
    </section><!-- #services -->

  </main>
		      
	  <center>
	  <div class="row">
	  <div class="container center_div">
	  <form method="post" style="font-size:15px;font-color:red;" action="#">

        <fieldset>
		      
		  <table align="center">
		  <tr>
		  <td style="color:Black">Designation</td>
		   <td>
		   <select style="color:Black" class="form-control" name="des[]">
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
		  </td>
		  <td style="color:Black">Company Name</td>
		  <td>
		  <select style="color:Black" class="form-control" name="company">
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
		  </td>
		  <td style="color:Black">Working Area</td>
		  <td>
		  <select style="color:Black" class="form-control" name="area">
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
		  </td>
		     <td><button class="btn btn-outline-primary" name="submit" type="submit" value="submit">Search</button>
		     </td>
		     </tr>
		     </table>
        </fieldset>
	  </form>
	</div>
    </div>
	</center>
			  
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
	echo '<table align="center" border="5 px solid black" class="table" width="100%">';
	echo '<tr class="table-info">';
	echo '<th style="color:black;"><center>SI No</center></th>';
	echo '<th style="color:black;"><center>Name</center></th>';
	echo '<th style="color:black;"><center>Designation</center></th>';
	echo '<th style="color:black;"><center>Phone</center></th>';
	echo '<th style="color:black;"><center>Email</center></th>';
	echo '<th style="color:black;"><center>Working Area</center></th>';
	echo '<th style="color:black;"><center>Total Working Experience</center></th>';
	echo '</tr>';
	foreach($des AS $org){
	    if($area=='All'){
	       $search="SELECT * FROM `tech_emp` WHERE designation='$org' AND company='$company'"; 
	    }
	    else{
	$search="SELECT * FROM `tech_emp` WHERE designation='$org' AND area='$area' AND company='$company'";
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
								<?php
								echo '</tr>';
								}
								
	}
}
echo '</table>';
								echo '</div>';
}	
?>

<?php include 'admin_inc/footer.php'?>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
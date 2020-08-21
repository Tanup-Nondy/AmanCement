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
          <h3>Update Entry in Sales Employee Database <?php $name=$_SESSION["dis"]; ?></h3>
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
	$select="SELECT * FROM `sales_emp` where SI_NO='$id'";
	$chk=mysqli_query($cn,$select);
	if($chk){
		echo '<form method="post" action="edit_sales_emp_action.php">';
		//echo '<form method="post" action="gae.php">';
		while($row=mysqli_fetch_array($chk)){

	?>
  
	  <div class="form-group">
		  <label for="inputPassword4">Name</label>
		  <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>">
	  </div>
	  <div class="form-row">	  
	  <div class="form-group col-md-6">
		<label for="inputAddress">Designation</label>
		<select class="form-control" name="des" size="1">
			<option value="<?php echo $row['designation'];?>" selected=""><?php echo $row['designation'];?></option>
			<option value="Executive Director">Executive Director(ED)</option>
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
	  <div class="form-group col-md-6">
		<label for="inputAddress">Company Name</label>
		<select class="form-control" name="company" size="1">
			<option value="<?php echo $row['company'];?>" selected=""><?php echo $row['company'];?></option>
			<option value="Aman Cement Mills Ltd">Aman Cement Mills Ltd</option>
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
	  </div>	  
	  <div class="form-row">
		<div class="form-group col-md-3">
		  <label for="inputPassword4">Phone No</label>
		  <input type="text" class="form-control" name="phone" value="<?php echo $row['phone'];?>">
		</div>
	  <div class="form-group col-md-3">
		  <label for="inputPassword4">Email</label>
		  <input class="form-control" type="email" name="email" value="<?php echo $row['email'];?>">
	  </div>
	  <div class="form-group col-md-3">
		<label for="inputAddress">Working Area</label>
		<select class="form-control" name="area" size="1">
			<option value="<?php echo $row['area'];?>" selected=""><?php echo $row['area'];?></option>
			<option value="Head Offices">Head Offices</option>
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
	  <div class="form-group col-md-3">
		  <label for="inputPassword4">Working Experience</label>
		  <input type="text" class="form-control" name="exp" value="<?php echo $row['experience'];?>">
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
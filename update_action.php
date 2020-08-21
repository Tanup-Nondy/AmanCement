<?php 
session_start();
if(!$_SESSION['admin']){
	header("location:admin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>CementTechBd</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<div class="bgded" style="background-image:url('images/demo/backgrounds/amancement.png');"> 
 
  <div class="wrapper overlay">
    <header id="header" class="hoc clear">
      <nav id="mainav" class="clear"> 
       <div id="logo"> 
        <!-- ################################################################################################ -->
        <h1><a href="index.html">Cement Tech Bd</a></h1>
		<br>
        <p>2, Ishakha Avenue ,Sector-06, Uttara, Dhaka-1230</p>
        <!-- ################################################################################################ -->
      </br>
	
	 
	  </div>
        <ul class="clear">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a class="drop" href="#">Barisal</a>
            <ul>
			
              <li><a href="barguna.php">Barguna</a></li>
              <li><a href="barisal.php">Barisal</a></li>
              <li><a href="bhola.php">Bhola</a></li>
              <li><a href="jhalokathi.php">Jhalokathi</a></li>
              <li><a href="patuakhali.php">Patuakhali</a></li>
			  <li><a href="pirojpur.php">Pirojpur</a></li>
			  
            </ul>
          </li>
          <li><a class="drop" href="#">Chittagong</a>
            <ul>
			
              <li><a href="bandarban.php">Bandarban</a></li>
              <li><a href="brahmanbaria.php">Brahmanbaria</a></li>
              <li><a href="chandpur.php">Chandpur</a></li>
              <li><a href="chittagong.php">Chittagong</a></li>
              <li><a href="comilla.php">Comilla</a></li>
			  <li><a href="coxsbazar.php">Coxsbazar</a></li>
			  <li><a href="feni.php">Feni</a></li>
              <li><a href="khagrachari.php">Khagrachari</a></li>
              <li><a href="lakhsmipur.php">Lakhsmipur</a></li>
              <li><a href="noakhali.php">Noakhali</a></li>
			  <li><a href="rangamati.php">Rangamati</a></li>
            </ul>
          </li>
		  <li><a class="drop" href="#">Dhaka</a>
            <ul>
			
              <li><a href="dhaka.php">Dhaka</a></li>
              <li><a href="faridpur.php">Faridpur</a></li>
              <li><a href="gazipur.php">Gazipur</a></li>
              <li><a href="gopalganj.php">Gopalganj</a></li>
              <li><a href="jamalpur.php">Jamalpur</a></li>
			  <li><a href="kishoreganj.php">Kishoreganj</a></li>
			  <li><a href="madaripur.php">Madaripur</a></li>
              <li><a href="manikganj.php">Manikganj</a></li>
              <li><a href="munshiganj.php">Munshiganj</a></li>
              <li><a href="mymensing.php">Mymensing</a></li>
			  <li><a href="narayanganj.php">Narayanganj</a></li>
			  <li><a href="narsingdi.php">Narsingdi</a></li>
              <li><a href="netrokona.php">Netrokona</a></li>
              <li><a href="shariatpur.php">Shariatpur</a></li>
              <li><a href="sherpur.php">Sherpur</a></li>
              <li><a href="tangail.php">Tangail</a></li>
            </ul>
          </li>
		  <li><a class="drop" href="#">Khulna</a>
		  <ul>
            <li><a href="bagerhat.php">Bagerhat</a></li>
              <li><a href="chuadanga.php">Chuadanga</a></li>
              <li><a href="jessore.php">Jessore</a></li>
              <li><a href="jhenaidah.php">Jhenaidah</a></li>
              <li><a href="khulna.php">Khulna</a></li>
			  <li><a href="kushtia.php">Kushtia</a></li>
			  <li><a href="magura.php">Magura</a></li>
              <li><a href="meherpur.php">Meherpur</a></li>
              <li><a href="narail.php">Narail</a></li>
              <li><a href="satkhira.php">Satkhira</a></li>
			  </ul>
          </li>
		  <li><a class="drop" href="#">Rajshahi</a>
		  <ul>
            <li><a href="bogra.php">Bogra</a></li>
              <li><a href="chapainawabganj.php">Chapainawabganj</a></li>
              <li><a href="joypurhat.php">Joypurhat</a></li>
              <li><a href="naogaon.php">Naogaon</a></li>
              <li><a href="natore.php">Natore</a></li>
			  <li><a href="pabna.php">Pabna</a></li>
			  <li><a href="rajshahi.php">Rajshahi</a></li>
              <li><a href="sirajganj.php">Sirajganj</a></li>
			  </ul>
          </li>
		  <li><a class="drop" href="#">Rangpur</a>
		  <ul>
            <li><a href="dinajpur.php">Dinajpur</a></li>
              <li><a href="gaibandha.php">Gaibandha</a></li>
              <li><a href="kurigram.php">Kurigram</a></li>
              <li><a href="lalmonirhat.php">Lalmonirhat</a></li>
              <li><a href="nilphamari.php">Nilphamari</a></li>
			  <li><a href="panchagarh.php">Panchagarh</a></li>
			  <li><a href="rangpur.php">Rangpur</a></li>
              <li><a href="thakurgaon.php">Thakurgaon</a></li>
			 </ul>
          </li>
		  <li><a class="drop" href="#">Sylhet</a>
		  <ul>
            <li><a href="habiganj.php">Habiganj</a></li>
              <li><a href="moulvibazar.php">Moulvibazar</a></li>
              <li><a href="sunamganj.php">Sunamganj</a></li>
              <li><a href="sylhet.php">Sylhet</a></li>
            </ul>
          </li>
		  <li><a href="view.php">View</a> 
		  
          </li>
              
            <!--</ul>
          </li>-->
        </ul>
        <!-- ################################################################################################ -->
      </nav>
	 <div class="bgded overlay">
	  <center><h1><u>Update Data</u></h1>
	  </center>
	  </br>
	  </div>
	<form method="post" action="updateData.php">
		</br>
        <fieldset>
          <!--<legend style="color:Black">Data Entry:</legend>-->
		  <div class="two_quarter">
		  <select style="color:Black" class="btmspace-15" name="types">
			<option value="Govt.Agencies Engineer" selected="">Govt.Agencies Engineer</option>
			<option value="Semi Autonomous">Semi Autonomous</option>
			<option value="Private Engineer">Private Engineer</option>
			<option value="University Academicians">University Academicians</option>
			<option value="Contractor">Contractor</option>
			<option value="Developer">Developer</option>
			<option value="NGO">NGO</option>
			<option value="plan Approval Committee">plan Approval Committee </option>
			<option value="Ready Mix Company">Ready Mix Company</option>
			<option value="Up Coming Project">Up Coming Project</option>
			<option value="ongoing Project">ongoing Project</option>
			<option value="District  Sales Volume">District  Sales Volume </option>
			<option value="Employee">Employee</option>
		    <option value="Distributer">Distributer</option>
		  </select>
          <input style="color:Black" class="btmspace-15" type="text" name="org" placeholder="Name of Organization">
          <input style="color:Black" class="btmspace-15" type="text" name="name" placeholder="Name">
		  <input style="color:Black" class="btmspace-15" type="text" name="desn" placeholder="Designation">
          <input style="color:Black" class="btmspace-15" type="text" name="contact" placeholder="Contact No">
		  </div>
		  <div class="one_quarter">
		  <input style="color:Black" class="btmspace-15" type="text" name="email" placeholder="Email">
          <input style="color:Black" class="btmspace-15" type="text" name="office" placeholder="Office Address">
		  <input style="color:Black" class="btmspace-15" type="text" name="thana" placeholder="Thana">
          <input style="color:Black" class="btmspace-15" type="text" name="remarks" placeholder="Remarks">
          
		  </div>
		  
        </fieldset>
      <div class="three_quarter">
	  <center><button style="color:Black" type="submit" name="update" value="submit">Update</button></center>
	  </div>
	  </form>
    </header>
	
  </div>
  
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>


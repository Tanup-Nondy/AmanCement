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


$_SESSION["dis"]="sherpur"
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
  
<?php include 'admin_inc/services.php'?>

  </main>

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

<div class="bgded" style="background-image:url('images/demo/backgrounds/pur.jpg');"> 
 
  <div class="wrapper overlay">
    <header id="header" class="hoc clear">
      <nav id="mainav" class="clear"> 
       <div id="logo"> 
        <!-- ################################################################################################ -->
        <h1><a href="index.html">Aman Cement  Mills Ltd.</a></h1>
		<br>
        <p>2, Ishakha Avenue ,Sector-06, Uttara, Dhaka-1230</p>
        <!-- ################################################################################################ -->
      </br>
	
	 
	  </div>
        <ul class="clear">
          <li class="active"><a href="index.php">Home</a></li>
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
		  <li><a href="logout.php">Logout</a> 
		  
          </li>
        </ul>
        <!-- ################################################################################################ -->
      </nav>
	 <!--<form method="post" action="insert.php">-->
	 <div class="bgded overlay">
	  <center>
	  <h1>***Select Your Desired Entry***</h1>
	  </center>
	  </br>
	  </div>
	</br>
		</br>
		</br>
		</br>
        <!--<fieldset>-->
        <div class="one_quarter first" align="left">
		<button style="color:Black;width:200px; text-align:left;" type="submit" value="gae" name="type"><a href="gae.php">Government Agencies Engineer</a></button>
		<button style="color:Black;width:200px;text-align:left;" type="submit" value="sa" name="type"><a href="sa.php">Semi Autonomous</a></button>
		<button style="color:Black;width:200px;text-align:left;"  type="submit" value="pe" name="type"><a href="pe.php">Private Engineer</a></button>
		<button style="color:Black;width:200px;text-align:left;" type="submit" value="ua" name="type"><a href="ua.php">University Academicians</a></button>
		</div>
		<div class="one_quarter">
		<button style="color:Black;width:200px;text-align:left;"  type="submit" value="con" name="type"><a href="lc.php">Contractor</a></button>
		<button style="color:Black;width:200px;text-align:left;"  type="submit" value="dev" name="type"><a href="dev.php">Developer</a></button>
		<button style="color:Black;width:200px;text-align:left;"  type="submit" value="ngo" name="type"><a href="ngo.php">NGO</a></button>
		<button style="color:Black;width:200px;text-align:left;"  type="submit" value="pac" name="type"><a href="pac.php">Plan Approval Committee</a></button>
		
		</div>
		<div class="one_quarter">
        
		<button style="color:Black;width:200px;text-align:left;"  type="submit" value="rmc" name="type"><a href="rmc.php">Ready Mix Company</a></button>
		<button style="color:Black;width:200px;text-align:left;"  type="submit" value="ucp" name="type"><a href="ucp.php">Up Coming Project</a></button>
		<button style="color:Black;width:200px;text-align:left;"  type="submit" value="op" name="type"><a href="op.php">Ongoing Project</button>
		<button style="color:Black;width:200px;text-align:left;"  type="submit" value="dsv" name="type"><a href="dsv_main.php">District  Sales Volume</a></button>
		</div>	
		<div class="one_quarter">
       
		<button style="color:Black;width:200px;text-align:left;"  type="submit" value="emp" name="type"><a href="emp.php">Employee Database</a></button>
		<button style="color:Black;width:200px;text-align:left;"  type="submit" value="dis" name="type"><a href="dis.php">Distributor Database</a></button>
		</br>
		</br>
		</br>
		</br>
		</br>
		</br>
		</div>	
		
        <!--</fieldset>
	  </form>-->
    </header>
  </div>
  </br>
 
  
  <div class="fix footer">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <!-- ################################################################################################ -->
  </div>
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

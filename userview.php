<!--<?php 
session_start();
if(!$_SESSION['admin']){
	header("location:index.php");
}
?>-->
<!DOCTYPE html>
<html>
<head>
<title>Cement Tech Bd</title>
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
          <li class="active"><a href="home.php">Home</a></li>
          <li><a href="logout.php">Logout</a> 
		  
          </li>
		  
              
            <!--</ul>
          </li>-->
        </ul>
        <!-- ################################################################################################ -->
      </nav>
	 <div class="bgded overlay">
	  <center><h1><u>Division List</u></h1>
	  <h2>Select District from your desired Division</h2>
	  </center>
	  </br>
	  </div>
	<form method="post" action="userview_action.php">
		</br>
        <fieldset>
        <div class="one_quarter first">
        <h1>Chittagong Division</h1>
		<button style="color:Black;width:200px;" type="submit" value="bandarban" name="dist">Bandarban</button>
		<button style="color:Black;width:200px;" type="submit" value="brahmanbaria" name="dist">Brahmanbaria</button>
		<button style="color:Black;width:200px;"  type="submit" value="chandpur" name="dist">Chandpur</button>
		<button style="color:Black;width:200px;" type="submit" value="chittagong" name="dist">Chittagong</button>
		<button style="color:Black;width:200px;" type="submit" value="comilla" name="dist">Comilla</button>
		<button style="color:Black;width:200px;"  type="submit" value="coxsbazar" name="dist">Coxsbazar</button>
		<button style="color:Black;width:200px;"  type="submit" value="feni" name="dist">Feni</button>
		<button style="color:Black;width:200px;"  type="submit" value="khagrachari" name="dist">Khagrachari</button>
		<button style="color:Black;width:200px;"  type="submit" value="lakhsmipur" name="dist">Lakhsmipur</button>
		<button style="color:Black;width:200px;"  type="submit" value="noakhali" name="dist">Noakhali</button>
		<button style="color:Black;width:200px;"  type="submit" value="rangamati" name="dist">Rangamati</button>
		</div>
		<div class="one_quarter">
        <h1>Khulna Division</h1>
		<button style="color:Black;width:200px;"  type="submit" value="bagerhat" name="dist">Bagerhat</button>
		<button style="color:Black;width:200px;"  type="submit" value="chuadanga" name="dist">Chuadanga</button>
		<button style="color:Black;width:200px;"  type="submit" value="jessore" name="dist">Jessore</button>
		<button style="color:Black;width:200px;"  type="submit" value="jhenaidah" name="dist">Jhenaidah</button>
		<button style="color:Black;width:200px;"  type="submit" value="khulna" name="dist">Khulna</button>
		<button style="color:Black;width:200px;"  type="submit" value="kushtia" name="dist">Kushtia</button>
		<button style="color:Black;width:200px;"  type="submit" value="magura" name="dist">Magura</button>
		<button style="color:Black;width:200px;"  type="submit" value="meherpur" name="dist">Meherpur</button>
		<button style="color:Black;width:200px;"  type="submit" value="narail" name="dist">Narail</button>
		<button style="color:Black;width:200px;"  type="submit" value="satkhira" name="dist">Satkhira</button>
		</div>
		<div class="one_quarter">
        <h1>Rajshahi Division</h1>
		<button style="color:Black;width:200px;"  type="submit" value="bogra" name="dist">Bogra</button>
		<button style="color:Black;width:200px;"  type="submit" value="chapainawabganj" name="dist">Chapainawabganj</button>
		<button style="color:Black;width:200px;"  type="submit" value="joypurhat" name="dist">Joypurhat</button>
		<button style="color:Black;width:200px;"  type="submit" value="naogaon" name="dist">Naogaon</button>
		<button style="color:Black;width:200px;"  type="submit" value="natore" name="dist">Natore</button>
		<button style="color:Black;width:200px;"  type="submit" value="pabna" name="dist">Pabna</button>
		<button style="color:Black;width:200px;"  type="submit" value="rajshahi" name="dist">Rajshahi</button>
		<button style="color:Black;width:200px;"  type="submit" value="sirajganj" name="dist">Sirajganj</button>
		</div>	
		<div class="one_quarter">
        <h1>Rangpur Division</h1>
		<button style="color:Black;width:200px;"  type="submit" value="dinajpur" name="dist">Dinajpur</button>
		<button style="color:Black;width:200px;"  type="submit" value="gaibandha" name="dist">Gaibandha</button>
		<button style="color:Black;width:200px;"  type="submit" value="kurigram" name="dist">Kurigram</button>
		<button style="color:Black;width:200px;"  type="submit" value="lalmonirhat" name="dist">Lalmonirhat</button>
		<button style="color:Black;width:200px;"  type="submit" value="nilphamari" name="dist">Nilphamari</button>
		<button style="color:Black;width:200px;"  type="submit" value="panchagarh" name="dist">Panchagarh</button>
		<button style="color:Black;width:200px;"  type="submit" value="rangpur" name="dist">Rangpur</button>
		<button style="color:Black;width:200px;"  type="submit" value="thakurgaon" name="dist">Thakurgaon</button>
		</div>	
		<div class="one_quarter first">
		<h1>Dhaka Division</h1>
		<button style="color:Black;width:200px;"  type="submit" value="dhaka" name="dist">Dhaka</button>
		<button style="color:Black;width:200px;"  type="submit" value="faridpur" name="dist">Faridpur</button>
		<button style="color:Black;width:200px;"  type="submit" value="gazipur" name="dist">Gazipur</button>
		<button style="color:Black;width:200px;"  type="submit" value="gopalganj" name="dist">Gopalganj</button>
		<button style="color:Black;width:200px;"  type="submit" value="jamalpur" name="dist">Jamalpur</button>
		<button style="color:Black;width:200px;"  type="submit" value="kishoreganj" name="dist">Kishoreganj</button>
		<button style="color:Black;width:200px;"  type="submit" value="madaripur" name="dist">Madaripur</button>
		<button style="color:Black;width:200px;"  type="submit" value="manikganj" name="dist">Manikganj</button>
		<button style="color:Black;width:200px;"  type="submit" value="munshiganj" name="dist">Munshiganj</button>
		<button style="color:Black;width:200px;"  type="submit" value="mymensing" name="dist">Mymensing</button>
		<button style="color:Black;width:200px;"  type="submit" value="narayanganj" name="dist">Narayanganj</button>
		<button style="color:Black;width:200px;"  type="submit" value="narsingdi" name="dist">Narsingdi</button>
		<button style="color:Black;width:200px;"  type="submit" value="netrokona" name="dist">Netrokona</button>
		<button style="color:Black;width:200px;"  type="submit" value="rajbari" name="dist">Rajbari</button>
		<button style="color:Black;width:200px;"  type="submit" value="shariatpur" name="dist">Shariatpur</button>
		<button style="color:Black;width:200px;"  type="submit" value="sherpur" name="dist">Sherpur</button>
		<button style="color:Black;width:200px;"  type="submit" value="tangail" name="dist">Tangail</button>
		</div>
		<div class="one_quarter">
		<h1>Barisal Division</h1>
		<button style="color:Black;width:200px;" type="submit" value="barguna" name="dist">Barguna</button>
		<button style="color:Black;width:200px;" type="submit" value="barisal" name="dist">Barisal</button>
		<button style="color:Black;width:200px;" type="submit" value="bhola" name="dist">Bhola</button>
		<button style="color:Black;width:200px;" type="submit" value="jhalokathi" name="dist">Jhalokathi</button>
		<button style="color:Black;width:200px;" type="submit" value="patuakhali" name="dist">Patuakhali</button>
		<button style="color:Black;width:200px;" type="submit" value="pirojpur" name="dist">Pirojpur</button>
		</div>	

		<div class="one_quarter">
		<h1>Sylhet Division</h1>
		<button style="color:Black;width:200px;"  type="submit" value="habiganj" name="dist">Habiganj</button>
		<button style="color:Black;width:200px;"  type="submit" value="moulvibazar" name="dist">Moulvibazar</button>
		<button style="color:Black;width:200px;"  type="submit" value="sunamganj" name="dist">Sunamganj</button>
		<button style="color:Black;width:200px;"  type="submit" value="sylhet" name="dist">Sylhet</button>
		</div>
        </fieldset>
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


?>

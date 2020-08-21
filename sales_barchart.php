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
<?php
    //ini_set( "display_errors", 0); 
    include("dbconnect.php");
    $dis=$_SESSION["area"];
	$year=$_SESSION['year'];
	$month=$_SESSION['month'];
    $chart_data = '';
    $m="SELECT `S_V` FROM `dsv` WHERE year='$year' AND district='$dis' AND month='$month' ORDER BY S_V DESC";
    $ma=mysqli_query($cn,$m);
    
    $c=0;
    if($ma){
    while($roww=mysqli_fetch_array($ma)){
       
        $c=$c+1;
        if($c==1){
           
	$max=$roww["S_V"];
	
        }
    }
    }
    $share="SELECT `S_V` FROM `dsv` WHERE year='$year' AND district='$dis' AND month='$month' AND Brand='amancem'";
	$q=mysqli_query($cn,$share);
	$amount=0;
	if($q){
	while($ro=mysqli_fetch_array($q)){
	    $amount=$amount+$ro["S_V"];
	}
	}
	$search="SELECT `Brand`, `S_V` FROM `dsv` WHERE year='$year' AND district='$dis' AND month='$month'";
	$chk=mysqli_query($cn,$search);
	$count=0;
	if($chk){
	while($row=mysqli_fetch_array($chk)){
	$count=$count+$row["S_V"];
	  $chart_data .= "{ com:'".$row["Brand"]."', sales:".$row["S_V"]."}, ";
    }
    $chart_data = substr($chart_data, 0, -2);
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
	  

    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Bar chart of <?php $name=$_SESSION["dis"]; echo $name; ?> District</h3>
          <center>
		  <!--<form method="post" action="print_gae.php" >-->
		  <button type="submit" class="btn btn-outline-primary" value="print" name="print"><a href="#" id="print" onclick="javascript:printlayer('main')"> Print</a></button>
		  <!--</form>-->
		  </center>
        </header>
		
      </div>
    </section><!-- #services -->
	  
	  <div class="bgded overlay" id="main">
	  <center><?php echo "Year: ".$year.'</br>'."Month: ".$month;?></center>
	<div class="bgded overlay" id="chart">
	    
	</div>
	<?php 
	$s=$amount/$count;
	//$round=round_to_2dp($s);
	echo "Total Sales: ".$count.'</br>';
	echo "Maximum Sales Volume: ".$max.'</br>';
    echo "Aman Cement Market Share: ".number_format((float)$s, 2, '.', '')."%";
	
	?>
	</div>

	
<?php include 'admin_inc/footer.php'?>


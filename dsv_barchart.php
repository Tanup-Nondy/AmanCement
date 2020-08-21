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
          
<div class="container-fluid">
<div class="card mb-3"> 
<form method="post" action="#">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Year</label>
      <input class="form-control" type="text" name="year" placeholder="Year" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Month</label>
      <select class="form-control" name="month" size="1">
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
		<option value="November">November</option>
		<option value="December">December</option>
      </select>
    </div>
  </div>
  <button name="submit" type="submit" value="submit" class="btn btn-primary">Search</button>
</form>
</div>
</div>

<br>
	  <div class="bgded overlay" id="main">
	   <?php
    //ini_set( "display_errors", 0);
    if(isset($_POST['submit'])){
    include("dbconnect.php");
    $dis=$_SESSION["dis"];
	$year=$_POST['year'];
	$month=$_POST['month'];
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
}
?>   
	  <center><?php echo "Year: ".$year.'</br>'."Month: ".$month;?></center>
	<div class="bgded overlay" id="chart">
	    
	</div>
	<?php 
	$s=$amount/$count*100;
	//$round=round_to_2dp($s);
	echo "Total Sales: ".$count.'</br>';
	echo "Maximum Sales Volume: ".$max.'</br>';
    echo "Aman Cement Market Share: ".number_format((float)$s, 2, '.', '')."%";
	
	?>
	</div>

<?php include 'admin_inc/footer.php'?>


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
<head>
<style>
#div-id-name{
	overflow-x:scroll;
}
#table1{
	height:50px;
}
#table2{
	height:50px;
}
</style>
</head>
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
          <h3>District Sales Volume <?php $name=$_SESSION["dis"]; 
		  echo $name; 
		  ?> District</h3>
        </header>
        
		<br>
		
		<center>
		
		<div class="row">
		
          <div class="col-lg-6 col-md-9 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><button class="form-control" type="submit"  value="print" name="print"><a href="print_dsv.php">Print Data</a></button></h4>
          </div>
          <div class="col-lg-6 col-md-9 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><button class="form-control" type="submit"  value="print" name="print"><a href="dsv_barchart.php">Bar Chart</a></button></h4>
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
                <input type="text" style="color:black" class="form-control" placeholder="Search for District Sales Volume" />
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
	  <i class="fa fa-table"></i> District Sales Volume of <?php $name=$_SESSION["dis"]; echo $name; ?> District</div>
	<div class="card-body">
	  <div class="table-responsive">
<?php
if(isset($_POST['submit'])){
    ini_set( "display_errors", 0); 
    include("dbconnect.php");
    $dis=$name;
	$year=$_POST['year'];
	$_SESSION["year"]=$year;
  $q="SELECT month,S_V FROM dsv WHERE Brand='Amancem' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$Amancem=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Amancem[$row['month']]=$row['S_V'];
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='Shah' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$Shah=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Shah[$row['month']]=$row['S_V'];
			
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='Bashundhara' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$Bashundhara=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Bashundhara[$row['month']]=$row['S_V'];
			
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='Kingbrand' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$Kingbrand=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Kingbrand[$row['month']]=$row['S_V'];
			
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='Fresh' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$Fresh=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Fresh[$row['month']]=$row['S_V'];
			
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='Crown' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$Crown=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Crown[$row['month']]=$row['S_V'];
			
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='Seven Circle' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$seven=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$seven[$row['month']]=$row['S_V'];
			
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='Premier' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$Premier=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Premier[$row['month']]=$row['S_V'];
			
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='Scan' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$Scan=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Scan[$row['month']]=$row['S_V'];
			
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='Supercrete' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$Supercrete=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Supercrete[$row['month']]=$row['S_V'];
			
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='Royal' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$Royal=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Royal[$row['month']]=$row['S_V'];
				
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='Tiger' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$Tiger=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Tiger[$row['month']]=$row['S_V'];
				
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='Confidence' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$Confidence=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Confidence[$row['month']]=$row['S_V'];
			
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='Elephant' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$Elephant=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Elephant[$row['month']]=$row['S_V'];
			
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='Five Rings' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$five=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$five[$row['month']]=$row['S_V'];
			
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='Anchor' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$Anchor=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Anchor[$row['month']]=$row['S_V'];
			
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='Akij' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$Akij=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Akij[$row['month']]=$row['S_V'];
			
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='Ultratech' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$Ultratech=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Ultratech[$row['month']]=$row['S_V'];
			
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='Seven Horse' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$sh=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$sh[$row['month']]=$row['S_V'];
			
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='Metrocem' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$Metrocem=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Metrocem[$row['month']]=$row['S_V'];
			
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='Ince' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$Ince=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Ince[$row['month']]=$row['S_V'];
			
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='Diamond' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$Diamond=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Diamond[$row['month']]=$row['S_V'];
			
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='Anwar' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$Anwar=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Anwar[$row['month']]=$row['S_V'];
			
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='Mir' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$Mir=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Mir[$row['month']]=$row['S_V'];
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='S. Alam' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$sa=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$sa[$row['month']]=$row['S_V'];
			
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='Aramit' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$Aramit=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Aramit[$row['month']]=$row['S_V'];
			
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='NGS' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$NGS=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$NGS[$row['month']]=$row['S_V'];
				
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='Hakim' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$Hakim=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Hakim[$row['month']]=$row['S_V'];
				
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='Chattak' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$Chattak=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Chattak[$row['month']]=$row['S_V'];
				
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='Noapara' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$Noapara=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Noapara[$row['month']]=$row['S_V'];
				
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='Deshbandhu' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$Deshbandhu=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Deshbandhu[$row['month']]=$row['S_V'];
			
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='Holcim' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$Holcim=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Holcim[$row['month']]=$row['S_V'];
			
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='Bengal Tiger (Taiheiyo)' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$bt=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$bt[$row['month']]=$row['S_V'];
			
		}
		
}
$q="SELECT month,S_V FROM dsv WHERE Brand='Ayanpur' AND year='$year' AND district='$dis'";
$res=mysqli_query($cn,$q);
$Ayanpur=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Ayanpur[$row['month']]=$row['S_V'];
		}
		
}
$q="SELECT S_V FROM dsv WHERE year='$year' AND month='January' AND district='$dis' ORDER BY S_V DESC";
$res=mysqli_query($cn,$q);
$tjan=0;
$c=0;
if($res){
		while($row=mysqli_fetch_array($res)){
			$tjan=$tjan+$row['S_V'];
			$c=$c+1;
			if($c==1){
			    $mjan=$row['S_V'];
			}
		}
		
}
$q="SELECT S_V FROM dsv WHERE year='$year' AND month='February' AND district='$dis' ORDER BY S_V DESC";
$res=mysqli_query($cn,$q);
$tfeb=0;
$c=0;
if($res){
		while($row=mysqli_fetch_array($res)){
			$tfeb=$tfeb+$row['S_V'];
			$c=$c+1;
			if($c==1){
			    $mfeb=$row['S_V'];
			}
		}
		
}
$q="SELECT S_V FROM dsv WHERE year='$year' AND month='March' AND district='$dis' ORDER BY S_V DESC";
$res=mysqli_query($cn,$q);
$tmar=0;
$c=0;
if($res){
		while($row=mysqli_fetch_array($res)){
			$tmar=$tmar+$row['S_V'];
			$c=$c+1;
			if($c==1){
			    $mmar=$row['S_V'];
			}
		}
		
}
$q="SELECT S_V FROM dsv WHERE year='$year' AND month='April' AND district='$dis' ORDER BY S_V DESC";
$res=mysqli_query($cn,$q);
$tap=0;
$c=0;
if($res){
		while($row=mysqli_fetch_array($res)){
			$tap=$tap+$row['S_V'];
			$c=$c+1;
			if($c==1){
			    $map=$row['S_V'];
			}
		}
		
}
$q="SELECT S_V FROM dsv WHERE year='$year' AND month='May' AND district='$dis' ORDER BY S_V DESC";
$res=mysqli_query($cn,$q);
$tmay=0;
$c=0;
if($res){
		while($row=mysqli_fetch_array($res)){
			$tmay=$tmay+$row['S_V'];
			$c=$c+1;
			if($c==1){
			    $mmay=$row['S_V'];
			}
		}
		
}
$q="SELECT S_V FROM dsv WHERE year='$year' AND month='June' AND district='$dis' ORDER BY S_V DESC";
$res=mysqli_query($cn,$q);
$tjun=0;
$c=0;
if($res){
		while($row=mysqli_fetch_array($res)){
			$tjun=$tjun+$row['S_V'];
			$c=$c+1;
			if($c==1){
			    $mjun=$row['S_V'];
			}
		}
		
}
$q="SELECT S_V FROM dsv WHERE year='$year' AND month='July' AND district='$dis' ORDER BY S_V DESC";
$res=mysqli_query($cn,$q);
$tjul=0;
$c=0;
if($res){
		while($row=mysqli_fetch_array($res)){
			$tjul=$tjul+$row['S_V'];
			$c=$c+1;
			if($c==1){
			    $mjul=$row['S_V'];
			}
		}
		
}
$q="SELECT S_V FROM dsv WHERE year='$year' AND month='August' AND district='$dis' ORDER BY S_V DESC";
$res=mysqli_query($cn,$q);
$taug=0;
$c=0;
if($res){
		while($row=mysqli_fetch_array($res)){
			$taug=$taug+$row['S_V'];
			$c=$c+1;
			if($c==1){
			    $maug=$row['S_V'];
			}
		}
		
}
$q="SELECT S_V FROM dsv WHERE year='$year' AND month='September' AND district='$dis' ORDER BY S_V DESC";
$res=mysqli_query($cn,$q);
$tsep=0;
$c=0;
if($res){
		while($row=mysqli_fetch_array($res)){
			$tsep=$tsep+$row['S_V'];
			$c=$c+1;
			if($c==1){
			    $msep=$row['S_V'];
			}
		}
		
}$q="SELECT S_V FROM dsv WHERE year='$year' AND month='October' AND district='$dis' ORDER BY S_V DESC";
$res=mysqli_query($cn,$q);
$toct=0;
$c=0;
if($res){
		while($row=mysqli_fetch_array($res)){
			$toct=$toct+$row['S_V'];
			$c=$c+1;
			if($c==1){
			    $moct=$row['S_V'];
			}
		}
		
}$q="SELECT S_V FROM dsv WHERE year='$year' AND month='November' AND district='$dis' ORDER BY S_V DESC";
$res=mysqli_query($cn,$q);
$tnov=0;
$c=0;
if($res){
		while($row=mysqli_fetch_array($res)){
			$tnov=$tnov+$row['S_V'];
			$c=$c+1;
			if($c==1){
			    $mnov=$row['S_V'];
			}
		}
		
}
$q="SELECT S_V FROM dsv WHERE year='$year' AND month='December' AND district='$dis' ORDER BY S_V DESC";
$res=mysqli_query($cn,$q);
$tdec=0;
$c=0;
if($res){
		while($row=mysqli_fetch_array($res)){
			$tdec=$tdec+$row['S_V'];
			$c=$c+1;
			if($c==1){
			    $mdec=$row['S_V'];
			}
		}
		
}

}
//echo $Amancem['Amancem']." ".$Amancem['Shah']." ".$Amancem['Metro'];
?>
	 <div class="container">
		<div class="row">
	<div class="col-md-12" id="div-id-name">
			<table class="table table-bordered">
				<tr>
				    <th>Brand</th>
					<th>January</th>
					<th>February</th>
					<th>March</th>
					<th>April</th>
					<th>May</th>
					<th>June</th>
					<th>July</th>
					<th>August</th>
					<th>September</th>
					<th>October</th>
					<th>November</th>
					<th>December</th>
				</tr>
				<tr id="table2">
				    <td>Amancem</td>
					<td><?php echo $Amancem['January']; ?></td>
					<td><?php echo $Amancem['February']; ?></td>
					<td><?php echo $Amancem['March']; ?></td>
					<td><?php echo $Amancem['April']; ?></td>
					<td><?php echo $Amancem['May']; ?></td>
					<td><?php echo $Amancem['June']; ?></td>
					<td><?php echo $Amancem['July']; ?></td>
					<td><?php echo $Amancem['August']; ?></td>
					<td><?php echo $Amancem['September']; ?></td>
					<td><?php echo $Amancem['October']; ?></td>
					<td><?php echo $Amancem['November']; ?></td>
					<td><?php echo $Amancem['December']; ?></td>
				</tr>
				<tr id="table2">
				    	<td>Shah</td>
					<td><?php echo $Shah['January']; ?></td>
					<td><?php echo $Shah['February']; ?></td>
					<td><?php echo $Shah['March']; ?></td>
					<td><?php echo $Shah['April']; ?></td>
					<td><?php echo $Shah['May']; ?></td>
					<td><?php echo $Shah['June']; ?></td>
					<td><?php echo $Shah['July']; ?></td>
					<td><?php echo $Shah['August']; ?></td>
					<td><?php echo $Shah['September']; ?></td>
					<td><?php echo $Shah['October']; ?></td>
					<td><?php echo $Shah['November']; ?></td>
					<td><?php echo $Shah['December']; ?></td>
					
				</tr>
				<tr id="table2">
				    	<td>Bashundhara</td>
					<td><?php echo $Bashundhara['January']; ?></td>
					<td><?php echo $Bashundhara['February']; ?></td>
					<td><?php echo $Bashundhara['March']; ?></td>
					<td><?php echo $Bashundhara['April']; ?></td>
					<td><?php echo $Bashundhara['May']; ?></td>
					<td><?php echo $Bashundhara['June']; ?></td>
					<td><?php echo $Bashundhara['July']; ?></td>
					<td><?php echo $Bashundhara['August']; ?></td>
					<td><?php echo $Bashundhara['September']; ?></td>
					<td><?php echo $Bashundhara['October']; ?></td>
					<td><?php echo $Bashundhara['November']; ?></td>
					<td><?php echo $Bashundhara['December']; ?></td>
					
				</tr>
				<tr id="table2">
				    <td>Kingbrand</td>
										<td><?php echo $Kingbrand['January']; ?></td>
					<td><?php echo $Kingbrand['February']; ?></td>
					<td><?php echo $Kingbrand['March']; ?></td>
					<td><?php echo $Kingbrand['April']; ?></td>
					<td><?php echo $Kingbrand['May']; ?></td>
					<td><?php echo $Kingbrand['June']; ?></td>
					<td><?php echo $Kingbrand['July']; ?></td>
					<td><?php echo $Kingbrand['August']; ?></td>
					<td><?php echo $Kingbrand['September']; ?></td>
					<td><?php echo $Kingbrand['October']; ?></td>
					<td><?php echo $Kingbrand['November']; ?></td>
					<td><?php echo $Kingbrand['December']; ?></td>
					
				</tr>
				<tr id="table2">
				    <td>Fresh</td>
										<td><?php echo $Fresh['January']; ?></td>
					<td><?php echo $Fresh['February']; ?></td>
					<td><?php echo $Fresh['March']; ?></td>
					<td><?php echo $Fresh['April']; ?></td>
					<td><?php echo $Fresh['May']; ?></td>
					<td><?php echo $Fresh['June']; ?></td>
					<td><?php echo $Fresh['July']; ?></td>
					<td><?php echo $Fresh['August']; ?></td>
					<td><?php echo $Fresh['September']; ?></td>
					<td><?php echo $Fresh['October']; ?></td>
					<td><?php echo $Fresh['November']; ?></td>
					<td><?php echo $Fresh['December']; ?></td>
					
				</tr>
				<tr id="table2">
				    	<td>Crown</td>
										<td><?php echo $Crown['January']; ?></td>
					<td><?php echo $Crown['February']; ?></td>
					<td><?php echo $Crown['March']; ?></td>
					<td><?php echo $Crown['April']; ?></td>
					<td><?php echo $Crown['May']; ?></td>
					<td><?php echo $Crown['June']; ?></td>
					<td><?php echo $Crown['July']; ?></td>
					<td><?php echo $Crown['August']; ?></td>
					<td><?php echo $Crown['September']; ?></td>
					<td><?php echo $Crown['October']; ?></td>
					<td><?php echo $Crown['November']; ?></td>
					<td><?php echo $Crown['December']; ?></td>
					
				</tr>
				<tr id="table2">
				    <td>Seven Circle</td>
										<td><?php echo $seven['January']; ?></td>
					<td><?php echo $seven['February']; ?></td>
					<td><?php echo $seven['March']; ?></td>
					<td><?php echo $seven['April']; ?></td>
					<td><?php echo $seven['May']; ?></td>
					<td><?php echo $seven['June']; ?></td>
					<td><?php echo $seven['July']; ?></td>
					<td><?php echo $seven['August']; ?></td>
					<td><?php echo $seven['September']; ?></td>
					<td><?php echo $seven['October']; ?></td>
					<td><?php echo $seven['November']; ?></td>
					<td><?php echo $seven['December']; ?></td>
					
				</tr>
				<tr id="table2">
				    <td>Premier</td>
										<td><?php echo $Premier['January']; ?></td>
					<td><?php echo $Premier['February']; ?></td>
					<td><?php echo $Premier['March']; ?></td>
					<td><?php echo $Premier['April']; ?></td>
					<td><?php echo $Premier['May']; ?></td>
					<td><?php echo $Premier['June']; ?></td>
					<td><?php echo $Premier['July']; ?></td>
					<td><?php echo $Premier['August']; ?></td>
					<td><?php echo $Premier['September']; ?></td>
					<td><?php echo $Premier['October']; ?></td>
					<td><?php echo $Premier['November']; ?></td>
					<td><?php echo $Premier['December']; ?></td>
					
				</tr>
				<tr id="table2">
				    	<td>Scan</td>
										<td><?php echo $Scan['January']; ?></td>
					<td><?php echo $Scan['February']; ?></td>
					<td><?php echo $Scan['March']; ?></td>
					<td><?php echo $Scan['April']; ?></td>
					<td><?php echo $Scan['May']; ?></td>
					<td><?php echo $Scan['June']; ?></td>
					<td><?php echo $Scan['July']; ?></td>
					<td><?php echo $Scan['August']; ?></td>
					<td><?php echo $Scan['September']; ?></td>
					<td><?php echo $Scan['October']; ?></td>
					<td><?php echo $Scan['November']; ?></td>
					<td><?php echo $Scan['December']; ?></td>
					
				</tr>
				<tr id="table2">
				    	<td>Supercrete</td>
										<td><?php echo $Supercrete['January']; ?></td>
					<td><?php echo $Supercrete['February']; ?></td>
					<td><?php echo $Supercrete['March']; ?></td>
					<td><?php echo $Supercrete['April']; ?></td>
					<td><?php echo $Supercrete['May']; ?></td>
					<td><?php echo $Supercrete['June']; ?></td>
					<td><?php echo $Supercrete['July']; ?></td>
					<td><?php echo $Supercrete['August']; ?></td>
					<td><?php echo $Supercrete['September']; ?></td>
					<td><?php echo $Supercrete['October']; ?></td>
					<td><?php echo $Supercrete['November']; ?></td>
					<td><?php echo $Supercrete['December']; ?></td>
					
				</tr>
				<tr id="table2">
				    <td>Royal</td>
										<td><?php echo $Royal['January']; ?></td>
					<td><?php echo $Royal['February']; ?></td>
					<td><?php echo $Royal['March']; ?></td>
					<td><?php echo $Royal['April']; ?></td>
					<td><?php echo $Royal['May']; ?></td>
					<td><?php echo $Royal['June']; ?></td>
					<td><?php echo $Royal['July']; ?></td>
					<td><?php echo $Royal['August']; ?></td>
					<td><?php echo $Royal['September']; ?></td>
					<td><?php echo $Royal['October']; ?></td>
					<td><?php echo $Royal['November']; ?></td>
					<td><?php echo $Royal['December']; ?></td>
					
				</tr>
				<tr id="table2">
				    	<td>Tiger</td>
										<td><?php echo $Tiger['January']; ?></td>
					<td><?php echo $Tiger['February']; ?></td>
					<td><?php echo $Tiger['March']; ?></td>
					<td><?php echo $Tiger['April']; ?></td>
					<td><?php echo $Tiger['May']; ?></td>
					<td><?php echo $Tiger['June']; ?></td>
					<td><?php echo $Tiger['July']; ?></td>
					<td><?php echo $Tiger['August']; ?></td>
					<td><?php echo $Tiger['September']; ?></td>
					<td><?php echo $Tiger['October']; ?></td>
					<td><?php echo $Tiger['November']; ?></td>
					<td><?php echo $Tiger['December']; ?></td>
					
				</tr>
				<tr id="table2">
				    <td>Confidence</td>
										<td><?php echo $Confidence['January']; ?></td>
					<td><?php echo $Confidence['February']; ?></td>
					<td><?php echo $Confidence['March']; ?></td>
					<td><?php echo $Confidence['April']; ?></td>
					<td><?php echo $Confidence['May']; ?></td>
					<td><?php echo $Confidence['June']; ?></td>
					<td><?php echo $Confidence['July']; ?></td>
					<td><?php echo $Confidence['August']; ?></td>
					<td><?php echo $Confidence['September']; ?></td>
					<td><?php echo $Confidence['October']; ?></td>
					<td><?php echo $Confidence['November']; ?></td>
					<td><?php echo $Confidence['December']; ?></td>
					
				</tr>
				<tr id="table2">
				    	<td>Elephant</td>
										<td><?php echo $Elephant['January']; ?></td>
					<td><?php echo $Elephant['February']; ?></td>
					<td><?php echo $Elephant['March']; ?></td>
					<td><?php echo $Elephant['April']; ?></td>
					<td><?php echo $Elephant['May']; ?></td>
					<td><?php echo $Elephant['June']; ?></td>
					<td><?php echo $Elephant['July']; ?></td>
					<td><?php echo $Elephant['August']; ?></td>
					<td><?php echo $Elephant['September']; ?></td>
					<td><?php echo $Elephant['October']; ?></td>
					<td><?php echo $Elephant['November']; ?></td>
					<td><?php echo $Elephant['December']; ?></td>
					
				</tr>
				<tr id="table2">
				    	<td>Five Rings</td>
										<td><?php echo $five['January']; ?></td>
					<td><?php echo $five['February']; ?></td>
					<td><?php echo $five['March']; ?></td>
					<td><?php echo $five['April']; ?></td>
					<td><?php echo $five['May']; ?></td>
					<td><?php echo $five['June']; ?></td>
					<td><?php echo $five['July']; ?></td>
					<td><?php echo $five['August']; ?></td>
					<td><?php echo $five['September']; ?></td>
					<td><?php echo $five['October']; ?></td>
					<td><?php echo $five['November']; ?></td>
					<td><?php echo $five['December']; ?></td>
					
				</tr>
				<tr id="table2">
				    	<td>Anchor</td>
										<td><?php echo $Anchor['January']; ?></td>
					<td><?php echo $Anchor['February']; ?></td>
					<td><?php echo $Anchor['March']; ?></td>
					<td><?php echo $Anchor['April']; ?></td>
					<td><?php echo $Anchor['May']; ?></td>
					<td><?php echo $Anchor['June']; ?></td>
					<td><?php echo $Anchor['July']; ?></td>
					<td><?php echo $Anchor['August']; ?></td>
					<td><?php echo $Anchor['September']; ?></td>
					<td><?php echo $Anchor['October']; ?></td>
					<td><?php echo $Anchor['November']; ?></td>
					<td><?php echo $Anchor['December']; ?></td>
					
				</tr>
				<tr id="table2">
				    	<td>Akij</td>
										<td><?php echo $Akij['January']; ?></td>
					<td><?php echo $Akij['February']; ?></td>
					<td><?php echo $Akij['March']; ?></td>
					<td><?php echo $Akij['April']; ?></td>
					<td><?php echo $Akij['May']; ?></td>
					<td><?php echo $Akij['June']; ?></td>
					<td><?php echo $Akij['July']; ?></td>
					<td><?php echo $Akij['August']; ?></td>
					<td><?php echo $Akij['September']; ?></td>
					<td><?php echo $Akij['October']; ?></td>
					<td><?php echo $Akij['November']; ?></td>
					<td><?php echo $Akij['December']; ?></td>
					
				</tr>
				<tr id="table2">
				    	<td>Ultratech</td>
										<td><?php echo $Ultratech['January']; ?></td>
					<td><?php echo $Ultratech['February']; ?></td>
					<td><?php echo $Ultratech['March']; ?></td>
					<td><?php echo $Ultratech['April']; ?></td>
					<td><?php echo $Ultratech['May']; ?></td>
					<td><?php echo $Ultratech['June']; ?></td>
					<td><?php echo $Ultratech['July']; ?></td>
					<td><?php echo $Ultratech['August']; ?></td>
					<td><?php echo $Ultratech['September']; ?></td>
					<td><?php echo $Ultratech['October']; ?></td>
					<td><?php echo $Ultratech['November']; ?></td>
					<td><?php echo $Ultratech['December']; ?></td>
					
				</tr>
				<tr id="table2">
				    	<td>Seven Horse</td>
										<td><?php echo $sh['January']; ?></td>
					<td><?php echo $sh['February']; ?></td>
					<td><?php echo $sh['March']; ?></td>
					<td><?php echo $sh['April']; ?></td>
					<td><?php echo $sh['May']; ?></td>
					<td><?php echo $sh['June']; ?></td>
					<td><?php echo $sh['July']; ?></td>
					<td><?php echo $sh['August']; ?></td>
					<td><?php echo $sh['September']; ?></td>
					<td><?php echo $sh['October']; ?></td>
					<td><?php echo $sh['November']; ?></td>
					<td><?php echo $sh['December']; ?></td>
					
				</tr>
				<tr id="table2">
				    <td>Metrocem</td>
										<td><?php echo $Metrocem['January']; ?></td>
					<td><?php echo $Metrocem['February']; ?></td>
					<td><?php echo $Metrocem['March']; ?></td>
					<td><?php echo $Metrocem['April']; ?></td>
					<td><?php echo $Metrocem['May']; ?></td>
					<td><?php echo $Metrocem['June']; ?></td>
					<td><?php echo $Metrocem['July']; ?></td>
					<td><?php echo $Metrocem['August']; ?></td>
					<td><?php echo $Metrocem['September']; ?></td>
					<td><?php echo $Metrocem['October']; ?></td>
					<td><?php echo $Metrocem['November']; ?></td>
					<td><?php echo $Metrocem['December']; ?></td>
					
				</tr>
				<tr id="table2">
				    	<td>Ince</td>
										<td><?php echo $Ince['January']; ?></td>
					<td><?php echo $Ince['February']; ?></td>
					<td><?php echo $Ince['March']; ?></td>
					<td><?php echo $Ince['April']; ?></td>
					<td><?php echo $Ince['May']; ?></td>
					<td><?php echo $Ince['June']; ?></td>
					<td><?php echo $Ince['July']; ?></td>
					<td><?php echo $Ince['August']; ?></td>
					<td><?php echo $Ince['September']; ?></td>
					<td><?php echo $Ince['October']; ?></td>
					<td><?php echo $Ince['November']; ?></td>
					<td><?php echo $Ince['December']; ?></td>
					
				</tr>
				<tr id="table2">
				    	<td>Diamond</td>
										<td><?php echo $Diamond['January']; ?></td>
					<td><?php echo $Diamond['February']; ?></td>
					<td><?php echo $Diamond['March']; ?></td>
					<td><?php echo $Diamond['April']; ?></td>
					<td><?php echo $Diamond['May']; ?></td>
					<td><?php echo $Diamond['June']; ?></td>
					<td><?php echo $Diamond['July']; ?></td>
					<td><?php echo $Diamond['August']; ?></td>
					<td><?php echo $Diamond['September']; ?></td>
					<td><?php echo $Diamond['October']; ?></td>
					<td><?php echo $Diamond['November']; ?></td>
					<td><?php echo $Diamond['December']; ?></td>
					
				</tr>
				<tr id="table2">
				    <td>Anwar</td>
										<td><?php echo $Anwar['January']; ?></td>
					<td><?php echo $Anwar['February']; ?></td>
					<td><?php echo $Anwar['March']; ?></td>
					<td><?php echo $Anwar['April']; ?></td>
					<td><?php echo $Anwar['May']; ?></td>
					<td><?php echo $Anwar['June']; ?></td>
					<td><?php echo $Anwar['July']; ?></td>
					<td><?php echo $Anwar['August']; ?></td>
					<td><?php echo $Anwar['September']; ?></td>
					<td><?php echo $Anwar['October']; ?></td>
					<td><?php echo $Anwar['November']; ?></td>
					<td><?php echo $Anwar['December']; ?></td>
					
				</tr>
				<tr id="table2">
				    	<td>Mir</td>
										<td><?php echo $Mir['January']; ?></td>
					<td><?php echo $Mir['February']; ?></td>
					<td><?php echo $Mir['March']; ?></td>
					<td><?php echo $Mir['April']; ?></td>
					<td><?php echo $Mir['May']; ?></td>
					<td><?php echo $Mir['June']; ?></td>
					<td><?php echo $Mir['July']; ?></td>
					<td><?php echo $Mir['August']; ?></td>
					<td><?php echo $Mir['September']; ?></td>
					<td><?php echo $Mir['October']; ?></td>
					<td><?php echo $Mir['November']; ?></td>
					<td><?php echo $Mir['December']; ?></td>
					
				</tr>
				<tr id="table2">
				    	<td>S. Alam</td>
										<td><?php echo $sa['January']; ?></td>
					<td><?php echo $sa['February']; ?></td>
					<td><?php echo $sa['March']; ?></td>
					<td><?php echo $sa['April']; ?></td>
					<td><?php echo $sa['May']; ?></td>
					<td><?php echo $sa['June']; ?></td>
					<td><?php echo $sa['July']; ?></td>
					<td><?php echo $sa['August']; ?></td>
					<td><?php echo $sa['September']; ?></td>
					<td><?php echo $sa['October']; ?></td>
					<td><?php echo $sa['November']; ?></td>
					<td><?php echo $sa['December']; ?></td>
					
				</tr>
				<tr id="table2">
				    <td>Aramit</td>
										<td><?php echo $Aramit['January']; ?></td>
					<td><?php echo $Aramit['February']; ?></td>
					<td><?php echo $Aramit['March']; ?></td>
					<td><?php echo $Aramit['April']; ?></td>
					<td><?php echo $Aramit['May']; ?></td>
					<td><?php echo $Aramit['June']; ?></td>
					<td><?php echo $Aramit['July']; ?></td>
					<td><?php echo $Aramit['August']; ?></td>
					<td><?php echo $Aramit['September']; ?></td>
					<td><?php echo $Aramit['October']; ?></td>
					<td><?php echo $Aramit['November']; ?></td>
					<td><?php echo $Aramit['December']; ?></td>
					
				</tr>
				<tr id="table2">
				    	<td>Hakim</td>
										<td><?php echo $Hakim['January']; ?></td>
					<td><?php echo $Hakim['February']; ?></td>
					<td><?php echo $Hakim['March']; ?></td>
					<td><?php echo $Hakim['April']; ?></td>
					<td><?php echo $Hakim['May']; ?></td>
					<td><?php echo $Hakim['June']; ?></td>
					<td><?php echo $Hakim['July']; ?></td>
					<td><?php echo $Hakim['August']; ?></td>
					<td><?php echo $Hakim['September']; ?></td>
					<td><?php echo $Hakim['October']; ?></td>
					<td><?php echo $Hakim['November']; ?></td>
					<td><?php echo $Hakim['December']; ?></td>
					
				</tr>
				<tr id="table2">
				    	<td>NGS</td>
										<td><?php echo $NGS['January']; ?></td>
					<td><?php echo $NGS['February']; ?></td>
					<td><?php echo $NGS['March']; ?></td>
					<td><?php echo $NGS['April']; ?></td>
					<td><?php echo $NGS['May']; ?></td>
					<td><?php echo $NGS['June']; ?></td>
					<td><?php echo $NGS['July']; ?></td>
					<td><?php echo $NGS['August']; ?></td>
					<td><?php echo $NGS['September']; ?></td>
					<td><?php echo $NGS['October']; ?></td>
					<td><?php echo $NGS['November']; ?></td>
					<td><?php echo $NGS['December']; ?></td>
					
				</tr>
				<tr id="table2">
				    	<td>Chattak</td>
										<td><?php echo $Chattak['January']; ?></td>
					<td><?php echo $Chattak['February']; ?></td>
					<td><?php echo $Chattak['March']; ?></td>
					<td><?php echo $Chattak['April']; ?></td>
					<td><?php echo $Chattak['May']; ?></td>
					<td><?php echo $Chattak['June']; ?></td>
					<td><?php echo $Chattak['July']; ?></td>
					<td><?php echo $Chattak['August']; ?></td>
					<td><?php echo $Chattak['September']; ?></td>
					<td><?php echo $Chattak['October']; ?></td>
					<td><?php echo $Chattak['November']; ?></td>
					<td><?php echo $Chattak['December']; ?></td>
					
				</tr>
				<tr id="table2">
				    <td>Noapara</td>
										<td><?php echo $Noapara['January']; ?></td>
					<td><?php echo $Noapara['February']; ?></td>
					<td><?php echo $Noapara['March']; ?></td>
					<td><?php echo $Noapara['April']; ?></td>
					<td><?php echo $Noapara['May']; ?></td>
					<td><?php echo $Noapara['June']; ?></td>
					<td><?php echo $Noapara['July']; ?></td>
					<td><?php echo $Noapara['August']; ?></td>
					<td><?php echo $Noapara['September']; ?></td>
					<td><?php echo $Noapara['October']; ?></td>
					<td><?php echo $Noapara['November']; ?></td>
					<td><?php echo $Noapara['December']; ?></td>
				</tr>
				<tr id="table2">
				    	<td>Deshbandhu</td>
										<td><?php echo $Deshbandhu['January']; ?></td>
					<td><?php echo $Deshbandhu['February']; ?></td>
					<td><?php echo $Deshbandhu['March']; ?></td>
					<td><?php echo $Deshbandhu['April']; ?></td>
					<td><?php echo $Deshbandhu['May']; ?></td>
					<td><?php echo $Deshbandhu['June']; ?></td>
					<td><?php echo $Deshbandhu['July']; ?></td>
					<td><?php echo $Deshbandhu['August']; ?></td>
					<td><?php echo $Deshbandhu['September']; ?></td>
					<td><?php echo $Deshbandhu['October']; ?></td>
					<td><?php echo $Deshbandhu['November']; ?></td>
					<td><?php echo $Deshbandhu['December']; ?></td>
					
				</tr>
				<tr id="table2">
				    	<td>Holcim</td>
										<td><?php echo $Holcim['January']; ?></td>
					<td><?php echo $Holcim['February']; ?></td>
					<td><?php echo $Holcim['March']; ?></td>
					<td><?php echo $Holcim['April']; ?></td>
					<td><?php echo $Holcim['May']; ?></td>
					<td><?php echo $Holcim['June']; ?></td>
					<td><?php echo $Holcim['July']; ?></td>
					<td><?php echo $Holcim['August']; ?></td>
					<td><?php echo $Holcim['September']; ?></td>
					<td><?php echo $Holcim['October']; ?></td>
					<td><?php echo $Holcim['November']; ?></td>
					<td><?php echo $Holcim['December']; ?></td>
					
				</tr>
				<tr id="table2">
				    <td>Bengal Tiger</td>
										<td><?php echo $bt['January']; ?></td>
					<td><?php echo $bt['February']; ?></td>
					<td><?php echo $bt['March']; ?></td>
					<td><?php echo $bt['April']; ?></td>
					<td><?php echo $bt['May']; ?></td>
					<td><?php echo $bt['June']; ?></td>
					<td><?php echo $bt['July']; ?></td>
					<td><?php echo $bt['August']; ?></td>
					<td><?php echo $bt['September']; ?></td>
					<td><?php echo $bt['October']; ?></td>
					<td><?php echo $bt['November']; ?></td>
					<td><?php echo $bt['December']; ?></td>
					
				</tr>
				<tr id="table2">
				    	<td>Ayanpur</td>
										<td><?php echo $Ayanpur['January']; ?></td>
					<td><?php echo $Ayanpur['February']; ?></td>
					<td><?php echo $Ayanpur['March']; ?></td>
					<td><?php echo $Ayanpur['April']; ?></td>
					<td><?php echo $Ayanpur['May']; ?></td>
					<td><?php echo $Ayanpur['June']; ?></td>
					<td><?php echo $Ayanpur['July']; ?></td>
					<td><?php echo $Ayanpur['August']; ?></td>
					<td><?php echo $Ayanpur['September']; ?></td>
					<td><?php echo $Ayanpur['October']; ?></td>
					<td><?php echo $Ayanpur['November']; ?></td>
					<td><?php echo $Ayanpur['December']; ?></td>
				</tr>
					<tr id="table2">
				    	<td>Total</td>
										<td><?php echo $tjan; ?></td>
					<td><?php echo $tfeb; ?></td>
					<td><?php echo $tmar; ?></td>
					<td><?php echo $tap; ?></td>
					<td><?php echo $tmay; ?></td>
					<td><?php echo $tjun; ?></td>
					<td><?php echo $tjul; ?></td>
					<td><?php echo $taug; ?></td>
					<td><?php echo $tsep; ?></td>
					<td><?php echo $toct; ?></td>
					<td><?php echo $tnov; ?></td>
					<td><?php echo $tdec; ?></td>
				</tr>
					<tr id="table2">
				    	<td>Maximum</td>
										<td><?php echo $mjan; ?></td>
					<td><?php echo $mfeb; ?></td>
					<td><?php echo $mmar; ?></td>
					<td><?php echo $map; ?></td>
					<td><?php echo $mmay; ?></td>
					<td><?php echo $mjun; ?></td>
					<td><?php echo $mjul; ?></td>
					<td><?php echo $maug; ?></td>
					<td><?php echo $msep; ?></td>
					<td><?php echo $moct; ?></td>
					<td><?php echo $mnov; ?></td>
					<td><?php echo $mdec; ?></td>
				</tr>
					<tr id="table2">
				    	<td>Aman Cement Share</td>
									<td><?php $s=$Amancem['January']/$tjan*100;
									echo number_format((float)$s, 2, '.', '')."%";?></td>
									<td><?php $s=$Amancem['February']/$tfeb*100;
									echo number_format((float)$s, 2, '.', '')."%";?></td>
									<td><?php $s=$Amancem['March']/$tmar*100;
									echo number_format((float)$s, 2, '.', '')."%";?></td>
									<td><?php $s=$Amancem['April']/$tap*100;
									echo number_format((float)$s, 2, '.', '')."%";?></td>
									<td><?php $s=$Amancem['May']/$tmay*100;
									echo number_format((float)$s, 2, '.', '')."%";?></td>
									<td><?php $s=$Amancem['June']/$tjun*100;
									echo number_format((float)$s, 2, '.', '')."%";?></td>
									<td><?php $s=$Amancem['July']/$tjul*100;
									echo number_format((float)$s, 2, '.', '')."%";?></td>
									<td><?php $s=$Amancem['August']/$taug*100;
									echo number_format((float)$s, 2, '.', '')."%";?></td>
									<td><?php $s=$Amancem['September']/$tsep*100;
									echo number_format((float)$s, 2, '.', '')."%";?></td>
									<td><?php $s=$Amancem['October']/$toct*100;
									echo number_format((float)$s, 2, '.', '')."%";?></td>
									<td><?php $s=$Amancem['November']/$tnov*100;
									echo number_format((float)$s, 2, '.', '')."%";?></td>
									<td><?php $s=$Amancem['December']/$tdec*100;
									echo number_format((float)$s, 2, '.', '')."%";?></td>
				</tr>
				</table>
				</div>
			</div>
			</div>
	  </div>
	</div>
	<div class="card-footer small text-muted">Data Table</div>
  </div>
</div>

<?php include 'admin_inc/footer.php'?>
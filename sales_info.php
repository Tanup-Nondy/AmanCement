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
	width:200px;
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
          <h3>Sales Information</h3>
        </header>
        
		<center>
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
                <input type="text" class="form-control" placeholder="Search for Sales Information" />
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
                                  <div class="form-group">
									<label for="filter">Month</label>
                                    <select class="form-control" name="month" size="1">
									<option value="January">January</option>
									<option value="February">February</option>
									<option value="March">March</option>
									<option value="April">April</option>
									<option value="May">May</option>
									<option value="June">June</option>
									<option value="July">July</option>
									<option value="August">August</option>
									<option value="September">September</option>
									<option value="October">October</option>
									<option value="November">november</option>
									<option value="December">December</option>
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
<?php
if(isset($_POST['submit'])){
    ini_set( "display_errors", 0); 
    include("dbconnect.php");
    $dis=$_POST['area'];
	$year=$_POST['year'];
	$month=$_POST['month'];
	$_SESSION["year"]=$year;
	$_SESSION["month"]=$month;
	$_SESSION["area"]=$dis;
	$q="SELECT district,S_V FROM dsv WHERE Brand='Amancem' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$Amancem=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Amancem[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='Shah' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$Shah=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Shah[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='Bashundhara' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$Bashundhara=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Bashundhara[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='Kingbrand' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$Kingbrand=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Kingbrand[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='Fresh' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$Fresh=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Fresh[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='Crown' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$Crown=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Crown[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='Seven Circle' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$seven=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$seven[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='Premier' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$Premier=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Premier[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='Scan' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$Scan=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Scan[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='Supercrete' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$Supercrete=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Supercrete[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='Royal' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$Royal=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Royal[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='Tiger' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$Tiger=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Tiger[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='Confidence' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$Confidence=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Confidence[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='Elephant' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$Elephant=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Elephant[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='Five Rings' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$five=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$five[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='Anchor' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$Anchor=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Anchor[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='Akij' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$Akij=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Akij[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='Ultratech' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$Ultratech=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Ultratech[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='Seven Horse' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$sh=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$sh[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='Metrocem' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$Metrocem=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Metrocem[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='Ince' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$Ince=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Ince[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='Diamond' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$Diamond=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Diamond[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='Anwar' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$Anwar=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Anwar[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='Mir' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$Mir=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Mir[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='S. Alam' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$sa=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$sa[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='Aramit' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$Aramit=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Aramit[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='NGS' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$NGS=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$NGS[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='Hakim' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$Hakim=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Hakim[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='Chattak' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$Chattak=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Chattak[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='Noapara' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$Noapara=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Noapara[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='Deshbandhu' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$Deshbandhu=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Deshbandhu[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='Holcim' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$Holcim=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Holcim[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='Bengal Tiger (Taiheiyo)' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$bt=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$bt[$row['district']]=$row['S_V'];
		}
		
}
$q="SELECT district,S_V FROM dsv WHERE Brand='Ayanpur' AND month='$month' AND year='$year'";
$res=mysqli_query($cn,$q);
$Ayanpur=array();
if($res){
		while($row=mysqli_fetch_array($res)){
			$Ayanpur[$row['district']]=$row['S_V'];
		}
		
}
}
//echo $Amancem['Amancem']." ".$Amancem['Shah']." ".$Amancem['Metro'];
?>
	 <div class="container">
		<div class="row">
		<div class="col-md-2">
		<table class="table table-bordered" id="table1">
		<tr>
		<th>Brand</th>
		</tr>
		<tr id="table1">
		<td>Amancem</td>
		</tr>
		<tr id="table1">
		<td>Shah</td>
		</tr>
		<tr id="table1">
		<td>Bashundhara</td>
		</tr>
		<tr id="table1">
		<td>Kingbrand</td>
		</tr>
		<tr id="table1">
		<td>Fresh</td>
		</tr>
		<tr id="table1">
		<td>Crown</td>
		</tr>
		<tr id="table1">
		<td>Seven Circle</td>
		</tr>
		<tr id="table1">
		<td>Premier</td>
		</tr>
		<tr id="table1">
		<td>Scan</td>
		</tr>
		<tr id="table1">
		<td>Supercrete</td>
		</tr>
		<tr id="table1">
		<td>Royal</td>
		</tr>
		<tr id="table1">
		<td>Tiger</td>
		</tr>
		<tr id="table1">
		<td>Confidence</td>
		</tr>
		<tr id="table1">
		<td>Elephant</td>
		</tr>
		<tr id="table1">
		<td>Five Rings</td>
		</tr>
		<tr id="table1">
		<td>Anchor</td>
		</tr>
		<tr id="table1">
		<td>Akij</td>
		</tr>
		<tr id="table1">
		<td>Ultratech</td>
		</tr>
		<tr id="table1">
		<td>Seven Horse</td>
		</tr>
		<tr id="table1">
		<td>Metrocem</td>
		</tr>
		<tr id="table1">
		<td>Ince</td>
		</tr>
		<tr id="table1">
		<td>Diamond</td>
		</tr>
		<tr id="table1">
		<td>Anwar</td>
		</tr>
		<tr id="table1">
		<td>Mir</td>
		</tr>
		<tr id="table1">
		<td>S. Alam</td>
		</tr>
		<tr id="table1">
		<td>Aramit</td>
		</tr>
		<tr id="table1">
		<td>Hakim</td>
		</tr>
		<tr id="table1">
		<td>NGS</td>
		</tr>
		<tr id="table1">
		<td>Chattak</td>
		</tr>
		<tr id="table1">
		<td>Noapara</td>
		</tr>
		<tr id="table1">
		<td>Deshbandhu</td>
		</tr>
		<tr id="table1">
		<td>Holcim</td>
		</tr>
		<tr id="table1">
		<td>Bengal Tiger</td>
		</tr>
		<tr id="table1">
		<td>Ayanpur</td>
		</tr>
		</table>
		</div>
			<div class="col-md-10" id="div-id-name">
			<table class="table table-bordered">
				<tr>
					<th>Comilla</th>
					<th>Chandpur</th>
					<th>Laxmipur</th>
					<th>Noakhali</th>
					<th>Feni</th>
					<th>Cox'sBazar</th>
					<th>Panchagor</th>
					<th>Thakurgaon</th>
					<th>Lalmonirhat</th>
					<th>Kurigram</th>
					<th>Nilphamari</th>
					<th>Dinajpur</th>
					<th>Rangpur</th>
					<th>Gaibandha</th>
					<th>Joypurhat</th>
					<th>Bogra</th>
					<th>Sirajganj</th>
					<th>Rajshahi</th>
					<th>Chapai</th>
					<th>Naogaon</th>
					<th>Natore</th>
					<th>Pabna</th>
					<th>Tangail</th>
					<th>Jamalpur</th>
					<th>Sherpur</th>
					<th>Gazipur</th>
					<th>Manikganj</th>
					<th>Saver</th>
					<th>Mirpur</th>
					<th>OldDhaka</th>
					<th>Keranigonj</th>
					<th>Uttara</th>
					<th>Jatrabari</th>
					<th>Munshiganj</th>
					<th>Mymensingh</th>
					<th>Netrokona</th>
					<th>Narayanganj</th>
					<th>Narsingdi</th>
					<th>B.Baria</th>
					<th>Kishoreganj</th>
					<th>Moulavibazar</th>
					<th>Hobiganj</th>
					<th>Sylhet</th>
					<th>Sunamganj</th>
					<th>Jhenaidha</th>
					<th>Chuadanga</th>
					<th>Kushtia</th>
					<th>Meherpur</th>
					<th>Jessore</th>
					<th>Magura</th>
					<th>Narail</th>
					<th>Satkhira</th>
					<th>Khulna</th>
					<th>Bagerhat</th>
					<th>Barisal</th>
					<th>Pirojpur</th>
					<th>Jhalokathi</th>
					<th>Bhola</th>
					<th>Patuakhali</th>
					<th>Borguna</th>
					<th>Gopalganj</th>
					<th>Shariatpur</th>
					<th>Madaripur</th>
					<th>Faridpur</th>
					<th>Rajbari</th>
					<th>Corporate</th>
				</tr>
				<tr id="table2">
					<td><?php echo $Amancem['comilla']; ?></td>
					<td><?php echo $Amancem['chandpur']; ?></td>
					<td><?php echo $Amancem['lakhsmipur']; ?></td>
					<td><?php echo $Amancem['noakhali']; ?></td>
					<td><?php echo $Amancem['feni']; ?></td>
					<td><?php echo $Amancem['coxsbazar']; ?></td>
					<td><?php echo $Amancem['panchagarh']; ?></td>
					<td><?php echo $Amancem['thakurgaon']; ?></td>
					<td><?php echo $Amancem['lalmonirhat']; ?></td>
					<td><?php echo $Amancem['kurigram']; ?></td>
					<td><?php echo $Amancem['nilphamari']; ?></td>
					<td><?php echo $Amancem['dinajpur']; ?></td>
					<td><?php echo $Amancem['rangpur']; ?></td>
					<td><?php echo $Amancem['gaibandha']; ?></td>
					<td><?php echo $Amancem['joypurhat']; ?></td>
					<td><?php echo $Amancem['bogra']; ?></td>
					<td><?php echo $Amancem['sirajganj']; ?></td>
					<td><?php echo $Amancem['rajshahi']; ?></td>
					<td><?php echo $Amancem['chapainawabganj']; ?></td>
					<td><?php echo $Amancem['naogaon']; ?></td>
					<td><?php echo $Amancem['natore']; ?></td>
					<td><?php echo $Amancem['pabna']; ?></td>
					<td><?php echo $Amancem['tangail']; ?></td>
					<td><?php echo $Amancem['jamalpur']; ?></td>
					<td><?php echo $Amancem['sherpur']; ?></td>
					<td><?php echo $Amancem['gazipur']; ?></td>
					<td><?php echo $Amancem['manikganj']; ?></td>
					<td><?php echo $Amancem['saver']; ?></td>
					<td><?php echo $Amancem['mirpur']; ?></td>
					<td><?php echo $Amancem['olddhaka']; ?></td>
					<td><?php echo $Amancem['keraniganj']; ?></td>
					<td><?php echo $Amancem['uttara']; ?></td>
					<td><?php echo $Amancem['jatrabari']; ?></td>
					<td><?php echo $Amancem['munshiganj']; ?></td>
					<td><?php echo $Amancem['mymensing']; ?></td>
					<td><?php echo $Amancem['netrokona']; ?></td>
					<td><?php echo $Amancem['narayanganj']; ?></td>
					<td><?php echo $Amancem['narsingdi']; ?></td>
					<td><?php echo $Amancem['brahmanbaria']; ?></td>
					<td><?php echo $Amancem['kishoreganj']; ?></td>
					<td><?php echo $Amancem['moulvibazar']; ?></td>
					<td><?php echo $Amancem['habiganj']; ?></td>
					<td><?php echo $Amancem['sylhet']; ?></td>
					<td><?php echo $Amancem['sunamganj']; ?></td>
					<td><?php echo $Amancem['jhenaidha']; ?></td>
					<td><?php echo $Amancem['chuadanga']; ?></td>
					<td><?php echo $Amancem['kushtia']; ?></td>
					<td><?php echo $Amancem['meherpur']; ?></td>
					<td><?php echo $Amancem['jessore']; ?></td>
					<td><?php echo $Amancem['magura']; ?></td>
					<td><?php echo $Amancem['narail']; ?></td>
					<td><?php echo $Amancem['satkhira']; ?></td>
					<td><?php echo $Amancem['khulna']; ?></td>
					<td><?php echo $Amancem['bagerhat']; ?></td>
					<td><?php echo $Amancem['barisal']; ?></td>
					<td><?php echo $Amancem['pirojpur']; ?></td>
					<td><?php echo $Amancem['jhalokathi']; ?></td>
					<td><?php echo $Amancem['bhola']; ?></td>
					<td><?php echo $Amancem['patuakhali']; ?></td>
					<td><?php echo $Amancem['barguna']; ?></td>
					<td><?php echo $Amancem['gopalganj']; ?></td>
					<td><?php echo $Amancem['shariatpur']; ?></td>
					<td><?php echo $Amancem['madaripur']; ?></td>
					<td><?php echo $Amancem['faridpur']; ?></td>
					<td><?php echo $Amancem['rajbari']; ?></td>
					<td><?php echo $Amancem['corporate']; ?></td>
				</tr>
				<tr id="table2">
					<td><?php echo $Shah['comilla']; ?></td>
					<td><?php echo $Shah['chandpur']; ?></td>
					<td><?php echo $Shah['lakhsmipur']; ?></td>
					<td><?php echo $Shah['noakhali']; ?></td>
					<td><?php echo $Shah['feni']; ?></td>
					<td><?php echo $Shah['coxsbazar']; ?></td>
					<td><?php echo $Shah['panchagarh']; ?></td>
					<td><?php echo $Shah['thakurgaon']; ?></td>
					<td><?php echo $Shah['lalmonirhat']; ?></td>
					<td><?php echo $Shah['kurigram']; ?></td>
					<td><?php echo $Shah['nilphamari']; ?></td>
					<td><?php echo $Shah['dinajpur']; ?></td>
					<td><?php echo $Shah['rangpur']; ?></td>
					<td><?php echo $Shah['gaibandha']; ?></td>
					<td><?php echo $Shah['joypurhat']; ?></td>
					<td><?php echo $Shah['bogra']; ?></td>
					<td><?php echo $Shah['sirajganj']; ?></td>
					<td><?php echo $Shah['rajshahi']; ?></td>
					<td><?php echo $Shah['chapainawabganj']; ?></td>
					<td><?php echo $Shah['naogaon']; ?></td>
					<td><?php echo $Shah['natore']; ?></td>
					<td><?php echo $Shah['pabna']; ?></td>
					<td><?php echo $Shah['tangail']; ?></td>
					<td><?php echo $Shah['jamalpur']; ?></td>
					<td><?php echo $Shah['sherpur']; ?></td>
					<td><?php echo $Shah['gazipur']; ?></td>
					<td><?php echo $Shah['manikganj']; ?></td>
					<td><?php echo $Shah['saver']; ?></td>
					<td><?php echo $Shah['mirpur']; ?></td>
					<td><?php echo $Shah['olddhaka']; ?></td>
					<td><?php echo $Shah['keraniganj']; ?></td>
					<td><?php echo $Shah['uttara']; ?></td>
					<td><?php echo $Shah['jatrabari']; ?></td>
					<td><?php echo $Shah['munshiganj']; ?></td>
					<td><?php echo $Shah['mymensing']; ?></td>
					<td><?php echo $Shah['netrokona']; ?></td>
					<td><?php echo $Shah['narayanganj']; ?></td>
					<td><?php echo $Shah['narsingdi']; ?></td>
					<td><?php echo $Shah['brahmanbaria']; ?></td>
					<td><?php echo $Shah['kishoreganj']; ?></td>
					<td><?php echo $Shah['moulvibazar']; ?></td>
					<td><?php echo $Shah['habiganj']; ?></td>
					<td><?php echo $Shah['sylhet']; ?></td>
					<td><?php echo $Shah['sunamganj']; ?></td>
					<td><?php echo $Shah['jhenaidha']; ?></td>
					<td><?php echo $Shah['chuadanga']; ?></td>
					<td><?php echo $Shah['kushtia']; ?></td>
					<td><?php echo $Shah['meherpur']; ?></td>
					<td><?php echo $Shah['jessore']; ?></td>
					<td><?php echo $Shah['magura']; ?></td>
					<td><?php echo $Shah['narail']; ?></td>
					<td><?php echo $Shah['satkhira']; ?></td>
					<td><?php echo $Shah['khulna']; ?></td>
					<td><?php echo $Shah['bagerhat']; ?></td>
					<td><?php echo $Shah['barisal']; ?></td>
					<td><?php echo $Shah['pirojpur']; ?></td>
					<td><?php echo $Shah['jhalokathi']; ?></td>
					<td><?php echo $Shah['bhola']; ?></td>
					<td><?php echo $Shah['patuakhali']; ?></td>
					<td><?php echo $Shah['barguna']; ?></td>
					<td><?php echo $Shah['gopalganj']; ?></td>
					<td><?php echo $Shah['shariatpur']; ?></td>
					<td><?php echo $Shah['madaripur']; ?></td>
					<td><?php echo $Shah['faridpur']; ?></td>
					<td><?php echo $Shah['rajbari']; ?></td>
					<td><?php echo $Shah['corporate']; ?></td>
				</tr>
				<tr id="table2">
					<td><?php echo $Bashundhara['comilla']; ?></td>
					<td><?php echo $Bashundhara['chandpur']; ?></td>
					<td><?php echo $Bashundhara['lakhsmipur']; ?></td>
					<td><?php echo $Bashundhara['noakhali']; ?></td>
					<td><?php echo $Bashundhara['feni']; ?></td>
					<td><?php echo $Bashundhara['coxsbazar']; ?></td>
					<td><?php echo $Bashundhara['panchagarh']; ?></td>
					<td><?php echo $Bashundhara['thakurgaon']; ?></td>
					<td><?php echo $Bashundhara['lalmonirhat']; ?></td>
					<td><?php echo $Bashundhara['kurigram']; ?></td>
					<td><?php echo $Bashundhara['nilphamari']; ?></td>
					<td><?php echo $Bashundhara['dinajpur']; ?></td>
					<td><?php echo $Bashundhara['rangpur']; ?></td>
					<td><?php echo $Bashundhara['gaibandha']; ?></td>
					<td><?php echo $Bashundhara['joypurhat']; ?></td>
					<td><?php echo $Bashundhara['bogra']; ?></td>
					<td><?php echo $Bashundhara['sirajganj']; ?></td>
					<td><?php echo $Bashundhara['rajBashundharai']; ?></td>
					<td><?php echo $Bashundhara['chapainawabganj']; ?></td>
					<td><?php echo $Bashundhara['naogaon']; ?></td>
					<td><?php echo $Bashundhara['natore']; ?></td>
					<td><?php echo $Bashundhara['pabna']; ?></td>
					<td><?php echo $Bashundhara['tangail']; ?></td>
					<td><?php echo $Bashundhara['jamalpur']; ?></td>
					<td><?php echo $Bashundhara['sherpur']; ?></td>
					<td><?php echo $Bashundhara['gazipur']; ?></td>
					<td><?php echo $Bashundhara['manikganj']; ?></td>
					<td><?php echo $Bashundhara['saver']; ?></td>
					<td><?php echo $Bashundhara['mirpur']; ?></td>
					<td><?php echo $Bashundhara['olddhaka']; ?></td>
					<td><?php echo $Bashundhara['keraniganj']; ?></td>
					<td><?php echo $Bashundhara['uttara']; ?></td>
					<td><?php echo $Bashundhara['jatrabari']; ?></td>
					<td><?php echo $Bashundhara['munshiganj']; ?></td>
					<td><?php echo $Bashundhara['mymensing']; ?></td>
					<td><?php echo $Bashundhara['netrokona']; ?></td>
					<td><?php echo $Bashundhara['narayanganj']; ?></td>
					<td><?php echo $Bashundhara['narsingdi']; ?></td>
					<td><?php echo $Bashundhara['brahmanbaria']; ?></td>
					<td><?php echo $Bashundhara['kishoreganj']; ?></td>
					<td><?php echo $Bashundhara['moulvibazar']; ?></td>
					<td><?php echo $Bashundhara['habiganj']; ?></td>
					<td><?php echo $Bashundhara['sylhet']; ?></td>
					<td><?php echo $Bashundhara['sunamganj']; ?></td>
					<td><?php echo $Bashundhara['jhenaidha']; ?></td>
					<td><?php echo $Bashundhara['chuadanga']; ?></td>
					<td><?php echo $Bashundhara['kushtia']; ?></td>
					<td><?php echo $Bashundhara['meherpur']; ?></td>
					<td><?php echo $Bashundhara['jessore']; ?></td>
					<td><?php echo $Bashundhara['magura']; ?></td>
					<td><?php echo $Bashundhara['narail']; ?></td>
					<td><?php echo $Bashundhara['satkhira']; ?></td>
					<td><?php echo $Bashundhara['khulna']; ?></td>
					<td><?php echo $Bashundhara['bagerhat']; ?></td>
					<td><?php echo $Bashundhara['barisal']; ?></td>
					<td><?php echo $Bashundhara['pirojpur']; ?></td>
					<td><?php echo $Bashundhara['jhalokathi']; ?></td>
					<td><?php echo $Bashundhara['bhola']; ?></td>
					<td><?php echo $Bashundhara['patuakhali']; ?></td>
					<td><?php echo $Bashundhara['barguna']; ?></td>
					<td><?php echo $Bashundhara['gopalganj']; ?></td>
					<td><?php echo $Bashundhara['shariatpur']; ?></td>
					<td><?php echo $Bashundhara['madaripur']; ?></td>
					<td><?php echo $Bashundhara['faridpur']; ?></td>
					<td><?php echo $Bashundhara['rajbari']; ?></td>
					<td><?php echo $Bashundhara['corporate']; ?></td>
				</tr>
				<tr id="table2">
										<td><?php echo $Kingbrand['comilla']; ?></td>
					<td><?php echo $Kingbrand['chandpur']; ?></td>
					<td><?php echo $Kingbrand['lakhsmipur']; ?></td>
					<td><?php echo $Kingbrand['noakhali']; ?></td>
					<td><?php echo $Kingbrand['feni']; ?></td>
					<td><?php echo $Kingbrand['coxsbazar']; ?></td>
					<td><?php echo $Kingbrand['panchagarh']; ?></td>
					<td><?php echo $Kingbrand['thakurgaon']; ?></td>
					<td><?php echo $Kingbrand['lalmonirhat']; ?></td>
					<td><?php echo $Kingbrand['kurigram']; ?></td>
					<td><?php echo $Kingbrand['nilphamari']; ?></td>
					<td><?php echo $Kingbrand['dinajpur']; ?></td>
					<td><?php echo $Kingbrand['rangpur']; ?></td>
					<td><?php echo $Kingbrand['gaibandha']; ?></td>
					<td><?php echo $Kingbrand['joypurhat']; ?></td>
					<td><?php echo $Kingbrand['bogra']; ?></td>
					<td><?php echo $Kingbrand['sirajganj']; ?></td>
					<td><?php echo $Kingbrand['rajKingbrandi']; ?></td>
					<td><?php echo $Kingbrand['chapainawabganj']; ?></td>
					<td><?php echo $Kingbrand['naogaon']; ?></td>
					<td><?php echo $Kingbrand['natore']; ?></td>
					<td><?php echo $Kingbrand['pabna']; ?></td>
					<td><?php echo $Kingbrand['tangail']; ?></td>
					<td><?php echo $Kingbrand['jamalpur']; ?></td>
					<td><?php echo $Kingbrand['sherpur']; ?></td>
					<td><?php echo $Kingbrand['gazipur']; ?></td>
					<td><?php echo $Kingbrand['manikganj']; ?></td>
					<td><?php echo $Kingbrand['saver']; ?></td>
					<td><?php echo $Kingbrand['mirpur']; ?></td>
					<td><?php echo $Kingbrand['olddhaka']; ?></td>
					<td><?php echo $Kingbrand['keraniganj']; ?></td>
					<td><?php echo $Kingbrand['uttara']; ?></td>
					<td><?php echo $Kingbrand['jatrabari']; ?></td>
					<td><?php echo $Kingbrand['munshiganj']; ?></td>
					<td><?php echo $Kingbrand['mymensing']; ?></td>
					<td><?php echo $Kingbrand['netrokona']; ?></td>
					<td><?php echo $Kingbrand['narayanganj']; ?></td>
					<td><?php echo $Kingbrand['narsingdi']; ?></td>
					<td><?php echo $Kingbrand['brahmanbaria']; ?></td>
					<td><?php echo $Kingbrand['kishoreganj']; ?></td>
					<td><?php echo $Kingbrand['moulvibazar']; ?></td>
					<td><?php echo $Kingbrand['habiganj']; ?></td>
					<td><?php echo $Kingbrand['sylhet']; ?></td>
					<td><?php echo $Kingbrand['sunamganj']; ?></td>
					<td><?php echo $Kingbrand['jhenaidha']; ?></td>
					<td><?php echo $Kingbrand['chuadanga']; ?></td>
					<td><?php echo $Kingbrand['kushtia']; ?></td>
					<td><?php echo $Kingbrand['meherpur']; ?></td>
					<td><?php echo $Kingbrand['jessore']; ?></td>
					<td><?php echo $Kingbrand['magura']; ?></td>
					<td><?php echo $Kingbrand['narail']; ?></td>
					<td><?php echo $Kingbrand['satkhira']; ?></td>
					<td><?php echo $Kingbrand['khulna']; ?></td>
					<td><?php echo $Kingbrand['bagerhat']; ?></td>
					<td><?php echo $Kingbrand['barisal']; ?></td>
					<td><?php echo $Kingbrand['pirojpur']; ?></td>
					<td><?php echo $Kingbrand['jhalokathi']; ?></td>
					<td><?php echo $Kingbrand['bhola']; ?></td>
					<td><?php echo $Kingbrand['patuakhali']; ?></td>
					<td><?php echo $Kingbrand['barguna']; ?></td>
					<td><?php echo $Kingbrand['gopalganj']; ?></td>
					<td><?php echo $Kingbrand['shariatpur']; ?></td>
					<td><?php echo $Kingbrand['madaripur']; ?></td>
					<td><?php echo $Kingbrand['faridpur']; ?></td>
					<td><?php echo $Kingbrand['rajbari']; ?></td>
					<td><?php echo $Kingbrand['corporate']; ?></td>
				</tr>
				<tr id="table2">
										<td><?php echo $Fresh['comilla']; ?></td>
					<td><?php echo $Fresh['chandpur']; ?></td>
					<td><?php echo $Fresh['lakhsmipur']; ?></td>
					<td><?php echo $Fresh['noakhali']; ?></td>
					<td><?php echo $Fresh['feni']; ?></td>
					<td><?php echo $Fresh['coxsbazar']; ?></td>
					<td><?php echo $Fresh['panchagarh']; ?></td>
					<td><?php echo $Fresh['thakurgaon']; ?></td>
					<td><?php echo $Fresh['lalmonirhat']; ?></td>
					<td><?php echo $Fresh['kurigram']; ?></td>
					<td><?php echo $Fresh['nilphamari']; ?></td>
					<td><?php echo $Fresh['dinajpur']; ?></td>
					<td><?php echo $Fresh['rangpur']; ?></td>
					<td><?php echo $Fresh['gaibandha']; ?></td>
					<td><?php echo $Fresh['joypurhat']; ?></td>
					<td><?php echo $Fresh['bogra']; ?></td>
					<td><?php echo $Fresh['sirajganj']; ?></td>
					<td><?php echo $Fresh['rajFreshi']; ?></td>
					<td><?php echo $Fresh['chapainawabganj']; ?></td>
					<td><?php echo $Fresh['naogaon']; ?></td>
					<td><?php echo $Fresh['natore']; ?></td>
					<td><?php echo $Fresh['pabna']; ?></td>
					<td><?php echo $Fresh['tangail']; ?></td>
					<td><?php echo $Fresh['jamalpur']; ?></td>
					<td><?php echo $Fresh['sherpur']; ?></td>
					<td><?php echo $Fresh['gazipur']; ?></td>
					<td><?php echo $Fresh['manikganj']; ?></td>
					<td><?php echo $Fresh['saver']; ?></td>
					<td><?php echo $Fresh['mirpur']; ?></td>
					<td><?php echo $Fresh['olddhaka']; ?></td>
					<td><?php echo $Fresh['keraniganj']; ?></td>
					<td><?php echo $Fresh['uttara']; ?></td>
					<td><?php echo $Fresh['jatrabari']; ?></td>
					<td><?php echo $Fresh['munshiganj']; ?></td>
					<td><?php echo $Fresh['mymensing']; ?></td>
					<td><?php echo $Fresh['netrokona']; ?></td>
					<td><?php echo $Fresh['narayanganj']; ?></td>
					<td><?php echo $Fresh['narsingdi']; ?></td>
					<td><?php echo $Fresh['brahmanbaria']; ?></td>
					<td><?php echo $Fresh['kishoreganj']; ?></td>
					<td><?php echo $Fresh['moulvibazar']; ?></td>
					<td><?php echo $Fresh['habiganj']; ?></td>
					<td><?php echo $Fresh['sylhet']; ?></td>
					<td><?php echo $Fresh['sunamganj']; ?></td>
					<td><?php echo $Fresh['jhenaidha']; ?></td>
					<td><?php echo $Fresh['chuadanga']; ?></td>
					<td><?php echo $Fresh['kushtia']; ?></td>
					<td><?php echo $Fresh['meherpur']; ?></td>
					<td><?php echo $Fresh['jessore']; ?></td>
					<td><?php echo $Fresh['magura']; ?></td>
					<td><?php echo $Fresh['narail']; ?></td>
					<td><?php echo $Fresh['satkhira']; ?></td>
					<td><?php echo $Fresh['khulna']; ?></td>
					<td><?php echo $Fresh['bagerhat']; ?></td>
					<td><?php echo $Fresh['barisal']; ?></td>
					<td><?php echo $Fresh['pirojpur']; ?></td>
					<td><?php echo $Fresh['jhalokathi']; ?></td>
					<td><?php echo $Fresh['bhola']; ?></td>
					<td><?php echo $Fresh['patuakhali']; ?></td>
					<td><?php echo $Fresh['barguna']; ?></td>
					<td><?php echo $Fresh['gopalganj']; ?></td>
					<td><?php echo $Fresh['shariatpur']; ?></td>
					<td><?php echo $Fresh['madaripur']; ?></td>
					<td><?php echo $Fresh['faridpur']; ?></td>
					<td><?php echo $Fresh['rajbari']; ?></td>
					<td><?php echo $Fresh['corporate']; ?></td>
				</tr>
				<tr id="table2">
										<td><?php echo $Crown['comilla']; ?></td>
					<td><?php echo $Crown['chandpur']; ?></td>
					<td><?php echo $Crown['lakhsmipur']; ?></td>
					<td><?php echo $Crown['noakhali']; ?></td>
					<td><?php echo $Crown['feni']; ?></td>
					<td><?php echo $Crown['coxsbazar']; ?></td>
					<td><?php echo $Crown['panchagarh']; ?></td>
					<td><?php echo $Crown['thakurgaon']; ?></td>
					<td><?php echo $Crown['lalmonirhat']; ?></td>
					<td><?php echo $Crown['kurigram']; ?></td>
					<td><?php echo $Crown['nilphamari']; ?></td>
					<td><?php echo $Crown['dinajpur']; ?></td>
					<td><?php echo $Crown['rangpur']; ?></td>
					<td><?php echo $Crown['gaibandha']; ?></td>
					<td><?php echo $Crown['joypurhat']; ?></td>
					<td><?php echo $Crown['bogra']; ?></td>
					<td><?php echo $Crown['sirajganj']; ?></td>
					<td><?php echo $Crown['rajCrowni']; ?></td>
					<td><?php echo $Crown['chapainawabganj']; ?></td>
					<td><?php echo $Crown['naogaon']; ?></td>
					<td><?php echo $Crown['natore']; ?></td>
					<td><?php echo $Crown['pabna']; ?></td>
					<td><?php echo $Crown['tangail']; ?></td>
					<td><?php echo $Crown['jamalpur']; ?></td>
					<td><?php echo $Crown['sherpur']; ?></td>
					<td><?php echo $Crown['gazipur']; ?></td>
					<td><?php echo $Crown['manikganj']; ?></td>
					<td><?php echo $Crown['saver']; ?></td>
					<td><?php echo $Crown['mirpur']; ?></td>
					<td><?php echo $Crown['olddhaka']; ?></td>
					<td><?php echo $Crown['keraniganj']; ?></td>
					<td><?php echo $Crown['uttara']; ?></td>
					<td><?php echo $Crown['jatrabari']; ?></td>
					<td><?php echo $Crown['munshiganj']; ?></td>
					<td><?php echo $Crown['mymensing']; ?></td>
					<td><?php echo $Crown['netrokona']; ?></td>
					<td><?php echo $Crown['narayanganj']; ?></td>
					<td><?php echo $Crown['narsingdi']; ?></td>
					<td><?php echo $Crown['brahmanbaria']; ?></td>
					<td><?php echo $Crown['kishoreganj']; ?></td>
					<td><?php echo $Crown['moulvibazar']; ?></td>
					<td><?php echo $Crown['habiganj']; ?></td>
					<td><?php echo $Crown['sylhet']; ?></td>
					<td><?php echo $Crown['sunamganj']; ?></td>
					<td><?php echo $Crown['jhenaidha']; ?></td>
					<td><?php echo $Crown['chuadanga']; ?></td>
					<td><?php echo $Crown['kushtia']; ?></td>
					<td><?php echo $Crown['meherpur']; ?></td>
					<td><?php echo $Crown['jessore']; ?></td>
					<td><?php echo $Crown['magura']; ?></td>
					<td><?php echo $Crown['narail']; ?></td>
					<td><?php echo $Crown['satkhira']; ?></td>
					<td><?php echo $Crown['khulna']; ?></td>
					<td><?php echo $Crown['bagerhat']; ?></td>
					<td><?php echo $Crown['barisal']; ?></td>
					<td><?php echo $Crown['pirojpur']; ?></td>
					<td><?php echo $Crown['jhalokathi']; ?></td>
					<td><?php echo $Crown['bhola']; ?></td>
					<td><?php echo $Crown['patuakhali']; ?></td>
					<td><?php echo $Crown['barguna']; ?></td>
					<td><?php echo $Crown['gopalganj']; ?></td>
					<td><?php echo $Crown['shariatpur']; ?></td>
					<td><?php echo $Crown['madaripur']; ?></td>
					<td><?php echo $Crown['faridpur']; ?></td>
					<td><?php echo $Crown['rajbari']; ?></td>
					<td><?php echo $Crown['corporate']; ?></td>
				</tr>
				<tr id="table2">
										<td><?php echo $seven['comilla']; ?></td>
					<td><?php echo $seven['chandpur']; ?></td>
					<td><?php echo $seven['lakhsmipur']; ?></td>
					<td><?php echo $seven['noakhali']; ?></td>
					<td><?php echo $seven['feni']; ?></td>
					<td><?php echo $seven['coxsbazar']; ?></td>
					<td><?php echo $seven['panchagarh']; ?></td>
					<td><?php echo $seven['thakurgaon']; ?></td>
					<td><?php echo $seven['lalmonirhat']; ?></td>
					<td><?php echo $seven['kurigram']; ?></td>
					<td><?php echo $seven['nilphamari']; ?></td>
					<td><?php echo $seven['dinajpur']; ?></td>
					<td><?php echo $seven['rangpur']; ?></td>
					<td><?php echo $seven['gaibandha']; ?></td>
					<td><?php echo $seven['joypurhat']; ?></td>
					<td><?php echo $seven['bogra']; ?></td>
					<td><?php echo $seven['sirajganj']; ?></td>
					<td><?php echo $seven['rajseveni']; ?></td>
					<td><?php echo $seven['chapainawabganj']; ?></td>
					<td><?php echo $seven['naogaon']; ?></td>
					<td><?php echo $seven['natore']; ?></td>
					<td><?php echo $seven['pabna']; ?></td>
					<td><?php echo $seven['tangail']; ?></td>
					<td><?php echo $seven['jamalpur']; ?></td>
					<td><?php echo $seven['sherpur']; ?></td>
					<td><?php echo $seven['gazipur']; ?></td>
					<td><?php echo $seven['manikganj']; ?></td>
					<td><?php echo $seven['saver']; ?></td>
					<td><?php echo $seven['mirpur']; ?></td>
					<td><?php echo $seven['olddhaka']; ?></td>
					<td><?php echo $seven['keraniganj']; ?></td>
					<td><?php echo $seven['uttara']; ?></td>
					<td><?php echo $seven['jatrabari']; ?></td>
					<td><?php echo $seven['munshiganj']; ?></td>
					<td><?php echo $seven['mymensing']; ?></td>
					<td><?php echo $seven['netrokona']; ?></td>
					<td><?php echo $seven['narayanganj']; ?></td>
					<td><?php echo $seven['narsingdi']; ?></td>
					<td><?php echo $seven['brahmanbaria']; ?></td>
					<td><?php echo $seven['kishoreganj']; ?></td>
					<td><?php echo $seven['moulvibazar']; ?></td>
					<td><?php echo $seven['habiganj']; ?></td>
					<td><?php echo $seven['sylhet']; ?></td>
					<td><?php echo $seven['sunamganj']; ?></td>
					<td><?php echo $seven['jhenaidha']; ?></td>
					<td><?php echo $seven['chuadanga']; ?></td>
					<td><?php echo $seven['kushtia']; ?></td>
					<td><?php echo $seven['meherpur']; ?></td>
					<td><?php echo $seven['jessore']; ?></td>
					<td><?php echo $seven['magura']; ?></td>
					<td><?php echo $seven['narail']; ?></td>
					<td><?php echo $seven['satkhira']; ?></td>
					<td><?php echo $seven['khulna']; ?></td>
					<td><?php echo $seven['bagerhat']; ?></td>
					<td><?php echo $seven['barisal']; ?></td>
					<td><?php echo $seven['pirojpur']; ?></td>
					<td><?php echo $seven['jhalokathi']; ?></td>
					<td><?php echo $seven['bhola']; ?></td>
					<td><?php echo $seven['patuakhali']; ?></td>
					<td><?php echo $seven['barguna']; ?></td>
					<td><?php echo $seven['gopalganj']; ?></td>
					<td><?php echo $seven['shariatpur']; ?></td>
					<td><?php echo $seven['madaripur']; ?></td>
					<td><?php echo $seven['faridpur']; ?></td>
					<td><?php echo $seven['rajbari']; ?></td>
					<td><?php echo $seven['corporate']; ?></td>
				</tr>
				<tr id="table2">
										<td><?php echo $Premier['comilla']; ?></td>
					<td><?php echo $Premier['chandpur']; ?></td>
					<td><?php echo $Premier['lakhsmipur']; ?></td>
					<td><?php echo $Premier['noakhali']; ?></td>
					<td><?php echo $Premier['feni']; ?></td>
					<td><?php echo $Premier['coxsbazar']; ?></td>
					<td><?php echo $Premier['panchagarh']; ?></td>
					<td><?php echo $Premier['thakurgaon']; ?></td>
					<td><?php echo $Premier['lalmonirhat']; ?></td>
					<td><?php echo $Premier['kurigram']; ?></td>
					<td><?php echo $Premier['nilphamari']; ?></td>
					<td><?php echo $Premier['dinajpur']; ?></td>
					<td><?php echo $Premier['rangpur']; ?></td>
					<td><?php echo $Premier['gaibandha']; ?></td>
					<td><?php echo $Premier['joypurhat']; ?></td>
					<td><?php echo $Premier['bogra']; ?></td>
					<td><?php echo $Premier['sirajganj']; ?></td>
					<td><?php echo $Premier['rajPremieri']; ?></td>
					<td><?php echo $Premier['chapainawabganj']; ?></td>
					<td><?php echo $Premier['naogaon']; ?></td>
					<td><?php echo $Premier['natore']; ?></td>
					<td><?php echo $Premier['pabna']; ?></td>
					<td><?php echo $Premier['tangail']; ?></td>
					<td><?php echo $Premier['jamalpur']; ?></td>
					<td><?php echo $Premier['sherpur']; ?></td>
					<td><?php echo $Premier['gazipur']; ?></td>
					<td><?php echo $Premier['manikganj']; ?></td>
					<td><?php echo $Premier['saver']; ?></td>
					<td><?php echo $Premier['mirpur']; ?></td>
					<td><?php echo $Premier['olddhaka']; ?></td>
					<td><?php echo $Premier['keraniganj']; ?></td>
					<td><?php echo $Premier['uttara']; ?></td>
					<td><?php echo $Premier['jatrabari']; ?></td>
					<td><?php echo $Premier['munshiganj']; ?></td>
					<td><?php echo $Premier['mymensing']; ?></td>
					<td><?php echo $Premier['netrokona']; ?></td>
					<td><?php echo $Premier['narayanganj']; ?></td>
					<td><?php echo $Premier['narsingdi']; ?></td>
					<td><?php echo $Premier['brahmanbaria']; ?></td>
					<td><?php echo $Premier['kishoreganj']; ?></td>
					<td><?php echo $Premier['moulvibazar']; ?></td>
					<td><?php echo $Premier['habiganj']; ?></td>
					<td><?php echo $Premier['sylhet']; ?></td>
					<td><?php echo $Premier['sunamganj']; ?></td>
					<td><?php echo $Premier['jhenaidha']; ?></td>
					<td><?php echo $Premier['chuadanga']; ?></td>
					<td><?php echo $Premier['kushtia']; ?></td>
					<td><?php echo $Premier['meherpur']; ?></td>
					<td><?php echo $Premier['jessore']; ?></td>
					<td><?php echo $Premier['magura']; ?></td>
					<td><?php echo $Premier['narail']; ?></td>
					<td><?php echo $Premier['satkhira']; ?></td>
					<td><?php echo $Premier['khulna']; ?></td>
					<td><?php echo $Premier['bagerhat']; ?></td>
					<td><?php echo $Premier['barisal']; ?></td>
					<td><?php echo $Premier['pirojpur']; ?></td>
					<td><?php echo $Premier['jhalokathi']; ?></td>
					<td><?php echo $Premier['bhola']; ?></td>
					<td><?php echo $Premier['patuakhali']; ?></td>
					<td><?php echo $Premier['barguna']; ?></td>
					<td><?php echo $Premier['gopalganj']; ?></td>
					<td><?php echo $Premier['shariatpur']; ?></td>
					<td><?php echo $Premier['madaripur']; ?></td>
					<td><?php echo $Premier['faridpur']; ?></td>
					<td><?php echo $Premier['rajbari']; ?></td>
					<td><?php echo $Premier['corporate']; ?></td>
				</tr>
				<tr id="table2">
										<td><?php echo $Scan['comilla']; ?></td>
					<td><?php echo $Scan['chandpur']; ?></td>
					<td><?php echo $Scan['lakhsmipur']; ?></td>
					<td><?php echo $Scan['noakhali']; ?></td>
					<td><?php echo $Scan['feni']; ?></td>
					<td><?php echo $Scan['coxsbazar']; ?></td>
					<td><?php echo $Scan['panchagarh']; ?></td>
					<td><?php echo $Scan['thakurgaon']; ?></td>
					<td><?php echo $Scan['lalmonirhat']; ?></td>
					<td><?php echo $Scan['kurigram']; ?></td>
					<td><?php echo $Scan['nilphamari']; ?></td>
					<td><?php echo $Scan['dinajpur']; ?></td>
					<td><?php echo $Scan['rangpur']; ?></td>
					<td><?php echo $Scan['gaibandha']; ?></td>
					<td><?php echo $Scan['joypurhat']; ?></td>
					<td><?php echo $Scan['bogra']; ?></td>
					<td><?php echo $Scan['sirajganj']; ?></td>
					<td><?php echo $Scan['rajScani']; ?></td>
					<td><?php echo $Scan['chapainawabganj']; ?></td>
					<td><?php echo $Scan['naogaon']; ?></td>
					<td><?php echo $Scan['natore']; ?></td>
					<td><?php echo $Scan['pabna']; ?></td>
					<td><?php echo $Scan['tangail']; ?></td>
					<td><?php echo $Scan['jamalpur']; ?></td>
					<td><?php echo $Scan['sherpur']; ?></td>
					<td><?php echo $Scan['gazipur']; ?></td>
					<td><?php echo $Scan['manikganj']; ?></td>
					<td><?php echo $Scan['saver']; ?></td>
					<td><?php echo $Scan['mirpur']; ?></td>
					<td><?php echo $Scan['olddhaka']; ?></td>
					<td><?php echo $Scan['keraniganj']; ?></td>
					<td><?php echo $Scan['uttara']; ?></td>
					<td><?php echo $Scan['jatrabari']; ?></td>
					<td><?php echo $Scan['munshiganj']; ?></td>
					<td><?php echo $Scan['mymensing']; ?></td>
					<td><?php echo $Scan['netrokona']; ?></td>
					<td><?php echo $Scan['narayanganj']; ?></td>
					<td><?php echo $Scan['narsingdi']; ?></td>
					<td><?php echo $Scan['brahmanbaria']; ?></td>
					<td><?php echo $Scan['kishoreganj']; ?></td>
					<td><?php echo $Scan['moulvibazar']; ?></td>
					<td><?php echo $Scan['habiganj']; ?></td>
					<td><?php echo $Scan['sylhet']; ?></td>
					<td><?php echo $Scan['sunamganj']; ?></td>
					<td><?php echo $Scan['jhenaidha']; ?></td>
					<td><?php echo $Scan['chuadanga']; ?></td>
					<td><?php echo $Scan['kushtia']; ?></td>
					<td><?php echo $Scan['meherpur']; ?></td>
					<td><?php echo $Scan['jessore']; ?></td>
					<td><?php echo $Scan['magura']; ?></td>
					<td><?php echo $Scan['narail']; ?></td>
					<td><?php echo $Scan['satkhira']; ?></td>
					<td><?php echo $Scan['khulna']; ?></td>
					<td><?php echo $Scan['bagerhat']; ?></td>
					<td><?php echo $Scan['barisal']; ?></td>
					<td><?php echo $Scan['pirojpur']; ?></td>
					<td><?php echo $Scan['jhalokathi']; ?></td>
					<td><?php echo $Scan['bhola']; ?></td>
					<td><?php echo $Scan['patuakhali']; ?></td>
					<td><?php echo $Scan['barguna']; ?></td>
					<td><?php echo $Scan['gopalganj']; ?></td>
					<td><?php echo $Scan['shariatpur']; ?></td>
					<td><?php echo $Scan['madaripur']; ?></td>
					<td><?php echo $Scan['faridpur']; ?></td>
					<td><?php echo $Scan['rajbari']; ?></td>
					<td><?php echo $Scan['corporate']; ?></td>
				</tr>
				<tr id="table2">
										<td><?php echo $Supercrete['comilla']; ?></td>
					<td><?php echo $Supercrete['chandpur']; ?></td>
					<td><?php echo $Supercrete['lakhsmipur']; ?></td>
					<td><?php echo $Supercrete['noakhali']; ?></td>
					<td><?php echo $Supercrete['feni']; ?></td>
					<td><?php echo $Supercrete['coxsbazar']; ?></td>
					<td><?php echo $Supercrete['panchagarh']; ?></td>
					<td><?php echo $Supercrete['thakurgaon']; ?></td>
					<td><?php echo $Supercrete['lalmonirhat']; ?></td>
					<td><?php echo $Supercrete['kurigram']; ?></td>
					<td><?php echo $Supercrete['nilphamari']; ?></td>
					<td><?php echo $Supercrete['dinajpur']; ?></td>
					<td><?php echo $Supercrete['rangpur']; ?></td>
					<td><?php echo $Supercrete['gaibandha']; ?></td>
					<td><?php echo $Supercrete['joypurhat']; ?></td>
					<td><?php echo $Supercrete['bogra']; ?></td>
					<td><?php echo $Supercrete['sirajganj']; ?></td>
					<td><?php echo $Supercrete['rajSupercretei']; ?></td>
					<td><?php echo $Supercrete['chapainawabganj']; ?></td>
					<td><?php echo $Supercrete['naogaon']; ?></td>
					<td><?php echo $Supercrete['natore']; ?></td>
					<td><?php echo $Supercrete['pabna']; ?></td>
					<td><?php echo $Supercrete['tangail']; ?></td>
					<td><?php echo $Supercrete['jamalpur']; ?></td>
					<td><?php echo $Supercrete['sherpur']; ?></td>
					<td><?php echo $Supercrete['gazipur']; ?></td>
					<td><?php echo $Supercrete['manikganj']; ?></td>
					<td><?php echo $Supercrete['saver']; ?></td>
					<td><?php echo $Supercrete['mirpur']; ?></td>
					<td><?php echo $Supercrete['olddhaka']; ?></td>
					<td><?php echo $Supercrete['keraniganj']; ?></td>
					<td><?php echo $Supercrete['uttara']; ?></td>
					<td><?php echo $Supercrete['jatrabari']; ?></td>
					<td><?php echo $Supercrete['munshiganj']; ?></td>
					<td><?php echo $Supercrete['mymensing']; ?></td>
					<td><?php echo $Supercrete['netrokona']; ?></td>
					<td><?php echo $Supercrete['narayanganj']; ?></td>
					<td><?php echo $Supercrete['narsingdi']; ?></td>
					<td><?php echo $Supercrete['brahmanbaria']; ?></td>
					<td><?php echo $Supercrete['kishoreganj']; ?></td>
					<td><?php echo $Supercrete['moulvibazar']; ?></td>
					<td><?php echo $Supercrete['habiganj']; ?></td>
					<td><?php echo $Supercrete['sylhet']; ?></td>
					<td><?php echo $Supercrete['sunamganj']; ?></td>
					<td><?php echo $Supercrete['jhenaidha']; ?></td>
					<td><?php echo $Supercrete['chuadanga']; ?></td>
					<td><?php echo $Supercrete['kushtia']; ?></td>
					<td><?php echo $Supercrete['meherpur']; ?></td>
					<td><?php echo $Supercrete['jessore']; ?></td>
					<td><?php echo $Supercrete['magura']; ?></td>
					<td><?php echo $Supercrete['narail']; ?></td>
					<td><?php echo $Supercrete['satkhira']; ?></td>
					<td><?php echo $Supercrete['khulna']; ?></td>
					<td><?php echo $Supercrete['bagerhat']; ?></td>
					<td><?php echo $Supercrete['barisal']; ?></td>
					<td><?php echo $Supercrete['pirojpur']; ?></td>
					<td><?php echo $Supercrete['jhalokathi']; ?></td>
					<td><?php echo $Supercrete['bhola']; ?></td>
					<td><?php echo $Supercrete['patuakhali']; ?></td>
					<td><?php echo $Supercrete['barguna']; ?></td>
					<td><?php echo $Supercrete['gopalganj']; ?></td>
					<td><?php echo $Supercrete['shariatpur']; ?></td>
					<td><?php echo $Supercrete['madaripur']; ?></td>
					<td><?php echo $Supercrete['faridpur']; ?></td>
					<td><?php echo $Supercrete['rajbari']; ?></td>
					<td><?php echo $Supercrete['corporate']; ?></td>
				</tr>
				<tr id="table2">
										<td><?php echo $Royal['comilla']; ?></td>
					<td><?php echo $Royal['chandpur']; ?></td>
					<td><?php echo $Royal['lakhsmipur']; ?></td>
					<td><?php echo $Royal['noakhali']; ?></td>
					<td><?php echo $Royal['feni']; ?></td>
					<td><?php echo $Royal['coxsbazar']; ?></td>
					<td><?php echo $Royal['panchagarh']; ?></td>
					<td><?php echo $Royal['thakurgaon']; ?></td>
					<td><?php echo $Royal['lalmonirhat']; ?></td>
					<td><?php echo $Royal['kurigram']; ?></td>
					<td><?php echo $Royal['nilphamari']; ?></td>
					<td><?php echo $Royal['dinajpur']; ?></td>
					<td><?php echo $Royal['rangpur']; ?></td>
					<td><?php echo $Royal['gaibandha']; ?></td>
					<td><?php echo $Royal['joypurhat']; ?></td>
					<td><?php echo $Royal['bogra']; ?></td>
					<td><?php echo $Royal['sirajganj']; ?></td>
					<td><?php echo $Royal['rajRoyali']; ?></td>
					<td><?php echo $Royal['chapainawabganj']; ?></td>
					<td><?php echo $Royal['naogaon']; ?></td>
					<td><?php echo $Royal['natore']; ?></td>
					<td><?php echo $Royal['pabna']; ?></td>
					<td><?php echo $Royal['tangail']; ?></td>
					<td><?php echo $Royal['jamalpur']; ?></td>
					<td><?php echo $Royal['sherpur']; ?></td>
					<td><?php echo $Royal['gazipur']; ?></td>
					<td><?php echo $Royal['manikganj']; ?></td>
					<td><?php echo $Royal['saver']; ?></td>
					<td><?php echo $Royal['mirpur']; ?></td>
					<td><?php echo $Royal['olddhaka']; ?></td>
					<td><?php echo $Royal['keraniganj']; ?></td>
					<td><?php echo $Royal['uttara']; ?></td>
					<td><?php echo $Royal['jatrabari']; ?></td>
					<td><?php echo $Royal['munshiganj']; ?></td>
					<td><?php echo $Royal['mymensing']; ?></td>
					<td><?php echo $Royal['netrokona']; ?></td>
					<td><?php echo $Royal['narayanganj']; ?></td>
					<td><?php echo $Royal['narsingdi']; ?></td>
					<td><?php echo $Royal['brahmanbaria']; ?></td>
					<td><?php echo $Royal['kishoreganj']; ?></td>
					<td><?php echo $Royal['moulvibazar']; ?></td>
					<td><?php echo $Royal['habiganj']; ?></td>
					<td><?php echo $Royal['sylhet']; ?></td>
					<td><?php echo $Royal['sunamganj']; ?></td>
					<td><?php echo $Royal['jhenaidha']; ?></td>
					<td><?php echo $Royal['chuadanga']; ?></td>
					<td><?php echo $Royal['kushtia']; ?></td>
					<td><?php echo $Royal['meherpur']; ?></td>
					<td><?php echo $Royal['jessore']; ?></td>
					<td><?php echo $Royal['magura']; ?></td>
					<td><?php echo $Royal['narail']; ?></td>
					<td><?php echo $Royal['satkhira']; ?></td>
					<td><?php echo $Royal['khulna']; ?></td>
					<td><?php echo $Royal['bagerhat']; ?></td>
					<td><?php echo $Royal['barisal']; ?></td>
					<td><?php echo $Royal['pirojpur']; ?></td>
					<td><?php echo $Royal['jhalokathi']; ?></td>
					<td><?php echo $Royal['bhola']; ?></td>
					<td><?php echo $Royal['patuakhali']; ?></td>
					<td><?php echo $Royal['barguna']; ?></td>
					<td><?php echo $Royal['gopalganj']; ?></td>
					<td><?php echo $Royal['shariatpur']; ?></td>
					<td><?php echo $Royal['madaripur']; ?></td>
					<td><?php echo $Royal['faridpur']; ?></td>
					<td><?php echo $Royal['rajbari']; ?></td>
					<td><?php echo $Royal['corporate']; ?></td>
				</tr>
				<tr id="table2">
										<td><?php echo $Tiger['comilla']; ?></td>
					<td><?php echo $Tiger['chandpur']; ?></td>
					<td><?php echo $Tiger['lakhsmipur']; ?></td>
					<td><?php echo $Tiger['noakhali']; ?></td>
					<td><?php echo $Tiger['feni']; ?></td>
					<td><?php echo $Tiger['coxsbazar']; ?></td>
					<td><?php echo $Tiger['panchagarh']; ?></td>
					<td><?php echo $Tiger['thakurgaon']; ?></td>
					<td><?php echo $Tiger['lalmonirhat']; ?></td>
					<td><?php echo $Tiger['kurigram']; ?></td>
					<td><?php echo $Tiger['nilphamari']; ?></td>
					<td><?php echo $Tiger['dinajpur']; ?></td>
					<td><?php echo $Tiger['rangpur']; ?></td>
					<td><?php echo $Tiger['gaibandha']; ?></td>
					<td><?php echo $Tiger['joypurhat']; ?></td>
					<td><?php echo $Tiger['bogra']; ?></td>
					<td><?php echo $Tiger['sirajganj']; ?></td>
					<td><?php echo $Tiger['rajTigeri']; ?></td>
					<td><?php echo $Tiger['chapainawabganj']; ?></td>
					<td><?php echo $Tiger['naogaon']; ?></td>
					<td><?php echo $Tiger['natore']; ?></td>
					<td><?php echo $Tiger['pabna']; ?></td>
					<td><?php echo $Tiger['tangail']; ?></td>
					<td><?php echo $Tiger['jamalpur']; ?></td>
					<td><?php echo $Tiger['sherpur']; ?></td>
					<td><?php echo $Tiger['gazipur']; ?></td>
					<td><?php echo $Tiger['manikganj']; ?></td>
					<td><?php echo $Tiger['saver']; ?></td>
					<td><?php echo $Tiger['mirpur']; ?></td>
					<td><?php echo $Tiger['olddhaka']; ?></td>
					<td><?php echo $Tiger['keraniganj']; ?></td>
					<td><?php echo $Tiger['uttara']; ?></td>
					<td><?php echo $Tiger['jatrabari']; ?></td>
					<td><?php echo $Tiger['munshiganj']; ?></td>
					<td><?php echo $Tiger['mymensing']; ?></td>
					<td><?php echo $Tiger['netrokona']; ?></td>
					<td><?php echo $Tiger['narayanganj']; ?></td>
					<td><?php echo $Tiger['narsingdi']; ?></td>
					<td><?php echo $Tiger['brahmanbaria']; ?></td>
					<td><?php echo $Tiger['kishoreganj']; ?></td>
					<td><?php echo $Tiger['moulvibazar']; ?></td>
					<td><?php echo $Tiger['habiganj']; ?></td>
					<td><?php echo $Tiger['sylhet']; ?></td>
					<td><?php echo $Tiger['sunamganj']; ?></td>
					<td><?php echo $Tiger['jhenaidha']; ?></td>
					<td><?php echo $Tiger['chuadanga']; ?></td>
					<td><?php echo $Tiger['kushtia']; ?></td>
					<td><?php echo $Tiger['meherpur']; ?></td>
					<td><?php echo $Tiger['jessore']; ?></td>
					<td><?php echo $Tiger['magura']; ?></td>
					<td><?php echo $Tiger['narail']; ?></td>
					<td><?php echo $Tiger['satkhira']; ?></td>
					<td><?php echo $Tiger['khulna']; ?></td>
					<td><?php echo $Tiger['bagerhat']; ?></td>
					<td><?php echo $Tiger['barisal']; ?></td>
					<td><?php echo $Tiger['pirojpur']; ?></td>
					<td><?php echo $Tiger['jhalokathi']; ?></td>
					<td><?php echo $Tiger['bhola']; ?></td>
					<td><?php echo $Tiger['patuakhali']; ?></td>
					<td><?php echo $Tiger['barguna']; ?></td>
					<td><?php echo $Tiger['gopalganj']; ?></td>
					<td><?php echo $Tiger['shariatpur']; ?></td>
					<td><?php echo $Tiger['madaripur']; ?></td>
					<td><?php echo $Tiger['faridpur']; ?></td>
					<td><?php echo $Tiger['rajbari']; ?></td>
					<td><?php echo $Tiger['corporate']; ?></td>
				</tr>
				<tr id="table2">
										<td><?php echo $Confidence['comilla']; ?></td>
					<td><?php echo $Confidence['chandpur']; ?></td>
					<td><?php echo $Confidence['lakhsmipur']; ?></td>
					<td><?php echo $Confidence['noakhali']; ?></td>
					<td><?php echo $Confidence['feni']; ?></td>
					<td><?php echo $Confidence['coxsbazar']; ?></td>
					<td><?php echo $Confidence['panchagarh']; ?></td>
					<td><?php echo $Confidence['thakurgaon']; ?></td>
					<td><?php echo $Confidence['lalmonirhat']; ?></td>
					<td><?php echo $Confidence['kurigram']; ?></td>
					<td><?php echo $Confidence['nilphamari']; ?></td>
					<td><?php echo $Confidence['dinajpur']; ?></td>
					<td><?php echo $Confidence['rangpur']; ?></td>
					<td><?php echo $Confidence['gaibandha']; ?></td>
					<td><?php echo $Confidence['joypurhat']; ?></td>
					<td><?php echo $Confidence['bogra']; ?></td>
					<td><?php echo $Confidence['sirajganj']; ?></td>
					<td><?php echo $Confidence['rajConfidencei']; ?></td>
					<td><?php echo $Confidence['chapainawabganj']; ?></td>
					<td><?php echo $Confidence['naogaon']; ?></td>
					<td><?php echo $Confidence['natore']; ?></td>
					<td><?php echo $Confidence['pabna']; ?></td>
					<td><?php echo $Confidence['tangail']; ?></td>
					<td><?php echo $Confidence['jamalpur']; ?></td>
					<td><?php echo $Confidence['sherpur']; ?></td>
					<td><?php echo $Confidence['gazipur']; ?></td>
					<td><?php echo $Confidence['manikganj']; ?></td>
					<td><?php echo $Confidence['saver']; ?></td>
					<td><?php echo $Confidence['mirpur']; ?></td>
					<td><?php echo $Confidence['olddhaka']; ?></td>
					<td><?php echo $Confidence['keraniganj']; ?></td>
					<td><?php echo $Confidence['uttara']; ?></td>
					<td><?php echo $Confidence['jatrabari']; ?></td>
					<td><?php echo $Confidence['munshiganj']; ?></td>
					<td><?php echo $Confidence['mymensing']; ?></td>
					<td><?php echo $Confidence['netrokona']; ?></td>
					<td><?php echo $Confidence['narayanganj']; ?></td>
					<td><?php echo $Confidence['narsingdi']; ?></td>
					<td><?php echo $Confidence['brahmanbaria']; ?></td>
					<td><?php echo $Confidence['kishoreganj']; ?></td>
					<td><?php echo $Confidence['moulvibazar']; ?></td>
					<td><?php echo $Confidence['habiganj']; ?></td>
					<td><?php echo $Confidence['sylhet']; ?></td>
					<td><?php echo $Confidence['sunamganj']; ?></td>
					<td><?php echo $Confidence['jhenaidha']; ?></td>
					<td><?php echo $Confidence['chuadanga']; ?></td>
					<td><?php echo $Confidence['kushtia']; ?></td>
					<td><?php echo $Confidence['meherpur']; ?></td>
					<td><?php echo $Confidence['jessore']; ?></td>
					<td><?php echo $Confidence['magura']; ?></td>
					<td><?php echo $Confidence['narail']; ?></td>
					<td><?php echo $Confidence['satkhira']; ?></td>
					<td><?php echo $Confidence['khulna']; ?></td>
					<td><?php echo $Confidence['bagerhat']; ?></td>
					<td><?php echo $Confidence['barisal']; ?></td>
					<td><?php echo $Confidence['pirojpur']; ?></td>
					<td><?php echo $Confidence['jhalokathi']; ?></td>
					<td><?php echo $Confidence['bhola']; ?></td>
					<td><?php echo $Confidence['patuakhali']; ?></td>
					<td><?php echo $Confidence['barguna']; ?></td>
					<td><?php echo $Confidence['gopalganj']; ?></td>
					<td><?php echo $Confidence['shariatpur']; ?></td>
					<td><?php echo $Confidence['madaripur']; ?></td>
					<td><?php echo $Confidence['faridpur']; ?></td>
					<td><?php echo $Confidence['rajbari']; ?></td>
					<td><?php echo $Confidence['corporate']; ?></td>
				</tr>
				<tr id="table2">
										<td><?php echo $Elephant['comilla']; ?></td>
					<td><?php echo $Elephant['chandpur']; ?></td>
					<td><?php echo $Elephant['lakhsmipur']; ?></td>
					<td><?php echo $Elephant['noakhali']; ?></td>
					<td><?php echo $Elephant['feni']; ?></td>
					<td><?php echo $Elephant['coxsbazar']; ?></td>
					<td><?php echo $Elephant['panchagarh']; ?></td>
					<td><?php echo $Elephant['thakurgaon']; ?></td>
					<td><?php echo $Elephant['lalmonirhat']; ?></td>
					<td><?php echo $Elephant['kurigram']; ?></td>
					<td><?php echo $Elephant['nilphamari']; ?></td>
					<td><?php echo $Elephant['dinajpur']; ?></td>
					<td><?php echo $Elephant['rangpur']; ?></td>
					<td><?php echo $Elephant['gaibandha']; ?></td>
					<td><?php echo $Elephant['joypurhat']; ?></td>
					<td><?php echo $Elephant['bogra']; ?></td>
					<td><?php echo $Elephant['sirajganj']; ?></td>
					<td><?php echo $Elephant['rajElephanti']; ?></td>
					<td><?php echo $Elephant['chapainawabganj']; ?></td>
					<td><?php echo $Elephant['naogaon']; ?></td>
					<td><?php echo $Elephant['natore']; ?></td>
					<td><?php echo $Elephant['pabna']; ?></td>
					<td><?php echo $Elephant['tangail']; ?></td>
					<td><?php echo $Elephant['jamalpur']; ?></td>
					<td><?php echo $Elephant['sherpur']; ?></td>
					<td><?php echo $Elephant['gazipur']; ?></td>
					<td><?php echo $Elephant['manikganj']; ?></td>
					<td><?php echo $Elephant['saver']; ?></td>
					<td><?php echo $Elephant['mirpur']; ?></td>
					<td><?php echo $Elephant['olddhaka']; ?></td>
					<td><?php echo $Elephant['keraniganj']; ?></td>
					<td><?php echo $Elephant['uttara']; ?></td>
					<td><?php echo $Elephant['jatrabari']; ?></td>
					<td><?php echo $Elephant['munshiganj']; ?></td>
					<td><?php echo $Elephant['mymensing']; ?></td>
					<td><?php echo $Elephant['netrokona']; ?></td>
					<td><?php echo $Elephant['narayanganj']; ?></td>
					<td><?php echo $Elephant['narsingdi']; ?></td>
					<td><?php echo $Elephant['brahmanbaria']; ?></td>
					<td><?php echo $Elephant['kishoreganj']; ?></td>
					<td><?php echo $Elephant['moulvibazar']; ?></td>
					<td><?php echo $Elephant['habiganj']; ?></td>
					<td><?php echo $Elephant['sylhet']; ?></td>
					<td><?php echo $Elephant['sunamganj']; ?></td>
					<td><?php echo $Elephant['jhenaidha']; ?></td>
					<td><?php echo $Elephant['chuadanga']; ?></td>
					<td><?php echo $Elephant['kushtia']; ?></td>
					<td><?php echo $Elephant['meherpur']; ?></td>
					<td><?php echo $Elephant['jessore']; ?></td>
					<td><?php echo $Elephant['magura']; ?></td>
					<td><?php echo $Elephant['narail']; ?></td>
					<td><?php echo $Elephant['satkhira']; ?></td>
					<td><?php echo $Elephant['khulna']; ?></td>
					<td><?php echo $Elephant['bagerhat']; ?></td>
					<td><?php echo $Elephant['barisal']; ?></td>
					<td><?php echo $Elephant['pirojpur']; ?></td>
					<td><?php echo $Elephant['jhalokathi']; ?></td>
					<td><?php echo $Elephant['bhola']; ?></td>
					<td><?php echo $Elephant['patuakhali']; ?></td>
					<td><?php echo $Elephant['barguna']; ?></td>
					<td><?php echo $Elephant['gopalganj']; ?></td>
					<td><?php echo $Elephant['shariatpur']; ?></td>
					<td><?php echo $Elephant['madaripur']; ?></td>
					<td><?php echo $Elephant['faridpur']; ?></td>
					<td><?php echo $Elephant['rajbari']; ?></td>
					<td><?php echo $Elephant['corporate']; ?></td>
				</tr>
				<tr id="table2">
										<td><?php echo $five['comilla']; ?></td>
					<td><?php echo $five['chandpur']; ?></td>
					<td><?php echo $five['lakhsmipur']; ?></td>
					<td><?php echo $five['noakhali']; ?></td>
					<td><?php echo $five['feni']; ?></td>
					<td><?php echo $five['coxsbazar']; ?></td>
					<td><?php echo $five['panchagarh']; ?></td>
					<td><?php echo $five['thakurgaon']; ?></td>
					<td><?php echo $five['lalmonirhat']; ?></td>
					<td><?php echo $five['kurigram']; ?></td>
					<td><?php echo $five['nilphamari']; ?></td>
					<td><?php echo $five['dinajpur']; ?></td>
					<td><?php echo $five['rangpur']; ?></td>
					<td><?php echo $five['gaibandha']; ?></td>
					<td><?php echo $five['joypurhat']; ?></td>
					<td><?php echo $five['bogra']; ?></td>
					<td><?php echo $five['sirajganj']; ?></td>
					<td><?php echo $five['rajfivei']; ?></td>
					<td><?php echo $five['chapainawabganj']; ?></td>
					<td><?php echo $five['naogaon']; ?></td>
					<td><?php echo $five['natore']; ?></td>
					<td><?php echo $five['pabna']; ?></td>
					<td><?php echo $five['tangail']; ?></td>
					<td><?php echo $five['jamalpur']; ?></td>
					<td><?php echo $five['sherpur']; ?></td>
					<td><?php echo $five['gazipur']; ?></td>
					<td><?php echo $five['manikganj']; ?></td>
					<td><?php echo $five['saver']; ?></td>
					<td><?php echo $five['mirpur']; ?></td>
					<td><?php echo $five['olddhaka']; ?></td>
					<td><?php echo $five['keraniganj']; ?></td>
					<td><?php echo $five['uttara']; ?></td>
					<td><?php echo $five['jatrabari']; ?></td>
					<td><?php echo $five['munshiganj']; ?></td>
					<td><?php echo $five['mymensing']; ?></td>
					<td><?php echo $five['netrokona']; ?></td>
					<td><?php echo $five['narayanganj']; ?></td>
					<td><?php echo $five['narsingdi']; ?></td>
					<td><?php echo $five['brahmanbaria']; ?></td>
					<td><?php echo $five['kishoreganj']; ?></td>
					<td><?php echo $five['moulvibazar']; ?></td>
					<td><?php echo $five['habiganj']; ?></td>
					<td><?php echo $five['sylhet']; ?></td>
					<td><?php echo $five['sunamganj']; ?></td>
					<td><?php echo $five['jhenaidha']; ?></td>
					<td><?php echo $five['chuadanga']; ?></td>
					<td><?php echo $five['kushtia']; ?></td>
					<td><?php echo $five['meherpur']; ?></td>
					<td><?php echo $five['jessore']; ?></td>
					<td><?php echo $five['magura']; ?></td>
					<td><?php echo $five['narail']; ?></td>
					<td><?php echo $five['satkhira']; ?></td>
					<td><?php echo $five['khulna']; ?></td>
					<td><?php echo $five['bagerhat']; ?></td>
					<td><?php echo $five['barisal']; ?></td>
					<td><?php echo $five['pirojpur']; ?></td>
					<td><?php echo $five['jhalokathi']; ?></td>
					<td><?php echo $five['bhola']; ?></td>
					<td><?php echo $five['patuakhali']; ?></td>
					<td><?php echo $five['barguna']; ?></td>
					<td><?php echo $five['gopalganj']; ?></td>
					<td><?php echo $five['shariatpur']; ?></td>
					<td><?php echo $five['madaripur']; ?></td>
					<td><?php echo $five['faridpur']; ?></td>
					<td><?php echo $five['rajbari']; ?></td>
					<td><?php echo $five['corporate']; ?></td>
				</tr>
				<tr id="table2">
										<td><?php echo $Anchor['comilla']; ?></td>
					<td><?php echo $Anchor['chandpur']; ?></td>
					<td><?php echo $Anchor['lakhsmipur']; ?></td>
					<td><?php echo $Anchor['noakhali']; ?></td>
					<td><?php echo $Anchor['feni']; ?></td>
					<td><?php echo $Anchor['coxsbazar']; ?></td>
					<td><?php echo $Anchor['panchagarh']; ?></td>
					<td><?php echo $Anchor['thakurgaon']; ?></td>
					<td><?php echo $Anchor['lalmonirhat']; ?></td>
					<td><?php echo $Anchor['kurigram']; ?></td>
					<td><?php echo $Anchor['nilphamari']; ?></td>
					<td><?php echo $Anchor['dinajpur']; ?></td>
					<td><?php echo $Anchor['rangpur']; ?></td>
					<td><?php echo $Anchor['gaibandha']; ?></td>
					<td><?php echo $Anchor['joypurhat']; ?></td>
					<td><?php echo $Anchor['bogra']; ?></td>
					<td><?php echo $Anchor['sirajganj']; ?></td>
					<td><?php echo $Anchor['rajAnchori']; ?></td>
					<td><?php echo $Anchor['chapainawabganj']; ?></td>
					<td><?php echo $Anchor['naogaon']; ?></td>
					<td><?php echo $Anchor['natore']; ?></td>
					<td><?php echo $Anchor['pabna']; ?></td>
					<td><?php echo $Anchor['tangail']; ?></td>
					<td><?php echo $Anchor['jamalpur']; ?></td>
					<td><?php echo $Anchor['sherpur']; ?></td>
					<td><?php echo $Anchor['gazipur']; ?></td>
					<td><?php echo $Anchor['manikganj']; ?></td>
					<td><?php echo $Anchor['saver']; ?></td>
					<td><?php echo $Anchor['mirpur']; ?></td>
					<td><?php echo $Anchor['olddhaka']; ?></td>
					<td><?php echo $Anchor['keraniganj']; ?></td>
					<td><?php echo $Anchor['uttara']; ?></td>
					<td><?php echo $Anchor['jatrabari']; ?></td>
					<td><?php echo $Anchor['munshiganj']; ?></td>
					<td><?php echo $Anchor['mymensing']; ?></td>
					<td><?php echo $Anchor['netrokona']; ?></td>
					<td><?php echo $Anchor['narayanganj']; ?></td>
					<td><?php echo $Anchor['narsingdi']; ?></td>
					<td><?php echo $Anchor['brahmanbaria']; ?></td>
					<td><?php echo $Anchor['kishoreganj']; ?></td>
					<td><?php echo $Anchor['moulvibazar']; ?></td>
					<td><?php echo $Anchor['habiganj']; ?></td>
					<td><?php echo $Anchor['sylhet']; ?></td>
					<td><?php echo $Anchor['sunamganj']; ?></td>
					<td><?php echo $Anchor['jhenaidha']; ?></td>
					<td><?php echo $Anchor['chuadanga']; ?></td>
					<td><?php echo $Anchor['kushtia']; ?></td>
					<td><?php echo $Anchor['meherpur']; ?></td>
					<td><?php echo $Anchor['jessore']; ?></td>
					<td><?php echo $Anchor['magura']; ?></td>
					<td><?php echo $Anchor['narail']; ?></td>
					<td><?php echo $Anchor['satkhira']; ?></td>
					<td><?php echo $Anchor['khulna']; ?></td>
					<td><?php echo $Anchor['bagerhat']; ?></td>
					<td><?php echo $Anchor['barisal']; ?></td>
					<td><?php echo $Anchor['pirojpur']; ?></td>
					<td><?php echo $Anchor['jhalokathi']; ?></td>
					<td><?php echo $Anchor['bhola']; ?></td>
					<td><?php echo $Anchor['patuakhali']; ?></td>
					<td><?php echo $Anchor['barguna']; ?></td>
					<td><?php echo $Anchor['gopalganj']; ?></td>
					<td><?php echo $Anchor['shariatpur']; ?></td>
					<td><?php echo $Anchor['madaripur']; ?></td>
					<td><?php echo $Anchor['faridpur']; ?></td>
					<td><?php echo $Anchor['rajbari']; ?></td>
					<td><?php echo $Anchor['corporate']; ?></td>
				</tr>
				<tr id="table2">
										<td><?php echo $Akij['comilla']; ?></td>
					<td><?php echo $Akij['chandpur']; ?></td>
					<td><?php echo $Akij['lakhsmipur']; ?></td>
					<td><?php echo $Akij['noakhali']; ?></td>
					<td><?php echo $Akij['feni']; ?></td>
					<td><?php echo $Akij['coxsbazar']; ?></td>
					<td><?php echo $Akij['panchagarh']; ?></td>
					<td><?php echo $Akij['thakurgaon']; ?></td>
					<td><?php echo $Akij['lalmonirhat']; ?></td>
					<td><?php echo $Akij['kurigram']; ?></td>
					<td><?php echo $Akij['nilphamari']; ?></td>
					<td><?php echo $Akij['dinajpur']; ?></td>
					<td><?php echo $Akij['rangpur']; ?></td>
					<td><?php echo $Akij['gaibandha']; ?></td>
					<td><?php echo $Akij['joypurhat']; ?></td>
					<td><?php echo $Akij['bogra']; ?></td>
					<td><?php echo $Akij['sirajganj']; ?></td>
					<td><?php echo $Akij['rajAkiji']; ?></td>
					<td><?php echo $Akij['chapainawabganj']; ?></td>
					<td><?php echo $Akij['naogaon']; ?></td>
					<td><?php echo $Akij['natore']; ?></td>
					<td><?php echo $Akij['pabna']; ?></td>
					<td><?php echo $Akij['tangail']; ?></td>
					<td><?php echo $Akij['jamalpur']; ?></td>
					<td><?php echo $Akij['sherpur']; ?></td>
					<td><?php echo $Akij['gazipur']; ?></td>
					<td><?php echo $Akij['manikganj']; ?></td>
					<td><?php echo $Akij['saver']; ?></td>
					<td><?php echo $Akij['mirpur']; ?></td>
					<td><?php echo $Akij['olddhaka']; ?></td>
					<td><?php echo $Akij['keraniganj']; ?></td>
					<td><?php echo $Akij['uttara']; ?></td>
					<td><?php echo $Akij['jatrabari']; ?></td>
					<td><?php echo $Akij['munshiganj']; ?></td>
					<td><?php echo $Akij['mymensing']; ?></td>
					<td><?php echo $Akij['netrokona']; ?></td>
					<td><?php echo $Akij['narayanganj']; ?></td>
					<td><?php echo $Akij['narsingdi']; ?></td>
					<td><?php echo $Akij['brahmanbaria']; ?></td>
					<td><?php echo $Akij['kishoreganj']; ?></td>
					<td><?php echo $Akij['moulvibazar']; ?></td>
					<td><?php echo $Akij['habiganj']; ?></td>
					<td><?php echo $Akij['sylhet']; ?></td>
					<td><?php echo $Akij['sunamganj']; ?></td>
					<td><?php echo $Akij['jhenaidha']; ?></td>
					<td><?php echo $Akij['chuadanga']; ?></td>
					<td><?php echo $Akij['kushtia']; ?></td>
					<td><?php echo $Akij['meherpur']; ?></td>
					<td><?php echo $Akij['jessore']; ?></td>
					<td><?php echo $Akij['magura']; ?></td>
					<td><?php echo $Akij['narail']; ?></td>
					<td><?php echo $Akij['satkhira']; ?></td>
					<td><?php echo $Akij['khulna']; ?></td>
					<td><?php echo $Akij['bagerhat']; ?></td>
					<td><?php echo $Akij['barisal']; ?></td>
					<td><?php echo $Akij['pirojpur']; ?></td>
					<td><?php echo $Akij['jhalokathi']; ?></td>
					<td><?php echo $Akij['bhola']; ?></td>
					<td><?php echo $Akij['patuakhali']; ?></td>
					<td><?php echo $Akij['barguna']; ?></td>
					<td><?php echo $Akij['gopalganj']; ?></td>
					<td><?php echo $Akij['shariatpur']; ?></td>
					<td><?php echo $Akij['madaripur']; ?></td>
					<td><?php echo $Akij['faridpur']; ?></td>
					<td><?php echo $Akij['rajbari']; ?></td>
					<td><?php echo $Akij['corporate']; ?></td>
				</tr>
				<tr id="table2">
										<td><?php echo $Ultratech['comilla']; ?></td>
					<td><?php echo $Ultratech['chandpur']; ?></td>
					<td><?php echo $Ultratech['lakhsmipur']; ?></td>
					<td><?php echo $Ultratech['noakhali']; ?></td>
					<td><?php echo $Ultratech['feni']; ?></td>
					<td><?php echo $Ultratech['coxsbazar']; ?></td>
					<td><?php echo $Ultratech['panchagarh']; ?></td>
					<td><?php echo $Ultratech['thakurgaon']; ?></td>
					<td><?php echo $Ultratech['lalmonirhat']; ?></td>
					<td><?php echo $Ultratech['kurigram']; ?></td>
					<td><?php echo $Ultratech['nilphamari']; ?></td>
					<td><?php echo $Ultratech['dinajpur']; ?></td>
					<td><?php echo $Ultratech['rangpur']; ?></td>
					<td><?php echo $Ultratech['gaibandha']; ?></td>
					<td><?php echo $Ultratech['joypurhat']; ?></td>
					<td><?php echo $Ultratech['bogra']; ?></td>
					<td><?php echo $Ultratech['sirajganj']; ?></td>
					<td><?php echo $Ultratech['rajUltratechi']; ?></td>
					<td><?php echo $Ultratech['chapainawabganj']; ?></td>
					<td><?php echo $Ultratech['naogaon']; ?></td>
					<td><?php echo $Ultratech['natore']; ?></td>
					<td><?php echo $Ultratech['pabna']; ?></td>
					<td><?php echo $Ultratech['tangail']; ?></td>
					<td><?php echo $Ultratech['jamalpur']; ?></td>
					<td><?php echo $Ultratech['sherpur']; ?></td>
					<td><?php echo $Ultratech['gazipur']; ?></td>
					<td><?php echo $Ultratech['manikganj']; ?></td>
					<td><?php echo $Ultratech['saver']; ?></td>
					<td><?php echo $Ultratech['mirpur']; ?></td>
					<td><?php echo $Ultratech['olddhaka']; ?></td>
					<td><?php echo $Ultratech['keraniganj']; ?></td>
					<td><?php echo $Ultratech['uttara']; ?></td>
					<td><?php echo $Ultratech['jatrabari']; ?></td>
					<td><?php echo $Ultratech['munshiganj']; ?></td>
					<td><?php echo $Ultratech['mymensing']; ?></td>
					<td><?php echo $Ultratech['netrokona']; ?></td>
					<td><?php echo $Ultratech['narayanganj']; ?></td>
					<td><?php echo $Ultratech['narsingdi']; ?></td>
					<td><?php echo $Ultratech['brahmanbaria']; ?></td>
					<td><?php echo $Ultratech['kishoreganj']; ?></td>
					<td><?php echo $Ultratech['moulvibazar']; ?></td>
					<td><?php echo $Ultratech['habiganj']; ?></td>
					<td><?php echo $Ultratech['sylhet']; ?></td>
					<td><?php echo $Ultratech['sunamganj']; ?></td>
					<td><?php echo $Ultratech['jhenaidha']; ?></td>
					<td><?php echo $Ultratech['chuadanga']; ?></td>
					<td><?php echo $Ultratech['kushtia']; ?></td>
					<td><?php echo $Ultratech['meherpur']; ?></td>
					<td><?php echo $Ultratech['jessore']; ?></td>
					<td><?php echo $Ultratech['magura']; ?></td>
					<td><?php echo $Ultratech['narail']; ?></td>
					<td><?php echo $Ultratech['satkhira']; ?></td>
					<td><?php echo $Ultratech['khulna']; ?></td>
					<td><?php echo $Ultratech['bagerhat']; ?></td>
					<td><?php echo $Ultratech['barisal']; ?></td>
					<td><?php echo $Ultratech['pirojpur']; ?></td>
					<td><?php echo $Ultratech['jhalokathi']; ?></td>
					<td><?php echo $Ultratech['bhola']; ?></td>
					<td><?php echo $Ultratech['patuakhali']; ?></td>
					<td><?php echo $Ultratech['barguna']; ?></td>
					<td><?php echo $Ultratech['gopalganj']; ?></td>
					<td><?php echo $Ultratech['shariatpur']; ?></td>
					<td><?php echo $Ultratech['madaripur']; ?></td>
					<td><?php echo $Ultratech['faridpur']; ?></td>
					<td><?php echo $Ultratech['rajbari']; ?></td>
					<td><?php echo $Ultratech['corporate']; ?></td>
				</tr>
				<tr id="table2">
										<td><?php echo $sh['comilla']; ?></td>
					<td><?php echo $sh['chandpur']; ?></td>
					<td><?php echo $sh['lakhsmipur']; ?></td>
					<td><?php echo $sh['noakhali']; ?></td>
					<td><?php echo $sh['feni']; ?></td>
					<td><?php echo $sh['coxsbazar']; ?></td>
					<td><?php echo $sh['panchagarh']; ?></td>
					<td><?php echo $sh['thakurgaon']; ?></td>
					<td><?php echo $sh['lalmonirhat']; ?></td>
					<td><?php echo $sh['kurigram']; ?></td>
					<td><?php echo $sh['nilphamari']; ?></td>
					<td><?php echo $sh['dinajpur']; ?></td>
					<td><?php echo $sh['rangpur']; ?></td>
					<td><?php echo $sh['gaibandha']; ?></td>
					<td><?php echo $sh['joypurhat']; ?></td>
					<td><?php echo $sh['bogra']; ?></td>
					<td><?php echo $sh['sirajganj']; ?></td>
					<td><?php echo $sh['rajshi']; ?></td>
					<td><?php echo $sh['chapainawabganj']; ?></td>
					<td><?php echo $sh['naogaon']; ?></td>
					<td><?php echo $sh['natore']; ?></td>
					<td><?php echo $sh['pabna']; ?></td>
					<td><?php echo $sh['tangail']; ?></td>
					<td><?php echo $sh['jamalpur']; ?></td>
					<td><?php echo $sh['sherpur']; ?></td>
					<td><?php echo $sh['gazipur']; ?></td>
					<td><?php echo $sh['manikganj']; ?></td>
					<td><?php echo $sh['saver']; ?></td>
					<td><?php echo $sh['mirpur']; ?></td>
					<td><?php echo $sh['olddhaka']; ?></td>
					<td><?php echo $sh['keraniganj']; ?></td>
					<td><?php echo $sh['uttara']; ?></td>
					<td><?php echo $sh['jatrabari']; ?></td>
					<td><?php echo $sh['munshiganj']; ?></td>
					<td><?php echo $sh['mymensing']; ?></td>
					<td><?php echo $sh['netrokona']; ?></td>
					<td><?php echo $sh['narayanganj']; ?></td>
					<td><?php echo $sh['narsingdi']; ?></td>
					<td><?php echo $sh['brahmanbaria']; ?></td>
					<td><?php echo $sh['kishoreganj']; ?></td>
					<td><?php echo $sh['moulvibazar']; ?></td>
					<td><?php echo $sh['habiganj']; ?></td>
					<td><?php echo $sh['sylhet']; ?></td>
					<td><?php echo $sh['sunamganj']; ?></td>
					<td><?php echo $sh['jhenaidha']; ?></td>
					<td><?php echo $sh['chuadanga']; ?></td>
					<td><?php echo $sh['kushtia']; ?></td>
					<td><?php echo $sh['meherpur']; ?></td>
					<td><?php echo $sh['jessore']; ?></td>
					<td><?php echo $sh['magura']; ?></td>
					<td><?php echo $sh['narail']; ?></td>
					<td><?php echo $sh['satkhira']; ?></td>
					<td><?php echo $sh['khulna']; ?></td>
					<td><?php echo $sh['bagerhat']; ?></td>
					<td><?php echo $sh['barisal']; ?></td>
					<td><?php echo $sh['pirojpur']; ?></td>
					<td><?php echo $sh['jhalokathi']; ?></td>
					<td><?php echo $sh['bhola']; ?></td>
					<td><?php echo $sh['patuakhali']; ?></td>
					<td><?php echo $sh['barguna']; ?></td>
					<td><?php echo $sh['gopalganj']; ?></td>
					<td><?php echo $sh['shariatpur']; ?></td>
					<td><?php echo $sh['madaripur']; ?></td>
					<td><?php echo $sh['faridpur']; ?></td>
					<td><?php echo $sh['rajbari']; ?></td>
					<td><?php echo $sh['corporate']; ?></td>
				</tr>
				<tr id="table2">
										<td><?php echo $Metrocem['comilla']; ?></td>
					<td><?php echo $Metrocem['chandpur']; ?></td>
					<td><?php echo $Metrocem['lakhsmipur']; ?></td>
					<td><?php echo $Metrocem['noakhali']; ?></td>
					<td><?php echo $Metrocem['feni']; ?></td>
					<td><?php echo $Metrocem['coxsbazar']; ?></td>
					<td><?php echo $Metrocem['panchagarh']; ?></td>
					<td><?php echo $Metrocem['thakurgaon']; ?></td>
					<td><?php echo $Metrocem['lalmonirhat']; ?></td>
					<td><?php echo $Metrocem['kurigram']; ?></td>
					<td><?php echo $Metrocem['nilphamari']; ?></td>
					<td><?php echo $Metrocem['dinajpur']; ?></td>
					<td><?php echo $Metrocem['rangpur']; ?></td>
					<td><?php echo $Metrocem['gaibandha']; ?></td>
					<td><?php echo $Metrocem['joypurhat']; ?></td>
					<td><?php echo $Metrocem['bogra']; ?></td>
					<td><?php echo $Metrocem['sirajganj']; ?></td>
					<td><?php echo $Metrocem['rajMetrocemi']; ?></td>
					<td><?php echo $Metrocem['chapainawabganj']; ?></td>
					<td><?php echo $Metrocem['naogaon']; ?></td>
					<td><?php echo $Metrocem['natore']; ?></td>
					<td><?php echo $Metrocem['pabna']; ?></td>
					<td><?php echo $Metrocem['tangail']; ?></td>
					<td><?php echo $Metrocem['jamalpur']; ?></td>
					<td><?php echo $Metrocem['Metrocemerpur']; ?></td>
					<td><?php echo $Metrocem['gazipur']; ?></td>
					<td><?php echo $Metrocem['manikganj']; ?></td>
					<td><?php echo $Metrocem['saver']; ?></td>
					<td><?php echo $Metrocem['mirpur']; ?></td>
					<td><?php echo $Metrocem['olddhaka']; ?></td>
					<td><?php echo $Metrocem['keraniganj']; ?></td>
					<td><?php echo $Metrocem['uttara']; ?></td>
					<td><?php echo $Metrocem['jatrabari']; ?></td>
					<td><?php echo $Metrocem['munMetrocemiganj']; ?></td>
					<td><?php echo $Metrocem['mymensing']; ?></td>
					<td><?php echo $Metrocem['netrokona']; ?></td>
					<td><?php echo $Metrocem['narayanganj']; ?></td>
					<td><?php echo $Metrocem['narsingdi']; ?></td>
					<td><?php echo $Metrocem['brahmanbaria']; ?></td>
					<td><?php echo $Metrocem['kiMetrocemoreganj']; ?></td>
					<td><?php echo $Metrocem['moulvibazar']; ?></td>
					<td><?php echo $Metrocem['habiganj']; ?></td>
					<td><?php echo $Metrocem['sylhet']; ?></td>
					<td><?php echo $Metrocem['sunamganj']; ?></td>
					<td><?php echo $Metrocem['jhenaidha']; ?></td>
					<td><?php echo $Metrocem['chuadanga']; ?></td>
					<td><?php echo $Metrocem['kuMetrocemtia']; ?></td>
					<td><?php echo $Metrocem['meherpur']; ?></td>
					<td><?php echo $Metrocem['jessore']; ?></td>
					<td><?php echo $Metrocem['magura']; ?></td>
					<td><?php echo $Metrocem['narail']; ?></td>
					<td><?php echo $Metrocem['satkhira']; ?></td>
					<td><?php echo $Metrocem['khulna']; ?></td>
					<td><?php echo $Metrocem['bagerhat']; ?></td>
					<td><?php echo $Metrocem['barisal']; ?></td>
					<td><?php echo $Metrocem['pirojpur']; ?></td>
					<td><?php echo $Metrocem['jhalokathi']; ?></td>
					<td><?php echo $Metrocem['bhola']; ?></td>
					<td><?php echo $Metrocem['patuakhali']; ?></td>
					<td><?php echo $Metrocem['barguna']; ?></td>
					<td><?php echo $Metrocem['gopalganj']; ?></td>
					<td><?php echo $Metrocem['Metrocemariatpur']; ?></td>
					<td><?php echo $Metrocem['madaripur']; ?></td>
					<td><?php echo $Metrocem['faridpur']; ?></td>
					<td><?php echo $Metrocem['rajbari']; ?></td>
					<td><?php echo $Metrocem['corporate']; ?></td>
				</tr>
				<tr id="table2">
										<td><?php echo $Ince['comilla']; ?></td>
					<td><?php echo $Ince['chandpur']; ?></td>
					<td><?php echo $Ince['lakhsmipur']; ?></td>
					<td><?php echo $Ince['noakhali']; ?></td>
					<td><?php echo $Ince['feni']; ?></td>
					<td><?php echo $Ince['coxsbazar']; ?></td>
					<td><?php echo $Ince['panchagarh']; ?></td>
					<td><?php echo $Ince['thakurgaon']; ?></td>
					<td><?php echo $Ince['lalmonirhat']; ?></td>
					<td><?php echo $Ince['kurigram']; ?></td>
					<td><?php echo $Ince['nilphamari']; ?></td>
					<td><?php echo $Ince['dinajpur']; ?></td>
					<td><?php echo $Ince['rangpur']; ?></td>
					<td><?php echo $Ince['gaibandha']; ?></td>
					<td><?php echo $Ince['joypurhat']; ?></td>
					<td><?php echo $Ince['bogra']; ?></td>
					<td><?php echo $Ince['sirajganj']; ?></td>
					<td><?php echo $Ince['rajIncei']; ?></td>
					<td><?php echo $Ince['chapainawabganj']; ?></td>
					<td><?php echo $Ince['naogaon']; ?></td>
					<td><?php echo $Ince['natore']; ?></td>
					<td><?php echo $Ince['pabna']; ?></td>
					<td><?php echo $Ince['tangail']; ?></td>
					<td><?php echo $Ince['jamalpur']; ?></td>
					<td><?php echo $Ince['Inceerpur']; ?></td>
					<td><?php echo $Ince['gazipur']; ?></td>
					<td><?php echo $Ince['manikganj']; ?></td>
					<td><?php echo $Ince['saver']; ?></td>
					<td><?php echo $Ince['mirpur']; ?></td>
					<td><?php echo $Ince['olddhaka']; ?></td>
					<td><?php echo $Ince['keraniganj']; ?></td>
					<td><?php echo $Ince['uttara']; ?></td>
					<td><?php echo $Ince['jatrabari']; ?></td>
					<td><?php echo $Ince['munInceiganj']; ?></td>
					<td><?php echo $Ince['mymensing']; ?></td>
					<td><?php echo $Ince['netrokona']; ?></td>
					<td><?php echo $Ince['narayanganj']; ?></td>
					<td><?php echo $Ince['narsingdi']; ?></td>
					<td><?php echo $Ince['brahmanbaria']; ?></td>
					<td><?php echo $Ince['kiInceoreganj']; ?></td>
					<td><?php echo $Ince['moulvibazar']; ?></td>
					<td><?php echo $Ince['habiganj']; ?></td>
					<td><?php echo $Ince['sylhet']; ?></td>
					<td><?php echo $Ince['sunamganj']; ?></td>
					<td><?php echo $Ince['jhenaidha']; ?></td>
					<td><?php echo $Ince['chuadanga']; ?></td>
					<td><?php echo $Ince['kuIncetia']; ?></td>
					<td><?php echo $Ince['meherpur']; ?></td>
					<td><?php echo $Ince['jessore']; ?></td>
					<td><?php echo $Ince['magura']; ?></td>
					<td><?php echo $Ince['narail']; ?></td>
					<td><?php echo $Ince['satkhira']; ?></td>
					<td><?php echo $Ince['khulna']; ?></td>
					<td><?php echo $Ince['bagerhat']; ?></td>
					<td><?php echo $Ince['barisal']; ?></td>
					<td><?php echo $Ince['pirojpur']; ?></td>
					<td><?php echo $Ince['jhalokathi']; ?></td>
					<td><?php echo $Ince['bhola']; ?></td>
					<td><?php echo $Ince['patuakhali']; ?></td>
					<td><?php echo $Ince['barguna']; ?></td>
					<td><?php echo $Ince['gopalganj']; ?></td>
					<td><?php echo $Ince['Inceariatpur']; ?></td>
					<td><?php echo $Ince['madaripur']; ?></td>
					<td><?php echo $Ince['faridpur']; ?></td>
					<td><?php echo $Ince['rajbari']; ?></td>
					<td><?php echo $Ince['corporate']; ?></td>
				</tr>
				<tr id="table2">
										<td><?php echo $Diamond['comilla']; ?></td>
					<td><?php echo $Diamond['chandpur']; ?></td>
					<td><?php echo $Diamond['lakhsmipur']; ?></td>
					<td><?php echo $Diamond['noakhali']; ?></td>
					<td><?php echo $Diamond['feni']; ?></td>
					<td><?php echo $Diamond['coxsbazar']; ?></td>
					<td><?php echo $Diamond['panchagarh']; ?></td>
					<td><?php echo $Diamond['thakurgaon']; ?></td>
					<td><?php echo $Diamond['lalmonirhat']; ?></td>
					<td><?php echo $Diamond['kurigram']; ?></td>
					<td><?php echo $Diamond['nilphamari']; ?></td>
					<td><?php echo $Diamond['dinajpur']; ?></td>
					<td><?php echo $Diamond['rangpur']; ?></td>
					<td><?php echo $Diamond['gaibandha']; ?></td>
					<td><?php echo $Diamond['joypurhat']; ?></td>
					<td><?php echo $Diamond['bogra']; ?></td>
					<td><?php echo $Diamond['sirajganj']; ?></td>
					<td><?php echo $Diamond['rajDiamondi']; ?></td>
					<td><?php echo $Diamond['chapainawabganj']; ?></td>
					<td><?php echo $Diamond['naogaon']; ?></td>
					<td><?php echo $Diamond['natore']; ?></td>
					<td><?php echo $Diamond['pabna']; ?></td>
					<td><?php echo $Diamond['tangail']; ?></td>
					<td><?php echo $Diamond['jamalpur']; ?></td>
					<td><?php echo $Diamond['Diamonderpur']; ?></td>
					<td><?php echo $Diamond['gazipur']; ?></td>
					<td><?php echo $Diamond['manikganj']; ?></td>
					<td><?php echo $Diamond['saver']; ?></td>
					<td><?php echo $Diamond['mirpur']; ?></td>
					<td><?php echo $Diamond['olddhaka']; ?></td>
					<td><?php echo $Diamond['keraniganj']; ?></td>
					<td><?php echo $Diamond['uttara']; ?></td>
					<td><?php echo $Diamond['jatrabari']; ?></td>
					<td><?php echo $Diamond['munDiamondiganj']; ?></td>
					<td><?php echo $Diamond['mymensing']; ?></td>
					<td><?php echo $Diamond['netrokona']; ?></td>
					<td><?php echo $Diamond['narayanganj']; ?></td>
					<td><?php echo $Diamond['narsingdi']; ?></td>
					<td><?php echo $Diamond['brahmanbaria']; ?></td>
					<td><?php echo $Diamond['kiDiamondoreganj']; ?></td>
					<td><?php echo $Diamond['moulvibazar']; ?></td>
					<td><?php echo $Diamond['habiganj']; ?></td>
					<td><?php echo $Diamond['sylhet']; ?></td>
					<td><?php echo $Diamond['sunamganj']; ?></td>
					<td><?php echo $Diamond['jhenaidha']; ?></td>
					<td><?php echo $Diamond['chuadanga']; ?></td>
					<td><?php echo $Diamond['kuDiamondtia']; ?></td>
					<td><?php echo $Diamond['meherpur']; ?></td>
					<td><?php echo $Diamond['jessore']; ?></td>
					<td><?php echo $Diamond['magura']; ?></td>
					<td><?php echo $Diamond['narail']; ?></td>
					<td><?php echo $Diamond['satkhira']; ?></td>
					<td><?php echo $Diamond['khulna']; ?></td>
					<td><?php echo $Diamond['bagerhat']; ?></td>
					<td><?php echo $Diamond['barisal']; ?></td>
					<td><?php echo $Diamond['pirojpur']; ?></td>
					<td><?php echo $Diamond['jhalokathi']; ?></td>
					<td><?php echo $Diamond['bhola']; ?></td>
					<td><?php echo $Diamond['patuakhali']; ?></td>
					<td><?php echo $Diamond['barguna']; ?></td>
					<td><?php echo $Diamond['gopalganj']; ?></td>
					<td><?php echo $Diamond['Diamondariatpur']; ?></td>
					<td><?php echo $Diamond['madaripur']; ?></td>
					<td><?php echo $Diamond['faridpur']; ?></td>
					<td><?php echo $Diamond['rajbari']; ?></td>
					<td><?php echo $Diamond['corporate']; ?></td>
				</tr>
				<tr id="table2">
										<td><?php echo $Anwar['comilla']; ?></td>
					<td><?php echo $Anwar['chandpur']; ?></td>
					<td><?php echo $Anwar['lakhsmipur']; ?></td>
					<td><?php echo $Anwar['noakhali']; ?></td>
					<td><?php echo $Anwar['feni']; ?></td>
					<td><?php echo $Anwar['coxsbazar']; ?></td>
					<td><?php echo $Anwar['panchagarh']; ?></td>
					<td><?php echo $Anwar['thakurgaon']; ?></td>
					<td><?php echo $Anwar['lalmonirhat']; ?></td>
					<td><?php echo $Anwar['kurigram']; ?></td>
					<td><?php echo $Anwar['nilphamari']; ?></td>
					<td><?php echo $Anwar['dinajpur']; ?></td>
					<td><?php echo $Anwar['rangpur']; ?></td>
					<td><?php echo $Anwar['gaibandha']; ?></td>
					<td><?php echo $Anwar['joypurhat']; ?></td>
					<td><?php echo $Anwar['bogra']; ?></td>
					<td><?php echo $Anwar['sirajganj']; ?></td>
					<td><?php echo $Anwar['rajAnwari']; ?></td>
					<td><?php echo $Anwar['chapainawabganj']; ?></td>
					<td><?php echo $Anwar['naogaon']; ?></td>
					<td><?php echo $Anwar['natore']; ?></td>
					<td><?php echo $Anwar['pabna']; ?></td>
					<td><?php echo $Anwar['tangail']; ?></td>
					<td><?php echo $Anwar['jamalpur']; ?></td>
					<td><?php echo $Anwar['Anwarerpur']; ?></td>
					<td><?php echo $Anwar['gazipur']; ?></td>
					<td><?php echo $Anwar['manikganj']; ?></td>
					<td><?php echo $Anwar['saver']; ?></td>
					<td><?php echo $Anwar['mirpur']; ?></td>
					<td><?php echo $Anwar['olddhaka']; ?></td>
					<td><?php echo $Anwar['keraniganj']; ?></td>
					<td><?php echo $Anwar['uttara']; ?></td>
					<td><?php echo $Anwar['jatrabari']; ?></td>
					<td><?php echo $Anwar['munAnwariganj']; ?></td>
					<td><?php echo $Anwar['mymensing']; ?></td>
					<td><?php echo $Anwar['netrokona']; ?></td>
					<td><?php echo $Anwar['narayanganj']; ?></td>
					<td><?php echo $Anwar['narsingdi']; ?></td>
					<td><?php echo $Anwar['brahmanbaria']; ?></td>
					<td><?php echo $Anwar['kiAnwaroreganj']; ?></td>
					<td><?php echo $Anwar['moulvibazar']; ?></td>
					<td><?php echo $Anwar['habiganj']; ?></td>
					<td><?php echo $Anwar['sylhet']; ?></td>
					<td><?php echo $Anwar['sunamganj']; ?></td>
					<td><?php echo $Anwar['jhenaidha']; ?></td>
					<td><?php echo $Anwar['chuadanga']; ?></td>
					<td><?php echo $Anwar['kuAnwartia']; ?></td>
					<td><?php echo $Anwar['meherpur']; ?></td>
					<td><?php echo $Anwar['jessore']; ?></td>
					<td><?php echo $Anwar['magura']; ?></td>
					<td><?php echo $Anwar['narail']; ?></td>
					<td><?php echo $Anwar['satkhira']; ?></td>
					<td><?php echo $Anwar['khulna']; ?></td>
					<td><?php echo $Anwar['bagerhat']; ?></td>
					<td><?php echo $Anwar['barisal']; ?></td>
					<td><?php echo $Anwar['pirojpur']; ?></td>
					<td><?php echo $Anwar['jhalokathi']; ?></td>
					<td><?php echo $Anwar['bhola']; ?></td>
					<td><?php echo $Anwar['patuakhali']; ?></td>
					<td><?php echo $Anwar['barguna']; ?></td>
					<td><?php echo $Anwar['gopalganj']; ?></td>
					<td><?php echo $Anwar['Anwarariatpur']; ?></td>
					<td><?php echo $Anwar['madaripur']; ?></td>
					<td><?php echo $Anwar['faridpur']; ?></td>
					<td><?php echo $Anwar['rajbari']; ?></td>
					<td><?php echo $Anwar['corporate']; ?></td>
				</tr>
				<tr id="table2">
										<td><?php echo $Mir['comilla']; ?></td>
					<td><?php echo $Mir['chandpur']; ?></td>
					<td><?php echo $Mir['lakhsmipur']; ?></td>
					<td><?php echo $Mir['noakhali']; ?></td>
					<td><?php echo $Mir['feni']; ?></td>
					<td><?php echo $Mir['coxsbazar']; ?></td>
					<td><?php echo $Mir['panchagarh']; ?></td>
					<td><?php echo $Mir['thakurgaon']; ?></td>
					<td><?php echo $Mir['lalmonirhat']; ?></td>
					<td><?php echo $Mir['kurigram']; ?></td>
					<td><?php echo $Mir['nilphamari']; ?></td>
					<td><?php echo $Mir['dinajpur']; ?></td>
					<td><?php echo $Mir['rangpur']; ?></td>
					<td><?php echo $Mir['gaibandha']; ?></td>
					<td><?php echo $Mir['joypurhat']; ?></td>
					<td><?php echo $Mir['bogra']; ?></td>
					<td><?php echo $Mir['sirajganj']; ?></td>
					<td><?php echo $Mir['rajMiri']; ?></td>
					<td><?php echo $Mir['chapainawabganj']; ?></td>
					<td><?php echo $Mir['naogaon']; ?></td>
					<td><?php echo $Mir['natore']; ?></td>
					<td><?php echo $Mir['pabna']; ?></td>
					<td><?php echo $Mir['tangail']; ?></td>
					<td><?php echo $Mir['jamalpur']; ?></td>
					<td><?php echo $Mir['Mirerpur']; ?></td>
					<td><?php echo $Mir['gazipur']; ?></td>
					<td><?php echo $Mir['manikganj']; ?></td>
					<td><?php echo $Mir['saver']; ?></td>
					<td><?php echo $Mir['mirpur']; ?></td>
					<td><?php echo $Mir['olddhaka']; ?></td>
					<td><?php echo $Mir['keraniganj']; ?></td>
					<td><?php echo $Mir['uttara']; ?></td>
					<td><?php echo $Mir['jatrabari']; ?></td>
					<td><?php echo $Mir['munMiriganj']; ?></td>
					<td><?php echo $Mir['mymensing']; ?></td>
					<td><?php echo $Mir['netrokona']; ?></td>
					<td><?php echo $Mir['narayanganj']; ?></td>
					<td><?php echo $Mir['narsingdi']; ?></td>
					<td><?php echo $Mir['brahmanbaria']; ?></td>
					<td><?php echo $Mir['kiMiroreganj']; ?></td>
					<td><?php echo $Mir['moulvibazar']; ?></td>
					<td><?php echo $Mir['habiganj']; ?></td>
					<td><?php echo $Mir['sylhet']; ?></td>
					<td><?php echo $Mir['sunamganj']; ?></td>
					<td><?php echo $Mir['jhenaidha']; ?></td>
					<td><?php echo $Mir['chuadanga']; ?></td>
					<td><?php echo $Mir['kuMirtia']; ?></td>
					<td><?php echo $Mir['meherpur']; ?></td>
					<td><?php echo $Mir['jessore']; ?></td>
					<td><?php echo $Mir['magura']; ?></td>
					<td><?php echo $Mir['narail']; ?></td>
					<td><?php echo $Mir['satkhira']; ?></td>
					<td><?php echo $Mir['khulna']; ?></td>
					<td><?php echo $Mir['bagerhat']; ?></td>
					<td><?php echo $Mir['barisal']; ?></td>
					<td><?php echo $Mir['pirojpur']; ?></td>
					<td><?php echo $Mir['jhalokathi']; ?></td>
					<td><?php echo $Mir['bhola']; ?></td>
					<td><?php echo $Mir['patuakhali']; ?></td>
					<td><?php echo $Mir['barguna']; ?></td>
					<td><?php echo $Mir['gopalganj']; ?></td>
					<td><?php echo $Mir['Mirariatpur']; ?></td>
					<td><?php echo $Mir['madaripur']; ?></td>
					<td><?php echo $Mir['faridpur']; ?></td>
					<td><?php echo $Mir['rajbari']; ?></td>
					<td><?php echo $Mir['corporate']; ?></td>
				</tr>
				<tr id="table2">
										<td><?php echo $sa['comilla']; ?></td>
					<td><?php echo $sa['chandpur']; ?></td>
					<td><?php echo $sa['lakhsmipur']; ?></td>
					<td><?php echo $sa['noakhali']; ?></td>
					<td><?php echo $sa['feni']; ?></td>
					<td><?php echo $sa['coxsbazar']; ?></td>
					<td><?php echo $sa['panchagarh']; ?></td>
					<td><?php echo $sa['thakurgaon']; ?></td>
					<td><?php echo $sa['lalmonirhat']; ?></td>
					<td><?php echo $sa['kurigram']; ?></td>
					<td><?php echo $sa['nilphamari']; ?></td>
					<td><?php echo $sa['dinajpur']; ?></td>
					<td><?php echo $sa['rangpur']; ?></td>
					<td><?php echo $sa['gaibandha']; ?></td>
					<td><?php echo $sa['joypurhat']; ?></td>
					<td><?php echo $sa['bogra']; ?></td>
					<td><?php echo $sa['sirajganj']; ?></td>
					<td><?php echo $sa['rajsai']; ?></td>
					<td><?php echo $sa['chapainawabganj']; ?></td>
					<td><?php echo $sa['naogaon']; ?></td>
					<td><?php echo $sa['natore']; ?></td>
					<td><?php echo $sa['pabna']; ?></td>
					<td><?php echo $sa['tangail']; ?></td>
					<td><?php echo $sa['jamalpur']; ?></td>
					<td><?php echo $sa['saerpur']; ?></td>
					<td><?php echo $sa['gazipur']; ?></td>
					<td><?php echo $sa['manikganj']; ?></td>
					<td><?php echo $sa['saver']; ?></td>
					<td><?php echo $sa['sapur']; ?></td>
					<td><?php echo $sa['olddhaka']; ?></td>
					<td><?php echo $sa['keraniganj']; ?></td>
					<td><?php echo $sa['uttara']; ?></td>
					<td><?php echo $sa['jatrabari']; ?></td>
					<td><?php echo $sa['munsaiganj']; ?></td>
					<td><?php echo $sa['mymensing']; ?></td>
					<td><?php echo $sa['netrokona']; ?></td>
					<td><?php echo $sa['narayanganj']; ?></td>
					<td><?php echo $sa['narsingdi']; ?></td>
					<td><?php echo $sa['brahmanbaria']; ?></td>
					<td><?php echo $sa['kisaoreganj']; ?></td>
					<td><?php echo $sa['moulvibazar']; ?></td>
					<td><?php echo $sa['habiganj']; ?></td>
					<td><?php echo $sa['sylhet']; ?></td>
					<td><?php echo $sa['sunamganj']; ?></td>
					<td><?php echo $sa['jhenaidha']; ?></td>
					<td><?php echo $sa['chuadanga']; ?></td>
					<td><?php echo $sa['kusatia']; ?></td>
					<td><?php echo $sa['meherpur']; ?></td>
					<td><?php echo $sa['jessore']; ?></td>
					<td><?php echo $sa['magura']; ?></td>
					<td><?php echo $sa['narail']; ?></td>
					<td><?php echo $sa['satkhira']; ?></td>
					<td><?php echo $sa['khulna']; ?></td>
					<td><?php echo $sa['bagerhat']; ?></td>
					<td><?php echo $sa['barisal']; ?></td>
					<td><?php echo $sa['pirojpur']; ?></td>
					<td><?php echo $sa['jhalokathi']; ?></td>
					<td><?php echo $sa['bhola']; ?></td>
					<td><?php echo $sa['patuakhali']; ?></td>
					<td><?php echo $sa['barguna']; ?></td>
					<td><?php echo $sa['gopalganj']; ?></td>
					<td><?php echo $sa['saariatpur']; ?></td>
					<td><?php echo $sa['madaripur']; ?></td>
					<td><?php echo $sa['faridpur']; ?></td>
					<td><?php echo $sa['rajbari']; ?></td>
					<td><?php echo $sa['corporate']; ?></td>
				</tr>
				<tr id="table2">
										<td><?php echo $Aramit['comilla']; ?></td>
					<td><?php echo $Aramit['chandpur']; ?></td>
					<td><?php echo $Aramit['lakhsmipur']; ?></td>
					<td><?php echo $Aramit['noakhali']; ?></td>
					<td><?php echo $Aramit['feni']; ?></td>
					<td><?php echo $Aramit['coxsbazar']; ?></td>
					<td><?php echo $Aramit['panchagarh']; ?></td>
					<td><?php echo $Aramit['thakurgaon']; ?></td>
					<td><?php echo $Aramit['lalmonirhat']; ?></td>
					<td><?php echo $Aramit['kurigram']; ?></td>
					<td><?php echo $Aramit['nilphamari']; ?></td>
					<td><?php echo $Aramit['dinajpur']; ?></td>
					<td><?php echo $Aramit['rangpur']; ?></td>
					<td><?php echo $Aramit['gaibandha']; ?></td>
					<td><?php echo $Aramit['joypurhat']; ?></td>
					<td><?php echo $Aramit['bogra']; ?></td>
					<td><?php echo $Aramit['sirajganj']; ?></td>
					<td><?php echo $Aramit['rajAramiti']; ?></td>
					<td><?php echo $Aramit['chapainawabganj']; ?></td>
					<td><?php echo $Aramit['naogaon']; ?></td>
					<td><?php echo $Aramit['natore']; ?></td>
					<td><?php echo $Aramit['pabna']; ?></td>
					<td><?php echo $Aramit['tangail']; ?></td>
					<td><?php echo $Aramit['jamalpur']; ?></td>
					<td><?php echo $Aramit['Aramiterpur']; ?></td>
					<td><?php echo $Aramit['gazipur']; ?></td>
					<td><?php echo $Aramit['manikganj']; ?></td>
					<td><?php echo $Aramit['Aramitver']; ?></td>
					<td><?php echo $Aramit['Aramitpur']; ?></td>
					<td><?php echo $Aramit['olddhaka']; ?></td>
					<td><?php echo $Aramit['keraniganj']; ?></td>
					<td><?php echo $Aramit['uttara']; ?></td>
					<td><?php echo $Aramit['jatrabari']; ?></td>
					<td><?php echo $Aramit['munAramitiganj']; ?></td>
					<td><?php echo $Aramit['mymensing']; ?></td>
					<td><?php echo $Aramit['netrokona']; ?></td>
					<td><?php echo $Aramit['narayanganj']; ?></td>
					<td><?php echo $Aramit['narsingdi']; ?></td>
					<td><?php echo $Aramit['brahmanbaria']; ?></td>
					<td><?php echo $Aramit['kiAramitoreganj']; ?></td>
					<td><?php echo $Aramit['moulvibazar']; ?></td>
					<td><?php echo $Aramit['habiganj']; ?></td>
					<td><?php echo $Aramit['sylhet']; ?></td>
					<td><?php echo $Aramit['sunamganj']; ?></td>
					<td><?php echo $Aramit['jhenaidha']; ?></td>
					<td><?php echo $Aramit['chuadanga']; ?></td>
					<td><?php echo $Aramit['kuAramittia']; ?></td>
					<td><?php echo $Aramit['meherpur']; ?></td>
					<td><?php echo $Aramit['jessore']; ?></td>
					<td><?php echo $Aramit['magura']; ?></td>
					<td><?php echo $Aramit['narail']; ?></td>
					<td><?php echo $Aramit['Aramittkhira']; ?></td>
					<td><?php echo $Aramit['khulna']; ?></td>
					<td><?php echo $Aramit['bagerhat']; ?></td>
					<td><?php echo $Aramit['bariAramitl']; ?></td>
					<td><?php echo $Aramit['pirojpur']; ?></td>
					<td><?php echo $Aramit['jhalokathi']; ?></td>
					<td><?php echo $Aramit['bhola']; ?></td>
					<td><?php echo $Aramit['patuakhali']; ?></td>
					<td><?php echo $Aramit['barguna']; ?></td>
					<td><?php echo $Aramit['gopalganj']; ?></td>
					<td><?php echo $Aramit['Aramitariatpur']; ?></td>
					<td><?php echo $Aramit['madaripur']; ?></td>
					<td><?php echo $Aramit['faridpur']; ?></td>
					<td><?php echo $Aramit['rajbari']; ?></td>
					<td><?php echo $Aramit['corporate']; ?></td>
				</tr>
				<tr id="table2">
										<td><?php echo $Hakim['comilla']; ?></td>
					<td><?php echo $Hakim['chandpur']; ?></td>
					<td><?php echo $Hakim['lakhsmipur']; ?></td>
					<td><?php echo $Hakim['noakhali']; ?></td>
					<td><?php echo $Hakim['feni']; ?></td>
					<td><?php echo $Hakim['coxsbazar']; ?></td>
					<td><?php echo $Hakim['panchagarh']; ?></td>
					<td><?php echo $Hakim['thakurgaon']; ?></td>
					<td><?php echo $Hakim['lalmonirhat']; ?></td>
					<td><?php echo $Hakim['kurigram']; ?></td>
					<td><?php echo $Hakim['nilphamari']; ?></td>
					<td><?php echo $Hakim['dinajpur']; ?></td>
					<td><?php echo $Hakim['rangpur']; ?></td>
					<td><?php echo $Hakim['gaibandha']; ?></td>
					<td><?php echo $Hakim['joypurhat']; ?></td>
					<td><?php echo $Hakim['bogra']; ?></td>
					<td><?php echo $Hakim['sirajganj']; ?></td>
					<td><?php echo $Hakim['rajHakimi']; ?></td>
					<td><?php echo $Hakim['chapainawabganj']; ?></td>
					<td><?php echo $Hakim['naogaon']; ?></td>
					<td><?php echo $Hakim['natore']; ?></td>
					<td><?php echo $Hakim['pabna']; ?></td>
					<td><?php echo $Hakim['tangail']; ?></td>
					<td><?php echo $Hakim['jamalpur']; ?></td>
					<td><?php echo $Hakim['Hakimerpur']; ?></td>
					<td><?php echo $Hakim['gazipur']; ?></td>
					<td><?php echo $Hakim['manikganj']; ?></td>
					<td><?php echo $Hakim['Hakimver']; ?></td>
					<td><?php echo $Hakim['Hakimpur']; ?></td>
					<td><?php echo $Hakim['olddhaka']; ?></td>
					<td><?php echo $Hakim['keraniganj']; ?></td>
					<td><?php echo $Hakim['uttara']; ?></td>
					<td><?php echo $Hakim['jatrabari']; ?></td>
					<td><?php echo $Hakim['munHakimiganj']; ?></td>
					<td><?php echo $Hakim['mymensing']; ?></td>
					<td><?php echo $Hakim['netrokona']; ?></td>
					<td><?php echo $Hakim['narayanganj']; ?></td>
					<td><?php echo $Hakim['narsingdi']; ?></td>
					<td><?php echo $Hakim['brahmanbaria']; ?></td>
					<td><?php echo $Hakim['kiHakimoreganj']; ?></td>
					<td><?php echo $Hakim['moulvibazar']; ?></td>
					<td><?php echo $Hakim['habiganj']; ?></td>
					<td><?php echo $Hakim['sylhet']; ?></td>
					<td><?php echo $Hakim['sunamganj']; ?></td>
					<td><?php echo $Hakim['jhenaidha']; ?></td>
					<td><?php echo $Hakim['chuadanga']; ?></td>
					<td><?php echo $Hakim['kuHakimtia']; ?></td>
					<td><?php echo $Hakim['meherpur']; ?></td>
					<td><?php echo $Hakim['jessore']; ?></td>
					<td><?php echo $Hakim['magura']; ?></td>
					<td><?php echo $Hakim['narail']; ?></td>
					<td><?php echo $Hakim['Hakimtkhira']; ?></td>
					<td><?php echo $Hakim['khulna']; ?></td>
					<td><?php echo $Hakim['bagerhat']; ?></td>
					<td><?php echo $Hakim['bariHakiml']; ?></td>
					<td><?php echo $Hakim['pirojpur']; ?></td>
					<td><?php echo $Hakim['jhalokathi']; ?></td>
					<td><?php echo $Hakim['bhola']; ?></td>
					<td><?php echo $Hakim['patuakhali']; ?></td>
					<td><?php echo $Hakim['barguna']; ?></td>
					<td><?php echo $Hakim['gopalganj']; ?></td>
					<td><?php echo $Hakim['Hakimariatpur']; ?></td>
					<td><?php echo $Hakim['madaripur']; ?></td>
					<td><?php echo $Hakim['faridpur']; ?></td>
					<td><?php echo $Hakim['rajbari']; ?></td>
					<td><?php echo $Hakim['corporate']; ?></td>
				</tr>
				<tr id="table2">
										<td><?php echo $NGS['comilla']; ?></td>
					<td><?php echo $NGS['chandpur']; ?></td>
					<td><?php echo $NGS['lakhsmipur']; ?></td>
					<td><?php echo $NGS['noakhali']; ?></td>
					<td><?php echo $NGS['feni']; ?></td>
					<td><?php echo $NGS['coxsbazar']; ?></td>
					<td><?php echo $NGS['panchagarh']; ?></td>
					<td><?php echo $NGS['thakurgaon']; ?></td>
					<td><?php echo $NGS['lalmonirhat']; ?></td>
					<td><?php echo $NGS['kurigram']; ?></td>
					<td><?php echo $NGS['nilphamari']; ?></td>
					<td><?php echo $NGS['dinajpur']; ?></td>
					<td><?php echo $NGS['rangpur']; ?></td>
					<td><?php echo $NGS['gaibandha']; ?></td>
					<td><?php echo $NGS['joypurhat']; ?></td>
					<td><?php echo $NGS['bogra']; ?></td>
					<td><?php echo $NGS['sirajganj']; ?></td>
					<td><?php echo $NGS['rajNGSi']; ?></td>
					<td><?php echo $NGS['chapainawabganj']; ?></td>
					<td><?php echo $NGS['naogaon']; ?></td>
					<td><?php echo $NGS['natore']; ?></td>
					<td><?php echo $NGS['pabna']; ?></td>
					<td><?php echo $NGS['tangail']; ?></td>
					<td><?php echo $NGS['jamalpur']; ?></td>
					<td><?php echo $NGS['NGSerpur']; ?></td>
					<td><?php echo $NGS['gazipur']; ?></td>
					<td><?php echo $NGS['manikganj']; ?></td>
					<td><?php echo $NGS['NGSver']; ?></td>
					<td><?php echo $NGS['NGSpur']; ?></td>
					<td><?php echo $NGS['olddhaka']; ?></td>
					<td><?php echo $NGS['keraniganj']; ?></td>
					<td><?php echo $NGS['uttara']; ?></td>
					<td><?php echo $NGS['jatrabari']; ?></td>
					<td><?php echo $NGS['munNGSiganj']; ?></td>
					<td><?php echo $NGS['mymensing']; ?></td>
					<td><?php echo $NGS['netrokona']; ?></td>
					<td><?php echo $NGS['narayanganj']; ?></td>
					<td><?php echo $NGS['narsingdi']; ?></td>
					<td><?php echo $NGS['brahmanbaria']; ?></td>
					<td><?php echo $NGS['kiNGSoreganj']; ?></td>
					<td><?php echo $NGS['moulvibazar']; ?></td>
					<td><?php echo $NGS['habiganj']; ?></td>
					<td><?php echo $NGS['sylhet']; ?></td>
					<td><?php echo $NGS['sunamganj']; ?></td>
					<td><?php echo $NGS['jhenaidha']; ?></td>
					<td><?php echo $NGS['chuadanga']; ?></td>
					<td><?php echo $NGS['kuNGStia']; ?></td>
					<td><?php echo $NGS['meherpur']; ?></td>
					<td><?php echo $NGS['jessore']; ?></td>
					<td><?php echo $NGS['magura']; ?></td>
					<td><?php echo $NGS['narail']; ?></td>
					<td><?php echo $NGS['NGStkhira']; ?></td>
					<td><?php echo $NGS['khulna']; ?></td>
					<td><?php echo $NGS['bagerhat']; ?></td>
					<td><?php echo $NGS['bariNGSl']; ?></td>
					<td><?php echo $NGS['pirojpur']; ?></td>
					<td><?php echo $NGS['jhalokathi']; ?></td>
					<td><?php echo $NGS['bhola']; ?></td>
					<td><?php echo $NGS['patuakhali']; ?></td>
					<td><?php echo $NGS['barguna']; ?></td>
					<td><?php echo $NGS['gopalganj']; ?></td>
					<td><?php echo $NGS['NGSariatpur']; ?></td>
					<td><?php echo $NGS['madaripur']; ?></td>
					<td><?php echo $NGS['faridpur']; ?></td>
					<td><?php echo $NGS['rajbari']; ?></td>
					<td><?php echo $NGS['corporate']; ?></td>
				</tr>
				<tr id="table2">
										<td><?php echo $Chattak['comilla']; ?></td>
					<td><?php echo $Chattak['chandpur']; ?></td>
					<td><?php echo $Chattak['lakhsmipur']; ?></td>
					<td><?php echo $Chattak['noakhali']; ?></td>
					<td><?php echo $Chattak['feni']; ?></td>
					<td><?php echo $Chattak['coxsbazar']; ?></td>
					<td><?php echo $Chattak['panchagarh']; ?></td>
					<td><?php echo $Chattak['thakurgaon']; ?></td>
					<td><?php echo $Chattak['lalmonirhat']; ?></td>
					<td><?php echo $Chattak['kurigram']; ?></td>
					<td><?php echo $Chattak['nilphamari']; ?></td>
					<td><?php echo $Chattak['dinajpur']; ?></td>
					<td><?php echo $Chattak['rangpur']; ?></td>
					<td><?php echo $Chattak['gaibandha']; ?></td>
					<td><?php echo $Chattak['joypurhat']; ?></td>
					<td><?php echo $Chattak['bogra']; ?></td>
					<td><?php echo $Chattak['sirajganj']; ?></td>
					<td><?php echo $Chattak['rajChattaki']; ?></td>
					<td><?php echo $Chattak['chapainawabganj']; ?></td>
					<td><?php echo $Chattak['naogaon']; ?></td>
					<td><?php echo $Chattak['natore']; ?></td>
					<td><?php echo $Chattak['pabna']; ?></td>
					<td><?php echo $Chattak['tangail']; ?></td>
					<td><?php echo $Chattak['jamalpur']; ?></td>
					<td><?php echo $Chattak['Chattakerpur']; ?></td>
					<td><?php echo $Chattak['gazipur']; ?></td>
					<td><?php echo $Chattak['manikganj']; ?></td>
					<td><?php echo $Chattak['Chattakver']; ?></td>
					<td><?php echo $Chattak['Chattakpur']; ?></td>
					<td><?php echo $Chattak['olddhaka']; ?></td>
					<td><?php echo $Chattak['keraniganj']; ?></td>
					<td><?php echo $Chattak['uttara']; ?></td>
					<td><?php echo $Chattak['jatrabari']; ?></td>
					<td><?php echo $Chattak['munChattakiganj']; ?></td>
					<td><?php echo $Chattak['mymensing']; ?></td>
					<td><?php echo $Chattak['netrokona']; ?></td>
					<td><?php echo $Chattak['narayanganj']; ?></td>
					<td><?php echo $Chattak['narsingdi']; ?></td>
					<td><?php echo $Chattak['brahmanbaria']; ?></td>
					<td><?php echo $Chattak['kiChattakoreganj']; ?></td>
					<td><?php echo $Chattak['moulvibazar']; ?></td>
					<td><?php echo $Chattak['habiganj']; ?></td>
					<td><?php echo $Chattak['sylhet']; ?></td>
					<td><?php echo $Chattak['sunamganj']; ?></td>
					<td><?php echo $Chattak['jhenaidha']; ?></td>
					<td><?php echo $Chattak['chuadanga']; ?></td>
					<td><?php echo $Chattak['kuChattaktia']; ?></td>
					<td><?php echo $Chattak['meherpur']; ?></td>
					<td><?php echo $Chattak['jessore']; ?></td>
					<td><?php echo $Chattak['magura']; ?></td>
					<td><?php echo $Chattak['narail']; ?></td>
					<td><?php echo $Chattak['Chattaktkhira']; ?></td>
					<td><?php echo $Chattak['khulna']; ?></td>
					<td><?php echo $Chattak['bagerhat']; ?></td>
					<td><?php echo $Chattak['bariChattakl']; ?></td>
					<td><?php echo $Chattak['pirojpur']; ?></td>
					<td><?php echo $Chattak['jhalokathi']; ?></td>
					<td><?php echo $Chattak['bhola']; ?></td>
					<td><?php echo $Chattak['patuakhali']; ?></td>
					<td><?php echo $Chattak['barguna']; ?></td>
					<td><?php echo $Chattak['gopalganj']; ?></td>
					<td><?php echo $Chattak['Chattakariatpur']; ?></td>
					<td><?php echo $Chattak['madaripur']; ?></td>
					<td><?php echo $Chattak['faridpur']; ?></td>
					<td><?php echo $Chattak['rajbari']; ?></td>
					<td><?php echo $Chattak['corporate']; ?></td>
				</tr>
				<tr id="table2">
										<td><?php echo $Noapara['comilla']; ?></td>
					<td><?php echo $Noapara['chandpur']; ?></td>
					<td><?php echo $Noapara['lakhsmipur']; ?></td>
					<td><?php echo $Noapara['noakhali']; ?></td>
					<td><?php echo $Noapara['feni']; ?></td>
					<td><?php echo $Noapara['coxsbazar']; ?></td>
					<td><?php echo $Noapara['panchagarh']; ?></td>
					<td><?php echo $Noapara['thakurgaon']; ?></td>
					<td><?php echo $Noapara['lalmonirhat']; ?></td>
					<td><?php echo $Noapara['kurigram']; ?></td>
					<td><?php echo $Noapara['nilphamari']; ?></td>
					<td><?php echo $Noapara['dinajpur']; ?></td>
					<td><?php echo $Noapara['rangpur']; ?></td>
					<td><?php echo $Noapara['gaibandha']; ?></td>
					<td><?php echo $Noapara['joypurhat']; ?></td>
					<td><?php echo $Noapara['bogra']; ?></td>
					<td><?php echo $Noapara['sirajganj']; ?></td>
					<td><?php echo $Noapara['rajNoaparai']; ?></td>
					<td><?php echo $Noapara['chapainawabganj']; ?></td>
					<td><?php echo $Noapara['naogaon']; ?></td>
					<td><?php echo $Noapara['natore']; ?></td>
					<td><?php echo $Noapara['pabna']; ?></td>
					<td><?php echo $Noapara['tangail']; ?></td>
					<td><?php echo $Noapara['jamalpur']; ?></td>
					<td><?php echo $Noapara['Noaparaerpur']; ?></td>
					<td><?php echo $Noapara['gazipur']; ?></td>
					<td><?php echo $Noapara['manikganj']; ?></td>
					<td><?php echo $Noapara['Noaparaver']; ?></td>
					<td><?php echo $Noapara['Noaparapur']; ?></td>
					<td><?php echo $Noapara['olddhaka']; ?></td>
					<td><?php echo $Noapara['keraniganj']; ?></td>
					<td><?php echo $Noapara['uttara']; ?></td>
					<td><?php echo $Noapara['jatrabari']; ?></td>
					<td><?php echo $Noapara['munNoaparaiganj']; ?></td>
					<td><?php echo $Noapara['mymensing']; ?></td>
					<td><?php echo $Noapara['netrokona']; ?></td>
					<td><?php echo $Noapara['narayanganj']; ?></td>
					<td><?php echo $Noapara['narsingdi']; ?></td>
					<td><?php echo $Noapara['brahmanbaria']; ?></td>
					<td><?php echo $Noapara['kiNoaparaoreganj']; ?></td>
					<td><?php echo $Noapara['moulvibazar']; ?></td>
					<td><?php echo $Noapara['habiganj']; ?></td>
					<td><?php echo $Noapara['sylhet']; ?></td>
					<td><?php echo $Noapara['sunamganj']; ?></td>
					<td><?php echo $Noapara['jhenaidha']; ?></td>
					<td><?php echo $Noapara['chuadanga']; ?></td>
					<td><?php echo $Noapara['kuNoaparatia']; ?></td>
					<td><?php echo $Noapara['meherpur']; ?></td>
					<td><?php echo $Noapara['jessore']; ?></td>
					<td><?php echo $Noapara['magura']; ?></td>
					<td><?php echo $Noapara['narail']; ?></td>
					<td><?php echo $Noapara['Noaparatkhira']; ?></td>
					<td><?php echo $Noapara['khulna']; ?></td>
					<td><?php echo $Noapara['bagerhat']; ?></td>
					<td><?php echo $Noapara['bariNoaparal']; ?></td>
					<td><?php echo $Noapara['pirojpur']; ?></td>
					<td><?php echo $Noapara['jhalokathi']; ?></td>
					<td><?php echo $Noapara['bhola']; ?></td>
					<td><?php echo $Noapara['patuakhali']; ?></td>
					<td><?php echo $Noapara['barguna']; ?></td>
					<td><?php echo $Noapara['gopalganj']; ?></td>
					<td><?php echo $Noapara['Noaparaariatpur']; ?></td>
					<td><?php echo $Noapara['madaripur']; ?></td>
					<td><?php echo $Noapara['faridpur']; ?></td>
					<td><?php echo $Noapara['rajbari']; ?></td>
					<td><?php echo $Noapara['corporate']; ?></td>
				</tr>
				<tr id="table2">
										<td><?php echo $Deshbandhu['comilla']; ?></td>
					<td><?php echo $Deshbandhu['chandpur']; ?></td>
					<td><?php echo $Deshbandhu['lakhsmipur']; ?></td>
					<td><?php echo $Deshbandhu['noakhali']; ?></td>
					<td><?php echo $Deshbandhu['feni']; ?></td>
					<td><?php echo $Deshbandhu['coxsbazar']; ?></td>
					<td><?php echo $Deshbandhu['panchagarh']; ?></td>
					<td><?php echo $Deshbandhu['thakurgaon']; ?></td>
					<td><?php echo $Deshbandhu['lalmonirhat']; ?></td>
					<td><?php echo $Deshbandhu['kurigram']; ?></td>
					<td><?php echo $Deshbandhu['nilphamari']; ?></td>
					<td><?php echo $Deshbandhu['dinajpur']; ?></td>
					<td><?php echo $Deshbandhu['rangpur']; ?></td>
					<td><?php echo $Deshbandhu['gaibandha']; ?></td>
					<td><?php echo $Deshbandhu['joypurhat']; ?></td>
					<td><?php echo $Deshbandhu['bogra']; ?></td>
					<td><?php echo $Deshbandhu['sirajganj']; ?></td>
					<td><?php echo $Deshbandhu['rajDeshbandhui']; ?></td>
					<td><?php echo $Deshbandhu['chapainawabganj']; ?></td>
					<td><?php echo $Deshbandhu['naogaon']; ?></td>
					<td><?php echo $Deshbandhu['natore']; ?></td>
					<td><?php echo $Deshbandhu['pabna']; ?></td>
					<td><?php echo $Deshbandhu['tangail']; ?></td>
					<td><?php echo $Deshbandhu['jamalpur']; ?></td>
					<td><?php echo $Deshbandhu['Deshbandhuerpur']; ?></td>
					<td><?php echo $Deshbandhu['gazipur']; ?></td>
					<td><?php echo $Deshbandhu['manikganj']; ?></td>
					<td><?php echo $Deshbandhu['Deshbandhuver']; ?></td>
					<td><?php echo $Deshbandhu['Deshbandhupur']; ?></td>
					<td><?php echo $Deshbandhu['olddhaka']; ?></td>
					<td><?php echo $Deshbandhu['keraniganj']; ?></td>
					<td><?php echo $Deshbandhu['uttara']; ?></td>
					<td><?php echo $Deshbandhu['jatrabari']; ?></td>
					<td><?php echo $Deshbandhu['munDeshbandhuiganj']; ?></td>
					<td><?php echo $Deshbandhu['mymensing']; ?></td>
					<td><?php echo $Deshbandhu['netrokona']; ?></td>
					<td><?php echo $Deshbandhu['narayanganj']; ?></td>
					<td><?php echo $Deshbandhu['narsingdi']; ?></td>
					<td><?php echo $Deshbandhu['brahmanbaria']; ?></td>
					<td><?php echo $Deshbandhu['kiDeshbandhuoreganj']; ?></td>
					<td><?php echo $Deshbandhu['moulvibazar']; ?></td>
					<td><?php echo $Deshbandhu['habiganj']; ?></td>
					<td><?php echo $Deshbandhu['sylhet']; ?></td>
					<td><?php echo $Deshbandhu['sunamganj']; ?></td>
					<td><?php echo $Deshbandhu['jhenaidha']; ?></td>
					<td><?php echo $Deshbandhu['chuadanga']; ?></td>
					<td><?php echo $Deshbandhu['kuDeshbandhutia']; ?></td>
					<td><?php echo $Deshbandhu['meherpur']; ?></td>
					<td><?php echo $Deshbandhu['jessore']; ?></td>
					<td><?php echo $Deshbandhu['magura']; ?></td>
					<td><?php echo $Deshbandhu['narail']; ?></td>
					<td><?php echo $Deshbandhu['Deshbandhutkhira']; ?></td>
					<td><?php echo $Deshbandhu['khulna']; ?></td>
					<td><?php echo $Deshbandhu['bagerhat']; ?></td>
					<td><?php echo $Deshbandhu['bariDeshbandhul']; ?></td>
					<td><?php echo $Deshbandhu['pirojpur']; ?></td>
					<td><?php echo $Deshbandhu['jhalokathi']; ?></td>
					<td><?php echo $Deshbandhu['bhola']; ?></td>
					<td><?php echo $Deshbandhu['patuakhali']; ?></td>
					<td><?php echo $Deshbandhu['barguna']; ?></td>
					<td><?php echo $Deshbandhu['gopalganj']; ?></td>
					<td><?php echo $Deshbandhu['Deshbandhuariatpur']; ?></td>
					<td><?php echo $Deshbandhu['madaripur']; ?></td>
					<td><?php echo $Deshbandhu['faridpur']; ?></td>
					<td><?php echo $Deshbandhu['rajbari']; ?></td>
					<td><?php echo $Deshbandhu['corporate']; ?></td>
				</tr>
				<tr id="table2">
										<td><?php echo $Holcim['comilla']; ?></td>
					<td><?php echo $Holcim['chandpur']; ?></td>
					<td><?php echo $Holcim['lakhsmipur']; ?></td>
					<td><?php echo $Holcim['noakhali']; ?></td>
					<td><?php echo $Holcim['feni']; ?></td>
					<td><?php echo $Holcim['coxsbazar']; ?></td>
					<td><?php echo $Holcim['panchagarh']; ?></td>
					<td><?php echo $Holcim['thakurgaon']; ?></td>
					<td><?php echo $Holcim['lalmonirhat']; ?></td>
					<td><?php echo $Holcim['kurigram']; ?></td>
					<td><?php echo $Holcim['nilphamari']; ?></td>
					<td><?php echo $Holcim['dinajpur']; ?></td>
					<td><?php echo $Holcim['rangpur']; ?></td>
					<td><?php echo $Holcim['gaibandha']; ?></td>
					<td><?php echo $Holcim['joypurhat']; ?></td>
					<td><?php echo $Holcim['bogra']; ?></td>
					<td><?php echo $Holcim['sirajganj']; ?></td>
					<td><?php echo $Holcim['rajHolcimi']; ?></td>
					<td><?php echo $Holcim['chapainawabganj']; ?></td>
					<td><?php echo $Holcim['naogaon']; ?></td>
					<td><?php echo $Holcim['natore']; ?></td>
					<td><?php echo $Holcim['pabna']; ?></td>
					<td><?php echo $Holcim['tangail']; ?></td>
					<td><?php echo $Holcim['jamalpur']; ?></td>
					<td><?php echo $Holcim['Holcimerpur']; ?></td>
					<td><?php echo $Holcim['gazipur']; ?></td>
					<td><?php echo $Holcim['manikganj']; ?></td>
					<td><?php echo $Holcim['Holcimver']; ?></td>
					<td><?php echo $Holcim['Holcimpur']; ?></td>
					<td><?php echo $Holcim['olddhaka']; ?></td>
					<td><?php echo $Holcim['keraniganj']; ?></td>
					<td><?php echo $Holcim['uttara']; ?></td>
					<td><?php echo $Holcim['jatrabari']; ?></td>
					<td><?php echo $Holcim['munHolcimiganj']; ?></td>
					<td><?php echo $Holcim['mymensing']; ?></td>
					<td><?php echo $Holcim['netrokona']; ?></td>
					<td><?php echo $Holcim['narayanganj']; ?></td>
					<td><?php echo $Holcim['narsingdi']; ?></td>
					<td><?php echo $Holcim['brahmanbaria']; ?></td>
					<td><?php echo $Holcim['kiHolcimoreganj']; ?></td>
					<td><?php echo $Holcim['moulvibazar']; ?></td>
					<td><?php echo $Holcim['habiganj']; ?></td>
					<td><?php echo $Holcim['sylhet']; ?></td>
					<td><?php echo $Holcim['sunamganj']; ?></td>
					<td><?php echo $Holcim['jhenaidha']; ?></td>
					<td><?php echo $Holcim['chuadanga']; ?></td>
					<td><?php echo $Holcim['kuHolcimtia']; ?></td>
					<td><?php echo $Holcim['meherpur']; ?></td>
					<td><?php echo $Holcim['jessore']; ?></td>
					<td><?php echo $Holcim['magura']; ?></td>
					<td><?php echo $Holcim['narail']; ?></td>
					<td><?php echo $Holcim['Holcimtkhira']; ?></td>
					<td><?php echo $Holcim['khulna']; ?></td>
					<td><?php echo $Holcim['bagerhat']; ?></td>
					<td><?php echo $Holcim['bariHolciml']; ?></td>
					<td><?php echo $Holcim['pirojpur']; ?></td>
					<td><?php echo $Holcim['jhalokathi']; ?></td>
					<td><?php echo $Holcim['bhola']; ?></td>
					<td><?php echo $Holcim['patuakhali']; ?></td>
					<td><?php echo $Holcim['barguna']; ?></td>
					<td><?php echo $Holcim['gopalganj']; ?></td>
					<td><?php echo $Holcim['Holcimariatpur']; ?></td>
					<td><?php echo $Holcim['madaripur']; ?></td>
					<td><?php echo $Holcim['faridpur']; ?></td>
					<td><?php echo $Holcim['rajbari']; ?></td>
					<td><?php echo $Holcim['corporate']; ?></td>
				</tr>
				<tr id="table2">
										<td><?php echo $bt['comilla']; ?></td>
					<td><?php echo $bt['chandpur']; ?></td>
					<td><?php echo $bt['lakhsmipur']; ?></td>
					<td><?php echo $bt['noakhali']; ?></td>
					<td><?php echo $bt['feni']; ?></td>
					<td><?php echo $bt['coxsbazar']; ?></td>
					<td><?php echo $bt['panchagarh']; ?></td>
					<td><?php echo $bt['thakurgaon']; ?></td>
					<td><?php echo $bt['lalmonirhat']; ?></td>
					<td><?php echo $bt['kurigram']; ?></td>
					<td><?php echo $bt['nilphamari']; ?></td>
					<td><?php echo $bt['dinajpur']; ?></td>
					<td><?php echo $bt['rangpur']; ?></td>
					<td><?php echo $bt['gaibandha']; ?></td>
					<td><?php echo $bt['joypurhat']; ?></td>
					<td><?php echo $bt['bogra']; ?></td>
					<td><?php echo $bt['sirajganj']; ?></td>
					<td><?php echo $bt['rajbti']; ?></td>
					<td><?php echo $bt['chapainawabganj']; ?></td>
					<td><?php echo $bt['naogaon']; ?></td>
					<td><?php echo $bt['natore']; ?></td>
					<td><?php echo $bt['pabna']; ?></td>
					<td><?php echo $bt['tangail']; ?></td>
					<td><?php echo $bt['jamalpur']; ?></td>
					<td><?php echo $bt['bterpur']; ?></td>
					<td><?php echo $bt['gazipur']; ?></td>
					<td><?php echo $bt['manikganj']; ?></td>
					<td><?php echo $bt['btver']; ?></td>
					<td><?php echo $bt['btpur']; ?></td>
					<td><?php echo $bt['olddhaka']; ?></td>
					<td><?php echo $bt['keraniganj']; ?></td>
					<td><?php echo $bt['uttara']; ?></td>
					<td><?php echo $bt['jatrabari']; ?></td>
					<td><?php echo $bt['munbtiganj']; ?></td>
					<td><?php echo $bt['mymensing']; ?></td>
					<td><?php echo $bt['netrokona']; ?></td>
					<td><?php echo $bt['narayanganj']; ?></td>
					<td><?php echo $bt['narsingdi']; ?></td>
					<td><?php echo $bt['brahmanbaria']; ?></td>
					<td><?php echo $bt['kibtoreganj']; ?></td>
					<td><?php echo $bt['moulvibazar']; ?></td>
					<td><?php echo $bt['habiganj']; ?></td>
					<td><?php echo $bt['sylhet']; ?></td>
					<td><?php echo $bt['sunamganj']; ?></td>
					<td><?php echo $bt['jhenaidha']; ?></td>
					<td><?php echo $bt['chuadanga']; ?></td>
					<td><?php echo $bt['kubttia']; ?></td>
					<td><?php echo $bt['meherpur']; ?></td>
					<td><?php echo $bt['jessore']; ?></td>
					<td><?php echo $bt['magura']; ?></td>
					<td><?php echo $bt['narail']; ?></td>
					<td><?php echo $bt['bttkhira']; ?></td>
					<td><?php echo $bt['khulna']; ?></td>
					<td><?php echo $bt['bagerhat']; ?></td>
					<td><?php echo $bt['baribtl']; ?></td>
					<td><?php echo $bt['pirojpur']; ?></td>
					<td><?php echo $bt['jhalokathi']; ?></td>
					<td><?php echo $bt['bhola']; ?></td>
					<td><?php echo $bt['patuakhali']; ?></td>
					<td><?php echo $bt['barguna']; ?></td>
					<td><?php echo $bt['gopalganj']; ?></td>
					<td><?php echo $bt['btariatpur']; ?></td>
					<td><?php echo $bt['madaripur']; ?></td>
					<td><?php echo $bt['faridpur']; ?></td>
					<td><?php echo $bt['rajbari']; ?></td>
					<td><?php echo $bt['corporate']; ?></td>
				</tr>
				<tr id="table2">
										<td><?php echo $Ayanpur['comilla']; ?></td>
					<td><?php echo $Ayanpur['chandpur']; ?></td>
					<td><?php echo $Ayanpur['lakhsmipur']; ?></td>
					<td><?php echo $Ayanpur['noakhali']; ?></td>
					<td><?php echo $Ayanpur['feni']; ?></td>
					<td><?php echo $Ayanpur['coxsbazar']; ?></td>
					<td><?php echo $Ayanpur['panchagarh']; ?></td>
					<td><?php echo $Ayanpur['thakurgaon']; ?></td>
					<td><?php echo $Ayanpur['lalmonirhat']; ?></td>
					<td><?php echo $Ayanpur['kurigram']; ?></td>
					<td><?php echo $Ayanpur['nilphamari']; ?></td>
					<td><?php echo $Ayanpur['dinajpur']; ?></td>
					<td><?php echo $Ayanpur['rangpur']; ?></td>
					<td><?php echo $Ayanpur['gaibandha']; ?></td>
					<td><?php echo $Ayanpur['joypurhat']; ?></td>
					<td><?php echo $Ayanpur['bogra']; ?></td>
					<td><?php echo $Ayanpur['sirajganj']; ?></td>
					<td><?php echo $Ayanpur['rajAyanpuri']; ?></td>
					<td><?php echo $Ayanpur['chapainawabganj']; ?></td>
					<td><?php echo $Ayanpur['naogaon']; ?></td>
					<td><?php echo $Ayanpur['natore']; ?></td>
					<td><?php echo $Ayanpur['pabna']; ?></td>
					<td><?php echo $Ayanpur['tangail']; ?></td>
					<td><?php echo $Ayanpur['jamalpur']; ?></td>
					<td><?php echo $Ayanpur['Ayanpurerpur']; ?></td>
					<td><?php echo $Ayanpur['gazipur']; ?></td>
					<td><?php echo $Ayanpur['manikganj']; ?></td>
					<td><?php echo $Ayanpur['Ayanpurver']; ?></td>
					<td><?php echo $Ayanpur['Ayanpurpur']; ?></td>
					<td><?php echo $Ayanpur['olddhaka']; ?></td>
					<td><?php echo $Ayanpur['keraniganj']; ?></td>
					<td><?php echo $Ayanpur['uttara']; ?></td>
					<td><?php echo $Ayanpur['jatrabari']; ?></td>
					<td><?php echo $Ayanpur['munAyanpuriganj']; ?></td>
					<td><?php echo $Ayanpur['mymensing']; ?></td>
					<td><?php echo $Ayanpur['netrokona']; ?></td>
					<td><?php echo $Ayanpur['narayanganj']; ?></td>
					<td><?php echo $Ayanpur['narsingdi']; ?></td>
					<td><?php echo $Ayanpur['brahmanbaria']; ?></td>
					<td><?php echo $Ayanpur['kiAyanpuroreganj']; ?></td>
					<td><?php echo $Ayanpur['moulvibazar']; ?></td>
					<td><?php echo $Ayanpur['habiganj']; ?></td>
					<td><?php echo $Ayanpur['sylhet']; ?></td>
					<td><?php echo $Ayanpur['sunamganj']; ?></td>
					<td><?php echo $Ayanpur['jhenaidha']; ?></td>
					<td><?php echo $Ayanpur['chuadanga']; ?></td>
					<td><?php echo $Ayanpur['kuAyanpurtia']; ?></td>
					<td><?php echo $Ayanpur['meherpur']; ?></td>
					<td><?php echo $Ayanpur['jessore']; ?></td>
					<td><?php echo $Ayanpur['magura']; ?></td>
					<td><?php echo $Ayanpur['narail']; ?></td>
					<td><?php echo $Ayanpur['Ayanpurtkhira']; ?></td>
					<td><?php echo $Ayanpur['khulna']; ?></td>
					<td><?php echo $Ayanpur['bagerhat']; ?></td>
					<td><?php echo $Ayanpur['bariAyanpurl']; ?></td>
					<td><?php echo $Ayanpur['pirojpur']; ?></td>
					<td><?php echo $Ayanpur['jhalokathi']; ?></td>
					<td><?php echo $Ayanpur['bhola']; ?></td>
					<td><?php echo $Ayanpur['patuakhali']; ?></td>
					<td><?php echo $Ayanpur['barguna']; ?></td>
					<td><?php echo $Ayanpur['gopalganj']; ?></td>
					<td><?php echo $Ayanpur['Ayanpurariatpur']; ?></td>
					<td><?php echo $Ayanpur['madaripur']; ?></td>
					<td><?php echo $Ayanpur['faridpur']; ?></td>
					<td><?php echo $Ayanpur['rajbari']; ?></td>
					<td><?php echo $Ayanpur['corporate']; ?></td>
				</tr>
				</table>
				</div>
			</div>
			</div>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br>

<?php include 'admin_inc/footer.php'?>
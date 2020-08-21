<?php
session_start();
?>
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
		  <li><a href="userview.php">View</a> 
		  
          </li>
              
            <!--</ul>
          </li>-->
        </ul>
        <!-- ################################################################################################ -->
      </nav>
	 <div class="bgded overlay">
	  <center><h1><u>Total List</u></h1>
	  <h2><?php $name=$_POST['dist']; 
	  echo $name; 
	  ?>
	  </h2>
	  </center>
	  </br>
	  
	  <table border="1 px solid white">
			<form method="post" action="update.php" >
				<tr>
					<th>SI_No</th>
					<th>Types</th>
					<th>Name of Organization</th>
					<th>Name</th>
					<th>Designation</th>
					<th>Contact</th>
					<th>Email</th>
					<th>Office</th>
					<th>Thana</th>
					<th>Remarks</th>
				</tr>
<?php
	//session_start();
	include "dbconnect.php";
	$name=$_POST['dist'];
	$_SESSION["update"]="$name";
	$select="SELECT `SI_NO`, `types`, `name_of_org`, `name`, `designation`, `contact`, `email`, `office`, `district`, `thana`, `remarks` FROM `$name`";
	$chk=mysqli_query($cn,$select);
	if($chk){
		while($row=mysqli_fetch_array($chk)){
								echo '<tr style="color:black">';
								echo '<td>'.$row['SI_NO'].'</td>';
								echo '<td>'.$row['types'].'</td>';
								echo '<td>'.$row['name_of_org'].'</td>';
								echo '<td>'.$row['name'].'</td>';
								echo '<td>'.$row['designation'].'</td>';
								echo '<td>'.$row['contact'].'</td>';
								echo '<td>'.$row['email'].'</td>';
								echo '<td>'.$row['office'].'</td>';
								echo '<td>'.$row['thana'].'</td>';
								echo '<td>'.$row['remarks'].'</td>';
								echo '</tr>';
								}
	}

?>
</form>
</table>
</div>
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


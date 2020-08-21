<!DOCTYPE html>
<html>
<head>
<title>CementTechBd</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style>
    .data{
        overflow-x:scroll;
    }
</style>
</head>
<body id="top">

<div class="bgded" style="background-image:url('images/demo/backgrounds/pur.jpg');"> 
 
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
            <li><a href="index.php">Home</a> 
		  
          </li>
        </ul>
        <!-- ################################################################################################ -->
      </nav>
	 <div class="bgded overlay">
	  <center><h1 style="color:lightgreen"><b><u>Total Job Opportunities</u></b></h1>
	  </center>
	  </br>
	  </div>
    </header>
	
  </div>
  <?php
    ini_set( "display_errors", 0); 
    include("dbconnect.php");
	echo '<div class="data">';
	echo '<table>';
	echo '<tr>';
	echo '<th style="color:black;">Title</th>';
	echo '<th style="color:black;">Action</th>';
	echo '</tr>';
	$search="SELECT * FROM job";
	$chk=mysqli_query($cn,$search);
	if($chk){
	while($row=mysqli_fetch_array($chk)){
	   echo '<tr>';
	   echo '<td style="color:black;">'.$row['title'].'</td>';
	   
	   ?>
		<td><button style="color:green" value="<?php echo $row['SI_NO'];?>" name="view"><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></button></td>
								
	   <?php
	   echo '</tr>';
	}


}	
	echo '</table>';
	echo '</div>';
?>
<div class="fix footer">
  <div id="copyright" class="hoc clear" style="color:white;"> 
    <!-- ################################################################################################ -->
    <p class="fl_left" style="color:white">Copyright &copy; 2018 - All Rights Reserved - <a style="color:black" href="#" style="color:black;">Bangladesh Cement Directory.</a></p>
    <div class="fl_right">
    <p style="color:white"><u>Developed by</u></p>
    <p style="color:black">Tanup Kumar Nondy (tanupcsebu02.tkn@gmail.com)</p>
    <p style="color:black">Jakia Akhter (jakiacsebu02@gmail.com)</p>
    </div>
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


<?php
session_start();
ini_set( "display_errors", 0); 
$ad=5;
if($_SESSION['admin']){
    $ad=$_SESSION['admin'];
}
if($ad!=2){
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

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="option.php">Home</a></li>
		  <li class="menu-active"><a href="job.php">Post Job</a></li>
		  <li class="menu-active"><a href="home.php">Data Entry</a></li>
          <li class="menu-active"><a href="logout.php">Logout</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
	  
    </div>
  </header><!-- #header -->

<?php include 'inc/slider.php'?>

  <main id="main">

  </main>

<?php include 'admin_inc/footer.php'?>
    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Job Opportunity</h3>
          <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus, ad pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta zanos paradigno tridexa panatarel.</p>
        </header>

<div class="container-fluid">
  <!-- Example DataTables Card-->
  <div class="card mb-3">
	<div class="card-header">
	  <i class="fa fa-table"></i> All Job List</div>
	<div class="card-body">
	  <div class="table-responsive">
				<?php
				ini_set( "display_errors", 0); 
				include("dbconnect.php");
				echo '<div class="data">';
				echo '<table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">';
				$search="SELECT * FROM job";
				$chk=mysqli_query($cn,$search);
				if($chk){
					while($row=mysqli_fetch_array($chk)){
					echo '<tr>';
						echo '<td style="color:black;">'.$row['title'].'</td>';

						?>
						<td><center><button class="btn btn-outline-primary" value="<?php echo $row['SI_NO'];?>" name="view"><a href="uploads/<?php echo $row['file'] ?>" target="_blank">View</a></button></center></td>
						<?php
						echo '</tr>';
					}
				}	
				echo '</table>';
				echo '</div>';
				?>
	  </div>
	</div>
	<div class="card-footer small text-muted">All Job Opportunity</div>
  </div>
</div>
    
	</section><!-- #services -->
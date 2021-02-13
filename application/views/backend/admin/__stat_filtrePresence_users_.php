<?php 

	$url;
	$chart_data = '';

	if (isset($dates1) && isset($dates2)) {
		if ($dates1 !='' && $dates2 !='') {

		 $url = "impression_pdf_presence_filtrage/".$dates1."/".$dates2;

          $detail3 = $this->db->query("SELECT COUNT(sexe) AS nombre, sexe FROM profile_presence WHERE jour BETWEEN '".$dates1."' AND '".$dates2."' GROUP BY sexe");
         
          if ($detail3->num_rows() > 0) {
              foreach ($detail3->result_array() as $key) {

              	$sexe = "Apprenants présents de sexe:".$key["sexe"];

                 $chart_data .= "{ indexLabel:'".$sexe."', y:".$key["nombre"]."}, ";
              }

              $chart_data = substr($chart_data, 0, -2);
              // echo($chart_data);
          }
          else{

          }



		}
		else{
			$url = "presence";
		}


	}
	else{



          $detail3 = $this->db->query("SELECT COUNT(sexe) AS nombre, sexe FROM profile_presence GROUP BY sexe");
          
         
          if ($detail3->num_rows() > 0) {
                  foreach ($detail3->result_array() as $key) {

                  	$sexe = "personnes mortes de sexe:".$key["sexe"];

                     $chart_data .= "{ indexLabel:'".$sexe."', y:".$key["nombre"]."}, ";
                  }

                  $chart_data = substr($chart_data, 0, -2);
                  // echo($chart_data);
          }
          else{

          }

		$url = "presence";
	}



	// if ($dates1 !='' && $dates2 !='') {

	// $url = "impression_pdf_presence_filtrage/".$dates1."/".$dates2;

	// }
	// else{
	// 	$url = "presence";
	// }
?>
<div class="col-md12">
	<div class="row">

		<!-- debut de script date presence de jours -->
		<div class="col-md-12 row">
			<div class="col-md-2">

			</div>
			<div class="col-md-8">
				<div class="col-md-12">
					<form class="row" method="post" action="<?php echo(base_url()) ?>admin/stat_filtrage_presence_ap">

						<div class="col-2 mb-4">
							<a href="<?php echo(base_url()) ?>admin/<?php echo($url) ?>" class="btn btn-primary btn-sm"><i class="fa fa-print"></i>PDF</a>
						</div>

						<div class="col-4">
							<div class="form-group col-md-12">
		                        
		                           <select  name="date1" id="date1" class="form-control selectpicker" data-live-search="true">
		                           	<?php 
		                           	if ($dates->num_rows() > 0) {
		                           		?>
		                           		<option value="">Selectionnez la date</option>
		                           		<?php
		                           		foreach ($dates->result_array() as $key) {
		                           			?>
		                           			<option value="<?php echo($key['jour']) ?>">
		                           				<?php echo(

		                           					nl2br(substr(date(DATE_RFC822, strtotime($key['jour'])), 0, 23))

		                           				) ?>
		                           					
		                           				</option>
		                           			<?php
		                           		}
		                           	}
		                           	else{

		                           		?>
		                           		<option value="">Aucune date n'est diponible</option>
		                           		<?php
		                           	}
		                           	?>
		                           	
		                           </select> 
		                    </div>

						</div>

						<div class="col-4">
							
							<div class="form-group col-md-12">
		                        
		                           <select  name="date2" id="date2" class="form-control selectpicker" data-live-search="true">
		                           	<?php 
		                           	if ($dates->num_rows() > 0) {
		                           		?>
		                           		<option value="">Selectionnez la date</option>
		                           		<?php
		                           		foreach ($dates->result_array() as $key) {
		                           			?>
		                           			<option value="<?php echo($key['jour']) ?>">
		                           				<?php echo(

		                           					nl2br(substr(date(DATE_RFC822, strtotime($key['jour'])), 0, 23))

		                           				) ?>
		                           					
		                           				</option>
		                           			<?php
		                           		}
		                           	}
		                           	else{

		                           		?>
		                           		<option value="">Aucune date n'est diponible</option>
		                           		<?php
		                           	}
		                           	?>
		                           	
		                           </select> 
		                    </div>


						</div>

						<div class="col-2">
							<button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-send"></i> Envoyer</button>
						</div>

					</form>
					<hr>
				</div>
				
			</div>

			<div class="col-md-2"></div>
		</div>

		



		<!-- debut -->
        <!-- <div class="col-md-12">
            <strong class="card-title">parametrage de paiement</strong>

            &nbsp;<a href="<?php echo(base_url()) ?>admin/<?php echo($url) ?>" class="btn btn-default"><i class="fa fa-print"></i>PDF</a>   &nbsp;&nbsp;&nbsp;&nbsp;  <a href="" class="btn btn-default text-muted"><i class="fa fa-refresh"></i>actualiser</a>

        </div> -->
		<!-- fin presence des jours -->

		<div class="col-md-12">
			<div class="row">
				<!-- bloc 1 -->
				<div class="col-lg-4 col-6 mb-2">
        			<!-- small box -->
			        <div class="small-box bg-primary">

			        	<div class="col-md-12">
			        		<div class="row">
			        			<div class="col-12">
			        				<h5><?php echo($nombre_personne_m); ?></h5>
			        			</div>
			        			<div class="col-9">
			        				<p>Nombre Total d'apprenants musculins</p>
			        			</div>
			        			<div class="col-3">
			        				<h5>
			        					<i class="fa fa-male fa-lg"></i>
			        				</h5>
			        			</div>
			        			<div class="col-12">
			        				<a href="javascript:void(0);" class="small-box-footer">
			           				 <i class="fa fa-hand-o-right"></i> Plus d'info 
			          				</a>
			        			</div>	
			        		</div>
			        	</div>
			          
			        </div>
			    </div>
			    <!-- fin bloc 1 -->

			    <!-- bloc 2 -->
				<div class="col-lg-4 col-6">
        			<!-- small box -->
			        <div class="small-box bg-warning">

			        	<div class="col-md-12">
			        		<div class="row">
			        			<div class="col-12">
			        				<h5><?php echo($nombre_personne_f); ?></h5>
			        			</div>
			        			<div class="col-9">
			        				<p>Nombre Total d'apprenants feminin</p>
			        			</div>
			        			<div class="col-3">
			        				<h5>
			        					<i class="fa fa-female fa-lg"></i>
			        				</h5>
			        			</div>
			        			<div class="col-12">
			        				<a href="javascript:void(0);" class="small-box-footer">
			           				 <i class="fa fa-hand-o-right"></i> Plus d'info 
			          				</a>
			        			</div>	
			        		</div>
			        	</div>
			          
			        </div>
			    </div>
	
			    <!-- bloc 3 -->
				<div class="col-lg-4 col-6">
        			<!-- small box -->
			        <div class="small-box bg-success">

			        	<div class="col-md-12">
			        		<div class="row">
			        			<div class="col-12">
			        				<h5><?php echo($nombre_total_presence); ?></h5>
			        			</div>
			        			<div class="col-9">
			        				<p>Nombre Total d'apprenants</p>
			        			</div>
			        			<div class="col-3">
			        				<h5>
			        					<i class="fa fa-group fa-lg"></i>
			        				</h5>
			        			</div>
			        			<div class="col-12">
			        				<a href="javascript:void(0);" class="small-box-footer">
			           				 <i class="fa fa-hand-o-right"></i> Plus d'info 
			          				</a>
			        			</div>	
			        		</div>
			        	</div>
			          
			        </div>
			    </div>
			    <!-- fin bloc 3 -->
			    

				
			</div>
		</div>

		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6 mb-2">
					<div class="card">
						<div class="card-header text-center">
							<i class="fa fa-calendar fa-lg"></i> Statistiques des apprenants par rapport à leur présences
						</div>
						<div class="card-body">
							<div id="chartContainer" style="height: 300px; width: 100%;"></div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="card">
						<div class="card-header text-center">
							<i class="fa fa-calendar fa-lg"></i> Statistiques des apprenants par rapport à leur présences
						</div>
						<div class="card-body">
							<div id="chartContainer2" style="height: 300px; width: 100%;"></div>
						</div>
					</div>
					 
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">

					<!-- /.mailbox-controls -->
	                
	                <!-- /.mailbox-read-message -->
					
				</div>
			</div>
		</div>

	</div>
</div>




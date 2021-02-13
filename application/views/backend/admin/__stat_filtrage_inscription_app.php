<?php 

	$url;
	$chart_data = '';

	if (isset($dates1) && isset($dates2)) {
		if ($dates1 !='' && $dates2 !='') {

			 $url = "impression_pdf_formations_filtrage/".$idformation."/".$idedition;
			 $detail3 = $this->db->query("SELECT COUNT(sexe) AS nombre, sexe FROM profile_inscription WHERE nom_formation='".$dates1."' AND nom_edition='".$dates2."' GROUP BY sexe");
	         
	          if ($detail3->num_rows() > 0) {
	              foreach ($detail3->result_array() as $key) {

	              	$sexe = "Apprenants  de sexe:".$key["sexe"];

	                 $chart_data .= "{ indexLabel:'".$sexe."', y:".$key["nombre"]."}, ";
	              }

	              $chart_data = substr($chart_data, 0, -2);
	              // echo($chart_data);
	          }
	          else{

	          }

		}
		else{
			$url = "inscription_apprenant";
		}


	}
	else{

		$url = "inscription_apprenant";
		$detail3 = $this->db->query("SELECT COUNT(sexe) AS nombre, sexe FROM profile_inscription GROUP BY sexe");
          
         
          if ($detail3->num_rows() > 0) {
                  foreach ($detail3->result_array() as $key) {

                  	$sexe = "personnes mortes de sexe:".$key["sexe"];

                     $chart_data .= "{ indexLabel:'".$sexe."', y:".$key["nombre"]."}, ";
                  }

                  $chart_data = substr($chart_data, 0, -2);
                  // echo($chart_data);
          }
          else{
          	$url = "inscription_apprenant";
          }
	}
?>




<!-- debut de script date presence de jours -->
<div class="col-md-12 row">
	<div class="col-md-2">
	
	</div>
	<div class="col-md-8">
		<div class="col-md-12">
			<form class="row" method="post" action="<?php echo(base_url()) ?>admin/stat_filtrage_inscription_ap">

				<div class="col-2 mb-4">
					<a href="<?php echo(base_url()) ?>admin/<?php echo($url) ?>" class="btn btn-primary btn-sm"><i class="fa fa-print"></i>PDF</a>
				</div>

				<div class="col-4">
					<div class="form-group col-md-12">
                        
                           <select  name="date1" id="date1" class="form-control selectpicker" data-live-search="true">
                           	<?php 
                           	if ($n_formations->num_rows() > 0) {
                           		?>
                           		<option value="">Selectionnez la formation</option>
                           		<?php
                           		foreach ($n_formations->result_array() as $key) {
                           			?>
                           			<option value="<?php echo($key['nom']) ?>">
                           				<?php echo($key['nom']) ?>	
                           			</option>
                           			<?php
                           		}
                           	}
                           	else{

                           		?>
                           		<option value="">Aucune formation n'est diponible</option>
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
                           	if ($n_editions->num_rows() > 0) {
                           		?>
                           		<option value="">Selectionnez l'édition</option>
                           		<?php
                           		foreach ($n_editions->result_array() as $key) {
                           			?>
                           			<option value="<?php echo($key['nom']) ?>">
                           				<?php echo($key['nom']) ?>
                           					
                           			</option>
                           			<?php
                           		}
                           	}
                           	else{

                           		?>
                           		<option value="">Aucune édition n'est diponible</option>
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
		</div>
		
	</div>

	<div class="col-md-2"></div>
</div>
<hr>

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
	        				<p>Total d'apprenants musculins</p>
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
					<i class="fa fa-bar-chart fa-lg"></i> Statistiques des apprenants par rapport à leur sexe à la formation <?php echo($dates1) ?> <?php echo($dates2) ?>
				</div>
				<div class="card-body">
					<div id="chartContainer" style="height: 300px; width: 100%;"></div>
				</div>
			</div>
		</div>

		<div class="col-md-6">
			<div class="card">
				<div class="card-header text-center">
					<i class="fa fa-bar-chart-o fa-lg"></i> Statistiques des apprenants par rapport à leur sexe à la formation <?php echo($dates1) ?> <?php echo($dates2) ?>
				</div>
				<div class="card-body">
					<div id="chartContainer2" style="height: 300px; width: 100%;"></div>
				</div>
			</div>
			 
		</div>
	</div>
</div>

<!-- fin presence des jours -->




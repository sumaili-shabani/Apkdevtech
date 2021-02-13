<?php 

	$url;
	$chart_data = '';

	if (isset($dates1)) {
		if ($dates1 !='') {

			 $url = "pdf_reponse/".$dates1;
			 $detail3 = $this->db->query("SELECT COUNT(nomq) AS nombre, valeur FROM profile_reponse WHERE idr='".$dates1."' GROUP BY valeur");
	         
	          if ($detail3->num_rows() > 0) {
	              foreach ($detail3->result_array() as $key) {

	              	$sexe = "Réponse: ".$key["valeur"];

	                 $chart_data .= "{ indexLabel:'".$sexe."', y:".$key["nombre"]."}, ";
	              }

	              $chart_data = substr($chart_data, 0, -2);
	              // echo($chart_data);
	          }
	          else{

	          }

		}
		else{
			$url = "reponse";
		}


	}
	else{

		$url = "reponse";
		$detail3 = $this->db->query("SELECT COUNT(nomq) AS nombre, valeur FROM profile_reponse GROUP BY valeur");
          
         
          if ($detail3->num_rows() > 0) {
                  foreach ($detail3->result_array() as $key) {

                  	$sexe = "Réponse: ".$key["valeur"];

                     $chart_data .= "{ indexLabel:'".$sexe."', y:".$key["nombre"]."}, ";
                  }

                  $chart_data = substr($chart_data, 0, -2);
                  // echo($chart_data);
          }
          else{
          	$url = "reponse";
          }
	}
?>




<!-- debut de script date presence de jours -->
<div class="col-md-12 row">
	<div class="col-md-2">
	
	</div>
	<div class="col-md-8">
		<div class="col-md-12">
			<form class="row" method="post" action="<?php echo(base_url()) ?>admin/stat_filtrage_reponse_ap">

				<div class="col-2 mb-4">
					<a href="<?php echo(base_url()) ?>admin/<?php echo($url) ?>" class="btn btn-primary btn-sm"><i class="fa fa-print"></i>PDF</a>
				</div>

				<div class="col-8">
					<div class="form-group col-md-12">
                        
                           <select  name="date1" id="date1" class="form-control selectpicker" data-live-search="true">
                           	<?php 
                           	if ($rubriques->num_rows() > 0) {
                           		?>
                           		<option value="">Selectionnez le rubrique</option>
                           		<?php
                           		foreach ($rubriques->result_array() as $key) {
                           			?>
                           			<option value="<?php echo($key['idr']) ?>">
                           				<?php echo($key['nomr']) ?>	
                           			</option>
                           			<?php
                           		}
                           	}
                           	else{

                           		?>
                           		<option value="">Aucun rubrique n'est diponible</option>
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
		<div class="col-lg-3 col-6 mb-2">
			<!-- small box -->
	        <div class="small-box bg-danger">

	        	<div class="col-md-12">
	        		<div class="row">
	        			<div class="col-12">
	        				<h5><?php echo($nombre_personne_tb); ?></h5>
	        			</div>
	        			<div class="col-9">
	        				<p>Total réponse Très bien</p>
	        			</div>
	        			<div class="col-3">
	        				<h5>
	        					<i class="fa fa-check fa-lg"></i>
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
		<div class="col-lg-3 col-6">
			<!-- small box -->
	        <div class="small-box bg-primary">

	        	<div class="col-md-12">
	        		<div class="row">
	        			<div class="col-12">
	        				<h5><?php echo($nombre_personne_b); ?></h5>
	        			</div>
	        			<div class="col-9">
	        				<p>Total réponse Bien</p>
	        			</div>
	        			<div class="col-3">
	        				<h5>
	        					<i class="fa fa-tag fa-lg"></i>
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
		<div class="col-lg-3 col-6">
			<!-- small box -->
	        <div class="small-box bg-success">

	        	<div class="col-md-12">
	        		<div class="row">
	        			<div class="col-12">
	        				<h5><?php echo($nombre_personne_mal); ?></h5>
	        			</div>
	        			<div class="col-9">
	        				<p>Total réponse Mal</p>
	        			</div>
	        			<div class="col-3">
	        				<h5>
	        					<i class="fa fa-close fa-lg"></i>
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

	    <!-- bloc 3 -->
		<div class="col-lg-3 col-6">
			<!-- small box -->
	        <div class="small-box bg-warning">

	        	<div class="col-md-12">
	        		<div class="row">
	        			<div class="col-12">
	        				<h5><?php echo($nombre_personne_general); ?></h5>
	        			</div>
	        			<div class="col-9">
	        				<p>Total des réponses</p>
	        			</div>
	        			<div class="col-3">
	        				<h5>
	        					<i class="fa fa-check-square-o fa-lg"></i>
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
					<i class="fa fa-bar-chart fa-lg"></i> Statistiques des apprenants par rapport à leur réponses <?php echo($dates1) ?> 
				</div>
				<div class="card-body">
					<div id="chartContainer" style="height: 300px; width: 100%;"></div>
				</div>
			</div>
		</div>

		<div class="col-md-6">
			<div class="card">
				<div class="card-header text-center">
					<i class="fa fa-bar-chart-o fa-lg"></i> Statistiques des apprenants par rapport à leur réponses <?php echo($dates1) ?> 
				</div>
				<div class="card-body">
					<div id="chartContainer2" style="height: 300px; width: 100%;"></div>
				</div>
			</div>
			 
		</div>
	</div>
</div>

<!-- fin presence des jours -->




<!-- debut de script date presence de jours -->
<div class="col-md-12 row">
	<div class="col-md-2">
	
	</div>
	<div class="col-md-8">
		<div class="col-md-12">
			<form class="row" method="post" action="<?php echo(base_url()) ?>admin/filtrage_inscription_ap">

				<div class="col-5">
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

				<div class="col-5">
					
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
<!-- fin presence des jours -->



<!-- debut de mes scripts -->
	<div class="col-md-12">
	 <div class="row">
	   <div class="col-md-12">
	     <button class="btn btn-dim btn-sm btn-outline-light pull-right  mb-4" id="add_button" data-toggle="modal" data-target="#userModal"><i class="fa fa-plus"></i>Effectuer l'opération</button>
	   </div>
	 </div>
	</div>
	<!-- insertion de tableau -->
	<div class="col-md-12">
		<div class="table-responsive">
		    <table id="user_data" class="table table-bordered table-striped">
		        <thead>  
		            <tr> 
		            	<th width="5%">PDF</th>
		            	<th width="10%">Type apprenant</th> 
		                <th width="25%">Nom complet</th>
		                <th width="5%">Sexe</th>  
		                <th width="15%">Nom formation</th>
		                <th width="10%">Nom édition</th>
		                <th width="10%">Date d'incription</th>
		                <th width="10%">Mise àjour</th>
		                 
		                <th width="5%">Modifier</th> 
		                <th width="5%">Supprimer</th>  
		            </tr>  
		       </thead>

		       <tfoot>  
		            <tr>  
		                <th width="5%">PDF</th>
		            	<th width="10%">Type apprenant</th> 
		                <th width="25%">Nom complet</th>
		                <th width="5%">Sexe</th>  
		                <th width="15%">Nom formation</th>
		                <th width="10%">Nom édition</th>
		                <th width="10%">Date d'incription</th>
		                <th width="10%">Mise àjour</th>
		                 
		                <th width="5%">Modifier</th> 
		                <th width="5%">Supprimer</th>
		            </tr>  
		       </tfoot>    
		        
		    </table>
		</div>
	</div>
	<!-- fin insertion tableau -->
<!-- fin de mes scripts -->
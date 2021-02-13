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
			<form class="row" method="post" action="<?php echo(base_url()) ?>admin/filtrage_inscription_ap">

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
		            	<th width="5%">Image</th>
		            	<th width="10%">Type apprenant</th> 
		                <th width="20%">Nom complet</th>
		                <th width="5%">Sexe</th>  
		                <th width="15%">Nom formation</th>
		                <th width="10%">Nom édition</th>
		                <th width="10%">Date d'incription</th>
		                <th width="10%">Mise àjour</th>
		                 
		                <th width="5%">Modifier</th> 
		                <th width="5%">Supprimer</th>  
		            </tr>  
		       </thead>

		       <tbody>

               	<?php 
               	if ($donnees->num_rows() > 0) {
               		foreach ($donnees->result_array() as $key) {
               			
               			?>
               			<tr>
               				<td>
               					<a href="<?php echo(base_url()) ?>admin/pdf_card/<?php echo($key['id_user']) ?>" class="btn btn-primary btn-xs"><i class="fa fa-print"></i></a>
               				</td>

               				<td>
               					<img width="50" height="30" class="img img-responsive img-thumbnail"  src="<?php echo(base_url())  ?>upload/photo/<?php echo($key['image'])  ?>">
               				</td>

               				<td><?php echo($key['nom_categorie']) ?></td>

			                <td><?php echo($key['first_name'].' '.$key['last_name']) ?></td>

               				<td><?php echo($key['sexe']) ?></td>

               				<td><?php echo($key['nom_formation']) ?></td>

               				<td><?php echo($key['nom_edition']) ?></td>

               				<td><?php echo($key['date_inscription']) ?></td>

               				<td>
               					<?php echo(nl2br(substr(date(DATE_RFC822, strtotime($key['created_at'])), 0, 23))) ?>
               				</td>


               				<td>
               					<a href="javascript:void(0);" class="btn btn-warning update btn-xs"  idinscription="<?php echo($key['idinscription']) ?>"><i class="fa fa-user"></i></a>
               				</td>
               				

               				<td>
               					<a href="javascript:void(0);" class="btn btn-danger delete btn-xs"  idinscription="<?php echo($key['idinscription']) ?>"><i class="fa fa-trash"></i></a>
               				</td>
               				


               			</tr>
               			<?php
               		}
               	}

               	 ?>
               </tbody>

		       <tfoot>  
		            <tr>  
		                <th width="5%">PDF</th>
		            	<th width="5%">Image</th>
		            	<th width="10%">Type apprenant</th> 
		                <th width="20%">Nom complet</th>
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
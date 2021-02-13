<?php 

	$url;
	$chart_data = '';

	if (isset($dates1) && isset($dates2)) {
		if ($dates1 !='' && $dates2 !='') {

		 $url = "impression_pdf_presence_filtrage/".$dates1."/".$dates2;
		}
		else{
			$url = "presence";
		}


	}
	else{

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
					<form class="row" method="post" action="<?php echo(base_url()) ?>admin/filtrage_presence_ap">

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

	</div>
</div>




<div class="col-md12">
	<div class="row">

		<div class="col-md-12 ">
			<div class="row ">
				<div class="col-md-12">
					<!-- /.mailbox-controls -->
	                <div class="mailbox-read-message card">


	                	<div class="col-md-12 card-body">

	                		

		                	<div class="col-md-12 table-responsive resultat_ok">
		                		<button class="btn btn-dim btn-sm btn-outline-light pull-right  mb-4" id="add_button" data-toggle="modal" data-target="#userModal"><i class="fa fa-plus"></i>Effectuer l'opération</button>
		                		<br><br>
		                      <table id="user_data" class="table table-bordered table-striped">  
		                       <thead>  
		                            <tr>  
		                                 <th width="5%">Image</th>  
		                                 <th width="35%">Nom complet </th>  
		                                 <th width="5%">Sexe</th> 
		                                 <th width="20%">Jour</th> 
		                                 <th width="20%">Mise à jour</th>
		                                 <th width="5%">PDF</th>
		                                 <th width="5%">Profile</th>  
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
			                   					<img width="50" height="30" class="img img-responsive img-thumbnail"  src="<?php echo(base_url())  ?>upload/photo/<?php echo($key['image'])  ?>">
			                   				</td>
			                   				

			                   				<td><?php echo($key['first_name'].' '.$key['last_name']) ?></td>
			                   				<td><?php echo($key['sexe']) ?></td>
			                   				
			                   				<td>
			                   					<?php echo(nl2br(substr(date(DATE_RFC822, strtotime($key['jour'])), 0, 23))) ?>
			                   				</td>
			                   				<td>

			                   				<?php echo(nl2br(substr(date(DATE_RFC822, strtotime($key['created_at'])), 0, 23))) ?>
			                   						
			                   				</td>

			                   				<td>
			                   					<a href="<?php echo(base_url()) ?>admin/pdf_presence_apprenant/<?php echo($key['id_user']) ?>" class="btn btn-primary btn-xs"><i class="fa fa-print"></i></a>
			                   				</td>
			                   				<td>
			                   					<a href="javascript:void(0);" class="btn btn-warning update btn-xs"  id="<?php echo($key['id_user']) ?>"><i class="fa fa-user"></i></a>
			                   				</td>
			                   				

			                   				<td>
			                   					<a href="javascript:void(0);" class="btn btn-danger delete btn-xs"  idp="<?php echo($key['idp']) ?>"><i class="fa fa-trash"></i></a>
			                   				</td>
			                   				


			                   			</tr>
			                   			<?php
			                   		}
			                   	}

			                   	 ?>
		                       </tbody>
		                       <!--  -->
		                       <tfoot>  
		                            <tr>  
		                                 <th width="5%">Image</th>  
		                                 <th width="35%">Nom complet </th>  
		                                 <th width="5%">Sexe</th> 
		                                 <th width="20%">Jour</th> 
		                                 <th width="20%">Mise à jour</th>
		                                 <th width="5%">PDF</th>
		                                 <th width="5%">Profile</th>  
		                                 <th width="5%">Supprimer</th>
		                            </tr>  
		                       </tfoot>   
		                     </table>
		                		
		                	</div>
	                  
	                </div>
	                <!-- /.mailbox-read-message -->
					
				</div>
			</div>
		</div>

	</div>
</div>

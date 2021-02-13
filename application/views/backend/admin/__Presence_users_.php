


<div class="col-md12">
	<div class="row">

		<div class="col-md-12 ">
			<div class="row ">
				<div class="col-md-12">
					<!-- /.mailbox-controls -->
	                <div class="mailbox-read-message card">


	                	<div class="col-md-12 card-body">

	                		<!-- debut de script date presence de jours -->
	                		<div class="col-md-12 row">
								<div class="col-md-2">
								
								</div>
								<div class="col-md-8">
									<div class="col-md-12">
										<form class="row" method="post" action="<?php echo(base_url()) ?>admin/filtrage_presence_ap">

											<div class="col-5">
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

											<div class="col-5">
												
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
									</div>
									
								</div>

								<div class="col-md-2"></div>
							</div>
							<!-- fin presence des jours -->

		                	<div class="col-md-12 table-responsive resultat_ok">
		                		<button class="btn btn-dim btn-sm btn-outline-light pull-right  mb-4" id="add_button" data-toggle="modal" data-target="#userModal"><i class="fa fa-plus"></i>Effectuer l'opération</button>
		                		<br><br>
		                      <table id="user_data" class="table table-bordered table-striped">  
		                       <thead>  
		                            <tr>  
		                                 <th width="5%">Idcole</th>  
		                                 <th width="35%">Nom complet </th>  
		                                 <th width="5%">Sexe</th> 
		                                 <th width="20%">Jour</th> 
		                                 <th width="20%">Mise à jour</th>
		                                 <th width="5%">PDF</th>
		                                 <th width="5%">Profile</th>  
		                                 <th width="5%">Supprimer</th> 
		                            </tr>  
		                       </thead>
		                       <!--  -->
		                       <tfoot>  
		                            <tr>  
		                                 <th width="5%">Idcole</th>  
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

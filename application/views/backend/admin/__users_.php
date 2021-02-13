<div class="col-md12">
	<div class="row">

		<div class="col-md-12">
			<div class="row">
				<!-- bloc 1 -->
				<div class="col-lg-3 col-6 mb-2">
        			<!-- small box -->
			        <div class="small-box bg-success">
			        	<div class="col-md-12">
			        		<div class="row">
			        			<div class="col-12">
			        				<h5><?php echo($nombre_users); ?></h5>
			        			</div>
			        			<div class="col-9">
			        				<p>Nombre Total des utilisateurs</p>
			        			</div>
			        			<div class="col-3">
			        				<h5>
			        					<i class="fa fa-user fa-lg"></i>
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
			        				<h5><?php echo($nombre_users_m); ?></h5>
			        			</div>
			        			<div class="col-9">
			        				<p>Nombre D'utilisateurs homes</p>
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
			    <!-- fin bloc 2 -->
			    <!-- bloc 3 -->
				<div class="col-lg-3 col-6">
        			<!-- small box -->
			        <div class="small-box bg-warning">

			        	<div class="col-md-12">
			        		<div class="row">
			        			<div class="col-12">
			        				<h5><?php echo($nombre_users_f); ?></h5>
			        			</div>
			        			<div class="col-9">
			        				<p>Nombre D'utilisateurs femmes</p>
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
			    <!-- fin bloc 3 -->
			    <!-- bloc 3 -->
				<div class="col-lg-3 col-6">
        			<!-- small box -->
			        <div class="small-box bg-danger">

			        	<div class="col-md-12">
			        		<div class="row">
			        			<div class="col-12">
			        				<h5><?php echo($nombre_users_a); ?></h5>
			        			</div>
			        			<div class="col-9">
			        				<p>Nombre D'utilisateurs inconus</p>
			        			</div>
			        			<div class="col-3">
			        				<h5>
			        					<i class="fa fa-signal fa-lg"></i>
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

		<div class="col-md-12 ">
			<div class="row ">
				<div class="col-md-12">

					<!-- /.mailbox-controls -->
	                <div class="mailbox-read-message card">

	                	<div class="col-md-12 card-body">
					        <div class="row">
					           <div class="col-md-12">
					           	<a href="" class="btn btn-dim btn-sm btn-outline-light pull-center  mb-4"><i class="fa fa-refresh"></i> Actualisez</a>
					           	&nbsp;&nbsp;&nbsp;&nbsp;
					             <button class="btn btn-dim btn-sm btn-outline-light pull-right  mb-4" id="add_button" data-toggle="modal" data-target="#userModal"><i class="fa fa-plus"></i>Effectuer l'opération</button>
					           </div>
					         </div>
					    </div>

	                	<div class="col-md-12 table-responsive resultat_ok">

	                      <table id="user_data" class="table table-bordered table-striped">  
	                       <thead>  
	                            <tr>  
	                                 <th width="10%">Image</th>  
	                                 <th width="20%">Prenom </th>  
	                                 <th width="15%">Postnom</th> 
	                                 <th width="5%">Sexe</th> 
	                                 <th width="15%">Email</th>
	                                 <th width="15%">Téléphone</th>
	                                 <th width="10%">Idcole</th>
	                                 <th width="5%">Editer</th> 
	                                 <th width="5%">Supprimer</th> 
	                            </tr>  
	                       </thead>
	                       <tbody>
	                       	<?php
	                       	foreach ($users->result_array() as $key) {
	                       		?>
	                       		<tr>
		                       		<td>
		                       			<img src="<?php echo(base_url()) ?>upload/photo/<?php echo($key['image']) ?>" class="img img-responsive img-thumbnail" width="50" height="35">
		                       		</td>
		                       		<td><?php echo(substr($key['first_name'], 0,20)) ?>...</td>
		                       		<td><?php echo(substr($key['last_name'], 0,20)) ?>...</td>
		                       		<td><?php echo(substr($key['sexe'], 0,10)) ?></td>
		                       		<td><?php echo(substr($key['email'], 0,10)) ?>...</td>
		                       		<td><?php echo(substr($key['telephone'], 0,10)) ?>...</td>
		                       		<td><?php echo(substr($key['id'].'_/'.$key['image'], 0,10)) ?>...</td>
		                       		<!--  -->
		                       		<td>
		                       			<a href="javascript:void(0);" id="<?= $key['id']?>" class="btn btn-warning btn-sm update">
		                       				<i class="fa fa-edit"></i>
		                       			</a>
		                       		</td>
		                       		<td>
		                       			<a href="javascript:void(0);" id="<?= $key['id']?>" class="btn btn-danger btn-sm update">
		                       				<i class="fa fa-trash"></i>
		                       			</a>
		                       		</td>

	                       		</tr>

	                       		<?php
	                       	}

	                       	 ?>
	                       </tbody>
	                       <tfoot>  
	                            <tr>  
	                                 <th width="10%">Image</th>  
	                                 <th width="20%">Prenom </th>  
	                                 <th width="15%">Postnom</th> 
	                                 <th width="5%">Sexe</th> 
	                                 <th width="15%">Email</th>
	                                 <th width="15%">Téléphone</th>
	                                 <th width="10%">Idcole</th>
	                                 <th width="5%">Editer</th> 
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

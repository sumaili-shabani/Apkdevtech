


<!-- debut de mes scripts -->
	<div class="col-md-12">
	 <div class="row">
	   <div class="col-md-12">

	   	 <!-- <a class="btn btn-dim btn-sm btn-outline-light pull-left  mb-4" href="<?php echo(base_url()) ?>admin/pdf_tranche"><i class="fa fa-print"></i>PDF écheancier</a> -->

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
		            	<th width="35%">Nom de la question</th>
		            	<th width="15%">Nom de rubrique</th> 
		                <th width="20%">Nom de la formation</th>
		                <th width="20%">Nom de l'édition</th>  
		                
		                <th width="5%">Modifier</th> 
		                <th width="5%">Supprimer</th>  
		            </tr>  
		       </thead>

		       <tfoot>  
		            <tr>  
		                <th width="35%">Nom de la question</th>
		            	<th width="15%">Nom de rubrique</th> 
		                <th width="20%">Nom de la formation</th>
		                <th width="20%">Nom de l'édition</th>  
		                
		                <th width="5%">Modifier</th> 
		                <th width="5%">Supprimer</th>      
		            </tr>  
		       </tfoot>    
		        
		    </table>
		</div>
	</div>
	<!-- fin insertion tableau -->
<!-- fin de mes scripts
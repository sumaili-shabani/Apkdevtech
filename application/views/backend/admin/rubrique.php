<!DOCTYPE html>
<html lang="fr" class="js">

<head>
    
    <?php include("_meta.php") ?>
</head>

<body class="nk-body layout-apps has-apps-sidebar npc-apps-messages ">
    <div class="nk-app-root">
    	<?php include('_navigation.php') ?>
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <?php include '_navMenu.php'; ?>
                <!-- main header @e -->

               <!-- mes script commencent -->
                <div class="nk-content nk-content-lg nk-content-fluid">
	                <div class="container-xl wide-lg">
	                    <div class="nk-content-inner">
	                        <div class="nk-content-body">
	                            <div class="nk-block-head text-center">
	                                <div class="nk-block-head-content">
	                                    <div class="nk-block-head-sub"><span>Effectuez l'opération.</span></div>
	                                    <div class="nk-block-head-content">
	                                        <h4 class="nk-block-title fw-normal"><?php echo($title) ?></h4>
	                                        
	                                    </div>
	                                </div>
	                            </div><!-- nk-block -->
	                            <div class="nk-block">
	                                <div  class="plan-iv">
	                                    
	                                    <div class="plan-iv-list nk-slider nk-slider-s2">
	                                        
	                                      <!-- mes script commencent -->
                                          <?php include('__rubrique_app.php') ?>
                                          <!-- fin de mes scripts -->
	                                    </div>
	                                    
	                                </div>
	                            </div><!-- nk-block -->
	                        </div>
	                    </div>
	                </div>
	            </div>

               <!-- fin mes scripts -->




            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <?php include("_script.php") ?>

 

     <!-- modal ajout radio -->
    <div class="modal fade" tabindex="-1" role="dialog" id="userModal">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <div class="nk-block-head nk-block-head-xs text-center">
                        <span class="nk-block-title modal-title">Paramètrage admin</span>
                        
                    </div>
                    <div class="nk-block">

                    	

                    	<form method="post" id="user_form" enctype="multipart/form-data" class="col-md-12">
                    		
                    		<div class="col-md-12">
		                        <div class="row">


			                        <div class="form-group jf-inputwithicon col-md-12">
			                            <label><i class="fa fa-bus"></i> Nom de la formation</label>
			                               <select  name="formations" id="formations" class="form-control selectpicker" data-live-search="true">
			                               	<?php 
			                               	if ($formations->num_rows() > 0) {
			                               		?>
			                               		<option value="">Selectionnez formation</option>
			                               		<?php
			                               		foreach ($formations->result_array() as $key) {
			                               			?>
			                               			<option value="<?php echo($key['idformation']) ?>">
			                               				<?php echo($key['nom']) ?></option>
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

			                        <div class="form-group jf-inputwithicon col-md-12">
			                            <label><i class="fa fa-bicycle"></i> Nom de l'édition</label>
			                               <select  name="editions" id="editions" class="form-control selectpicker" data-live-search="true">
			                               	<?php 
			                               	if ($editions->num_rows() > 0) {
			                               		?>
			                               		<option value="">Selectionnez édition</option>
			                               		<?php
			                               		foreach ($editions->result_array() as $key) {
			                               			?>
			                               			<option value="<?php echo($key['idedition']) ?>">
			                               				<?php echo($key['nom']) ?></option>
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

			                       

			                        <div class="form-group col-md-12">
				                        <label><i class="fa fa-pencil"></i> Nom de rubrique</label>
				                        <input type="text" class="form-control" name="nomr" id="nomr" placeholder="Entre le nom" >
				                    </div>

				                    <div class="form-group col-md-12">
				                        <label><i class="fa fa-key"></i> clée des valeurs</label>
				                        <input type="text" class="form-control" name="token" id="token" placeholder="Entrez le token">
				                    </div>

				                   

		                        </div>
		                    </div>

		                    <div class="buysell-field form-action text-center mb-2">
	                            <div>

	                            	<input type="hidden" name="idedition" id="idedition" placeholder="idedition" />

	                            	<input type="hidden" name="idformation" id="idformation" placeholder="idformation" />

	                            	

	                            	<input type="hidden" name="idr" id="idr" />
						            <input type="hidden" name="operation" id="operation" />
						            <input type="submit" name="action" id="action" class="btn btn-primary" value="Add" />
	                            </div>
	                            <div class="pt-3">
	                                <a href="javascript:void(0);" data-dismiss="modal" class="link link-danger">Annuler l'opération</a>
	                            </div>
	                        </div>


                    	</form>
                        
                        
                        
                    </div><!-- .nk-block -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div>
    <!-- fin modal-->



  	
    <script type="text/javascript">
    	$(document).ready(function(){
    		// alert("cool");
    		$('.selectpicker').selectpicker();
    	});
    </script>
  
    <script type="text/javascript" language="javascript" >  
     $(document).ready(function(){  
          $('#add_button').click(function(){  
               $('#user_form')[0].reset();  
               $('.modal-title').text("Paramètrage des rubriques");  
               $('#action').val("Add");  
               $('#user_uploaded_image').html('');  
          })  
          // var dataTable = $('#user_data').DataTable();
          var dataTable = $('#user_data').DataTable({  
               "processing":true,  
               "serverSide":true,  
               "order":[],  
               "ajax":{  
                    url:"<?php echo base_url() . 'admin/fetch_rubrique'; ?>",  
                    type:"POST"  
               },  
               "columnDefs":[  
                    {  
                         "targets":[0, 3, 4],  
                         "orderable":false,  
                    },  
               ],  
          });

          $(document).on('submit', '#user_form', function(event){  
               event.preventDefault();  
               var idedition 			= $('#idedition').val();
               var idformation 			= $('#idformation').val();
               var nomr 				= $('#nomr').val();  
               var token  			= $('#token ').val();

               var action = $('#action').val();

               
               if(idedition != '' && idformation  != '' && nomr  != '' && token  != '' )
                {

                  if (action =="Add") {
                       
                      $.ajax({  
                           url:"<?php echo base_url() . 'admin/operation_rubrique'?>",  
                           method:'POST',  
                           data:new FormData(this),  
                           contentType:false,  
                           processData:false,  
                           success:function(data)  
                           {  
                                swal('succès', ''+data, 'success'); 
                                $('#user_form')[0].reset();  
                                $('#userModal').modal('hide');  
                                dataTable.ajax.reload();  
                           }  
                      });
                        // alert("insertion");

                  }
                  if (action == 'Edit') {

                        $.ajax({  
                             url:"<?php echo base_url() . 'admin/modification_rubrique'?>",  
                             method:'POST',  
                             data:new FormData(this),  
                             contentType:false,  
                             processData:false,  
                             success:function(data)  
                             {  
                                  swal('succès', ''+data, 'success'); 
                                  $('#user_form')[0].reset();  
                                  $('#userModal').modal('hide');  
                                  dataTable.ajax.reload();  
                             }  
                        });

                  }

                }
                else
                {
                  // swall("Tous les champs doivent être remplis", "", "danger");
                  swal("Erreur!!!", "Tous les champs doivent être remplis", "error");
                }


                 
          });  


          $(document).on('click', '.update', function(){  
               var idr = $(this).attr("idr");  
               $.ajax({  
                    url:"<?php echo base_url(); ?>admin/fetch_single_rubrique",  
                    method:"POST",  
                    data:{idr:idr},  
                    dataType:"json",  
                    success:function(data)  
                    {  
                         $('#userModal').modal('show');  
                         $('#idedition').val(data.idedition);
                         $('#idformation').val(data.idformation);
                         $('#nomr').val(data.nomr);
                         
                         $('#token').val(data.token); 
                         
                         $('.modal-title').text("modification des rubriques");  
                         $('#idr').val(idr);   
                         $('#action').val("Edit");  
                    }  
               });  
          });

          $(document).on('click', '.delete', function(){
              var idr = $(this).attr("idr");

              if(confirm("Are you sure you want to delete this?"))
	          {
	            
	           		$.ajax({
                      url:"<?php echo base_url(); ?>admin/supression_rubrique",
                      method:"POST",
                      data:{idr:idr},
                      success:function(data)
                      {
                         swal("succès!", ''+data, "success");
                         dataTable.ajax.reload();
                      }
                    });
	          }
	          else
	          {
	            swal("Ouf!!!", "opération annulée :)", "error");
	          }

          });

          $(document).on('click', '.activer', function(){
              var idr = $(this).attr("idr");

              if(confirm("Etes-vous sûre de vouloir l'activer?"))
	          {
	            
	           		$.ajax({
                      url:"<?php echo base_url(); ?>admin/activation_rubrique",
                      method:"POST",
                      data:{idr:idr},
                      success:function(data)
                      {
                         swal("succès!", ''+data, "success");
                         dataTable.ajax.reload();
                      }
                    });
	          }
	          else
	          {
	            swal("Ouf!!!", "opération annulée 🙆", "error");
	          }

          });

          $(document).on('click', '.desactiver', function(){
              var idr = $(this).attr("idr");

              if(confirm("Etes-vous sûre de vouloir le desactiver?"))
	          {
	            
	           		$.ajax({
                      url:"<?php echo base_url(); ?>admin/desactivation_rubrique",
                      method:"POST",
                      data:{idr:idr},
                      success:function(data)
                      {
                         swal("succès!", ''+data, "success");
                         dataTable.ajax.reload();
                      }
                    });
	          }
	          else
	          {
	            swal("Ouf!!!", "opération annulée 🙆", "error");
	          }

          });

         
          $(document).on('change', '#formations',function(){
	          	var idformation = $(this).val();
	          	if (idformation !='') {
	          		$('#idformation').val(idformation);
	          	}
	          	else{
	          		swal("Erreur!!!","veillez selectionner la formation","error");
	          	}
	          
          });

           $(document).on('change', '#editions',function(){
	          	var idedition = $(this).val();
	          	if (idedition !='') {
	          		$('#idedition').val(idedition);
	          	}
	          	else{
	          		swal("Erreur!!!","veillez selectionner l'édition ","error");
	          	}
	          
          });




     });  
     </script>





</body>

</html>
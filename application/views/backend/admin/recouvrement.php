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
                                          <?php include('__recouvrement_app.php') ?>
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
			                               <select  name="tranches" id="tranches" class="form-control selectpicker" data-live-search="true">
			                               	<?php 
			                               	if ($tranches->num_rows() > 0) {
			                               		?>
			                               		<option value="">Selectionnez tranche</option>
			                               		<?php
			                               		foreach ($tranches->result_array() as $key) {
			                               			?>
			                               			<option value="<?php echo($key['idt']) ?>">

			                               			<?php echo($key['nomt']) ?>&nbsp; 
			                               			<?php echo($key['nom_formation']) ?>&nbsp; <?php echo($key['nom_edition']) ?>
			                               				
			                               			</option>
			                               			<?php
			                               		}
			                               	}
			                               	else{

			                               		?>
			                               		<option value="">Aucune tranche n'est diponible</option>
			                               		<?php
			                               	}
			                               	?>
			                               	
			                               </select> 
			                        </div>


				                    <div class="form-group col-md-12">
				                        <label><i class="fa fa-calendar"></i> Date debit recouvrement</label>
				                        <input type="date" class="form-control" name="date_debit" id="date_debit" >
				                    </div>

				                    <div class="form-group col-md-12">
				                         <label><i class="fa fa-calendar"></i> Date fin recouvrement</label>
				                        <input type="date" class="form-control" name="date_fin" id="date_fin" >
				                    </div>

		                        </div>
		                    </div>

		                    <div class="buysell-field form-action text-center mb-2">
	                            <div>

	                            	<input type="hidden" name="idt" id="idt" placeholder="idt" />

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
               $('.modal-title').text("Paramètrage des recouvrements forcés aux différentes formations");  
               $('#action').val("Add");  
               $('#user_uploaded_image').html('');  
          })  
          // var dataTable = $('#user_data').DataTable();
          var dataTable = $('#user_data').DataTable({  
               "processing":true,  
               "serverSide":true,  
               "order":[],  
               "ajax":{  
                    url:"<?php echo base_url() . 'admin/fetch_recouvrement'; ?>",  
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
               var idt 			= $('#idt').val(); 
               var date_debit  			= $('#date_debit ').val();
               var date_fin  		= $('#date_fin ').val(); 

               var action = $('#action').val();

               
               if(idt != ''  && date_debit  != '' && date_fin != '' )
                {

                  if (action =="Add") {
                       
                      $.ajax({  
                           url:"<?php echo base_url() . 'admin/operation_recouvrement'?>",  
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
                             url:"<?php echo base_url() . 'admin/modification_recouvrement'?>",  
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
                    url:"<?php echo base_url(); ?>admin/fetch_single_recouvrement",  
                    method:"POST",  
                    data:{idr:idr},  
                    dataType:"json",  
                    success:function(data)  
                    {  
                         $('#userModal').modal('show');  
                         
                         $('#date_debit').val(data.date_debit); 
                         $('#date_fin').val(data.date_fin); 
                         
                         $('.modal-title').text("modification de recouvrement");  
                         $('#idt').val(data.idt); 
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
                      url:"<?php echo base_url(); ?>admin/supression_recouvrement",
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
              var idt = $(this).attr("idt");

              if(confirm("Etes-vous sûre de vouloir activer la tranche?"))
	          {
	            
	           		$.ajax({
                      url:"<?php echo base_url(); ?>admin/activation_tranche",
                      method:"POST",
                      data:{idt:idt},
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
              var idt = $(this).attr("idt");

              if(confirm("Etes-vous sûre de vouloir desactiver la tranche?"))
	          {
	            
	           		$.ajax({
                      url:"<?php echo base_url(); ?>admin/desactivation_tranche",
                      method:"POST",
                      data:{idt:idt},
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

         
          $(document).on('change', '#tranches',function(){
	          	var idt = $(this).val();
	          	if (idt !='') {
	          		$('#idt').val(idt);
	          	}
	          	else{
	          		swal("Erreur!!!","veillez selectionner la tranche","error");
	          	}
	          
          });

           

     });  
     </script>





</body>

</html>
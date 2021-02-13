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
                                          <?php include('__reponse_app.php') ?>
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
			                            <label><i class="fa fa-bus"></i> Nom de la question</label>
			                               <select  name="questions" id="questions" class="form-control selectpicker" data-live-search="true">
			                               	<?php 
			                               	if ($questions->num_rows() > 0) {
			                               		?>
			                               		<option value="">Selectionnez la question</option>
			                               		<?php
			                               		foreach ($questions->result_array() as $key) {
			                               			?>
			                               			<option value="<?php echo($key['idq']) ?>">
			                               				<?php echo(substr($key['nomq'], 0,50)) ?> ...</option>
			                               			<?php
			                               		}
			                               	}
			                               	else{

			                               		?>
			                               		<option value="">Aucune question n'est diponible</option>
			                               		<?php
			                               	}
			                               	?>
			                               	
			                               </select> 
			                        </div>

			                        

			                        <div class="form-group col-md-12">
				                        <label><i class="fa fa-pencil"></i> Nom de la question</label>
				                        <input type="text" class="form-control" name="valeur" id="valeur" placeholder="Entrez la réponse">
				                        
				                    </div>

				                   
		                        </div>
		                    </div>

		                    <div class="buysell-field form-action text-center mb-2">
	                            <div>

	                            	<input type="hidden" name="idq" id="idq" placeholder="idq" />


	                            	<input type="hidden" name="idrep" id="idrep" />
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



  	<style>
    .removeRow
    {
     background-color: #FF0000;
        color:#FFFFFF;
    }
    </style>
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
               $('.modal-title').text("Paramètrage des réponses aux questions");  
               $('#action').val("Add");  
               $('#user_uploaded_image').html('');  
          })  
          // var dataTable = $('#user_data').DataTable();
          var dataTable = $('#user_data').DataTable({  
               "processing":true,  
               "serverSide":true,  
               "order":[],  
               "ajax":{  
                    url:"<?php echo base_url() . 'admin/fetch_reponse'; ?>",  
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
               var idq 			        = $('#idq').val();
               var valeur 				= $('#valeur').val();  
               var action = $('#action').val();

               if(idq != '' && valeur  != '')
                {

                  if (action =="Add") {
                       
                      $.ajax({  
                           url:"<?php echo base_url() . 'admin/operation_reponse'?>",  
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
                             url:"<?php echo base_url() . 'admin/modification_reponse'?>",  
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
               var idrep = $(this).attr("idrep");  
               $.ajax({  
                    url:"<?php echo base_url(); ?>admin/fetch_single_reponse",  
                    method:"POST",  
                    data:{idrep:idrep},  
                    dataType:"json",  
                    success:function(data)  
                    {  
                         $('#userModal').modal('show');  
                         $('#idq').val(data.idq);
                         $('#valeur').val(data.valeur);
                        
                         $('.modal-title').text("modification de la réponse "+data.valeur);  
                         $('#idrep').val(idrep);   
                         $('#action').val("Edit");  
                    }  
               });  
          });

          $(document).on('click', '.delete', function(){
              var idrep = $(this).attr("idrep");

              if(confirm("Are you sure you want to delete this?"))
	          {
	            
	           		$.ajax({
                      url:"<?php echo base_url(); ?>admin/supression_reponse",
                      method:"POST",
                      data:{idrep:idrep},
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

          
          $(document).on('change', '#questions',function(){
	          	var idq = $(this).val();
	          	if (idq !='') {
	          		$('#idq').val(idq);
	          	}
	          	else{
	          		swal("Erreur!!!","veillez selectionner la formation","error");
	          	}
	          
          });


          $('.delete_checkbox').click(function(){
            if($(this).is(':checked'))
            {
             $(this).closest('tr').addClass('removeRow');
            }
            else
            {
             $(this).closest('tr').removeClass('removeRow');
            }
          });


          $('#delete_all').click(function(event){
              event.preventDefault();
                var checkbox = $('.delete_checkbox:checked');
              if(checkbox.length > 0)
              {
                 var checkbox_value = [];
                 $(checkbox).each(function(){
                  checkbox_value.push($(this).val());
                 });

                 // alert("id reponse:"+checkbox_value);
                 $.ajax({
                    url:"<?php echo base_url(); ?>Admin/Delete_multiple_reponse",
                    method:"POST",
                    data:{
                      checkbox_value:checkbox_value
                    },
                    success:function()
                    {
                      $('.removeRow').fadeOut(1500);
                      dataTable.ajax.reload();
                    }
                 });
              }
              else
              {
                swal("Erreur!!!", "🙆veillez selectionner une réponse appropriée🙆", 'error');
               
              }
              
           });

          

     });  
     </script>


</body>

</html>
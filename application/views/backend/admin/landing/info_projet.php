<!DOCTYPE html>
<html lang="fr" class="js">

<head>
    <?php $this->load->view('backend/admin/_meta') ?>
</head>

<body class="nk-body layout-apps has-apps-sidebar npc-apps-messages ">
    <div class="nk-app-root">

    	<?php $this->load->view('backend/admin/_navigation') ?>
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <?php $this->load->view('backend/admin/_navMenu') ?>
                <!-- main header @e -->

               <!-- mes script commencent -->
                <div class="nk-content nk-content-lg nk-content-fluid">
                    <div class="container-xl wide-lg card">
                        <div class="nk-content-inner card-body">
                            <div class="nk-content-body">
                                <!--  --><!-- nk-block -->
                                <div class="nk-block">
                                    <div  class="plan-iv">
                                        
                                        <div class="plan-iv-list nk-slider nk-slider-s2">
                                            
                                            <div class="col-md-12">
                                            	<div class="row">
                                            		
                                            		 <!-- mes script commencent -->
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
		                                                <table id="user_data" class="table table-member ">
		                                                    <thead class="tb-member-head thead-light">  
		                                                        <tr> 

		                                                        	<th width="5%">Image</th> 
		                                                            <th width="35%">Titre</th>  
		                                                            <th width="30%">Description</th>
		                                                            
		                                                            <th width="20%">Mise à jour</th>
		                                                             
		                                                            
		                                                            <th width="5%">Modifier</th> 
		                                                            <th width="5%">Supprimer</th>  
		                                                        </tr>  
		                                                   </thead> 

		                                                   <tfoot>  
		                                                        <tr> 
		                                                        	<th width="5%">Image</th> 
		                                                            <th width="35%">Titre</th>  
		                                                            <th width="30%">Description</th>

		                                                            <th width="20%">Mise à jour</th>
		                                                             
		                                                            
		                                                            <th width="5%">Modifier</th> 
		                                                            <th width="5%">Supprimer</th>    
		                                                        </tr>  
		                                                   </tfoot>   
		                                                    
		                                                </table>
		                                            </div>
		                                          </div>
		                                          <!-- fin insertion tableau -->
		                                          <!-- fin de mes scripts -->

                                            	</div>
                                            </div>

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
      <?php $this->load->view('backend/admin/_script') ?>

 

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

                        <form method="post" id="user_form" enctype="multipart/form-data" class="col-md-12 row">

                        	<div class="form-group col-md-12">
                        		<label><i class="fa fa-tag"></i> Titre du projet</label>
                        		<input type="text" name="titre" id="titre" class="form-control titre" placeholder="Entrez le titre du projet">
                        	</div>

                        	<!-- debit ajout -->
	                        <div class="form-group jf-inputwithicon col-md-12">
	                            <label><i class="fa fa-pencil"></i> Description du projet</label>
	                            <textarea class="form-control" name="description" id="description" placeholder="Description du projet"></textarea>
	                        </div>
	                        <!-- fin ajout -->

	                        <div class="form-group col-md-12">
                              <label><i class="fa fa-camera"></i> Selectionner l'image de projet</label>
                              <input type="file" name="user_image" id="user_image" class="form-control" />
                              
                           </div>

	                        <!-- <div class="form-group col-md-12">
                        		<label><i class="fa fa-git"></i> Icone de l'information</label>
                        		<input type="text" name="icone" id="icone" class="form-control titre" placeholder="Entrez le icone" value="fa-git">
                        	</div> -->

                        	<div class="col-md-12">
	                     		<div class="row">

	                     			<div class="col-md-4 mb-2"></div>
		                     		<div class="col-md-4">
		                     			<div class="col-md-12">
		                     				<div class="row">
		                     					<div class="col-md-12" style="margin-top: 7px;">
		                     						<span id="user_uploaded_image"></span>
		                     					</div>
		                     					
		                     				</div>
		                     			</div>
	                     				
	                     				
	                     			</div>
	                     			<div class="col-md-4"></div>
	                     			
	                     		</div>
	                     	</div>

                        	<div class="col-md-12" style="margin-bottom: 10px;">
                    			<div class="row">
                    				<div class="col-md-4"></div>
                    				<div class="col-md-4">

                    					<div class="buysell-field form-action text-center mb-2">
				                            <div>

				                            	<input type="hidden" name="idtinfo_projet" id="idtinfo_projet" />
             									<input type="hidden" name="operation" id="operation" />
			                    				<input type="submit" name="action" id="action" class="btn btn-primary btn-lg" value="Add" />
				                            </div>
				                            <div class="pt-3">
				                                <a href="javascript:void(0);" data-dismiss="modal" class="link link-danger">Annuler l'opération</a>
				                            </div>
				                        </div>
                    					
                    				</div>
                    				<div class="col-md-4"></div>
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
            //alert("boom");
        });
    </script>

     <script type="text/javascript" language="javascript" >  
     $(document).ready(function(){  
          $('#add_button').click(function(){  
               $('#user_form')[0].reset();  
               $('.modal-title').text("Paramètrage des informations des projets");  
               $('#action').val("Add");  
          })  
          // var dataTable = $('#user_data').DataTable();
          var dataTable = $('#user_data').DataTable({  
               "processing":true,  
               "serverSide":true,  
               "order":[],  
               "ajax":{  
                    url:"<?php echo base_url() . 'admin/fetch_tinfo_projet'; ?>",  
                    type:"POST"  
               },  
               "columnDefs":[  
                    {  
                         "targets":[0, 0, 0],  
                         "orderable":false,  
                    },  
               ],  
          });

          $(document).on('submit', '#user_form', function(event){  
               event.preventDefault();  
               var titre = $('#titre').val();  
               var description = $('#description').val();
               var extension 	= $('#user_image').val().split('.').pop().toLowerCase(); 
               
               var action = $('#action').val();

               if(extension != '')  
               {  
                    if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                    {  
                         alert("Invalid Image File");  
                         $('#user_image').val('');  
                         return false;  
                    }  
               }


               if(titre != '' && description != '')
                {

                  if (action =="Add") {
                       
                      $.ajax({  
                           url:"<?php echo base_url() . 'admin/operation_tinfo_projet'?>",  
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
                             url:"<?php echo base_url() . 'admin/modification_tinfo_projet'?>",  
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
                  swal("Erreur!!!", "Tous les champs doivent être remplis🔕", "error");
                }


                 
          });  


          $(document).on('click', '.update', function(){  
               var idtinfo_projet = $(this).attr("idtinfo_projet");  
               $.ajax({  
                    url:"<?php echo base_url(); ?>admin/fetch_single_tinfo_projet",  
                    method:"POST",  
                    data:{idtinfo_projet:idtinfo_projet},  
                    dataType:"json",  
                    success:function(data)  
                    {  
                         $('#userModal').modal('show');  
                         $('#titre').val(data.titre);
                         $('#description').val(data.description);

                         $('#user_uploaded_image').html(data.user_image);
                         
                         $('.modal-title').text("modification des informations du projet "+data.titre);  
                         $('#idtinfo_projet').val(idtinfo_projet);   
                         $('#action').val("Edit");  
                    }  
               });  
          });

          $(document).on('click', '.delete', function(){
              var idtinfo_projet = $(this).attr("idtinfo_projet");

              if(confirm("Are you sure you want to delete this?"))
	          {
	            
	           		$.ajax({
                      url:"<?php echo base_url(); ?>admin/supression_tinfo_projet",
                      method:"POST",
                      data:{idtinfo_projet:idtinfo_projet},
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





     });  
     </script>






</body>

</html>
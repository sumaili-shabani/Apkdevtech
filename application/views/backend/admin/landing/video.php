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
                                                    
                                                    <div class="col-md-12">
		                                             <div class="row">
		                                               <div class="col-md-12">

		                                               	<a href="" class="btn btn-dim btn-sm btn-outline-light pull-center  mb-4"><i class="fa fa-refresh"></i> Actualisez</a>
														&nbsp;&nbsp;&nbsp;&nbsp;
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
	                                                            <th width="10%">Image</th> 
	                                                        	<th width="20%">Nom de la vidéo</th>  
	                                                            <th width="20%">Description </th> 
	                                                            <th width="20%">Lien de la vidéo </th> 
				                                                <th width="20%">Mise à jour</th>
				                                                 
				                                                
				                                                <th width="5%">Modifier</th> 
				                                                <th width="5%">Supprimer</th> 
	                                                        </tr>    
		                                                   </thead> 

		                                                   <tbody>
                                                   
		                                                   </tbody>

		                                                   <tfoot>  
	                                                        <tr>  
	                                                            <th width="10%">Image</th> 
	                                                        	<th width="20%">Nom de la vidéo</th>  
	                                                            <th width="20%">Description </th> 
	                                                            <th width="20%">Lien de la vidéo </th> 
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
                        <span class="nk-block-title modal-title">Paramètrage des émissions</span>
                        
                    </div>
                    <div class="nk-block">

                    	<form method="post" id="user_form" enctype="multipart/form-data" class="col-md-12 row">
                    		
                    		<div class="form-group col-md-12">
				                     <label> <i class="fa fa-edit"></i> Entrer le nom de la vidéo</label>
				                     <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrez le nom de la vidéo" />
				                </div>

				                <div class="form-group col-md-12">
				                     <label> <i class="fa fa-globe"></i> le lien de la viéo</label>
				                     <input type="url" name="lien" id="lien" class="form-control" placeholder="https://youtube.com/" />
				                </div>

				                <div class="form-group col-md-12">
                            <label><i class="fa fa-camera"></i> Selectionner l'image de la vidéo</label>
                            <input type="file" name="user_image" id="user_image" class="form-control" />
                            
                         </div>


				                <div class="form-group jf-inputwithicon col-md-12">
		                        <label><i class="fa fa-edit"></i> La description de la Vidéo</label>
		                        <textarea class="form-control" name="description" id="description" placeholder="Parler un peu sur la vidéo"></textarea>
		                    </div>

		                    <div class="col-md-12">
		                     		<div class="row">

		                     			<div class="col-md-1 mb-2"></div>
			                     		<div class="col-md-10">
			                     			<div class="col-md-12">
			                     				<div class="row">
			                     					<div class="col-3"></div>
			                     					<div class="col-6">
			                     						<div class="col-md-12" style="margin-top: 7px;">
			                     							<span id="user_uploaded_image"></span>
			                     						</div>
			                     					</div>
			                     					<div class="col-3"></div>
			                     					
			                     				</div>
			                     			</div>
		                     				
		                     				
		                     			</div>
		                     			<div class="col-md-1"></div>
		                     			
		                     		</div>
		                     	</div>

                    		
                    		<div class="col-md-12" style="margin-bottom: 20px;">
                    			<div class="row">
                    				<div class="col-md-4"></div>
                    				<div class="col-md-4">

                    					<div class="buysell-field form-action text-center mb-2">
				                            <div>

				                            	<input type="hidden" name="idv" id="idv" />
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

     	var  $message = '';

          $('#add_button').click(function(){  
               $('#user_form')[0].reset();  
               $('.modal-title').text("Paramètrage des nos vidéos  d'informations");  
               $('#action').val("Add");  
          })  
          // var dataTable = $('#user_data').DataTable();
          var dataTable = $('#user_data').DataTable({  
               "processing":true,  
               "serverSide":true,  
               "order":[],  
               "ajax":{  
                    url:"<?php echo base_url() . 'admin/fetch_video'; ?>",  
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
               var nom = $('#nom').val();  
               var description = $('#description').val(); 
               var lien = $('#lien').val(); 
               var extension 	= $('#user_image').val().split('.').pop().toLowerCase(); 
               var action = $('#action').val();


               if(extension != '' )  
               {  
                    if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                    {  
                         Swal.fire("erreur!!!!","Invalid Image File","error");  
                         $('#user_image').val('');  
                         return false;  
                    }  
               }


               if(nom != '' && description !='' && lien !='')
                {

                  if (action =="Add") {
                       
                      $.ajax({  
                           url:"<?php echo base_url() . 'admin/operation_video'?>",  
                           method:'POST',  
                           data:new FormData(this),  
                           contentType:false,  
                           processData:false,  
                           success:function(data)  
                           {  
                                // Swal.fire('succès', ''+data, 'success'); 
                                $message =  data;
															    !function(o) {
															        var $data = "Opération reussie avec succès 👌";
															      toastr.clear(), o.Toast("<h5>"+$data+"!!!</h5><p>"+$message+".</p>", "success");
															   }(NioApp, jQuery); 

                                $('#user_form')[0].reset();  
                                $('#userModal').modal('hide');  
                                dataTable.ajax.reload();  
                           }  
                      });
                        // alert("insertion");

                  }
                  if (action == 'Edit') {

                        $.ajax({  
                             url:"<?php echo base_url() . 'admin/modification_video'?>",  
                             method:'POST',  
                             data:new FormData(this),  
                             contentType:false,  
                             processData:false,  
                             success:function(data)  
                             {  
                                  // Swal.fire('succès', ''+data, 'success'); 

                                  $message =  data;
															    !function(o) {
															        var $data = "Opération reussie avec succès 👌";
															      toastr.clear(), o.Toast("<h5>"+$data+"!!!</h5><p>"+$message+".</p>", "success");
															   }(NioApp, jQuery); 


                                  $('#user_form')[0].reset();  
                                  $('#userModal').modal('hide');  
                                  dataTable.ajax.reload();  
                             }  
                        });

                  }

                }
                else
                {
                  Swal.fire("Erreur!!!", "Tous les champs doivent être remplis", "error");
                }
 
          });  


          $(document).on('click', '.update', function(){  
               var idv = $(this).attr("idv");  
               $.ajax({  
                    url:"<?php echo base_url(); ?>admin/fetch_single_video",  
                    method:"POST",  
                    data:{idv:idv},  
                    dataType:"json",  
                    success:function(data)  
                    {  
                         $('#userModal').modal('show');  
                         $('#nom').val(data.nom);
                         $('#description').val(data.description);
                         $('#lien').val(data.lien);
                         $('#user_uploaded_image').html(data.user_image);
                         
                         $('.modal-title').text("modification de la vidéo  "+data.nom);  
                         $('#idv').val(idv);   
                         $('#action').val("Edit");  
                    }  
               });  
          });

          $(document).on('click', '.delete', function(){
              var idv = $(this).attr("idv");

              if(confirm("Are you sure you want to delete this?"))
	          {
	            
	           		$.ajax({
                      url:"<?php echo base_url(); ?>admin/supression_video",
                      method:"POST",
                      data:{idv:idv},
                      success:function(data)
                      {
                         // Swal.fire("succès!", ''+data, "success"); 
                         $message =  data;
						    !function(o) {
						        var $data = "Opération reussie avec succès 👌";
						      toastr.clear(), o.Toast("<h5>"+$data+"!!!</h5><p>"+$message+".</p>", "success");
						   }(NioApp, jQuery); 

                         dataTable.ajax.reload();
                      }
                    });
	          }
	          else
	          {
	            Swal.fire("Ouf!!!", "opération annulée :)", "error");
	          }

          });



     });  
     </script>





</body>

</html>
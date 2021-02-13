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
                                                            <th width="40%">Nom de rôle</th>  
                                                            <th width="40%">Mise à jour</th>
                                                             
                                                            
                                                            <th width="5%">Modifier</th> 
                                                            <th width="5%">Supprimer</th>  
                                                        </tr>  
                                                   </thead> 

                                                   <tfoot>  
                                                        <tr>  
                                                            <th width="40%">Nom de rôle</th>  
                                                            <th width="40%">Mise à jour</th>
                                                             
                                                            
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
                        <span class="nk-block-title modal-title">Paramètrage des émissions</span>
                        
                    </div>
                    <div class="nk-block">

                    	<form method="post" id="user_form" enctype="multipart/form-data" class="col-md-12 row">
                    		
                    		<div class="col-md-12">
                    			<div class="input-group flex-nowrap mb-2">
          								  <div class="input-group-prepend">
          								    <span class="input-group-text" id="addon-wrapping"><i class="fa fa-pencil"></i></span>
          								  </div>
          								  <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrez le nom de role" />
          								</div>
                    		</div>

                    		

                    		<div class="col-md-12" style="margin-bottom: 20px;">
                    			<div class="row">
                    				<div class="col-md-4"></div>
                    				<div class="col-md-4">

                    					<div class="buysell-field form-action text-center mb-2">
				                            <div>

				                            	<input type="hidden" name="idrole" id="idrole" />
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
               $('.modal-title').text("Paramètrage des rôles");  
               $('#action').val("Add");  
          })  
          // var dataTable = $('#user_data').DataTable();
          var dataTable = $('#user_data').DataTable({  
               "processing":true,  
               "serverSide":true,  
               "order":[],  
               "ajax":{  
                    url:"<?php echo base_url() . 'admin/fetch_role'; ?>",  
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
               
               var action = $('#action').val();


               if(nom != '')
                {

                  if (action =="Add") {
                       
                      $.ajax({  
                           url:"<?php echo base_url() . 'admin/operation_role'?>",  
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
                             url:"<?php echo base_url() . 'admin/modification_role'?>",  
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
                  alert("Tous les champs doivent être remplis", "", "danger");
                }


                 
          });  


          $(document).on('click', '.update', function(){  
               var idrole = $(this).attr("idrole");  
               $.ajax({  
                    url:"<?php echo base_url(); ?>admin/fetch_single_role",  
                    method:"POST",  
                    data:{idrole:idrole},  
                    dataType:"json",  
                    success:function(data)  
                    {  
                         $('#userModal').modal('show');  
                         $('#nom').val(data.nom);
                         
                         $('.modal-title').text("modification de rôle "+data.nom);  
                         $('#idrole').val(idrole);   
                         $('#action').val("Edit");  
                    }  
               });  
          });

          $(document).on('click', '.delete', function(){
              var idrole = $(this).attr("idrole");

              if(confirm("Are you sure you want to delete this?"))
	          {
	            
	           		$.ajax({
                      url:"<?php echo base_url(); ?>admin/supression_role",
                      method:"POST",
                      data:{idrole:idrole},
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
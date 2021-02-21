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
                               <!-- nk-block -->
                                <div class="nk-block">
                                    <div  class="plan-iv">
                                        
                                        <div class="plan-iv-list nk-slider nk-slider-s2">
                                            
                                            <div class="col-md-12">
                                                <div class="row">

                                                	<div class="col-md-12">
			                                            <div class="row">
			                                               <div class="col-md-12">
			                                                 <button class="btn btn-dim btn-sm btn-outline-light pull-right  mb-4" id="add_button" data-toggle="modal" data-target="#userModal"><i class="fa fa-plus"></i>Effectuer l'opération</button>
			                                               </div>
			                                            </div>
			                                        </div>
                                                    
                                                    <!-- mes script commencent -->
                                                    
                                                   
							                         
							                         <form class="form-group col-md-12" method="post" action="<?php echo base_url(); ?>admin/download_photo_galery" style="margin-top: 10px;">
							                         	<div class="row" id="uploaded_images" style="margin-top: 10px;">
							                         		
							                         	</div>

							                         	<div class="row resultat" id="country_table" style="margin-top: 10px;">

							                        	</div>

							                            <div class="col-md-12 col-lg-12" style="margin-top: 10px;">
							                            	<div class="row">
							                            		<div class="col-md-4"></div>
							                            		<div class="col-md-4">
							                            			<nav aria-label="Page navigation example" id="pagination_link">
																	  
																	</nav>
							                            		</div>
							                            		<div class="col-md-4"></div>
							                            	</div>
							                            </div>

							                         	<div class="form-group col-md-12" style="margin-top: 10px;">
							                         		<div class="row">
															  	
															  	<div class="col-md-3"></div>
							                         			<div class="col-md-6">
							                         				<button type="submit" name="download" class="btn btn-primary"> <i class="fa fa-save fa-lg"></i> &nbsp; Télécharger</button>&nbsp;

							                         			</div>
							                         			<div class="col-md-3"></div>
															   
															 </div>
							                         	</div>

							                         </form>

							                       
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
                          <label><i class="fa fa-university"></i>&nbsp; Le nom du projet</label>  
                          <select name="projet_ok" id="projet_ok" class="form-control selectpicker" data-live-search="true">
                            <option value="">Selectionez Le nom du projet</option>
                            <?php
                              if ($projets->num_rows() > 0) {
                               foreach ($projets->result_array() as $key) {
                                  ?>
                                   <option value="<?php echo($key['idtinfo_projet']) ?>"><?php echo($key['titre']) ?></option>
                                   <?php
                               }
                              }
                              else{
                                ?>
                                <option value="">aucun projet  n'est disponible</option>
                                <?php
                              }
                            ?>
                            
                          </select>
                        </div>
                            
                        <div class="form-group col-md-12">
                        	 <label for="files" class="text-center"><i class="fa fa-picture-o"></i>&nbsp; Selectionnez multiples photos</label>
	                         <input type="file" name="user_image" id="user_image" class="form-control" />
	                        <hr>
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

             $(document).on('submit', '#user_form', function(event){  
               event.preventDefault();  
               var idtinfo_projet = $('#idtinfo_projet').val();  
               
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


               if(idtinfo_projet != '')
                {

                  if (action =="Add") {
                       
                      $.ajax({  
                           url:"<?php echo base_url() . 'admin/operation_insertion_galerie'?>",  
                           method:'POST',  
                           data:new FormData(this),  
                           contentType:false,  
                           processData:false,  
                           success:function(data)  
                           {  
                                swal('succès', ''+data, 'success'); 
                                $('#user_form')[0].reset();  
                                $('#userModal').modal('hide');  
                                 load_country_data(1);  
                           }  
                      });
                        // alert("insertion");

                  }
                  else{
                  	
                  }
                  

                }
                else
                {
                  swal("Erreur!!!", "Tous les champs doivent être remplis🔕", "error");
                }


                 
          });  



         function load_country_data(page)
		 {
		  $.ajax({
		   url:"<?php echo base_url(); ?>admin/pagination_galery_picture/"+page,
		   method:"GET",
		   dataType:"json",
		    beforeSend:function()
		    {
		     	$('#country_table').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
		    },
		   success:function(data)
		   {
		    $('#country_table').html(data.country_table);
		    $('#pagination_link').html(data.pagination_link);
		   }
		  });
		 }
		 
		 load_country_data(1);

		 $(document).on("click", ".pagination li a", function(event){
		  event.preventDefault();
		  var page = $(this).data("ci-pagination-page");
		  load_country_data(page);
		 });

		

		 $(document).on('click', '.supprimer', function(e){
		 	e.preventDefault();
	           var idd = $(this).attr('idd');

				  if(confirm("Etes-vous sûre de vouloir le supprimer?"))
		          {
		            
			          if(idd !='')
		              {
		                 // alert("idd:"+idd);
						  $.ajax({
				              url:"<?php echo base_url(); ?>admin/supression_photo_picture",
				              method:"POST",
				              data:{idd:idd},
				              success:function(data)
				              {
				                 Swal.fire("succès!!!👌", ''+data, "success");
				                 load_country_data(1);
				              }
				          });
		              }
		              else
		              {
		                Swal.fire("error!!!🙆", "Veillez selectionner aumoins un message pour éffectuer cette opération", "error");
		               
		              }
		           		
		          }
		          else
		          {
		            Swal.fire("Ouf!!!", "opération annulée :)", "error");
		          }

	          	
	      });

         $("#projet_ok").on("change", function(t) {

            var idtinfo_projet = $(this).val();
            if (idtinfo_projet !='') {
                $('#idtinfo_projet').val(idtinfo_projet);
            }
            else{

                $('#idtinfo_projet').val("");                
                swal("Ouf!!!", "Veillez complèter le projet 😰", "error"); 
            }
        });





    });
    </script>

    <script type="text/javascript">
		$(document).ready(function(){
		 $('.select').click(function(){
		  if(this.checked)
		  {
		   $(this).parent().css('border', '5px solid #ff0000');
		  }
		  else
		  {
		   $(this).parent().css('border', 'none');
		  }
		 });
		});
	</script>





</body>

</html>
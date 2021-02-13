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
                                          <?php include('_paiement_compte.php') ?>
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

		                           <div class="form-group col-md-12">
			                            <label><i class="fa fa-user"></i> Nom de  l'apprenant</label>
			                               <select  name="Hommes" id="Hommes" class="form-control selectpicker" data-live-search="true">
			                               	<?php 
			                               	if ($Hommes->num_rows() > 0) {
			                               		?>
			                               		<option value="">Selectionnez le nom de l'apprenant</option>
			                               		<?php
			                               		foreach ($Hommes->result_array() as $key) {
			                               			?>
			                               			<option value="<?php echo($key['id']) ?>">
			                               				<?php echo($key['first_name'].' '.$key['last_name']) ?></option>
			                               			<?php
			                               		}
			                               	}
			                               	else{

			                               		?>
			                               		<option value="">Aucun apprenant n'est diponible</option>
			                               		<?php
			                               	}
			                               	?>
			                               	
			                               </select> 
			                        </div>

		                            

		                            <div class="form-group col-md-12">
		                                <label><i class="fa fa-calendar"></i> Date de  paiement </label>
		                                <input type="date" name="date_paie" id="date_paie" class="form-control" />  
		                            </div>

		                            <div class="form-group col-md-12">
		                                <label><i class="fa fa-calendar"></i> Entrez le montant</label>
		                                <input type="number" min="1" name="montant" id="montant" class="form-control" placeholder="10 $" />  
		                            </div>

		                             <div class="form-group col-md-12">
					                    <label><i class="fa fa-map"></i> Entrez le motif de paiement</label>
					                    <textarea name="motif" id="motif" placeholder="Entrez le motif de paiement" class="form-control"></textarea>
					                </div>

					                <div class="col-md-12 aff">
				                    	<div class="row">
				                    		<div class="col-md-5">
				                    			<span id="nom_complet" class="text-center"></span>
				                    		</div>
				                    		
				                    		<div class="col-md-5">
				                    			<span id="info" class="text-center"></span>
				                    		</div>
				                    		<div class="col-md-2">
				                    			<span id="user_uploaded_image"></span>
				                    		</div>

				                    	</div>
				                    </div>

		                        </div>
		                    </div>


		                    

		                    <div class="buysell-field form-action text-center mb-2">
	                            <div>

	                            	<input type="hidden" name="idpersonne" id="idpersonne" placeholder="idpersone" />
        						            <input type="hidden" name="idp" id="idp" />
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
               $('.modal-title').text("Paiement des apprenants");  
               $('#action').val("Add");  
               $('#user_uploaded_image').html(''); 
               $('.aff').hide(); 
          })  
          // var dataTable = $('#user_data').DataTable();
          var dataTable = $('#user_data').DataTable({  
               "processing":true,  
               "serverSide":true,  
               "order":[],  
               "ajax":{  
                    url:"<?php echo base_url() . 'admin/fetch_paiement'; ?>",  
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
               var idpersonne = $('#idpersonne').val(); 
               var date_paie = $('#date_paie').val();
               var montant = $('#montant').val();
               var motif = $('#motif').val();
               
               var nom_complet = $('#nom_complet').val();
               
               
               var action = $('#action').val();

               // alert(nomtbl_info+" description:"+description+" action:"+action);


               if(idpersonne != ''  && date_paie != '' && montant !='' && motif !='')
                {

                  if (action =="Add") {
                       
                     if (montant >= 1) {

                     	 $.ajax({  
	                           url:"<?php echo base_url() . 'admin/operation_paiement'?>",  
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
                     else{
                     	swal('erreur!!!', "veillez entrer un montant supperieur à 1$", 'info');
                     }
                        // alert("insertion");

                  }
                  if (action == 'Edit') {

                  		if (montant >= 1) {

	                     	 $.ajax({  
	                             url:"<?php echo base_url() . 'admin/modification_paiement'?>",  
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
	                     else{
	                     	swal('erreur!!!', "veillez entrer un montant supperieur à 1$", 'info');
	                    }

                        

                  }

                }
                else
                {
                  // swall("Tous les champs doivent être remplis", "", "danger");
                  swal("Erreur!!!", "Tous les champs doivent être remplis", "error");
                }


                 
          });  


          $(document).on('click', '.update', function(){  
               var idp = $(this).attr("idp");  
               $.ajax({  
                    url:"<?php echo base_url(); ?>admin/fetch_single_paiement",  
                    method:"POST",  
                    data:{idp:idp},  
                    dataType:"json",  
                    success:function(data)  
                    {  
                    	 $('.aff').show();
                         $('#userModal').modal('show');  
                         $('#date_paie').val(data.date_paie);
                         $('#idpersonne').val(data.idpersonne);
                         $('#montant').val(data.montant);
                         $('#motif').val(data.motif);
                         var idpersonne = data.idpersonne;

                         detail_user(idpersonne);
                         
                         $('.modal-title').text("modification de paiement");  
                         $('#idp').val(idp);  
                         $('#user_uploaded_image').html(data.user_image);  
                         $('#action').val("Edit"); 
                    }  
               });  
          });

          $(document).on('click', '.delete', function(){
              var idp = $(this).attr("idp");

              if(confirm("Etes-vous sûre de vouloire le supprimer?"))
	          {
	            
	           		$.ajax({
                      url:"<?php echo base_url(); ?>admin/supression_paiement",
                      method:"POST",
                      data:{idp:idp},
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

          $(document).on('change', '#Hommes',function(){
	          	var idpersonne = $(this).val();
	          	$('#idpersonne').val(idpersonne);
	          	detail_user(idpersonne);
          	
          });



          function detail_user(id_user){

          	if (id_user !='') {
          		
          		$.ajax({  
                    url:"<?php echo base_url(); ?>admin/fetch_single_personne_user",  
                    method:"POST",  
                    data:{id:id_user},  
                    dataType:"json",  
                    success:function(data)  
                    {   
                         
                         $('.aff').show();
						
                         $('#nom_complet').text('NOM:'+data.first_name+' '+data.last_name+' '+data.prenom+' SEXE:'+data.sexe+' Date de naissance:'+data.date_nais);

                         $('#info').text('email:'+data.email+' adresse:'+data.full_adresse+' téléphone:'+data.telephone );

                         $('#user_uploaded_image').html(data.user_image);
                         
                    }  
               });  

          	}
          	else{
          		swal("Erreur!!!","veillez selectionner le nom de la personne","error");
          	}

          }


     });  
     </script>







</body>

</html>
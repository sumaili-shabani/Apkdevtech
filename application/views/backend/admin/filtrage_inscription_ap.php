
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
                                          <?php include('__filtrage_inscription_app.php') ?>
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
			                            <label><i class="fa fa-user"></i> Nom des utilisateurs</label>
			                               <select  name="Hommes" id="Hommes" class="form-control selectpicker" data-live-search="true">
			                               	<?php 
			                               	if ($apprenants->num_rows() > 0) {
			                               		?>
			                               		<option value="">Selectionnez le nom utilisateur</option>
			                               		<?php
			                               		foreach ($apprenants->result_array() as $key) {
			                               			?>
			                               			<option value="<?php echo($key['id']) ?>">
			                               				<?php echo($key['first_name'].' '.$key['last_name']) ?></option>
			                               			<?php
			                               		}
			                               	}
			                               	else{

			                               		?>
			                               		<option value="">Aucun utilisateur n'est diponible</option>
			                               		<?php
			                               	}
			                               	?>
			                               	
			                               </select> 
			                        </div>

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

			                        <div class="form-group jf-inputwithicon col-md-12">
			                            <label><i class="fa fa-ioxhost"></i> Type des apprenans</label>
			                               <select  name="categories" id="categories" class="form-control selectpicker" data-live-search="true">
			                               	<?php 
			                               	if ($categories->num_rows() > 0) {
			                               		?>
			                               		<option value="">Selectionnez son type</option>
			                               		<?php
			                               		foreach ($categories->result_array() as $key) {
			                               			?>
			                               			<option value="<?php echo($key['idcat']) ?>">
			                               				<?php echo($key['nom']) ?></option>
			                               			<?php
			                               		}
			                               	}
			                               	else{

			                               		?>
			                               		<option value="">Aucun type n'est diponible</option>
			                               		<?php
			                               	}
			                               	?>
			                               	
			                               </select> 
			                        </div>

			                        <div class="form-group col-md-12">
				                        <label><i class="fa fa-calendar"></i> Date d'inscription</label>
				                        <input type="date" class="form-control" name="date_inscription" id="date_inscription" >
				                    </div>


				                    <div class="form-group col-md-12 aff">
				                    	<div class="row">
				                    		<div class="col-md-5" style="margin-top: 7px;">
				                    			<span id="nom_complet" class="text-center"></span>
				                    		</div>
				                    		
				                    		<div class="col-md-5" style="margin-top: 7px;">
				                    			<span id="info" class="text-center"></span>
				                    		</div>
				                    		<div class="col-md-2" style="margin-top: 7px;">
				                    			<span id="user_uploaded_image"></span>
				                    		</div>

				                    	</div>
				                    </div>


		                        </div>
		                    </div>


		                    

		                    <div class="buysell-field form-action text-center mb-2">
	                            <div>

	                            	<input type="hidden" name="idedition" id="idedition" placeholder="idedition" />

	                            	<input type="hidden" name="idformation" id="idformation" placeholder="idformation" />

	                            	<input type="hidden" name="idcat" id="idcat" placeholder="idcat" />

	                            	<input type="hidden" name="id_user" id="id_user" placeholder="id_user" />
	                            	




	                            	<input type="hidden" name="idinscription" id="idinscription" />
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
               $('.modal-title').text("Paramètrage des inscriptions aux formations");  
               $('#action').val("Add");  
               $('#user_uploaded_image').html('');  
          })  

          var dataTable = $('#user_data').DataTable();
          // var dataTable = $('#user_data').DataTable({  
          //      "processing":true,  
          //      "serverSide":true,  
          //      "order":[],  
          //      "ajax":{  
          //           url:"<?php echo base_url() . 'admin/fetch_inscription'; ?>",  
          //           type:"POST"  
          //      },  
          //      "columnDefs":[  
          //           {  
          //                "targets":[0, 3, 4],  
          //                "orderable":false,  
          //           },  
          //      ],  
          // });

          $(document).on('submit', '#user_form', function(event){  
               event.preventDefault();  
               var idedition 			= $('#idedition').val();
               var idformation 			= $('#idformation').val();
               var idcat 				= $('#idcat').val();
               var id_user 				= $('#id_user').val();  
               var date_inscription  	= $('#date_inscription ').val(); 

               var action = $('#action').val();

               
               if(idedition != '' && idformation  != '' && idcat  != '' && id_user  != ''
                && date_inscription  != '' )
                {

                  if (action =="Add") {
                       
                      $.ajax({  
                           url:"<?php echo base_url() . 'admin/operation_inscription'?>",  
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
                             url:"<?php echo base_url() . 'admin/modification_inscription'?>",  
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
               var idinscription = $(this).attr("idinscription");  
               $.ajax({  
                    url:"<?php echo base_url(); ?>admin/fetch_single_inscription",  
                    method:"POST",  
                    data:{idinscription:idinscription},  
                    dataType:"json",  
                    success:function(data)  
                    {  
                         $('#userModal').modal('show');  
                         $('#idedition').val(data.idedition);
                         $('#idformation').val(data.idformation);
                         $('#idcat').val(data.idcat);
                         $('#id_user').val(data.id_user);
                        
                         $('#date_inscription ').val(data.date_inscription ); 
                         $('.modal-title').text("modification de l'inscription");  
                         $('#idinscription').val(idinscription);  
                         $('#user_uploaded_image').html(data.user_image);  
                         $('#action').val("Edit");  
                    }  
               });  
          });

          $(document).on('click', '.delete', function(){
              var idinscription = $(this).attr("idinscription");

              if(confirm("Are you sure you want to delete this?"))
	          {
	            
	           		$.ajax({
                      url:"<?php echo base_url(); ?>admin/supression_inscription",
                      method:"POST",
                      data:{idinscription:idinscription},
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
	          	var id_user = $(this).val();
	          	$('#id_user').val(id_user);
	          	detail_user(id_user);
          	
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

           $(document).on('change', '#categories',function(){
	          	var idcat = $(this).val();
	          	if (idcat !='') {
	          		$('#idcat').val(idcat);
	          	}
	          	else{
	          		swal("Erreur!!!","veillez selectionner la catégorie","error");
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

     <script type="text/javascript">
  var chart = new CanvasJS.Chart("chartContainer", {
        theme: "theme2",
        animationEnabled: true,
        title: {
            text: ""
        },
        data: [
          {
              type: "bar",
              showInLegend: true,
                legendText: "{indexLabel}",                
              dataPoints: [<?php echo $chart_data; ?>]
          }
        ]
    });
    chart.render();

    var chart = new CanvasJS.Chart("chartContainer2", {
        theme: "theme2",
        animationEnabled: true,
        title: {
            text: ""
        },
        data: [
          {
              type: "pie",
              showInLegend: true,
                legendText: "{indexLabel}",                
              dataPoints: [<?php echo $chart_data; ?>]
          }
        ]
    });
    chart.render();

 </script>





</body>

</html>
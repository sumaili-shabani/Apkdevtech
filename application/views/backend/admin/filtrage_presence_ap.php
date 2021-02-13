
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
                                
                                <div class="nk-block">
                                    <div  class="plan-iv">
                                        
                                        <div class="plan-iv-list nk-slider nk-slider-s2">
                                            
                                            <!-- mes script commencent -->
                                            <?php include("__filtrePresence_users_.php") ?>
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
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <div class="nk-block-head nk-block-head-xs text-center">
                        <span class="nk-block-title modal-title">Paramètrage admin</span>
                        
                    </div>
                    <div class="nk-block">

                        <div class="col-md-12 table-responsive resultat_ok">

	                      <table id="user_data2" class="table table-bordered table-striped">  
	                       <thead>  
	                            <tr>  
	                                 <th width="10%">Image</th>  
	                                 <th width="30%">Nom complet </th>  
	                                 <th width="5%">Sexe</th> 
	                                 <th width="50%">Formation</th>
	                                 <th width="5%">Ajouter</th>
	                                 
	                            </tr>  
	                       </thead>
	                       <tbody>
	                       	<?php
	                       	foreach ($users->result_array() as $key) {
	                       		?>
	                       		<tr>
		                       		<td>
		                       			<img src="<?php echo(base_url()) ?>upload/photo/<?php echo($key['image']) ?>" class="img img-responsive img-thumbnail" width="50" height="35">
		                       		</td>
		                       		<td><?php echo(substr($key['first_name'].' '.$key['last_name'], 0,30)) ?>...</td>
		                       		
		                       		<td><?php echo(substr($key['sexe'], 0,10)) ?></td>

		                       		<td><?php echo(substr($key['nom_edition'].''.$key['nom_formation'], 0,20)) ?></td>
		                       		
		                       		<td>
		                       			<a href="javascript:void(0);" id_user="<?= $key['id']?>" class="btn btn-primary btn-sm add_presence">
		                       				<i class="fa fa-calendar"></i>
		                       			</a>
		                       		</td>
		                       		

	                       		</tr>

	                       		<?php
	                       	}

	                       	 ?>
	                       </tbody>
	                       <tfoot>  
	                            <tr>  
	                                 <th width="10%">Image</th>  
	                                 <th width="30%">Nom complet </th>  
	                                 <th width="5%">Sexe</th> 
	                                 <th width="50%">Formation</th>
	                                 <th width="5%">Ajouter</th>
	                            </tr>  
	                       </tfoot>   
	                     </table>
	                		
	                	</div>
                        
                        
                        
                    </div><!-- .nk-block -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div>
    <!-- fin modal-->

     <!-- modal user edit -->
    <div class="modal fade" tabindex="-1" role="dialog" id="userModal_edit">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <div class="nk-block-head nk-block-head-xs text-center">
                        <span class="nk-block-title modal-title">Paramètrage admin</span>
                        
                    </div>
                    <div class="nk-block">

                        <form method="post" id="user_form" enctype="multipart/form-data" class="col-md-12 row">
                            
	                        <div class="col-md-12">
	                     		<div class="row">

	                     			<div class="col-md-6">
	                     				<div class="row">
	                     					<div class="col-md-12">
	                     						<div class="row">
	                     							
	                     							<div class="col-md-6" style="margin-top: 7px;">
			                     						<span id="user_uploaded_image"></span>
			                     					</div>
			                     					<div class="col-md-6" style="margin-top: 7px;">
			                     						<span id="user_uploaded_image2"></span>
			                     					</div>
	                     						</div>
	                     					</div>
	                     				</div>
	                     			</div>
	                     			
	                     			<div class="col-md-6">
	                     				<div class="row">
	                     					<div class="col-md-12">
	                     						<label><i class="fa fa-user"></i> nom: <span class="text-muted" id="first_name"></span></label> 
	                     					</div>

	                     					<div class="col-md-12">
	                     						<label><i class="fa fa-pencil"></i> postnom: <span class="text-muted" id="last_name"></span></label> 
	                     					</div>

	                     					<div class="col-md-12">
	                     						<label><i class="fa fa-google"></i> email: <span class="text-primary" id="email"></span></label> 
	                     					</div>

	                     				</div>
	                     				
	                     			</div>
	                     			<div class="col-md-12">
	                     				<div class="row">

	                     					<div class="col-md-6">
	                     						<label><i class="fa fa-calendar"></i> date de naissace: <span class="text-muted" id="date_nais"></span></label> 
	                     					</div>
	                     					<div class="col-md-3">
	                     						<label><i class="fa fa-phone"></i> N°tél: <span class="text-muted" id="telephone"></span></label> 
	                     					</div>
	                     					<div class="col-md-3">
	                     						<label><i class="fa fa-male"></i> Sexe: <span class="text-danger" id="sexe"></span></label> 
	                     					</div>

	                     					<div class="col-md-12">
		                 						<label><i class="fa fa-map-marker"></i>  Adresse domicile: <span class="text-muted" id="full_adresse"></span></label> 
		                 					</div>

	                     				</div>
	                     			</div>

	                     			
	                     			

	                     		</div>
	                     	</div>

	                     	
	                     	<div class="col-md-12">
	                     		<div class="row">
	                     			<div class="col-md-4"></div>
	                     			<div class="col-md-4">
	                     				<div class="buysell-field form-action text-center mb-2">
				                            <div>

									            <input type="hidden" name="id" id="id" />
									            <input type="hidden" name="operation" id="operation" />

									            <!-- <input type="submit" name="action" id="action" class="btn btn-primary" value="Add" /> -->
				                            </div>
				                            <div class="pt-3">
				                                <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-danger btn-xs"><i class="fa fa-close"></i> Fermer
				                                </a>
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
    <!-- fin modal user_edit-->

    <script type="text/javascript">
        $(document).ready(function(){
            //alert("boom");
        });
    </script>


 <script type="text/javascript" language="javascript" >  
 $(document).ready(function(){  
      $('#add_button').click(function(){  
           $('#user_form')[0].reset();  
           $('.modal-title').text("Ajout d'une formation");  
           $('#action').val("Add");  
           $('#user_uploaded_image').html('');  
      })
      var dataTable2 = $('#user_data2').DataTable();
      var dataTable = $('#user_data').DataTable();
      // var dataTable = $('#user_data').DataTable({  
      //      "processing":true,  
      //      "serverSide":true,  
      //      "order":[],  
      //      "ajax":{  
      //           url:"<?php echo base_url() . 'admin/fetch_presence'; ?>",  
      //           type:"POST"  
      //      },  
      //      "columnDefs":[  
      //           {  
      //                "targets":[0, 0, 0],  
      //                "orderable":false,  
      //           },  
      //      ],  
      // });


        $(document).on('click', '.add_presence', function(event){  
               event.preventDefault();  
               var id_user = $(this).attr("id_user");    
              
                if(id_user != '')
                {

                	// swal("id_user",id_user,"success");

                	$.ajax({  
                       url:"<?php echo base_url() . 'admin/operation_presence'?>",
                       method:'POST',  
                       data:{
                       	id_user: id_user
                       },  
                       success:function(data)  
                       {  
                            console.log(data);
                            swal('succès', ''+data, 'success');  
                            // dataTable.ajax.reload();  
                       }  
                  	});
                }
                else
                {
                  swal("Erreur!!!", "Veillez selectionner l'apprenant", "error");
                }   
        });  

      
      $(document).on('click', '.update', function(){  
           var id = $(this).attr("id");  
           $.ajax({  
                url:"<?php echo base_url(); ?>admin/fetch_single_users",  
                method:"POST",  
                data:{id:id},  
                dataType:"json",  
                success:function(data)  
                {  
                      $('#userModal_edit').modal('show');  
                      $('#first_name').text(data.first_name);  
                      $('#last_name').text(data.last_name); 

                      $('#email').text(data.email);
                      $('#telephone').text(data.telephone);
                      $('#full_adresse').text(data.full_adresse);
                      $('#biographie').text(data.biographie);
                      $('#date_nais').text(data.date_nais);

                      $('#telephone').text(data.telephone);

                      $('#sexe').text(data.sexe);
                     

                     $('.modal-title').text("détail de profile et information de l'utilisateur "+data.first_name);
                     $('#user_uploaded_image').html(data.user_image);
                     $('#user_uploaded_image2').html(data.user_image2);  
                     $('#action').val("Edit"); 
                     $('#id').val(id);  
                }  
           });  
      });

      $(document).on('click', '.delete', function(){
          var idp = $(this).attr("idp");

          if(confirm("Are you sure you want to delete this?"))
          {
            
           		$.ajax({
                  url:"<?php echo base_url(); ?>admin/supression_presence",
                  method:"POST",
                  data:{idp:idp},
                  success:function(data)
                  {
                     swal("succès!", ''+data, "success");
                     // dataTable.ajax.reload();
                  }
                });
          }
          else
          {
            swal("Ouf!!!", "opération annulée :)", "error");
          }

            


      });

      $(document).on('change', '#sexe_ok',function(){
          	var sexe = $(this).val();
          	if (sexe !='') {
          		$('#sexe').val(sexe);
          	}
          	else{
          		swal("Ouf!!!", "Veillez complèter son sexe 😰", "error");
          	}
      });


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
              type: "column",
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
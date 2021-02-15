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
                                                    
                                                    <!-- mes script commencent -->
                                                    <div class="col-md-12">
                                                    	<div class="row">
                                                    		<div class="col-md-2"></div>
                                                    		<div class="col-md-8">
                                                    			 <div for="files" class="text-center"><i class="fa fa-picture-o"></i>&nbsp; Selectionnez multiples photos</div>
										                         <input type="file" name="files" id="files" class="form-control" multiple />
										                        <hr>
                                                    		</div>
                                                    		<div class="col-md-2"></div>
                                                    	</div>
                                                    </div>
                                                   
							                         
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


															   		<button type="button" name="delete" id="delete" class="btn btn-danger delete_all"> <i class="fa fa-trash fa-lg"></i> &nbsp; Supprimer</button>
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

            $('#files').change(function(){
				  var files = $('#files')[0].files;
				  var error = '';
				  var form_data = new FormData();
				  for(var count = 0; count<files.length; count++)
				  {
				   var name = files[count].name;
				   var extension = name.split('.').pop().toLowerCase();
				   if(jQuery.inArray(extension, ['gif','png','jpg','jpeg','webp']) == -1)
				   {
				    error += "Invalid " + count + " Image File"
				   }
				   else
				   {
				    form_data.append("files[]", files[count]);
				   }
				  }
				  if(error == '')
				  {
				   $.ajax({
				    url:"<?php echo base_url(); ?>admin/upload_galery", //base_url() return http://localhost/tutorial/codeigniter/
				    method:"POST",
				    data:form_data,
				    contentType:false,
				    cache:false,
				    processData:false,
				    beforeSend:function()
				    {
				     	$('#uploaded_images').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
				    },
				    success:function(data)
				    {
					     $('#uploaded_images').html(data);
					     $('#files').val('');
				    }
				   })
				  }
				  else
				  {
				   alert(error);
				  }
			 });



         function load_country_data(page)
		 {
		  $.ajax({
		   url:"<?php echo base_url(); ?>admin/pagination_galery_member/"+page,
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

		//  $('.checkbox_id').click(function(){
		// 	  if($(this).is(':checked'))
		// 	  {
			  	
		// 	  }
		// 	  else
		// 	  {
		// 	  }
		// });


		 $(document).on('click', '.supprimer', function(e){
		 	e.preventDefault();
	           var idg = $(this).attr('idg');

				  if(confirm("Etes-vous sûre de vouloir le supprimer?"))
		          {
		            
			          if(idg !='')
		              {
		                 // alert("idg:"+idg);
						  $.ajax({
				              url:"<?php echo base_url(); ?>admin/supression_photo_galery",
				              method:"POST",
				              data:{idg:idg},
				              success:function(data)
				              {
				                 Swal.fire("succès!!!👌", ''+data, "success");
				                 load_country_data(1);
				                 // dataTable.ajax.reload();
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
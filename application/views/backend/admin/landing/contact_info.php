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
                              
                                <div class="nk-block">
                                    <div  class="plan-iv">
                                        
                                        <div class="plan-iv-list nk-slider nk-slider-s2">
                                            
                                            <div class="col-md-12">
                                                <div class="row">
                                                    
                                                    <!-- mes script commencent -->
	                                                <div class="col-md-12">
	                                                	<!-- content @s -->
										                <?php include('_our_contacts.php') ?>
										                <!-- content @e -->
	                                                </div>
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
                        <span class="nk-block-title modal-title">Paramètrage des informations</span>
                        
                    </div>
                    <div class="nk-block">

                    	<form method="post" id="user_form" enctype="multipart/form-data" class="form-contact">
			                <div class="row g-3">
			                    
			                    <div class="col-12">

			                    	<div class="form-group">
			                           
			                            <div class="form-control-wrap">
			                                <input type="text" name="name" id="name" class="form-control form-control-lg" placeholder="<?php echo($this->lang->line("menu_name")) ?>">
			                            </div>
			                        </div>

			                        <div class="form-group">
			                           
			                            <div class="form-control-wrap">
			                                <input type="text" name="subject" id="subject" class="form-control form-control-lg" placeholder="<?php echo($this->lang->line("menu_subject")) ?> ">
			                            </div>
			                        </div>

			                         <div class="form-group">
			                           
			                            <div class="form-control-wrap">
			                                <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="<?php echo($this->lang->line("menu_email")) ?> ">
			                            </div>
			                        </div>

			                        <div class="form-group">
			                            
			                            <div class="form-control-wrap">
			                                <div class="form-editor-custom">
			                                    <textarea name="message" id="message"  class="form-control form-control-lg no-resize" placeholder="<?php echo($this->lang->line("menu_message")) ?>"></textarea>
			                                    <div class="form-editor-action">
			                                        <a class="link collapsed" data-toggle="collapse" href="#filedown" aria-expanded="false"><em class="icon ni ni-clip"></em> <?php echo($this->lang->line("menu_attach")) ?></a>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
			                    </div><!-- .col -->
			                    
			                   
			                    
			                </div><!-- .row -->
			            </form><!-- .form-contact -->
                        
                        
                        
                    </div><!-- .nk-block -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div>
    <!-- fin modal-->

    

    <script type="text/javascript">
    	$(document).ready(function(){
    		// swal("boom","félicitation","success");
    	});
    </script>

    <script>
		$(document).ready(function(){

		 function load_country_data(page)
		 {
		  $.ajax({
		   url:"<?php echo base_url(); ?>admin/pagination_contact_auditeurs/"+page,
		   method:"GET",
		   dataType:"json",
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


		 function load_data(query)
		 {
			  $.ajax({
			   url:"<?php echo base_url(); ?>admin/fetch_search_contact_message_auteur",
			   method:"POST",
			   data:{query:query},
			   success:function(data){
			    $('#country_table').html(data);
			   }
			  });
		  }

		 $(document).on('keyup','#search_text',function(){
			var search = $(this).val();
			if(search != '')
			{
			   load_data(search);
			   // $('#pagination_link').html('');
			}
			else
			{
			   load_country_data(1);
			}
		});

		 


		 $(document).on('click', '.update', function(){  

		 	 
	           var id = $(this).attr("id");  
	           $.ajax({  
	                url:"<?php echo base_url(); ?>admin/fetch_single_information_contact",  
	                method:"POST",  
	                data:{id:id},  
	                dataType:"json",  
	                success:function(data)  
	                {  
	                     $('#userModal').modal('show');  
	                     $('#name').val(data.nom);
	                     $('#subject').val(data.sujet);
	                     $('#email').val(data.email);
	                     $('#message').val(data.message);
	                     
	                }  
	           });  
	      });

	      $(document).on('click', '.delete_all', function(){
	           var checkbox = $('.checkbox_id:checked');

				  if(confirm("Etes-vous sûre de vouloir le supprimer?"))
		          {
		            
			          if(checkbox.length > 0)
		              {
		                 var checkbox_value = [];
		                 $(checkbox).each(function(){
		                  checkbox_value.push($(this).val());
		                 });

		                 // alert("idart:"+checkbox_value);
			                 $.ajax({
					              url:"<?php echo base_url(); ?>admin/supression_information_contact_visite",
					              method:"POST",
					              data:{checkbox_value:checkbox_value,},
					              success:function(data)
					              {
					                 Swal.fire("succès!!!👌", ''+data, "success");
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

<script type="text/javascript" language="javascript">
$(document).ready(function(){
 
	$('.checkbox_id').click(function(){
	  if($(this).is(':checked'))
	  {
	  	
	  }
	  else
	  {
	  }
	});


 	$('#envoyer_message').click(function(event){
 		  event.preventDefault();
	  	  var checkbox = $('.checkbox_id:checked');

	  	  var sujet = $('#sujet1').val();
	  	  var message = $('#message1').val();

	  	  if (sujet !='' && message !='') {
	  	  	// alert(sujet+" message "+message);

	  	  	  if(checkbox.length > 0)
			  {
				   var checkbox_value = [];
				   $(checkbox).each(function(){
				    checkbox_value.push($(this).val());
				   });

				   // alert("email:"+checkbox_value);
				   $.ajax({
					    url:"<?php echo base_url(); ?>admin/infomation_par_mail_contact",
					    method:"POST",
					    data:{
					    	checkbox_value:checkbox_value,
					    	sujet : sujet,
					    	message: message
					    },
					    success:function(data)
					    {
					    	
					    	Swal.fire("succès!!!👌", ""+data, 'success');  
					    	
					    }
				   });
			  }
			  else
			  {
			  	Swal.fire("error!!!🙆", "Veillez selectionner aumoins un message pour éffectuer cette opération", "error");
			  	
			  }

	  	  }
	  	  else{
	  	  	if (sujet=='') {
	  	  		Swal.fire("error!!!🙆", "Veillez Entrer le sujet de la pour la réponse au message", "error");
	  	  	}
	  	  	if (message=='') {
	  	  		Swal.fire("error!!!🙆", "Veillez Entrer le contenu pour la réponse au message", "error");
	  	  	}
	  	  }

	  	  

	  	
		  
	 });

 	

    $('#example-tbody').on( 'click', 'tr', function () {
        $(this).toggleClass('selected');
    } );

 	

});
</script>




</body>

</html>
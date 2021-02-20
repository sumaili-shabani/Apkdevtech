<!DOCTYPE html>
<html lang="fr" class="js">

<head>
    <?php include('_meta.php') ?>
    <style type="text/css">
    	.my_footer_text{
    		color: rgb(181, 216, 242);
    	}
    </style>
</head>

<body class="nk-body npc-invest bg-white ">
    <div class="nk-app-root">
        <!-- wrap @s -->
        <div class="nk-wrap ">
            <!-- main header @s -->
            <?php include('_navMenu.php'); ?>
            <!-- main header @e -->
            <!-- content @s -->
            <div class="nk-content nk-content-lg nk-content-fluid">
                <div class="container-xl wide-lg">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">

                        	<!-- mes scripts commencent -->
                            	<div class="col-md-12">
                            		<div class="row">

                            			<!-- SAVOIR PLUS SUR NOUS -->
		                                <div class="col-md-12">
		                                    <div class="row">

		                                        <div class="col-md-12">
		                                            <div class="nk-block-head-content text-center">
		                                                <h4 class="nk-block-title fw-normal">Nos Meilleurs Projets Récents</h4>
		                                                <div class="nk-block-des">
		                                                    <p>Suivez nos différents projets à la une</p>
		                                                </div>
		                                            </div>
		                                        </div>
		                                       
		                                       

		                            			 <div class="col-md-8">
		                                        	<?php include('component/our_projects.php') ?>
		                                        </div>

                                                <!-- bloc media -->
                                                <div class="col-md-4 mb-2">
                                                    <?php include('component/social_net.php') ?>
                                                </div>
                                                <!-- fin bloc media -->
		                                        
		                                    </div>
		                                </div>
                                		<!-- fin SAVOIR PLUS SUR NOUS -->

                                		<!-- bloc attantes -->
		                                <?php include('component/comprendre.php') ?>
		                                <!-- fin bloc -->

                            			
                            		</div>
                            	</div>
                            <!-- fin de mes scripts -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- content @e -->
            <!-- footer @s -->
           <?php include('_footer.php') ?>
            <!-- footer @e -->
        </div>
        <!-- wrap @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <?php include('_script.php') ?>

    <script type="text/javascript">
        $(document).ready(function() {

            function load_country_data(page)
            {
              $.ajax({
               url:"<?php echo base_url(); ?>home/pagination__projects/"+page,
               method:"GET",
               dataType:"json",
               
                beforeSend:function()
                {
                    var src = "<?= base_url()?>upload/annumation/a.gif";
                     $('.resultat_service').html('<div class="post_data col-md-12 col-sm-12"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
                },
               success:function(data)
               {
                $('.resultat_service').html(data.country_table);
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
                 url:"<?php echo base_url(); ?>home/fetch_search_our_projects",
                 method:"POST",
                 data:{query:query},
                 beforeSend:function()
                 {
                        var src = "<?= base_url()?>upload/annumation/a.gif";
                     $('.resultat_service').html('<div class="post_data col-md-12 col-sm-12"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
                 },
                 success:function(data){
                  $('.resultat_service').html(data);
                 }
                });
              }

             $(document).on('keyup','.search_text',function(){
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
              

            
        });
    </script>


</body>

</html>